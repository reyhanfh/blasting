<template>
  <div class="container mt-2">
    <div v-if="errorMessage" class="alert alert-danger">{{ errorMessage }}</div>
    <div v-if="successMessage" class="alert alert-success">{{ successMessage }}</div>
    <form @submit.prevent="saveschedule" class="mx-auto" style="max-width: 400px;">
      <div class="mb-3">
        <label for="tanggal" class="form-label">Tanggal:</label>
        <input type="date" class="form-control" v-model="tanggal" required>
      </div>
      <div class="mb-3">
        <label for="jumlahpesan" class="form-label">Jumlah Pesan:</label>
        <input type="number" class="form-control" v-model="jumlahpesan" required>
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
      tanggal: '',
      jumlahpesan: '',
      errorMessage: '',
      successMessage: ''
    };
  },
  created() {
    console.log(`/blasting/champaign/schedule/${this.id}/saveschedule`);
  },
  methods: {
    async saveschedule() {
      try {
        const response = await axios.post(`/blasting/champaign/schedule/${this.id}/saveschedule`, {
          tanggal: this.tanggal,
          jumlahpesan: this.jumlahpesan,
        });
        this.successMessage = 'Schedule successfully saved.';
        this.errorMessage = '';
        this.resetForm();
      } catch (error) {
        this.errorMessage = error.response?.data?.error || 'An error occurred';
        this.successMessage = '';
      }
    },
    resetForm() {
      this.tanggal = '';
      this.jumlahpesan = '';
    }
  }
};
</script>

<style scoped>
.alert {
  margin-top: 20px;
}
</style>
