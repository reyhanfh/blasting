<template>
    <div class="container">
        <form @submit.prevent="submitForm">
            <div class="row">
                <div class="mb-3 col-md-6">
                    <label for="kodejurusan" class="form-label">Kode Jurusan</label>
                    <input
                        type="text"
                        class="form-control"
                        id="kodedepartemen"
                        v-model="form.kodejurusan"
                        required
                    />
                </div>
                <div class="mb-3 col-md-6">
                    <label for="jurusan" class="form-label"
                        >Nama Jurusan</label
                    >
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
                kodejurusan: '',
                jurusan: '',
            },
        };
    },
    methods: {
        async submitForm() {
            try {
                await axios.post('/daftarjurusan/simpandaftarjurusan', this.form);
                alert("Data berhasil ditambahkan!");
                this.resetForm();
            } catch (error) {
                console.error("Error submitting form:", error);
                alert("Gagal menambahkan data.");
            }
        },
        resetForm() {
            this.form = {
                kodejurusan: '',
                jurusan: '',
            };
        },
    },
};
</script>