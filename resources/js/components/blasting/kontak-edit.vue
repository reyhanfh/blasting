<template>
  <div class="container">
      <form @submit.prevent="submitForm">
        <div class="row">
          <div class="mb-3 col-md-6">
            <label for="name" class="form-label">Nama</label>
            <input type="text" class="form-control" id="name" v-model="form.name" required>
          </div>
          <div class="mb-3 col-md-6">
            <label for="hotel" class="form-label">Nama Hotel</label>
            <select class="form-control" id="hotel" v-model="form.hotelId" required>
              <option v-for="hotel in hotels" :key="hotel.id" :value="hotel.id">{{ hotel.hotelname }}</option>
              <option value="">Pilih Hotel</option>
            </select>
          </div>
          <div class="mb-3 col-md-6">
            <label for="city" class="form-label">Kota</label>
            <select class="form-control" id="city" v-model="form.cityId" required>
              <option v-for="city in cities" :key="city.id" :value="city.id">{{ city.kotaName }}</option>
              <option value="">Pilih Kota</option>
            </select>
          </div>
          <div class="mb-3 col-md-6">
            <label for="whatsapp" class="form-label">No Wa</label>
            <input type="text" class="form-control" id="whatsapp" v-model="form.whatsapp" required>
          </div>
          <div class="mb-3 col-md-6">
            <label for="birthdate" class="form-label">Tgl Lahir</label>
            <input type="date" class="form-control" id="birthdate" v-model="form.birthdate" required>
          </div>
          <div class="mb-3 col-md-6">
            <label for="segmen" class="form-label">Segmentasi</label>
            <select class="form-control" id="segmen" v-model="form.segmen" required>
              <option v-for="segmen in segmens" :key="segmen.id" :value="segmen.id">{{ segmen.segmen }}</option>
              <option value="">Pilih Segmentasi</option>
            </select>
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
        name: '',
        hotelId: '',
        cityId: '',
        whatsapp: '',
        birthdate: '',
        segmen: '',
      },
      hotels: [],
      cities: [],
      segmens: [],
      csrf: document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
    };
  },

  created() {
    axios.get('/blasting/kontak/getkontak/' + this.id, {
      headers: {
        'X-CSRF-TOKEN': this.csrf
      }
    })
    .then(response => {
      this.form.id = response.data.id;
      this.form.name = response.data.nama;
      this.form.hotelId = response.data.idhotel;
      this.form.cityId = response.data.kota;
      this.form.whatsapp = response.data.nowa;
      this.form.birthdate = response.data.tgl_lahir;
      this.form.segmen = response.data.idsegmen;
    })
    .catch(error => {
      console.log(error);
    });
  },

  mounted() {
    this.fetchHotels();
    this.fetchCities();
    this.fetchSegmens();
  },

  methods: {
    async fetchHotels() {
      try {
        const response = await axios.get('/blasting/kontak/gethoteldata');
        this.hotels = response.data;
      } catch (error) {
        console.error('Error fetching hotels:', error);
      }
    },

    async fetchCities() {
      try {
        const response = await axios.get('/blasting/kontak/getkota');
        this.cities = response.data;
      } catch (error) {
        console.error('Error fetching cities:', error);
      }
    },

    async fetchSegmens() {
      try {
        const response = await axios.get('/blasting/kontak/getsegmen');
        this.segmens = response.data;
      } catch (error) {
        console.error('Error fetching segmens:', error);
      }
    },

    async submitForm() {
      try {
        await axios.post('/blasting/kontak/update', this.form);
        alert('Data kontak berhasil diubah!');
      } catch (error) {
        console.error('Error submitting form:', error);
        alert('Gagal mengubah data kontak.');
      }
    },
  },
};
</script>
