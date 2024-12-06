<template>
    <div class="container">
        <form @submit.prevent="submitForm">
            <div class="row">
                <div class="mb-3 col-md-6">
                    <label for="kodedepartemen" class="form-label">Kode Departemen</label>
                    <input
                        type="text"
                        class="form-control"
                        id="kodedepartemen"
                        v-model="form.kodedepartemen"
                        required
                    />
                </div>
                <div class="mb-3 col-md-6">
                    <label for="namadepartemen" class="form-label"
                        >Nama Departemen</label
                    >
                    <input
                        type="text"
                        class="form-control"
                        id="namadepartemen"
                        v-model="form.namadepartemen"
                        required
                    />
                </div>
            </div>
            <div class="text-center">
                <button type="submit" class="btn btn-primary">Create</button>
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
                kodedepartemen: '',
                namadepartemen: '',
            },
        };
    },
    methods: {
        async submitForm() {
            try {
                await axios.post('/daftardepartemen/simpandaftardepartemen', this.form);
                alert("Data berhasil ditambahkan!");
                this.resetForm();
            } catch (error) {
                console.error("Error submitting form:", error);
                alert("Gagal menambahkan data.");
            }
        },
        resetForm() {
            this.form = {
                kodedepartemen: '',
                namadepartemen: '',
            };
        },
    },
};
</script>