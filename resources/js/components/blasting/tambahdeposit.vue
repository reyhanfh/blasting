<template>
    <div class="container">
        <form @submit.prevent="submitForm">
            <div class="mb-3">
                <div class="mb-3">
                    <label for="hotel" class="form-label">Nama Hotel</label>
                    <select
                        class="form-control"
                        id="hotel"
                        v-model="form.hotelId"
                        required
                    >
                        <option
                            v-for="hotel in hotels"
                            :key="hotel.id"
                            :value="hotel.id"
                        >
                            {{ hotel.hotelname }}
                        </option>
                        <option value="">Pilih Hotel</option>
                    </select>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</template>

<script>
import axios from "axios";

export default {
    data() {
        return {
            form: {
                hotelId: "",
            },
            hotels: [],
        };
    },
    methods: {
        async fetchHotels() {
            try {
                const response = await axios.get(
                    "/blasting/kontak/gethoteldata"
                );
                console.log("Hotels:", response.data);
                this.hotels = response.data;
            } catch (error) {
                console.error("Error fetching hotels:", error);
            }
        },
        async submitForm() {
            try {
                await axios.post(
                    "/blasting/deposit/simpandeposit",
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
                hotelId: "",
            };
        },
    },
    created() {
        this.fetchHotels();
    },
};
</script>
