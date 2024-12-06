<template>
    <div class="container d-flex justify-content-center align-items-center">
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
                pendidikan: '',
            },
        };
    },
    methods: {
        async submitForm() {
            try {
                await axios.post('/daftarjenispendidikan/simpandaftarjenispendidikan', this.form);
                alert("Data berhasil ditambahkan!");
                this.resetForm();
            } catch (error) {
                console.error("Error submitting form:", error);
                alert("Gagal menambahkan data.");
            }
        },
        resetForm() {
            this.form = {
                pendidikan: '',
            };
        },
    },
};
</script>