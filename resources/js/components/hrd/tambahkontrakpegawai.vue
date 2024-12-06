<template>
    <div class="container">
        <form @submit.prevent="submitForm">
            <div class="row">
                <div class="mb-3 col-md-6">
                    <label for="ktp" class="form-label"
                        >No Identitas (KTP)</label
                    >
                    <input
                        type="text"
                        class="form-control"
                        id="ktp"
                        v-model="form.ktp"
                        required
                    />
                </div>
                <div class="mb-3 col-md-6">
                    <label for="namalengkap" class="form-label"
                        >Nama Lengkap</label
                    >
                    <input
                        type="text"
                        class="form-control"
                        id="namalengkap"
                        v-model="form.namalengkap"
                        required
                    />
                </div>
            </div>
            <div class="row">
                <div class="mb-3 col-md-6">
                    <label for="gelardepan" class="form-label"
                        >Gelar Depan</label
                    >
                    <input
                        type="text"
                        class="form-control"
                        id="gelardepan"
                        v-model="form.gelardepan"
                    />
                </div>
                <div class="mb-3 col-md-6">
                    <label for="gelarbelakang" class="form-label"
                        >Gelar Belakang</label
                    >
                    <input
                        type="text"
                        class="form-control"
                        id="gelarbelakang"
                        v-model="form.gelarbelakang"
                    />
                </div>
            </div>
            <div class="row">
                <div class="mb-3 col-md-6">
                    <label for="idjeniskelamin" class="form-label"
                        >Jenis Kelamin</label
                    >
                    <select
                        class="form-control"
                        id="idjeniskelamin"
                        v-model="form.idjeniskelamin"
                    >
                        <option value="" disabled selected>
                            Pilih Jenis Kelamin
                        </option>
                        <option
                            v-for="idjeniskelamin in jeniskelamins"
                            :key="idjeniskelamin.id"
                            :value="idjeniskelamin.id"
                        >
                            {{ idjeniskelamin.jeniskelamin }}
                        </option>
                    </select>
                </div>

                <div class="mb-3 col-md-6">
                    <label for="idpendidikan" class="form-label"
                        >Pendidikan</label
                    >
                    <select
                        class="form-control"
                        id="idpendidikan"
                        v-model="form.idpendidikan"
                    >
                        <option value="" disabled selected>
                            Pilih Pendidikan
                        </option>
                        <option
                            v-for="idpendidikan in pendidikans"
                            :key="idpendidikan.id"
                            :value="idpendidikan.id"
                        >
                            {{ idpendidikan.pendidikan }}
                        </option>
                    </select>
                </div>
            </div>

            <div class="row">
                <div class="mb-3 col-md-12">
                    <label for="idagama" class="form-label">Agama</label>
                    <select
                        class="form-control"
                        id="idagama"
                        v-model="form.idagama"
                    >
                        <option value="" disabled selected>Pilih Agama</option>
                        <option
                            v-for="idagama in agamas"
                            :key="idagama.id"
                            :value="idagama.id"
                        >
                            {{ idagama.agama }}
                        </option>
                    </select>
                    <br />
                    <br />
                </div>
                <h6>Alamat Sesuai KTP</h6>
                <br />
                <br />
                <hr />
            </div>
            <div class="row">
                <div class="mb-3 col-md-12">
                    <label for="namajalan_ktp" class="form-label"
                        >Nama Jalan</label
                    >
                    <input
                        type="text"
                        class="form-control"
                        id="namajalan_ktp"
                        v-model="form.namajalan_ktp"
                    />
                </div>
            </div>
            <div class="row">
                <div class="mb-3 col-md-6">
                    <label for="kelurahan_ktp" class="form-label"
                        >Kelurahan</label
                    >
                    <input
                        type="text"
                        class="form-control"
                        id="kelurahan_ktp"
                        v-model="form.kelurahan_ktp"
                    />
                </div>
                <div class="mb-3 col-md-6">
                    <label for="kecamatan_ktp" class="form-label"
                        >Kecamatan</label
                    >
                    <input
                        type="text"
                        class="form-control"
                        id="kecamatan_ktp"
                        v-model="form.kecamatan_ktp"
                    />
                    <br />
                    <br />
                </div>
                <h6>Alamat Domisili</h6>
                <br />
                <br />
                <hr />
            </div>
            <div class="row">
                <div class="mb-3 col-md-12">
                    <label for="namajalan_domisili" class="form-label"
                        >Nama Jalan</label
                    >
                    <input
                        type="text"
                        class="form-control"
                        id="namajalan_domisili"
                        v-model="form.namajalan_domisili"
                    />
                </div>
            </div>
            <div class="row">
                <div class="mb-3 col-md-6">
                    <label for="kelurahan_domisili" class="form-label"
                        >Kelurahan</label
                    >
                    <input
                        type="text"
                        class="form-control"
                        id="kelurahan_domisili"
                        v-model="form.kelurahan_domisili"
                    />
                </div>
                <div class="mb-3 col-md-6">
                    <label for="kecamatan_domisili" class="form-label"
                        >Kecamatan</label
                    >
                    <input
                        type="text"
                        class="form-control"
                        id="kecamatan_domisili"
                        v-model="form.kecamatan_domisili"
                    />
                    <br />
                    <br />
                </div>
                <h6>Penempatan</h6>
                <br />
                <br />
                <hr />
            </div>
            <div class="row">
                <div class="mb-3 col-md-6">
                    <label for="nokontrak" class="form-label">No Kontrak</label>
                    <input
                        type="text"
                        class="form-control"
                        id="nokontrak"
                        v-model="form.nokontrak"
                        required
                    />
                </div>
                <div class="mb-3 col-md-6">
                    <label for="tglkontrak" class="form-label"
                        >Tgl Kontrak</label
                    >
                    <input
                        type="date"
                        class="form-control"
                        id="tglkontrak"
                        v-model="form.tglkontrak"
                        required
                    />
                </div>
            </div>
            <div class="row">
                <div class="mb-3 col-md-6">
                    <label for="idstatuskontrak" class="form-label"
                        >Status Kontrak</label
                    >
                    <select
                        class="form-control"
                        id="idstatuskontrak"
                        v-model="form.idstatuskontrak"
                    >
                        <option value="" disabled selected>
                            Pilih Status Kontrak
                        </option>
                        <option
                            v-for="idstatuskontrak in statuskontraks"
                            :key="idstatuskontrak.id"
                            :value="idstatuskontrak.id"
                        >
                            {{ idstatuskontrak.statuskontrak }}
                        </option>
                    </select>
                </div>

                <div class="mb-3 col-md-6">
                    <label for="iddepartemen" class="form-label"
                        >Departemen</label
                    >
                    <select
                        class="form-control"
                        id="iddepartemen"
                        v-model="form.iddepartemen"
                        required
                    >
                        <option value="" disabled selected>
                            Pilih Departemen
                        </option>
                        <option
                            v-for="iddepartemen in departemens"
                            :key="iddepartemen.id"
                            :value="iddepartemen.id"
                        >
                            {{ iddepartemen.namadepartemen }}
                        </option>
                    </select>
                </div>
            </div>
            <div class="row">
                <div class="mb-3 col-md-6">
                    <label for="idleveljabatan" class="form-label"
                        >Jabatan</label
                    >
                    <select
                        class="form-control"
                        id="idleveljabatan"
                        v-model="form.idleveljabatan"
                        required
                    >
                        <option value="" disabled selected>
                            Pilih Jabatan
                        </option>
                        <option
                            v-for="idleveljabatan in leveljabatans"
                            :key="idleveljabatan.id"
                            :value="idleveljabatan.id"
                        >
                            {{ idleveljabatan.namalevel }}
                        </option>
                    </select>
                </div>

                <div class="mb-3 col-md-6">
                    <label for="awalkontrak" class="form-label"
                        >Awal Kontrak</label
                    >
                    <input
                        type="date"
                        class="form-control"
                        id="awalkontrak"
                        v-model="form.awalkontrak"
                        required
                    />
                </div>
            </div>
            <div class="row">
                <div class="mb-3 col-md-6">
                    <label for="akhirkontrak" class="form-label"
                        >Akhir Kontrak</label
                    >
                    <input
                        type="date"
                        class="form-control"
                        id="akhirkontrak"
                        v-model="form.akhirkontrak"
                        required
                    />
                </div>

                <div class="mb-3 col-md-6">
                    <label for="idkodeunit" class="form-label">Kode Unit</label>
                    <select
                        class="form-control"
                        id="idkodeunit"
                        v-model="form.idkodeunit"
                        required
                    >
                        <option value="" disabled selected>
                            Pilih Kode Unit
                        </option>
                        <option
                            v-for="idkodeunit in idkodeunits"
                            :key="idkodeunit.id"
                            :value="idkodeunit.id"
                        >
                            {{ idkodeunit.unit }}
                        </option>
                    </select>
                </div>
            </div>
            <div class="button-container">
                <button
                    type="submit"
                    class="btn btn-primary"
                >
                    Submit
                </button>
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
                ktp: "",
                namalengkap: "",
                gelardepan: "",
                gelarbelakang: "",
                idjeniskelamin: "",
                idpendidikan: "",
                idagama: "",
                namajalan_ktp: "",
                kelurahan_ktp: "",
                kecamatan_ktp: "",
                namajalan_domisili: "",
                kelurahan_domisili: "",
                kecamatan_domisili: "",
                nokontrak: "",
                tglkontrak: "",
                idstatuskontrak: "",
                iddepartemen: "",
                idleveljabatan: "",
                awalkontrak: "",
                akhirkontrak: "",
                idkodeunit: "",
            },
            jeniskelamins: [],
            pendidikans: [],
            agamas: [],
            statuskontraks: [],
            departemens: [],
            leveljabatans: [],
            idkodeunits: [],
            csrf: document
                .querySelector('meta[name="csrf-token"]')
                .getAttribute("content"),
        };
    },
    methods: {
        async fetchJeniskelamins() {
            try {
                const response = await axios.get(
                    "/kontrakpegawai/getalljeniskelamin"
                );
                this.jeniskelamins = response.data;
            } catch (error) {
                console.error("Error fetching data:", error);
            }
        },

        async fetchPendidikans() {
            try {
                const response = await axios.get(
                    "/kontrakpegawai/getallpendidikan"
                );
                this.pendidikans = response.data;
            } catch (error) {
                console.error("Error fetching data:", error);
            }
        },

        async fetchAgamas() {
            try {
                const response = await axios.get("/kontrakpegawai/getallagama");
                this.agamas = response.data;
            } catch (error) {
                console.error("Error fetching data:", error);
            }
        },

        async fetchStatusKontraks() {
            try {
                const response = await axios.get(
                    "/kontrakpegawai/getallstatuskontrak"
                );
                this.statuskontraks = response.data;
            } catch (error) {
                console.error("Error fetching data:", error);
            }
        },

        async fetchDepartemens() {
            try {
                const response = await axios.get(
                    "/kontrakpegawai/getalldepartemen"
                );
                this.departemens = response.data;
            } catch (error) {
                console.error("Error fetching data:", error);
            }
        },

        async fetchLeveljabatans() {
            try {
                const response = await axios.get(
                    "/kontrakpegawai/getalljabatan"
                );
                this.leveljabatans = response.data;
            } catch (error) {
                console.error("Error fetching data:", error);
            }
        },
        async fetchKodeUnits() {
            try {
                const response = await axios.get(
                    "/kontrakpegawai/getallkodeunit"
                );
                this.idkodeunits = response.data;
            } catch (error) {
                console.error("Error fetching data:", error);
            }
        },
        async submitForm() {
            try {
                await axios.post(
                    "/kontrakpegawai/simpankontrakpegawai",
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
                alert("Gagal menambahkan data.");
            }
        },
        resetForm() {
            this.form = {
                ktp: "",
                namalengkap: "",
                gelardepan: "",
                gelarbelakang: "",
                idjeniskelamin: "",
                idpendidikan: "",
                idagama: "",
                namajalan_ktp: "",
                kelurahan_ktp: "",
                kecamatan_ktp: "",
                namajalan_domisili: "",
                kelurahan_domisili: "",
                kecamatan_domisili: "",
                nokontrak: "",
                tglkontrak: "",
                idstatuskontrak: "",
                iddepartemen: "",
                idleveljabatan: "",
                awalkontrak: "",
                akhirkontrak: "",
                idkodeunit: "",
            };
        },
    },

    created() {
        this.fetchJeniskelamins();
        this.fetchPendidikans();
        this.fetchAgamas();
        this.fetchStatusKontraks();
        this.fetchDepartemens();
        this.fetchLeveljabatans();
        this.fetchKodeUnits();
    },
};
</script>

<style>
.container {
    max-width: 800px;
    margin: auto;
    padding: 20px;
}

.row {
    display: flex;
    flex-wrap: wrap;
}

.mb-3 {
    margin-bottom: 1rem;
}

.col-md-6,
.col-md-12 {
    padding: 0 15px;
}

.col-md-6 {
    width: 50%;
}

.col-md-12 {
    width: 100%;
}

select.form-control {
    appearance: none;
    -webkit-appearance: none;
    -moz-appearance: none;
    background: url('data:image/svg+xml;charset=US-ASCII,<svg xmlns="http://www.w3.org/2000/svg" width="4" height="5" viewBox="0 0 4 5"><path fill="%23007bff" d="M2 5L0 0h4L2 5z"/></svg>')
        no-repeat right 10px center;
    background-size: 10px 10px;
    padding-right: 30px;
}

.button-container {
    display: flex;
    justify-content: center;
    align-items: center;
    gap: 10px;
}

.btn-custom {
    width: 100px;
    height: 40px;
    font-size: 12px;
    display: flex;
    justify-content: center;
    align-items: center;
}
</style>
