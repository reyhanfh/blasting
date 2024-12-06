<template>
    <div class="container">
    <div v-if="showSuccessAlert" class="alert alert-primary alert-dismissible fade show" role="alert">
            <strong>{{ alertMessage }}</strong>.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div> 
        <form @submit.prevent="submitForm">
            <!-- Tanggal Pengajuan -->
            <div class="row">
                <div class="mb-3 col-md-4">
                    <label for="tanggalpengajuan" class="form-label"
                        >Tanggal Pengajuan</label
                    >
                    <input
                        type="date"
                        class="form-control"
                        id="tanggalpengajuan"
                        v-model="form.tanggalpengajuan"
                        :class="{ 'is-invalid': errors.tanggalpengajuan }"
                    />
                    <div class="invalid-feedback" v-if="errors.tanggalpengajuan">{{ errors.tanggalpengajuan[0] }}</div>
                </div>  
                </div>
        

            <div class="row">
                <!-- Dari -->
                <div class="mb-3 col-md-4">
                    <label for="dari" class="form-label">Dari</label>
                    <input
                        type="date"
                        class="form-control"
                        id="dari"
                        v-model="form.dari" 
                        :class="{ 'is-invalid': errors.dari }"                      
                    />
                    <div class="invalid-feedback" v-if="errors.dari">{{ errors.dari[0] }}</div>
                </div>

                <!-- Sampai -->
                <div class="mb-3 col-md-4">
                    <label for="sampai" class="form-label">Sampai</label>
                    <input
                        type="date"
                        class="form-control"
                        id="sampai"
                        v-model="form.sampai"
                        :class="{ 'is-invalid': errors.sampai }"
                    />
                     <div class="invalid-feedback" v-if="errors.sampai">{{ errors.sampai[0] }}</div>
                </div>

                <!-- Extra Off -->
                <div class="mb-3 col-md-2">
                    <label for="extraoff" class="form-label">Extra Off</label>
                    <input
                        type="text"
                        class="form-control"
                        id="extraoff"
                        v-model="form.extraoff"
                        readonly
                        disabled
                        style="background-color: #e9ecef; color: grey"
                        :class="{ 'is-invalid': errors.extraoff }"
                    />
                    <div class="invalid-feedback" v-if="errors.extraoff">{{ errors.extraoff[0] }}</div>
                </div>

                <!-- Tujuan -->
                <div class="mb-3 col-md-10">
                    <label for="kotatujuan" class="form-label"
                        >Tujuan / Kota Tujuan</label
                    >
                    <input
                        type="text"
                        class="form-control"
                        id="kotatujuan"
                        v-model="form.kotatujuan"
                        :class="{ 'is-invalid': errors.kotatujuan }"
                    />
                            <div class="invalid-feedback" v-if="errors.kotatujuan">{{ errors.kotatujuan[0] }}</div>
                </div>

                <!-- Status Hotel Tujuan -->
                <div class="mb-3 col-md-10">
                    <label for="idstatushoteltujuan" class="form-label"
                        >Status Hotel Tujuan</label
                    >
                    <select
                        class="form-control"
                        id="idstatushoteltujuan"
                        v-model="form.idstatushoteltujuan"
                        :class="{ 'is-invalid': errors.idstatushoteltujuan }"
                    >
                        <option value="" disabled selected>
                            Pilih Status Hotel Tujuan
                        </option>
                        <option
                            v-for="idstatushoteltujuan in idstatushoteltujuans"
                            :key="idstatushoteltujuan.id"
                            :value="idstatushoteltujuan.id"
                        >
                            {{ idstatushoteltujuan.statushoteltujuan }}
                        </option>
                    </select>
                    <div class="invalid-feedback" v-if="errors.idstatushoteltujuan">{{ errors.idstatushoteltujuan[0] }}</div>
                </div>

                <!-- Keperluan Bisnis -->
                <div class="mb-3 col-md-10">
                    <label for="keperluanbisnis" class="form-label"
                        >Keperluan Bisnis</label
                    >
                    <textarea
                        class="form-control"
                        id="keperluanbisnis"
                        v-model="form.keperluanbisnis"
                        :class="{ 'is-invalid': errors.keperluanbisnis}"
                    ></textarea>
                        <div class="invalid-feedback" v-if="errors.keperluanbisnis">{{ errors.keperluanbisnis[0] }}</div>
                </div>

                <!-- Tiket -->
                <div class="mb-3 col-md-6">
                    <label for="tiket" class="form-label">Tiket</label>
                    <input
                        type="text"
                        class="form-control"
                        id="tiket"
                        v-model="form.tiket"
                        :class="{ 'is-invalid': errors.tiket }"
                    />
                    <div class="invalid-feedback" v-if="errors.tiket">{{ errors.tiket[0] }}</div>
                </div>

                <!-- Remark Tiket -->
                <div class="mb-3 col-md-6">
                    <label for="remarktiket" class="form-label">Remark</label>
                    <input
                        type="text"
                        class="form-control"
                        id="remarktiket"
                        v-model="form.remarktiket"
                        :class="{ 'is-invalid': errors.remarktiket}" 
                    />
                    <div class="invalid-feedback" v-if="errors.remarktiket">{{ errors.remarktiket[0] }}</div>
                </div>

                <!-- Akomodasi -->
                <div class="mb-3 col-md-6">
                    <label for="akomodasi" class="form-label">Akomodasi</label>
                    <input
                        type="text"
                        class="form-control"
                        id="akomodasi"
                        v-model="form.akomodasi"
                        :class="{ 'is-invalid': errors.akomodasi }"
                    />
                    <div class="invalid-feedback" v-if="errors.akomodasi">{{ errors.akomodasi[0] }}</div>
                </div>

                <!-- Remark Akomodasi -->
                <div class="mb-3 col-md-6">
                    <label for="remarkakomodasi" class="form-label"
                        >Remark</label
                    >
                    <input
                        type="text"
                        class="form-control"
                        id="remarkakomodasi"
                        v-model="form.remarkakomodasi"
                        :class="{ 'is-invalid': errors.remarkakomodasi }"
                    />
                    <div class="invalid-feedback" v-if="errors.remarkakomodasi">{{ errors.remarkakomodasi[0] }}</div>
                </div>

                <!-- Transport -->
                <div class="mb-3 col-md-6">
                    <label for="transport" class="form-label">Transport</label>
                    <input
                        type="text"
                        class="form-control"
                        id="transport"
                        v-model="form.transport"
                        :class="{ 'is-invalid': errors.transport }"
                    />
                    <div class="invalid-feedback" v-if="errors.transport">{{ errors.transport[0] }}</div>
                </div>

                <!-- Remark Transport -->
                <div class="mb-3 col-md-6">
                    <label for="remarktransport" class="form-label"
                        >Remark</label
                    >
                    <input
                        type="text"
                        class="form-control"
                        id="remarktransport"
                        v-model="form.remarktransport"
                        :class="{ 'is-invalid': errors.remarktransport }"
                    />
                    <div class="invalid-feedback" v-if="errors.remarktransport">{{ errors.remarktransport[0] }}</div>
                </div>

                <!-- Meal -->
                <div class="mb-3 col-md-6">
                    <label for="meal" class="form-label">Meal</label>
                    <input
                        type="text"
                        class="form-control"
                        id="meal"
                        v-model="form.meal"
                        readonly
                        disabled
                        style="background-color: #e9ecef; color: grey"
                        :class="{ 'is-invalid': errors.meal }"
                    />
                    <div class="invalid-feedback" v-if="errors.meal">{{ errors.meal[0] }}</div>
                </div>

                <!-- Remark Meal -->
                <div class="mb-3 col-md-6">
                    <label for="remarkmeal" class="form-label">Remark</label>
                    <input
                        type="text"
                        class="form-control"
                        id="remarkmeal"
                        v-model="form.remarkmeal"
                        :class="{ 'is-invalid': errors.remarkmeal }"
                    />
                    <div class="invalid-feedback" v-if="errors.remarkmeal">{{ errors.remarkmeal[0] }}</div>
                </div>

                <!-- Uang Saku -->
                <div class="mb-3 col-md-6">
                    <label for="uangsaku" class="form-label">Uang Saku</label>
                    <input
                        type="text"
                        class="form-control"
                        id="uangsaku"
                        v-model="form.uangsaku"
                        readonly
                        disabled
                        style="background-color: #e9ecef; color: grey"
                        :class="{ 'is-invalid': errors.uangsaku }"
                    />
                    <div class="invalid-feedback" v-if="errors.uangsaku">{{ errors.uangsaku[0] }}</div>
                </div>

                <!-- Remark Uang Saku -->
                <div class="mb-3 col-md-6">
                    <label for="remarkuangsaku" class="form-label"
                        >Remark</label
                    >
                    <input
                        type="text"
                        class="form-control"
                        id="remarkuangsaku"
                        v-model="form.remarkuangsaku"
                        :class="{ 'is-invalid': errors.remarkuangsaku }"
                    />
                    <div class="invalid-feedback" v-if="errors.remarkuangsaku">{{ errors.remarkuangsaku[0] }}</div>
                </div>

                <!-- lain-lain -->
                <div class="mb-3 col-md-6">
                    <label for="lainlain" class="form-label"
                        >Lain-lain</label
                    >
                    <input
                        type="text"
                        class="form-control"
                        id="lainlain"
                        v-model="form.lainlain"
                        :class="{ 'is-invalid': errors.lainlain }"
                    />
                    <div class="invalid-feedback" v-if="errors.lainlain">{{ errors.lainlain[0] }}</div>
                </div>

                <!-- Remark lain-lain -->
                <div class="mb-3 col-md-6">
                    <label for="remarklainlain" class="form-label"
                        >Remark</label
                    >
                    <input
                        type="text"
                        class="form-control"
                        id="remarklainlain"
                        v-model="form.remarklainlain"
                        :class="{ 'is-invalid': errors.remarklainlain }"
                    />
                    <div class="invalid-feedback" v-if="errors.remarklainlain">{{ errors.remarklainlain[0] }}</div>
                </div>

                <!-- Total -->
                <div class="mb-3 col-md-6">
                    <label for="total" class="form-label">Total</label>
                    <input
                        type="text"
                        class="form-control"
                        id="total"
                        v-model="form.total"
                        readonly
                        disabled
                        style="background-color: #e9ecef; color: grey"
                        :class="{ 'is-invalid': errors.total}"
                    />
                    <div class="invalid-feedback" v-if="errors.total">{{ errors.total[0] }}</div>
                </div>
            </div>

            <div class="text-center button-container">
                <button type="submit" class="btn btn-primary">Create</button>
                <a href="/perjalanandinas/pengajuanpjs" class="btn btn-danger"
                    >Cancel</a
                >
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
                tanggalpengajuan: "",
                dari: "",
                sampai: "",
                extraoff: "",
                kotatujuan: "",
                idstatushoteltujuan: "",
                keperluanbisnis: "",
                tiket: "",
                remarktiket: "",
                akomodasi: "",
                remarkakomodasi: "",
                transport: "",
                remarktransport: "",
                meal: "",
                remarkmeal: "",
                uangsaku: "",
                remarkuangsaku: "",
                lainlain: "",
                remarklainlain: "",
                total: "",
            },
            errors: {},
            idstatushoteltujuans: [],
        
            csrf: document
                .querySelector('meta[name="csrf-token"]')
                .getAttribute("content"),
                showSuccessAlert: false,
                alertMessage: '',
        };
    },
    methods: {
        calculateDuration(dari, sampai) {
            const startDate = new Date(dari);
            const endDate = new Date(sampai);
            const timeDiff = endDate - startDate;
            const daysDiff = timeDiff / (1000 * 3600 * 24);
            return daysDiff + 1;
        },

        async fetchidstatushoteltujuans() {
            try {
                const response = await axios.get(
                    "/perjalanandinas/getstatushoteltujuan"
                );
                this.idstatushoteltujuans = response.data;
            } catch (error) {
                console.error("Error fetching data:", error);
            }
        },
        async submitForm() {
            try {
                this.calculateTotal(); // Ensure total is updated before submission                
                await axios.post(
                    "/perjalanandinas/simpanpengajuanpjs",
                    this.form,
                    {
                        headers: {
                            "X-CSRF-TOKEN": this.csrf,
                        },
                    }
                );
                alert("Data berhasil ditambahkan!");
                this.resetForm();
            } catch (error) {
                console.error("Error submitting form:", error);               
            }
        },
        async fetchMeal() {
            try {
                const response = await axios.get("/perjalanandinas/getmeal");
                this.form.meal = response.data.meal;
            } catch (error) {
                console.error("Error fetching meal:", error);
            }
        },
        resetForm() {
            this.form = {
                tanggalpengajuan: "",
                dari: "",
                sampai: "",
                extraoff: "",
                kotatujuan: "",
                idstatushoteltujuan: "",
                keperluanbisnis: "",
                tiket: "",
                remarktiket: "",
                akomodasi: "",
                remarkakomodasi: "",
                transport: "",
                remarktransport: "",
                meal: "",
                remarkmeal: "",
                uangsaku: "",
                remarkuangsaku: "",
                lainlain: "",
                remarklainlain: "",
                total: "",
            };
        },
        async calculateExtraOff(dari, sampai) {
            if (!dari || !sampai) return;

            const startDate = new Date(dari);
            const endDate = new Date(sampai);
            let extraOffCount = 0;

            const response = await axios.get("/perjalanandinas/getholidays", {
                params: { dari, sampai },
            });

            const holidays = response.data;
            const holidaySet = new Set();

            // Add all holidays to a Set to avoid duplicate entries
            holidays.forEach((holiday) => {
                let currentHolidayStart = new Date(holiday.dari);
                let currentHolidayEnd = new Date(holiday.sampai);
                while (currentHolidayStart <= currentHolidayEnd) {
                    holidaySet.add(currentHolidayStart.toDateString());
                    currentHolidayStart.setDate(
                        currentHolidayStart.getDate() + 1
                    );
                }
            });

            for (
                let date = startDate;
                date <= endDate;
                date.setDate(date.getDate() + 1)
            ) {
                const day = date.getDay();

                // Check if the day is a weekend or a holiday
                if (
                    day === 0 ||
                    day === 6 ||
                    holidaySet.has(date.toDateString())
                ) {
                    extraOffCount++;
                }
            }

            this.form.extraoff = extraOffCount;
        },

        async fetchUangSaku() {
            const duration = this.calculateDuration(
                this.form.dari,
                this.form.sampai
            );
            try {
                const response = await axios.post(
                    "/perjalanandinas/getuangsaku",
                    {
                        params: { duration },
                    }
                );
                this.form.uangsaku = response.data.uangSaku;
            } catch (error) {
                console.error("Error fetching Uang Saku:", error);
            }
        },

        calculateTotal() {
            // Assuming meal and uangsaku are numeric values
            const meal = parseFloat(this.form.meal) || 0;
            const uangSaku = parseFloat(this.form.uangsaku) || 0;
            this.form.total = meal + uangSaku;
        },
    },
    watch: {
        form: {
            deep: true,
            handler() {
                this.form.total = this.total;
            },
        },
        "form.dari"(newDari) {
            if (this.form.sampai) {
                this.calculateExtraOff(newDari, this.form.sampai);
                this.fetchUangSaku(); // Fetch Uang Saku when dates change
            }
        },
        "form.sampai"(newSampai) {
            if (this.form.dari) {
                this.calculateExtraOff(this.form.dari, newSampai);
                this.fetchUangSaku(); // Fetch Uang Saku when dates change
            }
        },
        "form.meal"(newMeal) {
            this.calculateTotal();
        },
        "form.uangsaku"(newUangSaku) {
            this.calculateTotal();
        },
    },

    created() {
        this.fetchidstatushoteltujuans();
        this.fetchMeal();
    },

    computed: {
        total() {
            const meal = parseFloat(this.form.meal) || 0;
            const uangSaku = parseFloat(this.form.uangsaku) || 0;
            return meal + uangSaku;
        },
    },
};
</script>

<style>
form {
    display: flex;
    gap: 0px;
}

.button-container {
    margin-top: 50px;
}
</style>
