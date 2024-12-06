<template>
    <div class="container d-flex justify-content-center align-items-center">
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
                <button type="submit" class="btn btn-primary btn-custom">
                    Submit
                </button>
                <a href="/unithotel" class="btn btn-primary btn-sm btn-custom">
                    Cancel
                </a>
            </div>
        </form>
    </div>
</template>

<script>
import axios from "axios";

export default {
    data() {
        return {
            form: {
                namaunit: '',
                hrleader: '',
                kota: '',
                telp: '',
                email: '',
            },
        };
    },
    methods: {
        async submitForm() {
            try {
                await axios.post(
                    "/unithotel/simpanunithotel",
                    this.form
                );
                alert("Data berhasil ditambahkan!");
                this.resetForm();
            } catch (error) {
                console.error("Error submitting form:", error);
                alert("Gagal menambahkan data.");
            }
        },
        resetForm() {
            this.form = {
                namaunit: '',
                hrleader: '',
                kota: '',
                telp: '',
                email: '',
            };
        },
    },
};
</script>

<style>
form {
  display: flex;
  justify-content: center;
  flex-direction: column;
  gap: 10px;
}

.button-container {
  display: flex;
  justify-content: center;
  align-items: center;
  gap: 10px;
}

.email-container {
  display: flex;
  flex-direction: column;
  align-items: center;
  width: 100%;
}

.email-container .form-control {
  max-width: 300px;
}

.btn-custom {
  width: 100px;
  height: 40px;
  font-size: 12px; 
  display: flex;
  justify-content: center;
  align-items: center;
}

</style>
