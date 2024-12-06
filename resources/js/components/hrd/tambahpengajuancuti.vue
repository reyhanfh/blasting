<template>
    <div class="container">
        <form @submit.prevent="submitForm">
            <div class="row">
                <!-- Tanggal Pengajuan -->
                <div class="mb-3 col-md-6">
                    <label for="tanggalpengajuan" class="form-label"
                        >Tanggal Pengajuan</label
                    >
                    <input
                        type="date"
                        class="form-control"
                        id="tanggalpengajuan"
                        v-model="form.tanggalpengajuan"
                        required
                    />
                </div>

                <!-- Jenis Cuti -->
                <!-- Jenis Cuti -->
                <div class="mb-3 col-md-6">
                    <label for="idjeniscuti" class="form-label"
                        >Jenis Cuti</label
                    >
                    <select
                        class="form-control"
                        id="idjeniscuti"
                        v-model="form.idjeniscuti"
                        required
                    >
                        <option value="" disabled selected>
                            Pilih Jenis Cuti
                        </option>
                        <option
                            v-for="idjeniscuti in jeniscutis"
                            :key="idjeniscuti.id"
                            :value="idjeniscuti.id"
                        >
                            {{ idjeniscuti.jeniscuti }}
                        </option>
                    </select>
                </div>

                <!-- Dari -->
                <div class="mb-3 col-md-4">
                    <label for="dari" class="form-label">Dari</label>
                    <input
                        type="date"
                        class="form-control"
                        id="dari"
                        v-model="form.dari"
                        required
                    />
                </div>

                <!-- Sampai -->
                <div class="mb-3 col-md-4">
                    <label for="sampai" class="form-label">Sampai</label>
                    <input
                        type="date"
                        class="form-control"
                        id="sampai"
                        v-model="form.sampai"
                        required
                    />
                </div>

                <div class="mb-3 col-md-4">
                    <label for="harikerja" class="form-label">Hari Kerja</label>
                    <input
                        type="text"
                        class="form-control"
                        id="harikerja"
                        v-model="form.harikerja"
                        readonly
                        disabled
                        style="background-color: #e9ecef; color: grey;"
                    />
                </div>

                <!-- Keterangan -->
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

                <!-- Alamat Cuti -->
                <div class="mb-3 col-md-6">
                    <label for="alamatcuti" class="form-label"
                        >Alamat Cuti</label
                    >
                    <input
                        type="text"
                        class="form-control"
                        id="alamatcuti"
                        v-model="form.alamatcuti"
                        required
                    />
                </div>

                <!-- Kontak -->
                <div class="mb-3 col-md-6">
                    <label for="kontak" class="form-label">Kontak</label>
                    <input
                        type="text"
                        class="form-control"
                        id="kontak"
                        v-model="form.kontak"
                        required
                    />
                </div>
            </div>

            <div class="text-center">
                <button type="submit" class="btn btn-primary">Create</button>
                <a href="/cuti/pengajuancuti/" class="btn btn-danger">Cancel</a>
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
                idjeniscuti: "",
                dari: "",
                sampai: "",
                keterangan: "",
                alamatcuti: "",
                kontak: "",
                harikerja: "",
            },
            jeniscutis: [],
            csrf: document
                .querySelector('meta[name="csrf-token"]')
                .getAttribute("content"),
        };
    },
    methods: {
        async fetchJenisCutis() {
            try {
                const response = await axios.get("/cuti/getalljeniscuti");
                this.jeniscutis = response.data;
            } catch (error) {
                console.error("Error fetching data:", error);
            }
        },
        async submitForm() {
            try {
                await axios.post("/cuti/simpanpengajuancuti", this.form, {
                    headers: {
                        "X-CSRF-TOKEN": this.csrf,
                    },
                });
                alert("Data berhasil ditambahkan!");
                this.resetForm();
            } catch (error) {
                console.error("Error submitting form:", error);
                alert("Gagal menambahkan data.");
            }
        },
        resetForm() {
            this.form = {
                tanggalpengajuan: "",
                idjeniscuti: "",
                dari: "",
                sampai: "",
                keterangan: "",
                alamatcuti: "",
                kontak: "",
            };
        },
        calculateWorkingDays(dari, sampai) {
        const startDate = new Date(dari);
        const endDate = new Date(sampai);
        let count = 0;

        for (
            let date = startDate;
            date <= endDate;
            date.setDate(date.getDate() + 1)
        ) {
            const day = date.getDay();
            if (day !== 0 && day !== 6) {
                // Exclude Sundays (0) and Saturdays (6)
                count++;
            }
        }

        this.form.harikerja = count;
    },
    },
    watch: {
    'form.dari'(newDari) {
        if (this.form.sampai) {
            this.calculateWorkingDays(newDari, this.form.sampai);
        }
    },
    'form.sampai'(newSampai) {
        if (this.form.dari) {
            this.calculateWorkingDays(this.form.dari, newSampai);
        }
    },
},

    created() {
        this.fetchJenisCutis();
    },
};
</script>
