<template>
    <div class="container mt-2">
          <form @submit.prevent="submitForm" class="mx-auto" style="max-width: 400px;">
            <div class="mb-3">
              <label for="segmen" class="form-label">Segmentasi:</label>
              <input type="text" v-model="segmen" class="form-control" id="segmen" required />
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
            segmen: "",
            successMessage: "",
            csrf: document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
        };
    },

    created() {
        axios.get('/blasting/segmentasi/getsegmentasi/' + this.id, {
            headers: {
                'X-CSRF-TOKEN': this.csrf
            }
        })
        .then(response => {
            this.segmen = response.data.segmen;
        })
        .catch(error => {
            console.log(error);
        });
    },

    methods: {
        async submitForm() {
            try {
                const response = await axios.post(
                    "/blasting/segmentasi/updatesegmentasi",
                    {
                        id: this.id,
                        segmen: this.segmen,
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
