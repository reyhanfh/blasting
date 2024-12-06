<template>
    <div class="container">
        <form @submit.prevent="submitForm">
            <div class="row">
                <div class="mb-3 col-md-6">
                    <label for="dari" class="form-label">Dari</label>
                    <input
                        type="date"
                        class="form-control"
                        id="dari"
                        v-model="form.dari"
                        required
                    />
                </div>
                <div class="mb-3 col-md-6">
                    <label for="sampai" class="form-label"
                        >Sampai</label
                    >
                    <input
                        type="date"
                        class="form-control"
                        id="sampai"
                        v-model="form.sampai"
                        required
                    />
                </div>
                <div class="mb-3 col-md-6">
                    <label for="keterangan" class="form-label"
                        >Keterangan</label
                    >
                    <input
                        type="text"
                        class="form-control"
                        id="keterangan"
                        v-model="form.keterangan"
                        required
                    />
                </div>
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
        <div
          v-if="showSuccessAlert"
          class="alert alert-success w-50 mt-3"
          role="alert"
      >
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
            dari: '',
                sampai: '',
                keterangan: '',
        },
        csrf: document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
        showSuccessAlert: false,
          alertMessage: "",
      };
    },
  
    created() {
      axios.get('/harilibur/prevharilibur/' + this.id, {
        headers: {
          'X-CSRF-TOKEN': this.csrf
        }
      })
      .then(response => {
        this.form.id = response.data.id;
        this.form.dari = response.data.dari;
        this.form.sampai = response.data.sampai;
        this.form.keterangan = response.data.keterangan;
      })
      .catch(error => {
        console.log(error);
      });
    },
  
  
    methods: {
      async submitForm() {
        try {
          await axios.post('/harilibur/updateharilibur', this.form);
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
                      `/harilibur/hapusharilibur/${this.id}`,
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
  