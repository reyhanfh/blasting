<template>
    <div class="container d-flex justify-content-center align-items-center">
        <form @submit.prevent="submitForm" class="w-50">
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
                fakultas: '',
            },
        };
    },
    methods: {
        async submitForm() {
            try {
                await axios.post('/daftarfakultas/simpandaftarfakultas', this.form);
                alert("Data berhasil ditambahkan!");
                this.resetForm();
            } catch (error) {
                console.error("Error submitting form:", error);
                alert("Gagal menambahkan data.");
            }
        },
        resetForm() {
            this.form = {
                fakultas: '',
            };
        },
    },
};
</script>