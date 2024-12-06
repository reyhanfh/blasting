<template>
  <div class="container">
      <form @submit.prevent="submitForm">
          <div class="row">
              <div class="mb-3 col-md-6">
                  <label for="kodejurusan" class="form-label">Kode Jurusan</label>
                  <input
                      type="text"
                      class="form-control"
                      id="kodejurusan"
                      v-model="form.kodejurusan"
                      required
                  />
              </div>
              <div class="mb-3 col-md-6">
                  <label for="jurusan" class="form-label">Nama Jurusan</label>
                  <input
                      type="text"
                      class="form-control"
                      id="jurusan"
                      v-model="form.jurusan"
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
import axios from "axios";

export default {
  props: ["id"],
  data() {
      return {
          form: {
              id: this.id,
              kodejurusan: "",
              jurusan: "",
          },
          csrf: document
              .querySelector('meta[name="csrf-token"]')
              .getAttribute("content"),
          showSuccessAlert: false,
          alertMessage: "",
      };
  },

  created() {
      axios
          .get("/daftarjurusan/prevdaftarjurusan/" + this.id, {
              headers: {
                  "X-CSRF-TOKEN": this.csrf,
              },
          })
          .then((response) => {
              this.form.id = response.data.id;
              this.form.kodejurusan = response.data.kodejurusan;
              this.form.jurusan = response.data.jurusan;
          })
          .catch((error) => {
              console.log(error);
          });
  },

  methods: {
      async submitForm() {
          try {
              await axios.post(
                  "/daftarjurusan/updatedaftarjurusan",
                  this.form
              );
              alert("Data berhasil diubah!");
          } catch (error) {
              console.error("Error submitting form:", error);
              alert("Gagal mengubah data.");
          }
      },
      async deleteItem() {
          if (confirm("Yakin mau menghapus data ini?")) {
              try {
                  await axios.get(
                      `/daftarjurusan/hapusdaftarjurusan/${this.id}`,
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
