<template>
    <div class="container d-flex justify-content-center align-items-center">
        <form @submit.prevent="submitForm" class="w-50">
            <div class="row">
                <div class="mb-3 col-md-6">
                    <label for="uangsaku_7h" class="form-label"
                        >Uang Saku 7h</label
                    >
                    <input
                        type="text"
                        class="form-control"
                        id="uangsaku_7h"
                        v-model="form.uangsaku_7h"
                        required
                    />
                </div>
                <div class="mb-3 col-md-6">
                    <label for="uangsaku_29h" class="form-label"
                        >Uang Saku 29h</label
                    >
                    <input
                        type="text"
                        class="form-control"
                        id="uangsaku_29h"
                        v-model="form.uangsaku_29h"
                        required
                    />
                </div>
            </div>
            <div class="row">
                <div class="mb-3 col-md-6">
                    <label for="uangsaku_30h" class="form-label"
                        >Uang Saku 30h</label
                    >
                    <input
                        type="text"
                        class="form-control"
                        id="uangsaku_30h"
                        v-model="form.uangsaku_30h"
                        required
                    />
                </div>
                <div class="mb-3 col-md-6">
                    <label for="uangsaku_unit" class="form-label"
                        >Uang Saku Unit</label
                    >
                    <input
                        type="text"
                        class="form-control"
                        id="uangsaku_unit"
                        v-model="form.uangsaku_unit"
                        required
                    />
                </div>
            </div>
            <div class="row">
                <div class="mb-3 col-md-12">
                    <label for="uangmakan" class="form-label">Uang Makan</label>
                    <input
                        type="text"
                        class="form-control"
                        id="uangmakan"
                        v-model="form.uangmakan"
                        required
                    />
                </div>
            </div>
            <div class="text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
</template>

<script>
import axios from "axios";

export default {
    props: ["id"],
    data() {
        return {
            form: {
                uangsaku_7h: "",
                uangsaku_29h: "",
                uangsaku_30h: "",
                uangsaku_unit: "",
                uangmakan: "",
            },
            csrf: document.querySelector('meta[name="csrf-token"]')
                ? document
                      .querySelector('meta[name="csrf-token"]')
                      .getAttribute("content")
                : "",
        };
    },

    created() {
        axios
            .get(`/leveljabatan/prevleveljabatan/${this.id}`, {
                headers: {
                    "X-CSRF-TOKEN": this.csrf,
                },
            })
            .then((response) => {
                this.form.id = response.data.id;
                this.form.uangsaku_7h = response.data.uangsaku_7h;
                this.form.uangsaku_29h = response.data.uangsaku_29h;
                this.form.uangsaku_30h = response.data.uangsaku_30h;
                this.form.uangsaku_unit = response.data.uangsaku_unit;
                this.form.uangmakan = response.data.uangmakan;
            })
            .catch((error) => {
                console.log(error);
            });
    },

    methods: {
        async submitForm() {
            try {
                await axios.post(
                    "/leveljabatan/updateleveljabatan",
                    this.form,
                    {
                        headers: {
                            "X-CSRF-TOKEN": this.csrf,
                        },
                    }
                );
                alert("Data berhasil diubah!");
            } catch (error) {
                console.error("Error submitting form:", error);
                alert("Gagal mengubah data.");
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
