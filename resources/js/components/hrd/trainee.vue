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
            <a :href="`/daftarfakultas/editdaftarfakultas/${data.item.id}`" class="btn btn-primary btn-sm">Update</a>
            <!-- <button class="btn btn-primary btn-sm" @click="deleteItem(data.item.id)">Delete</button> -->
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
          { key: 'namapegawai', label: 'Nama Pegawai', thStyle: { 'text-align': 'center' }, tdClass: 'text-center' },
          { key: 'departemen', label: 'Departemen', thStyle: { 'text-align': 'center' }, tdClass: 'text-center' },
          { key: 'jabatan', label: 'Jabatan', thStyle: { 'text-align': 'center' }, tdClass: 'text-center' },
          { key: 'masuk', label: 'Masuk', thStyle: { 'text-align': 'center' }, tdClass: 'text-center' },
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
        axios.get(this.$root.baseurl + 'trainee/getalltrainee').then(response => {
          this.items = response.data;
          this.totalRows = response.data.length;
        });
      },
      deleteItem(id) {
        if (confirm('Yakin mau menghapus data ini?')) {
          axios.get(this.$root.baseurl + 'blasting/kontak/delete/' + id, {
            headers: {
              '_token': this.csrf
            }
          })
          .then(response => {
            console.log(response.data);
            this.fetchData();
            this.showSuccessAlert = true;
            this.alertMessage = "Data Telah Dihapus";
            setTimeout(() => {
              this.showSuccessAlert = false;
            }, 3000);
          })
          .catch(error => {
            console.log(error);
          });
        }
      },
    },
  };
  </script>
  
  <style>
  .text-center {
    text-align: center;
  }
  </style>
  