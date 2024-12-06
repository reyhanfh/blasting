<template>
    <div class="container d-flex flex-column align-items-center">
        <form @submit.prevent="submitForm" class="w-50">
            <div class="row">
                <div class="mb-3 col-md-6">
                    <label for="namaunit" class="form-label">Nama Hotel</label>
                    <input
                        type="text"
                        class="form-control"
                        id="namaunit"
                        v-model="form.namaunit"
                        required
                    />
                </div>
                <div class="mb-3 col-md-6">
                    <label for="hrleader" class="form-label">Nama HR</label>
                    <input
                        type="text"
                        class="form-control"
                        id="hrleader"
                        v-model="form.hrleader"
                        required
                    />
                </div>
            </div>
            <div class="row">
                <div class="mb-3 col-md-6">
                    <label for="kota" class="form-label">Kota</label>
                    <input
                        type="text"
                        class="form-control"
                        id="kota"
                        v-model="form.kota"
                        required
                    />
                </div>
                <div class="mb-3 col-md-6">
                    <label for="telp" class="form-label">Telp</label>
                    <input
                        type="text"
                        class="form-control"
                        id="telp"
                        v-model="form.telp"
                        required
                    />
                </div>
            </div>
            <div class="row">
                <div class="mb-3 col-md-12">
                    <label for="email" class="form-label">Email</label>
                    <input
                        type="text"
                        class="form-control"
                        id="email"
                        v-model="form.email"
                        required
                    />
                </div>
            </div>
            <div class="button-container">
                <button type="submit" class="btn btn-primary">
                    Submit
                </button>
                <button
                    type="button"
                    class="btn btn-danger"
                    @click="deleteItem"
                >
                    Delete
                </button>
                <button
                    type="button"
                    class="btn btn-secondary"
                    @click="cancel"
                >
                    Cancel
                </button>
            </div>
        </form>
        <div v-if="showSuccessAlert" class="alert alert-success mt-3">
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
                namaunit: "",
                hrleader: "",
                kota: "",
                telp: "",
                email: "",
            },
            csrf: document.querySelector('meta[name="csrf-token"]')
                ? document
                      .querySelector('meta[name="csrf-token"]')
                      .getAttribute("content")
                : "",
                showSuccessAlert: false,
            alertMessage: "",
        };
    },

    created() {
        axios
            .get(`/unithotel/prevunithotel/${this.id}`, {
                headers: {
                    "X-CSRF-TOKEN": this.csrf,
                },
            })
            .then((response) => {
                this.form.id = response.data.id;
                this.form.namaunit = response.data.namaunit;
                this.form.hrleader = response.data.hrleader;
                this.form.kota = response.data.kota;
                this.form.telp = response.data.telp;
                this.form.email = response.data.email;
            })
            .catch((error) => {
                console.log(error);
            });
    },

    methods: {
        async submitForm() {
            try {
                await axios.post("/unithotel/updateunithotel", this.form, {
                    headers: {
                        "X-CSRF-TOKEN": this.csrf,
                    },
                });
                alert("Data berhasil diubah!");
            } catch (error) {
                console.error("Error submitting form:", error);
                alert("Gagal mengubah data.");
            }
        },
        cancel() {
        window.location.href = '/unithotel';
    },
    async deleteItem() {
            if (confirm("Yakin mau menghapus data ini?")) {
                try {
                    await axios.get(
                        `/unithotel/hapusunithotel/${this.id}`,
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

<style scoped>
* {
    text-align: center;
}
</style>
