<template>
  <div class="container">
    <form @submit.prevent="submitForm">
      <div class="row">
          <div class="mb-3 col-md-6">
              <label for="hotel" class="form-label">Nama Hotel</label>
              <select class="form-control" id="hotel" v-model="form.hotelId" required>
                  <option v-for="hotel in hotels" :key="hotel.id" :value="hotel.id">{{ hotel.hotelname }}</option>
                  <option value="">Pilih Hotel</option>
              </select>
          </div>
          <div class="mb-3 col-md-6">
            <label for="birthdate" class="form-label">Tanggal</label>
            <input type="date" class="form-control" id="birthdate" v-model="form.birthdate" required>
          </div>
          <div class="mb-3 col-md-6">
              <label for="method" class="form-label">Metode Pembayaran</label>
              <select class="form-control" id="method" v-model="form.methodid" required>
                  <option v-for="method in methods" :key="method.id" :value="method.id">{{ method.method }}</option>
                  <option value="">Pilih Metode Pembayaran</option>
              </select>
          </div>
          <div class="mb-3 col-md-6">     
            <label for="nominal" class="form-label">Nominal</label>
          <input type="text" class="form-control" id="nominal" v-model="form.nominal" required>
          </div>
      </div>
      <div class="text-center">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
    </form>
  </div>
</template>
  
  <script>
  import axios from 'axios';
  
  export default {
    props: ['id'],
    data() {
      return {
        form: {
          id: 0,
          hotelId: '',
          birthdate: '',
          methodid: '',
          nominal: '',
        },
        hotels: [],
        methods: [],
        
        csrf: document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
      };

    },

    created() {
  axios.get('/blasting/transfer/gettransfer/' + this.id, {
    headers: {
      'X-CSRF-TOKEN': this.csrf
    }
  })
  .then(response => {
    this.form.id = response.data.id;
    this.form.hotelId = response.data.idhotel;
    this.form.birthdate = response.data.tanggal;
    this.form.methodid = response.data.idmethodpembayaran;
    this.form.nominal = response.data.nominal;
  })
  .catch(error => {
    console.log(error);
  });
},

    mounted() {
      this.fetchHotels();
      this.fetchMethods();
    },
    methods: {
      async fetchHotels() {
        try {
          const response = await axios.get('/blasting/kontak/gethoteldata');
          console.log('Hotels:', response.data); 
          this.hotels = response.data;
        } catch (error) {
          console.error('Error fetching hotels:', error);
        }
      },
      async fetchMethods() {
        try {
          const response = await axios.get('/blasting/transfer/getmethod');
          console.log('Methods:', response.data); 
          this.methods = response.data;
        } catch (error) {
          console.error('Error fetching methods:', error);
        }
      },
      async submitForm() {
        try {
          await axios.post('/blasting/transfer/updatetransfer', this.form);
          alert('Data kontak berhasil diubah!');
        } catch (error) {
          console.error('Error submitting form:', error);
          alert('Gagal mengubah data kontak.');
        }
      },
    },
  };
  </script>