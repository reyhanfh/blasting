<template>
  <div>
    <div v-if="showSuccessAlert" class="alert alert-primary alert-dismissible fade show" role="alert">
      <strong>{{ alertMessage }}</strong>.
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
          <a :href="`/cuti/editpengajuancuti/${data.item.id}`" class="btn btn-primary btn-sm">Update</a>
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
          { key: 'tanggalpengajuan', label: 'Pengajuan', thStyle: { 'text-align': 'center' }, tdClass: 'text-center' },
          { key: 'dari', label: 'Dari', thStyle: { 'text-align': 'center' }, tdClass: 'text-center' },
          { key: 'sampai', label: 'Sampai', thStyle: { 'text-align': 'center' }, tdClass: 'text-center' },
          { key: 'jeniscuti', label: 'Jenis Cuti', thStyle: { 'text-align': 'center' }, tdClass: 'text-center' },
          { key: 'namalengkap', label: 'Atasan', thStyle: { 'text-align': 'center' }, tdClass: 'text-center' },
          { key: 'hrd', label: 'HRD', thStyle: { 'text-align': 'center' }, tdClass: 'text-center' },
          { key: 'operasional', label: 'Operasional', thStyle: { 'text-align': 'center' }, tdClass: 'text-center' },
          { key: 'direksi', label: 'Direksi', thStyle: { 'text-align': 'center' }, tdClass: 'text-center' },
          { key: 'status', label: 'Status', thStyle: { 'text-align': 'center' }, tdClass: 'text-center' },
          { key: 'alasanditolak', label: 'Alasan Ditolak', thStyle: { 'text-align': 'center' }, tdClass: 'text-center' },
          { key: 'actions', label: 'Actions', thStyle: { 'text-align': 'center' }, tdClass: 'text-center' }
      ],
      items: [],
      filter: '',
      currentPage: 1,
      perPage: 10,
      totalRows: 0,
      showSuccessAlert: false,
      alertMessage: '',
    };
  },
  mounted() {
    this.fetchData();
  },
  computed: {
    filteredItems() {      
      if (this.filter) {
        return this.items.filter(item => {
          return (
            item.kotaName.toLowerCase().includes(this.filter.toLowerCase())
          );
        });
      } else {
        return this.items;
      }
    }
  }, 
  methods: {
    fetchData() {
      axios.get(this.$root.baseurl + 'cuti/getallpengajuancuti').then(response => {
        console.log(response.data);
        this.items = response.data;
        this.totalRows = response.data.length;
      });
    },
  },
};
</script>

<style>
.text-center {
  text-align: center;
}
</style>
