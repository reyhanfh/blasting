<template>
  <div class="container d-flex flex-column justify-content-center align-items-center">
    <form @submit.prevent="submitForm" class="w-50 mb-3">
      <div class="mb-3">
        <label for="fakultas" class="form-label">Fakultas</label>
        <input
          type="text"
          class="form-control"
          id="fakultas"
          v-model="form.fakultas"
          required
        />
      </div>
      <div class="text-center">
        <button type="submit" class="btn btn-primary">Submit</button>
        <button
          type="button"
          class="btn btn-danger"
          @click="deleteItem"
        >
          Delete
        </button>
      </div>
    </form>
    <div v-if="showSuccessAlert" class="alert alert-success w-50" role="alert">
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
          fakultas: '',
        },
        csrf: document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
        showSuccessAlert: false,
            alertMessage: "",
      };
    },
  
    created() {
      axios.get('/daftarfakultas/prevdaftarfakultas/' + this.id, {
        headers: {
          'X-CSRF-TOKEN': this.csrf
        }
      })
      .then(response => {
        this.form.id = response.data.id;
        this.form.fakultas = response.data.fakultas;
      })
      .catch(error => {
        console.log(error);
      });
    },
  
  
    methods: {
      async submitForm() {
        try {
          await axios.post('/daftarfakultas/updatedaftarfakultas', this.form);
          alert('Data berhasil diubah!');
        } catch (error) {
          console.error('Error submitting form:', error);
          alert('Gagal mengubah data.');
        }
      },
      async deleteItem() {
            if (confirm("Yakin mau menghapus data ini?")) {
                try {
                    await axios.get(
                        `/daftarfakultas/hapusdaftarfakultas/${this.id}`,
                        {
                            headers: {
                                "X-CSRF-TOKEN": this.csrf,
                            },
                        }
                    );

                    this.showSuccessAlert = true;
                    this.alertMessage = "Data telah dihapus.";

                    this.$emit("item-deleted");
                } catch (error) {
                    console.error("Error deleting item:", error);
                }
            }
        },
    },
  };
  </script>
  