<template>
  <div class="container d-flex flex-column align-items-center">
      <form @submit.prevent="submitForm" class="w-50">
          <div class="mb-3">
              <label for="pendidikan" class="form-label">Pendidikan</label>
              <input
                  type="text"
                  class="form-control"
                  id="pendidikan"
                  v-model="form.pendidikan"
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
      <div v-if="showSuccessAlert" class="alert alert-success mt-3" role="alert">
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
                pendidikan: "",
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
            .get(
                "/daftarjenispendidikan/prevdaftarjenispendidikan/" + this.id,
                {
                    headers: {
                        "X-CSRF-TOKEN": this.csrf,
                    },
                }
            )
            .then((response) => {
                this.form.id = response.data.id;
                this.form.pendidikan = response.data.pendidikan;
            })
            .catch((error) => {
                console.log(error);
            });
    },

    methods: {
        async submitForm() {
            try {
                await axios.post(
                    "/daftarjenispendidikan/updatedaftarjenispendidikan",
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
                        `/daftarjenispendidikan/hapusdaftarjenispendidikan/${this.id}`,
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
