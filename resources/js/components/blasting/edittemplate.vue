<template>
    <div class="container mt-2">
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
                <div v-if="successMessage" class="alert alert-success mt-3">
                    {{ successMessage }}
                </div>
            </div>
</template>

<script>
import axios from "axios";

export default {
    props: ['id'],
    data() {
        return {
            title: "",
            pesan: "",
            photo: "",
            successMessage: "",
            csrf: document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
        };
    },

    created() {
        axios.get('/blasting/template/gettemplate/' + this.id, {
            headers: {
                'X-CSRF-TOKEN': this.csrf
            }
        })
        .then(response => {
            this.title = response.data.title;
            this.pesan = response.data.pesan;
            this.photo = response.data.photo;
        })
        .catch(error => {
            console.log(error);
        });
    },

    methods: {
        async submitForm() {
            try {
                const response = await axios.post(
                    "/blasting/template/updatetemplate",
                    {
                        id: this.id,
                        title: this.title,
                        pesan: this.pesan,
                        photo:this.photo,
                    },
                    {
                        headers: {
                            'X-CSRF-TOKEN': this.csrf
                        }
                    }
                );
                this.successMessage = response.data.message;
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
