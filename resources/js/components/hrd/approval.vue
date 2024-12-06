<template>
  <div>
    <div v-if="showSuccessAlert" class="alert alert-primary alert-dismissible fade show" role="alert">
      <strong>{{ alertMessage }}</strong>
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    <div class="mb-3 col-4">
      <input type="text" class="form-control" v-model="filter" placeholder="Cari data">
    </div>
    <b-table bordered striped hover :items="filteredItems" :fields="fields" :per-page="perPage" :current-page="currentPage">
      <template v-slot:cell(no)="data">
        <div class="text-center">{{ (currentPage - 1) * perPage + (data.index + 1) }}</div>
      </template>
      <template v-slot:cell(actions)="data">
        <div class="text-center">
          <button @click="approveCuti(data.item.id)" class="btn btn-primary btn-sm">Approve</button>
        </div>
      </template>
    </b-table>
    <b-pagination v-model="currentPage" :total-rows="totalRows" :per-page="perPage" align="right"></b-pagination>
  </div>
</template>

<script>
import axios from 'axios';
import { BTable, BPagination } from 'bootstrap-vue';

export default {
  components: { BTable, BPagination },
  data() {
    return {
      csrf: document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
      fields: [
        { key: 'no', label: 'No', thStyle: { 'text-align': 'center' }, tdClass: 'text-center' },
        { key: 'tanggalpengajuan', label: 'Tanggal Pengajuan', thStyle: { 'text-align': 'center' }, tdClass: 'text-center' },
        { key: 'namalengkap', label: 'Nama', thStyle: { 'text-align': 'center' }, tdClass: 'text-center' },
        { key: 'jam', label: 'Jam', thStyle: { 'text-align': 'center' }, tdClass: 'text-center' },
        { key: 'alamatcuti', label: 'Lokasi', thStyle: { 'text-align': 'center' }, tdClass: 'text-center' },
        { key: 'keterangan', label: 'Keperluan', thStyle: { 'text-align': 'center' }, tdClass: 'text-center' },
        { key: 'n', label: 'Mengetahui', thStyle: { 'text-align': 'center' }, tdClass: 'text-center' },
        { key: 'actions', label: 'Actions', thStyle: { 'text-align': 'center' }, tdClass: 'text-center' }
      ],
      items: [],
      filter: '',
      currentPage: 1,
      perPage: 10,
      totalRows: 0,
      showSuccessAlert: false,
      alertMessage: '',
      isHRD: false, // Property untuk mengecek apakah user adalah HRD
    };
  },
  mounted() {
    this.checkIfHRD(); // Mengecek apakah user adalah HRD
    this.fetchData();
  },
  computed: {
    filteredItems() {
      if (this.filter) {
        return this.items.filter(item => {
          return (
            item.namalengkap.toLowerCase().includes(this.filter.toLowerCase()) ||
            item.alamatcuti.toLowerCase().includes(this.filter.toLowerCase()) ||
            item.keterangan.toLowerCase().includes(this.filter.toLowerCase())
          );
        });
      } else {
        return this.items;
      }
    }
  },
  methods: {
    fetchData() {
      axios.get(this.$root.baseurl + 'cuti/getallapproval').then(response => {
        console.log(response.data);
        this.items = response.data;
        this.totalRows = response.data.length;
      });
    },
    approveCuti(id) {
      const url = this.isHRD
        ? this.$root.baseurl + `cuti/approvebyhrd`
        : this.$root.baseurl + `cuti/approvebyatasan`;
      
      axios.post(url, { id: id, _token: this.csrf })
        .then(response => {
          if (response.data) {
            this.showSuccessAlert = true;
            this.alertMessage = 'Approval successful!';

            // Menghapus item dari items setelah approval
            this.items = this.items.filter(item => item.id !== id);

            // Update totalRows agar pagination tetap akurat
            this.totalRows = this.items.length;
          }
        })
        .catch(error => {
          console.error('There was an error!', error);
        });
    },
    checkIfHRD() {
      axios.get(this.$root.baseurl + 'cuti/checkhrd').then(response => {
        this.isHRD = response.data.isHRD;
      });
    }
  },
};
</script>

<style>
.text-center {
  text-align: center;
}
</style>
