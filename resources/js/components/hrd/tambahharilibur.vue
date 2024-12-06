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
                dari: '',
                sampai: '',
                keterangan: '',
            },
        };
    },
    methods: {
        async submitForm() {
            try {
                await axios.post('/harilibur/simpanharilibur', this.form);
                alert("Data berhasil ditambahkan!");
                this.resetForm();
            } catch (error) {
                console.error("Error submitting form:", error);
                alert("Gagal menambahkan data.");
            }
        },
        resetForm() {
            this.form = {
                dari: '',
                sampai: '',
                keterangan: '',
            };
        },
    },
};
</script>