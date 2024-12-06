<template>
  <div class="container">
    <form @submit.prevent="submitForm">
      <div class="row">
        <div class="mb-3 col-md-6">
          <label for="kodedepartemen" class="form-label">Kode Departemen</label>
          <input type="text" class="form-control" id="kodedepartemen" v-model="form.kodedepartemen" required>
        </div>
        <div class="mb-3 col-md-6">
          <label for="namadepartemen" class="form-label">Nama Departemen</label>
          <input type="text" class="form-control" id="namadepartemen" v-model="form.namadepartemen" required>
        </div>
      </div>
      <div class="text-center">
        <button type="submit" class="btn btn-primary">Submit</button>
        <button type="button" class="btn btn-danger" @click="deleteItem">Delete</button>
      </div>
    </form>
    <div v-if="showSuccessAlert" class="alert alert-success mt-3">
      {{ alertMessage }}
    </div>
  </div>
</template>

<script>
import axios from 'axios';

export default {
  props: ['id'],
  data() {
    return {
      form: {
        id: this.id,
        kodedepartemen: '',
        namadepartemen: '',
      },
      csrf: document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
      showSuccessAlert: false,
      alertMessage: '',
    };
  },

  created() {
    this.fetchData();
  },

  methods: {
    async fetchData() {
      try {
        const response = await axios.get(`/daftardepartemen/prevdaftardepartemen/${this.id}`, {
          headers: {
            'X-CSRF-TOKEN': this.csrf
          }
        });
        this.form.kodedepartemen = response.data.kodedepartemen;
        this.form.namadepartemen = response.data.namadepartemen;
      } catch (error) {
        console.error('Error fetching data:', error);
      }
    },

    async submitForm() {
      try {
        await axios.post('/daftardepartemen/updatedaftardepartemen', this.form, {
          headers: {
            'X-CSRF-TOKEN': this.csrf
          }
        });
        alert('Data berhasil diubah!');
      } catch (error) {
        console.error('Error submitting form:', error);
        alert('Gagal mengubah data.');
      }
    },

    async deleteItem() {
      if (confirm('Yakin mau menghapus data ini?')) {
        try {
          await axios.get(`/daftardepartemen/hapusdaftardepartemen/${this.id}`, {
            headers: {
              'X-CSRF-TOKEN': this.csrf
            }
          });
          this.showSuccessAlert = true;
          this.alertMessage = "Data telah dihapus.";
          setTimeout(() => {
            this.showSuccessAlert = false;
          }, 3000);
          this.$emit('item-deleted'); 
        } catch (error) {
          console.error('Error deleting item:', error);
        }
      }
    },
  },
};
</script>
