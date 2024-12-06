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
          {{ (currentPage - 1) * perPage + (data.index + 1) }}
      </template>
        <template v-slot:cell(actions)="data">
        <a :href="$root.baseurl +'blasting/champaign/'+data.item.id" class="btn btn-primary btn-sm">Edit</a>
        <a :href="$root.baseurl +'blasting/champaign/audien/'+data.item.id" class="btn btn-primary btn-sm">Audien</a>
        <a :href="$root.baseurl +'blasting/champaign/schedule/'+data.item.id" class="btn btn-primary btn-sm">Schedule</a>
        <a  class="btn btn-primary btn-sm" @click="process(data.item.id)">Process</a>
      </template>      
      </b-table>
      <b-pagination v-model="currentPage" :total-rows="totalRows" :per-page="perPage" align="right"></b-pagination>
    </div>
  </template>
  
  <script>
  import axios from 'axios';
  import { BTable, BPagination } from 'bootstrap-vue';
  
  export default {
    components: { BTable, BPagination  },
    data() {
      return {
        csrf: document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
        fields: [
        { key: 'no', label: '#', thStyle: { 'text-align': 'center' } },  
        { key: 'title', label: 'Title' },
        { key: 'hotelname', label: 'Hotel' },
        { key: 'template', label: 'template' },
        { key: 'mulai', label: 'Mulai' },
        { key: 'selesai', label: 'Selesai' },
        { key: 'actions', label: 'Actions', tdClass: 'text-center', thClass: 'text-center' } // tambahkan kolom actions di sini
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
      this.fetchData()
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
    methods: 
    {
      fetchData(){
        axios.get(this.$root.baseurl +'blasting/champaign/getalldata').then(response => {
        this.items = response.data;
        this.totalRows = response.data.length;
        });
      },      
      process(id) {
      axios.get(this.$root.baseurl + 'blasting/champaign/process/' + id, {
        _token: this.csrf,
        id: id
      }).then(response => {
        this.showSuccessAlert = true;
        this.alertMessage = response.data.message;
      }).catch(error => {
        this.showSuccessAlert = true;
        this.alertMessage = 'Gagal memproses data!';
      });
    },
    },
  };
  </script>