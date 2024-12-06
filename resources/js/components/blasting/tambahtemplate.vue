<template>
    <div class="container mt-0">
        <!-- <div class="card"> -->
            <div class="card-body">
                <form @submit.prevent="submitForm" class="mx-auto" style="max-width: 400px;">
        <div class="mb-3">
            <label for="title" class="form-label">Title:</label>
            <input
                type="text"
                v-model="title"
                class="form-control"
                id="title"
                required
            />
        </div>

        <div class="mb-3">
            <label for="pesan" class="form-label">Pesan:</label>
            <textarea
                id="pesan"
                class="form-control"
                v-model="pesan"
                required
            ></textarea>
        </div>

        <div class="mb-3">
            <label for="photo" class="form-label">Photo:</label>
            <input
                type="text"
                v-model="photo"
                class="form-control"
                id="photo"
                required
            />
        </div>
        <div class="text-center">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
    </form>
</div>

                <div v-if="successMessage" class="alert alert-success mt-3">
                    {{ successMessage }}
                </div>
            </div>
        <!-- </div> -->
</template>

<script>
import axios from "axios";

export default {
    data() {
        return {
            title: "",
            pesan: "",
            photo: "",
            successMessage: "",
        };
    },
    methods: {
        async submitForm() {
            try {
                const response = await axios.post(
                    "/blasting/template/simpantemplate",
                    {
                        title: this.title,
                        pesan: this.pesan,
                        photo: this.photo,
                    }
                );
                this.successMessage = response.data.message;
                this.title = "";
                this.pesan = "";
                this.photo = "",
                setTimeout(() => {
                    this.successMessage = "";
                }, 3000);
            } catch (error) {
                console.error(error);
            }
        },
    },
};
</script>
