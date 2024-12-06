<template>
    <b-container>
        <b-row>
                <b-card no-body  style="border: none">
                    <b-tabs pills card>
                        <b-tab title="Data Diri" active>
                            <form @submit.prevent="submitForm">
                                <div class="row">
                                    <h5>Data Diri</h5>
                                    <hr />

                                    <div class="mb-2 col-md-4">
                                        <label for="nip" class="form-label"
                                            >NIP</label
                                        >
                                        <input
                                            type="text"
                                            class="form-control"
                                            id="nip"
                                            v-model="form.nip"
                                            required
                                        />
                                    </div>
                                    <div class="mb-2 col-md-4">
                                        <label
                                            for="noidentitas"
                                            class="form-label"
                                            >No. Identitas (KTP)</label
                                        >
                                        <input
                                            type="text"
                                            class="form-control"
                                            id="noidentitas"
                                            v-model="form.noidentitas"
                                            required
                                        />
                                    </div>
                                    <div class="mb-2 col-md-4">
                                        <label for="npwp" class="form-label"
                                            >NPWP</label
                                        >
                                        <input
                                            type="text"
                                            class="form-control"
                                            id="npwp"
                                            v-model="form.npwp"
                                            required
                                        />
                                    </div>
                                    <div class="mb-2 col-md-6">
                                        <label
                                            for="gelardepan"
                                            class="form-label"
                                            >Gelar Depan</label
                                        >
                                        <input
                                            type="text"
                                            class="form-control"
                                            id="gelardepan"
                                            v-model="form.gelardepan"
                                            required
                                        />
                                    </div>
                                    <div class="mb-2 col-md-6">
                                        <label
                                            for="gelarbelakang"
                                            class="form-label"
                                            >Gelar Belakang</label
                                        >
                                        <input
                                            type="text"
                                            class="form-control"
                                            id="gelarbelakang"
                                            v-model="form.gelarbelakang"
                                            required
                                        />
                                    </div>
                                    <div class="mb-3 col-md-12">
                                        <label
                                            for="namalengkap"
                                            class="form-label"
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
                                    <div class="mb-3 col-md-4">
                                        <label
                                            for="idjeniskelamin"
                                            class="form-label"
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
                                                {{
                                                    idjeniskelamin.jeniskelamin
                                                }}
                                            </option>
                                        </select>
                                    </div>
                                    <div class="mb-3 col-md-4">
                                        <label
                                            for="iddaftarjenispendidikan"
                                            class="form-label"
                                            >Pendidikan Terakhir</label
                                        >
                                        <select
                                            class="form-control"
                                            id="iddaftarjenispendidikan"
                                            v-model="
                                                form.iddaftarjenispendidikan
                                            "
                                        >
                                            <option value="" disabled selected>
                                                Pilih Pendidikan
                                            </option>
                                            <option
                                                v-for="iddaftarjenispendidikan in pendidikans"
                                                :key="
                                                    iddaftarjenispendidikan.id
                                                "
                                                :value="
                                                    iddaftarjenispendidikan.id
                                                "
                                            >
                                                {{
                                                    iddaftarjenispendidikan.pendidikan
                                                }}
                                            </option>
                                        </select>
                                    </div>
                                    <div class="mb-3 col-md-4">
                                        <label
                                            for="idstatuskontrak"
                                            class="form-label"
                                            >Status Kepegawaian</label
                                        >
                                        <select
                                            class="form-control"
                                            id="idstatuskontrak"
                                            v-model="form.idstatuskontrak"
                                        >
                                            <option value="" disabled selected>
                                                Pilih Status Kepegawaian
                                            </option>
                                            <option
                                                v-for="idstatuskontrak in statuspegawais"
                                                :key="idstatuskontrak.id"
                                                :value="idstatuskontrak.id"
                                            >
                                                {{
                                                    idstatuskontrak.statuskontrak
                                                }}
                                            </option>
                                        </select>
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <label for="idunit" class="form-label"
                                            >Unit Pegawai</label
                                        >
                                        <select
                                            class="form-control"
                                            id="idunit"
                                            v-model="form.idunit"
                                        >
                                            <option value="" disabled selected>
                                                Pilih Unit
                                            </option>
                                            <option
                                                v-for="idunit in units"
                                                :key="idunit.id"
                                                :value="idunit.id"
                                            >
                                                {{ idunit.unit }}
                                            </option>
                                        </select>
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <label
                                            for="iddepartment"
                                            class="form-label"
                                            >Departemen</label
                                        >
                                        <select
                                            class="form-control"
                                            id="iddepartment"
                                            v-model="form.iddepartment"
                                        >
                                            <option value="" disabled selected>
                                                Pilih Departemen
                                            </option>
                                            <option
                                                v-for="iddepartment in departemens"
                                                :key="iddepartment.id"
                                                :value="iddepartment.id"
                                            >
                                                {{
                                                    iddepartment.namadepartemen
                                                }}
                                            </option>
                                        </select>
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <label
                                            for="idjabatan"
                                            class="form-label"
                                            >Jabatan</label
                                        >
                                        <select
                                            class="form-control"
                                            id="idjabatan"
                                            v-model="form.idjabatan"
                                        >
                                            <option value="" disabled selected>
                                                Pilih Jabatan
                                            </option>
                                            <option
                                                v-for="idjabatan in jabatans"
                                                :key="idjabatan.id"
                                                :value="idjabatan.id"
                                            >
                                                {{ idjabatan.namalevel }}
                                            </option>
                                        </select>
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <label
                                            for="idinchargejabatan"
                                            class="form-label"
                                            >Incharge Jabatan</label
                                        >
                                        <select
                                            class="form-control"
                                            id="idinchargejabatan"
                                            v-model="form.idinchargejabatan"
                                        >
                                            <option value="" disabled selected>
                                                Pilih Incharge Jabatan
                                            </option>
                                            <option
                                                v-for="idinchargejabatan in incharges"
                                                :key="idinchargejabatan.id"
                                                :value="idinchargejabatan.id"
                                            >
                                                {{
                                                    idinchargejabatan.inchargejabatan
                                                }}
                                            </option>
                                        </select>
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <label
                                            for="tglmasukkerja"
                                            class="form-label"
                                            >Tanggal Masuk Kerja</label
                                        >
                                        <input
                                            type="date"
                                            class="form-control"
                                            id="tglmasukkerja"
                                            v-model="form.tglmasukkerja"
                                            required
                                        />
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <label
                                            for="tglkontrak"
                                            class="form-label"
                                            >Tanggal Kontrak</label
                                        >
                                        <input
                                            type="date"
                                            class="form-control"
                                            id="tglkontrak"
                                            v-model="form.tglkontrak"
                                            required
                                        />
                                    </div>
                                    <div class="mb-3 col-md-4">
                                        <label for="idstatus" class="form-label"
                                            >Status</label
                                        >
                                        <select
                                            class="form-control"
                                            id="idstatus"
                                            v-model="form.idstatus"
                                        >
                                            <option value="" disabled selected>
                                                Pilih Status
                                            </option>
                                            <option
                                                v-for="idstatus in statuss"
                                                :key="idstatus.id"
                                                :value="idstatus.id"
                                            >
                                                {{ idstatus.status }}
                                            </option>
                                        </select>
                                    </div>
                                    <div class="mb-3 col-md-4">
                                        <label
                                            for="tempatlahir"
                                            class="form-label"
                                            >Tempat Lahir</label
                                        >
                                        <input
                                            type="text"
                                            class="form-control"
                                            id="tempatlahir"
                                            v-model="form.tempatlahir"
                                            required
                                        />
                                    </div>
                                    <div class="mb-3 col-md-4">
                                        <label
                                            for="tanggallahir"
                                            class="form-label"
                                            >Tanggal Lahir</label
                                        >
                                        <input
                                            type="date"
                                            class="form-control"
                                            id="tanggallahir"
                                            v-model="form.tanggallahir"
                                            required
                                        />
                                    </div>
                                    <div class="mb-3 col-md-4">
                                        <label
                                            for="idgoldarah"
                                            class="form-label"
                                            >Gol Darah</label
                                        >
                                        <select
                                            class="form-control"
                                            id="idgoldarah"
                                            v-model="form.idgoldarah"
                                        >
                                            <option value="" disabled selected>
                                                Pilih Gol Darah
                                            </option>
                                            <option
                                                v-for="idgoldarah in goldarahs"
                                                :key="idgoldarah.id"
                                                :value="idgoldarah.id"
                                            >
                                                {{ idgoldarah.goldarah }}
                                            </option>
                                        </select>
                                    </div>
                                    <div class="mb-3 col-md-4">
                                        <label for="idagama" class="form-label"
                                            >Agama</label
                                        >
                                        <select
                                            class="form-control"
                                            id="idagama"
                                            v-model="form.idagama"
                                        >
                                            <option value="" disabled selected>
                                                Pilih Agama
                                            </option>
                                            <option
                                                v-for="idagama in agamas"
                                                :key="idagama.id"
                                                :value="idagama.id"
                                            >
                                                {{ idagama.agama }}
                                            </option>
                                        </select>
                                    </div>
                                    <div class="mb-3 col-md-4">
                                        <label
                                            for="idkewarganegaraan"
                                            class="form-label"
                                            >Kewarganegaraan</label
                                        >
                                        <select
                                            class="form-control"
                                            id="idkewarganegaraan"
                                            v-model="form.idkewarganegaraan"
                                        >
                                            <option value="" disabled selected>
                                                Pilih Kewarganegaraan
                                            </option>
                                            <option
                                                v-for="idkewarganegaraan in negaras"
                                                :key="idkewarganegaraan.id"
                                                :value="idkewarganegaraan.id"
                                            >
                                                {{
                                                    idkewarganegaraan.kewarganegaraan
                                                }}
                                            </option>
                                        </select>
                                    </div>

                                    <h5>Alamat Sesuai Kartu Identitas (KTP)</h5>
                                    <hr />

                                    <div class="mb-3 col-md-4">
                                        <label
                                            for="namajalan_ktp"
                                            class="form-label"
                                            >Nama Jalan</label
                                        >
                                        <input
                                            type="text"
                                            class="form-control"
                                            id="namajalan_ktp"
                                            v-model="form.namajalan_ktp"
                                            required
                                        />
                                    </div>
                                    <div class="mb-3 col-md-4">
                                        <label
                                            for="kelurahan_ktp"
                                            class="form-label"
                                            >Kelurahan</label
                                        >
                                        <input
                                            type="text"
                                            class="form-control"
                                            id="kelurahan_ktp"
                                            v-model="form.kelurahan_ktp"
                                            required
                                        />
                                    </div>
                                    <div class="mb-3 col-md-4">
                                        <label
                                            for="kecamatan_ktp"
                                            class="form-label"
                                            >Kecamatan</label
                                        >
                                        <input
                                            type="text"
                                            class="form-control"
                                            id="kecamatan_ktp"
                                            v-model="form.kecamatan_ktp"
                                            required
                                        />
                                    </div>
                                    <div class="mb-3 col-md-4">
                                        <label
                                            for="kodepos_ktp"
                                            class="form-label"
                                            >Kode Pos</label
                                        >
                                        <input
                                            type="text"
                                            class="form-control"
                                            id="kodepos_ktp"
                                            v-model="form.kodepos_ktp"
                                            required
                                        />
                                    </div>
                                    <div class="mb-3 col-md-4">
                                        <label
                                            for="provinsi_ktp"
                                            class="form-label"
                                            >Provinsi</label
                                        >
                                        <input
                                            type="text"
                                            class="form-control"
                                            id="provinsi_ktp"
                                            v-model="form.provinsi_ktp"
                                            required
                                        />
                                    </div>

                                    <h5>Alamat Domisili</h5>
                                    <hr />

                                    <div class="mb-3 col-md-4">
                                        <label
                                            for="namajalan_domisili"
                                            class="form-label"
                                            >Nama Jalan</label
                                        >
                                        <input
                                            type="text"
                                            class="form-control"
                                            id="namajalan_domisili"
                                            v-model="form.namajalan_domisili"
                                            required
                                        />
                                    </div>
                                    <div class="mb-3 col-md-4">
                                        <label
                                            for="kelurahan_domisili"
                                            class="form-label"
                                            >Kelurahan</label
                                        >
                                        <input
                                            type="text"
                                            class="form-control"
                                            id="kelurahan_domisili"
                                            v-model="form.kelurahan_domisili"
                                            required
                                        />
                                    </div>
                                    <div class="mb-3 col-md-4">
                                        <label
                                            for="kecamatan_domisili"
                                            class="form-label"
                                            >Kecamatan</label
                                        >
                                        <input
                                            type="text"
                                            class="form-control"
                                            id="kecamatan_domisili"
                                            v-model="form.kecamatan_domisili"
                                            required
                                        />
                                    </div>
                                    <div class="mb-3 col-md-4">
                                        <label
                                            for="kodepos_domisili"
                                            class="form-label"
                                            >Kode Pos</label
                                        >
                                        <input
                                            type="text"
                                            class="form-control"
                                            id="kodepos_domisili"
                                            v-model="form.kodepos_domisili"
                                            required
                                        />
                                    </div>
                                    <div class="mb-3 col-md-4">
                                        <label
                                            for="provinsi_domisili"
                                            class="form-label"
                                            >Provinsi</label
                                        >
                                        <input
                                            type="text"
                                            class="form-control"
                                            id="provinsi_domisili"
                                            v-model="form.provinsi_domisili"
                                            required
                                        />
                                    </div>

                                    <h5>Kontak</h5>
                                    <hr />

                                    <div class="mb-3 col-md-4">
                                        <label
                                            for="telprumah"
                                            class="form-label"
                                            >Telp. Rumah</label
                                        >
                                        <input
                                            type="text"
                                            class="form-control"
                                            id="telprumah"
                                            v-model="form.telprumah"
                                            required
                                        />
                                    </div>
                                    <div class="mb-3 col-md-4">
                                        <label
                                            for="handphone1"
                                            class="form-label"
                                            >Handphone 1</label
                                        >
                                        <input
                                            type="text"
                                            class="form-control"
                                            id="handphone1"
                                            v-model="form.handphone1"
                                            required
                                        />
                                    </div>
                                    <div class="mb-3 col-md-4">
                                        <label
                                            for="handphone2"
                                            class="form-label"
                                            >Handphone 2</label
                                        >
                                        <input
                                            type="text"
                                            class="form-control"
                                            id="handphone2"
                                            v-model="form.handphone2"
                                            required
                                        />
                                    </div>
                                    <div class="mb-3 col-md-4">
                                        <label for="linkedin" class="form-label"
                                            >LinkedIn</label
                                        >
                                        <input
                                            type="text"
                                            class="form-control"
                                            id="linkedin"
                                            v-model="form.linkedin"
                                            required
                                        />
                                    </div>
                                    <div class="mb-3 col-md-4">
                                        <label
                                            for="emailpribadi"
                                            class="form-label"
                                            >Email Pribadi</label
                                        >
                                        <input
                                            type="text"
                                            class="form-control"
                                            id="emailpribadi"
                                            v-model="form.emailpribadi"
                                            required
                                        />
                                    </div>
                                    <div class="mb-3 col-md-4">
                                        <label
                                            for="emailkantor"
                                            class="form-label"
                                            >Email Kantor</label
                                        >
                                        <input
                                            type="text"
                                            class="form-control"
                                            id="emailkantor"
                                            v-model="form.emailkantor"
                                            required
                                        />
                                    </div>

                                    <h5>Ciri - ciri Fisik</h5>
                                    <hr />

                                    <div class="mb-3 col-md-4">
                                        <label
                                            for="idwarnakulit"
                                            class="form-label"
                                            >Warna Kulit</label
                                        >
                                        <select
                                            class="form-control"
                                            id="idwarnakulit"
                                            v-model="form.idwarnakulit"
                                        >
                                            <option value="" disabled selected>
                                                Pilih Warna Kulit
                                            </option>
                                            <option
                                                v-for="idwarnakulit in warnakulits"
                                                :key="idwarnakulit.id"
                                                :value="idwarnakulit.id"
                                            >
                                                {{ idwarnakulit.warnakulit }}
                                            </option>
                                        </select>
                                    </div>
                                    <div class="mb-3 col-md-4">
                                        <label
                                            for="idbentukmuka"
                                            class="form-label"
                                            >Bentuk Muka</label
                                        >
                                        <select
                                            class="form-control"
                                            id="idbentukmuka"
                                            v-model="form.idbentukmuka"
                                        >
                                            <option value="" disabled selected>
                                                Pilih Bentuk Muka
                                            </option>
                                            <option
                                                v-for="idbentukmuka in bentukmukas"
                                                :key="idbentukmuka.id"
                                                :value="idbentukmuka.id"
                                            >
                                                {{ idbentukmuka.bentukmuka }}
                                            </option>
                                        </select>
                                    </div>
                                    <div class="mb-3 col-md-4">
                                        <label
                                            for="idjenisrambut"
                                            class="form-label"
                                            >Jenis Rambut</label
                                        >
                                        <select
                                            class="form-control"
                                            id="idjenisrambut"
                                            v-model="form.idjenisrambut"
                                        >
                                            <option value="" disabled selected>
                                                Pilih Jenis Rambut
                                            </option>
                                            <option
                                                v-for="idjenisrambut in jenisrambuts"
                                                :key="idjenisrambut.id"
                                                :value="idjenisrambut.id"
                                            >
                                                {{ idjenisrambut.jenisrambut }}
                                            </option>
                                        </select>
                                    </div>
                                    <div class="mb-3 col-md-4">
                                        <label
                                            for="tinggibadan"
                                            class="form-label"
                                            >Tinggi Badan</label
                                        >
                                        <b-input-group class="mt-0">
                                            <template #append>
                                                <b-input-group-text
                                                    >Cm</b-input-group-text
                                                >
                                            </template>
                                            <b-form-input
                                                id="tinggibadan"
                                                v-model="form.tinggibadan"
                                            ></b-form-input>
                                        </b-input-group>
                                    </div>
                                    <div class="mb-3 col-md-4">
                                        <label
                                            for="beratbadan"
                                            class="form-label"
                                            >Berat Badan</label
                                        >
                                        <b-input-group class="mt-0">
                                            <template #append>
                                                <b-input-group-text
                                                    >Kg</b-input-group-text
                                                >
                                            </template>
                                            <b-form-input
                                                id="beratbadan"
                                                v-model="form.beratbadan"
                                            ></b-form-input>
                                        </b-input-group>
                                    </div>

                                    <h5>Lainnya</h5>
                                    <br />
                                    <br />
                                    <hr />
                                    <h5>Ukuran Baju Pria</h5>

                                    <div class="mb-3 col-md-4">
                                        <label
                                            for="idpria_kerja"
                                            class="form-label"
                                            >Kerja</label
                                        >
                                        <select
                                            class="form-control"
                                            id="idpria_kerja"
                                            v-model="form.idpria_kerja"
                                        >
                                            <option value="" disabled selected>
                                                Pilih Ukuran
                                            </option>
                                            <option
                                                v-for="idpria_kerja in ukuranbajupria_kerjas"
                                                :key="idpria_kerja.id"
                                                :value="idpria_kerja.id"
                                            >
                                                {{ idpria_kerja.ukuran }}
                                            </option>
                                        </select>
                                    </div>
                                    <div class="mb-3 col-md-4">
                                        <label
                                            for="idpria_olahraga"
                                            class="form-label"
                                            >Olahraga</label
                                        >
                                        <select
                                            class="form-control"
                                            id="idpria_olahraga"
                                            v-model="form.idpria_olahraga"
                                        >
                                            <option value="" disabled selected>
                                                Pilih Ukuran
                                            </option>
                                            <option
                                                v-for="idpria_olahraga in ukuranbajupria_olahragas"
                                                :key="idpria_olahraga.id"
                                                :value="idpria_olahraga.id"
                                            >
                                                {{ idpria_olahraga.ukuran }}
                                            </option>
                                        </select>
                                    </div>
                                    <div class="mb-3 col-md-4">
                                        <label
                                            for="idpria_celana"
                                            class="form-label"
                                            >Celana</label
                                        >
                                        <select
                                            class="form-control"
                                            id="idpria_celana"
                                            v-model="form.idpria_celana"
                                        >
                                            <option value="" disabled selected>
                                                Pilih Ukuran
                                            </option>
                                            <option
                                                v-for="idpria_celana in ukuranbajupria_celanas"
                                                :key="idpria_celana.id"
                                                :value="idpria_celana.id"
                                            >
                                                {{ idpria_celana.ukuran }}
                                            </option>
                                        </select>
                                    </div>

                                    <hr />
                                    <h5>Ukuran Baju Wanita</h5>

                                    <div class="mb-3 col-md-4">
                                        <label
                                            for="idwanita_blazer"
                                            class="form-label"
                                            >Blazer</label
                                        >
                                        <select
                                            class="form-control"
                                            id="idwanita_blazer"
                                            v-model="form.idwanita_blazer"
                                        >
                                            <option value="" disabled selected>
                                                Pilih Ukuran
                                            </option>
                                            <option
                                                v-for="idwanita_blazer in ukuranbajuwanita_blazers"
                                                :key="idwanita_blazer.id"
                                                :value="idwanita_blazer.id"
                                            >
                                                {{ idwanita_blazer.ukuran }}
                                            </option>
                                        </select>
                                    </div>
                                    <div class="mb-3 col-md-4">
                                        <label
                                            for="idwanita_blouse"
                                            class="form-label"
                                            >Blouse</label
                                        >
                                        <select
                                            class="form-control"
                                            id="idwanita_blouse"
                                            v-model="form.idwanita_blouse"
                                        >
                                            <option value="" disabled selected>
                                                Pilih Ukuran
                                            </option>
                                            <option
                                                v-for="idwanita_blouse in ukuranbajuwanita_blouses"
                                                :key="idwanita_blouse.id"
                                                :value="idwanita_blouse.id"
                                            >
                                                {{ idwanita_blouse.ukuran }}
                                            </option>
                                        </select>
                                    </div>
                                    <div class="mb-3 col-md-4">
                                        <label
                                            for="idwanita_rok"
                                            class="form-label"
                                            >Rok</label
                                        >
                                        <select
                                            class="form-control"
                                            id="idwanita_rok"
                                            v-model="form.idwanita_rok"
                                        >
                                            <option value="" disabled selected>
                                                Pilih Ukuran
                                            </option>
                                            <option
                                                v-for="idwanita_rok in ukuranbajuwanita_roks"
                                                :key="idwanita_rok.id"
                                                :value="idwanita_rok.id"
                                            >
                                                {{ idwanita_rok.ukuran }}
                                            </option>
                                        </select>
                                    </div>
                                    <div class="mb-3 col-md-4">
                                        <label
                                            for="idukuransepatu"
                                            class="form-label"
                                            >Ukuran Sepatu Pria/Wanita</label
                                        >
                                        <select
                                            class="form-control"
                                            id="idukuransepatu"
                                            v-model="form.idukuransepatu"
                                        >
                                            <option value="" disabled selected>
                                                Pilih Ukuran
                                            </option>
                                            <option
                                                v-for="idukuransepatu in ukuransepatus"
                                                :key="idukuransepatu.id"
                                                :value="idukuransepatu.id"
                                            >
                                                {{
                                                    idukuransepatu.ukuransepatu
                                                }}
                                            </option>
                                        </select>
                                    </div>
                                    <div class="mb-3 col-md-4">
                                        <label
                                            for="norekeningmandiri"
                                            class="form-label"
                                            >No. Rekening Mandiri</label
                                        >
                                        <input
                                            type="text"
                                            class="form-control"
                                            id="norekeningmandiri"
                                            v-model="form.norekeningmandiri"
                                            required
                                        />
                                    </div>
                                    <div class="mb-3 col-md-4">
                                        <label
                                            for="atasnamamandiri"
                                            class="form-label"
                                            >Atas Nama</label
                                        >
                                        <input
                                            type="text"
                                            class="form-control"
                                            id="atasnamamandiri"
                                            v-model="form.atasnamamandiri"
                                            required
                                        />
                                    </div>
                                    <div class="mb-3 col-md-4">
                                        <label for="banklain" class="form-label"
                                            >Bank Lain</label
                                        >
                                        <select
                                            class="form-control"
                                            id="banklain"
                                            v-model="form.banklain"
                                        >
                                            <option value="" disabled selected>
                                                Pilih Bank
                                            </option>
                                            <option
                                                v-for="banklain in banklains"
                                                :key="banklain.id"
                                                :value="banklain.id"
                                            >
                                                {{ banklain.banklain }}
                                            </option>
                                        </select>
                                    </div>
                                    <div class="mb-3 col-md-4">
                                        <label
                                            for="norekeninglain"
                                            class="form-label"
                                            >No. Rekening</label
                                        >
                                        <input
                                            type="text"
                                            class="form-control"
                                            id="norekeninglain"
                                            v-model="form.norekeninglain"
                                            required
                                        />
                                    </div>
                                    <div class="mb-3 col-md-4">
                                        <label
                                            for="atasnamalain"
                                            class="form-label"
                                            >Atas Nama</label
                                        >
                                        <input
                                            type="text"
                                            class="form-control"
                                            id="atasnamalain"
                                            v-model="form.atasnamalain"
                                            required
                                        />
                                    </div>
                                    <hr />
                                </div>
                            </form>
                            <button
                                type="submit"
                                class="btn btn-primary"
                                @click="submitForm"
                            >
                                Submit
                            </button>
                        </b-tab>
                        <b-tab title="Orang Tua & Pasangan">
                            <b-card-text>
                                <form @submit.prevent="submitForm">
                                    <div class="row">
                                        <div class="mb-2 col-md-6">
                                            <label
                                                for="namaayah"
                                                class="form-label"
                                                >Nama Ayah</label
                                            >
                                            <input
                                                type="text"
                                                class="form-control"
                                                id="namaayah"
                                                v-model="form.namaayah"
                                                required
                                            />
                                        </div>
                                        <div class="mb-3 col-md-6">
                                            <label
                                                for="idpendidikanayah"
                                                class="form-label"
                                                >Pendidikan Ayah</label
                                            >
                                            <select
                                                class="form-control"
                                                id="idpendidikanayah"
                                                v-model="form.idpendidikanayah"
                                            >
                                                <option
                                                    value=""
                                                    disabled
                                                    selected
                                                >
                                                    Pilih Pendidikan
                                                </option>
                                                <option
                                                    v-for="idpendidikanayah in pendidikanayahs"
                                                    :key="idpendidikanayah.id"
                                                    :value="idpendidikanayah.id"
                                                >
                                                    {{
                                                        idpendidikanayah.pendidikan
                                                    }}
                                                </option>
                                            </select>
                                        </div>
                                        <div class="mb-3 col-md-6">
                                            <label
                                                for="pekerjaanayah"
                                                class="form-label"
                                                >Pekerjaan Ayah</label
                                            >
                                            <input
                                                type="text"
                                                class="form-control"
                                                id="pekerjaanayah"
                                                v-model="form.pekerjaanayah"
                                                required
                                            />
                                        </div>
                                        <div class="mb-3 col-md-6">
                                            <label
                                                for="namaibu"
                                                class="form-label"
                                                >Nama Ibu</label
                                            >
                                            <input
                                                type="text"
                                                class="form-control"
                                                id="namaibu"
                                                v-model="form.namaibu"
                                                required
                                            />
                                        </div>
                                        <div class="mb-3 col-md-6">
                                            <label
                                                for="idpendidikanibu"
                                                class="form-label"
                                                >Pendidikan Ibu</label
                                            >
                                            <select
                                                class="form-control"
                                                id="idpendidikanibu"
                                                v-model="form.idpendidikanibu"
                                            >
                                                <option
                                                    value=""
                                                    disabled
                                                    selected
                                                >
                                                    Pilih Pendidikan
                                                </option>
                                                <option
                                                    v-for="idpendidikanibu in pendidikanibus"
                                                    :key="idpendidikanibu.id"
                                                    :value="idpendidikanibu.id"
                                                >
                                                    {{
                                                        idpendidikanibu.pendidikan
                                                    }}
                                                </option>
                                            </select>
                                        </div>
                                        <div class="mb-3 col-md-6">
                                            <label
                                                for="pekerjaanibu"
                                                class="form-label"
                                                >Pekerjaan Ibu</label
                                            >
                                            <input
                                                type="text"
                                                class="form-control"
                                                id="pekerjaanibu"
                                                v-model="form.pekerjaanibu"
                                                required
                                            />
                                        </div>

                                        <h5>Data Suami / Istri</h5>
                                        <hr />

                                        <div class="mb-3 col-md-6">
                                            <label
                                                for="namapasangan"
                                                class="form-label"
                                                >Nama</label
                                            >
                                            <input
                                                type="text"
                                                class="form-control"
                                                id="namapasangan"
                                                v-model="form.namapasangan"
                                                required
                                            />
                                        </div>
                                        <div class="mb-3 col-md-6">
                                            <label
                                                for="idpendidikanpasangan"
                                                class="form-label"
                                                >Pendidikan</label
                                            >
                                            <select
                                                class="form-control"
                                                id="idpendidikanpasangan"
                                                v-model="
                                                    form.idpendidikanpasangan
                                                "
                                            >
                                                <option
                                                    value=""
                                                    disabled
                                                    selected
                                                >
                                                    Pilih Pendidikan
                                                </option>
                                                <option
                                                    v-for="idpendidikanpasangan in pendidikanpasangans"
                                                    :key="
                                                        idpendidikanpasangan.id
                                                    "
                                                    :value="
                                                        idpendidikanpasangan.id
                                                    "
                                                >
                                                    {{
                                                        idpendidikanpasangan.pendidikan
                                                    }}
                                                </option>
                                            </select>
                                        </div>
                                        <div class="mb-3 col-md-6">
                                            <label
                                                for="pekerjaanpasangan"
                                                class="form-label"
                                                >Pekerjaan</label
                                            >
                                            <input
                                                type="text"
                                                class="form-control"
                                                id="pekerjaanpasangan"
                                                v-model="form.pekerjaanpasangan"
                                                required
                                            />
                                        </div>
                                        <div class="mb-3 col-md-6">
                                            <label
                                                for="tempatlahirpasangan"
                                                class="form-label"
                                                >Tempat Lahir</label
                                            >
                                            <input
                                                type="text"
                                                class="form-control"
                                                id="tempatlahirpasangan"
                                                v-model="
                                                    form.tempatlahirpasangan
                                                "
                                                required
                                            />
                                        </div>
                                        <div class="mb-3 col-md-6">
                                            <label
                                                for="tgllahirpasangan"
                                                class="form-label"
                                                >Tanggal Lahir</label
                                            >
                                            <input
                                                type="date"
                                                class="form-control"
                                                id="tgllahirpasangan"
                                                v-model="form.tgllahirpasangan"
                                                required
                                            />
                                        </div>
                                        <div class="mb-3 col-md-6">
                                            <label
                                                for="idgoldarahpasangan"
                                                class="form-label"
                                                >Gol Darah</label
                                            >
                                            <select
                                                class="form-control"
                                                id="idgoldarahpasangan"
                                                v-model="
                                                    form.idgoldarahpasangan
                                                "
                                            >
                                                <option
                                                    value=""
                                                    disabled
                                                    selected
                                                >
                                                    Pilih Gol Darah
                                                </option>
                                                <option
                                                    v-for="idgoldarahpasangan in goldarahpasangans"
                                                    :key="idgoldarahpasangan.id"
                                                    :value="
                                                        idgoldarahpasangan.id
                                                    "
                                                >
                                                    {{
                                                        idgoldarahpasangan.goldarah
                                                    }}
                                                </option>
                                            </select>
                                        </div>
                                        <div class="mb-3 col-md-6">
                                            <label
                                                for="idagamapasangan"
                                                class="form-label"
                                                >Agama</label
                                            >
                                            <select
                                                class="form-control"
                                                id="idagamapasangan"
                                                v-model="form.idagamapasangan"
                                            >
                                                <option
                                                    value=""
                                                    disabled
                                                    selected
                                                >
                                                    Pilih Agama
                                                </option>
                                                <option
                                                    v-for="idagamapasangan in agamapasangans"
                                                    :key="idagamapasangan.id"
                                                    :value="idagamapasangan.id"
                                                >
                                                    {{ idagamapasangan.agama }}
                                                </option>
                                            </select>
                                        </div>
                                    </div>
                                </form>
                            </b-card-text>
                        </b-tab>

                        <b-tab title="Anak"
                            ><div>
                                <div
                                    v-if="showSuccessAlert"
                                    class="alert alert-primary alert-dismissible fade show"
                                    role="alert"
                                >
                                    <strong>{{ alertMessage }}</strong
                                    >.
                                    <button
                                        type="button"
                                        class="btn-close"
                                        data-bs-dismiss="alert"
                                        aria-label="Close"
                                    ></button>
                                </div>
                                <div class="mb-3 col-4">
                                    <input
                                        type="text"
                                        class="form-control"
                                        v-model="filter"
                                        placeholder="Cari data"
                                    />
                                </div>
                                <b-table
                                    bordered
                                    striped
                                    hover
                                    :items="filteredItems"
                                    :fields="anak"
                                    :per-page="perPage"
                                    :current-page="currentPage"
                                >
                                    <template v-slot:cell(no)="data">
                                        <div class="text-center">
                                            {{
                                                (currentPage - 1) * perPage +
                                                (data.index + 1)
                                            }}
                                        </div>
                                    </template>
                                    <template v-slot:cell(actions)="data">
                                        <div class="text-center">
                                            <a
                                                :href="`/daftardepartemen/editdaftardepartemen/${data.item.id}`"
                                                class="btn btn-primary btn-sm"
                                                >Update</a
                                            >
                                            <!-- <button class="btn btn-primary btn-sm" @click="deleteItem(data.item.id)">Delete</button> -->
                                        </div>
                                    </template>
                                </b-table>
                                <b-pagination
                                    v-model="currentPage"
                                    :total-rows="totalRows"
                                    :per-page="perPage"
                                    align="right"
                                ></b-pagination></div
                        ></b-tab>
                        <b-tab title="Pendidikan"
                            ><div>
                                <div
                                    v-if="showSuccessAlert"
                                    class="alert alert-primary alert-dismissible fade show"
                                    role="alert"
                                >
                                    <strong>{{ alertMessage }}</strong
                                    >.
                                    <button
                                        type="button"
                                        class="btn-close"
                                        data-bs-dismiss="alert"
                                        aria-label="Close"
                                    ></button>
                                </div>
                                <div class="mb-3 col-4">
                                    <input
                                        type="text"
                                        class="form-control"
                                        v-model="filter"
                                        placeholder="Cari data"
                                    />
                                </div>
                                <b-table
                                    bordered
                                    striped
                                    hover
                                    :items="filteredItems"
                                    :fields="pendidikan"
                                    :per-page="perPage"
                                    :current-page="currentPage"
                                >
                                    <template v-slot:cell(no)="data">
                                        <div class="text-center">
                                            {{
                                                (currentPage - 1) * perPage +
                                                (data.index + 1)
                                            }}
                                        </div>
                                    </template>
                                    <template v-slot:cell(actions)="data">
                                        <div class="text-center">
                                            <a
                                                :href="`/daftardepartemen/editdaftardepartemen/${data.item.id}`"
                                                class="btn btn-primary btn-sm"
                                                >Update</a
                                            >
                                            <!-- <button class="btn btn-primary btn-sm" @click="deleteItem(data.item.id)">Delete</button> -->
                                        </div>
                                    </template>
                                </b-table>
                                <b-pagination
                                    v-model="currentPage"
                                    :total-rows="totalRows"
                                    :per-page="perPage"
                                    align="right"
                                ></b-pagination></div
                        ></b-tab>
                        <b-tab title="Riwayat Pekerjaan External">
                            <div>
                                <div
                                    v-if="showSuccessAlert"
                                    class="alert alert-primary alert-dismissible fade show"
                                    role="alert"
                                >
                                    <strong>{{ alertMessage }}</strong
                                    >.
                                    <button
                                        type="button"
                                        class="btn-close"
                                        data-bs-dismiss="alert"
                                        aria-label="Close"
                                    ></button>
                                </div>
                                <div class="mb-3 col-4">
                                    <input
                                        type="text"
                                        class="form-control"
                                        v-model="filter"
                                        placeholder="Cari data"
                                    />
                                </div>
                                <b-table
                                    bordered
                                    striped
                                    hover
                                    :items="filteredItems"
                                    :fields="external"
                                    :per-page="perPage"
                                    :current-page="currentPage"
                                >
                                    <template v-slot:cell(no)="data">
                                        <div class="text-center">
                                            {{
                                                (currentPage - 1) * perPage +
                                                (data.index + 1)
                                            }}
                                        </div>
                                    </template>
                                    <template v-slot:cell(actions)="data">
                                        <div class="text-center">
                                            <a
                                                :href="`/daftarjenispendidikan/editdaftarjenispendidikan/${data.item.id}`"
                                                class="btn btn-primary btn-sm"
                                                >Update</a
                                            >
                                            <!-- <button class="btn btn-primary btn-sm" @click="deleteItem(data.item.id)">Delete</button> -->
                                        </div>
                                    </template>
                                </b-table>
                                <b-pagination
                                    v-model="currentPage"
                                    :total-rows="totalRows"
                                    :per-page="perPage"
                                    align="right"
                                ></b-pagination>
                            </div>
                        </b-tab>
                        <b-tab title="Riwayat Pekerjaan Internal"
                            ><div>
                                <div
                                    v-if="showSuccessAlert"
                                    class="alert alert-primary alert-dismissible fade show"
                                    role="alert"
                                >
                                    <strong>{{ alertMessage }}</strong
                                    >.
                                    <button
                                        type="button"
                                        class="btn-close"
                                        data-bs-dismiss="alert"
                                        aria-label="Close"
                                    ></button>
                                </div>
                                <div class="mb-3 col-4">
                                    <input
                                        type="text"
                                        class="form-control"
                                        v-model="filter"
                                        placeholder="Cari data"
                                    />
                                </div>
                                <b-table
                                    bordered
                                    striped
                                    hover
                                    :items="filteredItems"
                                    :fields="internal"
                                    :per-page="perPage"
                                    :current-page="currentPage"
                                >
                                    <template v-slot:cell(no)="data">
                                        <div class="text-center">
                                            {{
                                                (currentPage - 1) * perPage +
                                                (data.index + 1)
                                            }}
                                        </div>
                                    </template>
                                    <template v-slot:cell(actions)="data">
                                        <div class="text-center">
                                            <a
                                                :href="`/daftarjenispendidikan/editdaftarjenispendidikan/${data.item.id}`"
                                                class="btn btn-primary btn-sm"
                                                >Update</a
                                            >
                                            <!-- <button class="btn btn-primary btn-sm" @click="deleteItem(data.item.id)">Delete</button> -->
                                        </div>
                                    </template>
                                </b-table>
                                <b-pagination
                                    v-model="currentPage"
                                    :total-rows="totalRows"
                                    :per-page="perPage"
                                    align="right"
                                ></b-pagination></div
                        ></b-tab>
                    </b-tabs>
                </b-card>
        </b-row>
    </b-container>
</template>

<script>
import { BCard, BTabs, BTab, BCardText } from "bootstrap-vue";
import { BTable, BPagination } from "bootstrap-vue";
import { BInputGroup, BFormInput, BInputGroupText } from "bootstrap-vue";
import axios from "axios";

export default {
    components: {
        BCard,
        BTabs,
        BTab,
        BCardText,
        BTable,
        BPagination,
        BInputGroup,
        BFormInput,
        BInputGroupText,
    },
    data() {
        return {
            form: {
                nip: "",
                noidentitas: "",
                npwp: "",
                gelardepan: "",
                gelarbelakang: "",
                namalengkap: "",
                idjeniskelamin: "",
                iddaftarjenispendidikan: "",
                idstatuskontrak: "",
                idunit: "",
                iddepartment: "",
                idjabatan: "",
                idinchargejabatan: "",
                tglmasukkerja: "",
                tglkontrak: "",
                idstatus: "",
                tempatlahir: "",
                tanggallahir: "",
                idgoldarah: "",
                idagama: "",
                idkewarganegaraan: "",
                namajalan_ktp: "",
                kelurahan_ktp: "",
                kecamatan_ktp: "",
                provinsi_ktp: "",
                kodepos_ktp: "",
                namajalan_domisili: "",
                kelurahan_domisili: "",
                kecamatan_domisili: "",
                provinsi_domisili: "",
                kodepos_domisili: "",
                telprumah: "",
                handphone1: "",
                handphone2: "",
                linkedin: "",
                emailpribadi: "",
                emailkantor: "",
                idwarnakulit: "",
                idbentukmuka: "",
                idjenisrambut: "",
                tinggibadan: "",
                beratbadan: "",
                idpria_kerja: "",
                idpria_olahraga: "",
                idpria_celana: "",
                idwanita_blazer: "",
                idwanita_blouse: "",
                idwanita_rok: "",
                idukuransepatu: "",
                norekeningmandiri: "",
                atasnamamandiri: "",
                banklain: "",
                norekeninglain: "",
                atasnamalain: "",
                namaayah: "",
                pekerjaanayah: "",
                idpendidikanayah: "",
                namaibu: "",
                pekerjaanibu: "",
                idpendidikanibu: "",
                namapasangan: "",
                pekerjaanpasangan: "",
                idpendidikanpasangan: "",
                tempatlahirpasangan: "",
                tgllahirpasangan: "",
                idgoldarahpasangan: "",
                idagamapasangan: "",
            },
            jeniskelamins: [],
            pendidikans: [],
            statuspegawais: [],
            units: [],
            departemens: [],
            jabatans: [],
            incharges: [],
            statuss: [],
            goldarahs: [],
            agamas: [],
            negaras: [],
            warnakulits: [],
            bentukmukas: [],
            jenisrambuts: [],
            ukuranbajupria_kerjas: [],
            ukuranbajupria_olahragas: [],
            ukuranbajupria_celanas: [],
            ukuransepatus: [],
            ukuranbajuwanita_blazers: [],
            ukuranbajuwanita_blouses: [],
            ukuranbajuwanita_roks: [],
            banklains: [],
            pendidikanayahs: [],
            pendidikanibus: [],
            pendidikanpasangans: [],
            goldarahpasangans: [],
            agamapasangans: [],
            csrf: document
                .querySelector('meta[name="csrf-token"]')
                .getAttribute("content"),
            anak: [
                {
                    key: "no",
                    label: "No",
                    thStyle: { "text-align": "center" },
                    tdClass: "text-center",
                },
                {
                    key: "nama",
                    label: "Nama",
                    thStyle: { "text-align": "center" },
                    tdClass: "text-center",
                },
                {
                    key: "lahir",
                    label: "Lahir",
                    thStyle: { "text-align": "center" },
                    tdClass: "text-center",
                },
                {
                    key: "jkelamin",
                    label: "J. Kelamin",
                    thStyle: { "text-align": "center" },
                    tdClass: "text-center",
                },
                {
                    key: "pendidikan",
                    label: "Pendidikan",
                    thStyle: { "text-align": "center" },
                    tdClass: "text-center",
                },
                {
                    key: "pekerjaan",
                    label: "Pekerjaan",
                    thStyle: { "text-align": "center" },
                    tdClass: "text-center",
                },
                {
                    key: "actions",
                    label: "Actions",
                    thStyle: { "text-align": "center" },
                    tdClass: "text-center",
                },
            ],
            pendidikan: [
                {
                    key: "no",
                    label: "No",
                    thStyle: { "text-align": "center" },
                    tdClass: "text-center",
                },
                {
                    key: "tingkat",
                    label: "Tingkat",
                    thStyle: { "text-align": "center" },
                    tdClass: "text-center",
                },
                {
                    key: "namalembaga",
                    label: "Nama Lembaga",
                    thStyle: { "text-align": "center" },
                    tdClass: "text-center",
                },
                {
                    key: "dari",
                    label: "Dari",
                    thStyle: { "text-align": "center" },
                    tdClass: "text-center",
                },
                {
                    key: "sampai",
                    label: "Sampai",
                    thStyle: { "text-align": "center" },
                    tdClass: "text-center",
                },
                {
                    key: "jurusan",
                    label: "Jurusan",
                    thStyle: { "text-align": "center" },
                    tdClass: "text-center",
                },
                {
                    key: "actions",
                    label: "Actions",
                    thStyle: { "text-align": "center" },
                    tdClass: "text-center",
                },
            ],
            external: [
                {
                    key: "no",
                    label: "No",
                    thStyle: { "text-align": "center" },
                    tdClass: "text-center",
                },
                {
                    key: "namaperusahaan",
                    label: "Nama Perusahaan",
                    thStyle: { "text-align": "center" },
                    tdClass: "text-center",
                },
                {
                    key: "departemen",
                    label: "Departemen",
                    thStyle: { "text-align": "center" },
                    tdClass: "text-center",
                },
                {
                    key: "jabatan",
                    label: "Jabatan",
                    thStyle: { "text-align": "center" },
                    tdClass: "text-center",
                },
                {
                    key: "dari",
                    label: "Dari",
                    thStyle: { "text-align": "center" },
                    tdClass: "text-center",
                },
                {
                    key: "sampai",
                    label: "Sampai",
                    thStyle: { "text-align": "center" },
                    tdClass: "text-center",
                },
                {
                    key: "actions",
                    label: "Actions",
                    thStyle: { "text-align": "center" },
                    tdClass: "text-center",
                },
            ],
            internal: [
                {
                    key: "no",
                    label: "No",
                    thStyle: { "text-align": "center" },
                    tdClass: "text-center",
                },
                {
                    key: "namaperusahaan",
                    label: "Nama Perusahaan",
                    thStyle: { "text-align": "center" },
                    tdClass: "text-center",
                },
                {
                    key: "departemen",
                    label: "Departemen",
                    thStyle: { "text-align": "center" },
                    tdClass: "text-center",
                },
                {
                    key: "jabatan",
                    label: "Jabatan",
                    thStyle: { "text-align": "center" },
                    tdClass: "text-center",
                },
                {
                    key: "dari",
                    label: "Dari",
                    thStyle: { "text-align": "center" },
                    tdClass: "text-center",
                },
                {
                    key: "sampai",
                    label: "Sampai",
                    thStyle: { "text-align": "center" },
                    tdClass: "text-center",
                },
                {
                    key: "actions",
                    label: "Actions",
                    thStyle: { "text-align": "center" },
                    tdClass: "text-center",
                },
            ],
            items: [],
            filter: "",
            currentPage: 1,
            perPage: 10,
            totalRows: 0,
            showSuccessAlert: false,
            alertMessage: "",
        };
    },
    methods: {
        async fetchjeniskelamin() {
            try {
                const response = await axios.get(
                    "/kontrakpegawai/getalljeniskelamin"
                );
                this.jeniskelamins = response.data;
            } catch (error) {
                console.error("Error fetching data:", error);
            }
        },
        async fetchpendidikan() {
            try {
                const response = await axios.get(
                    "/kontrakpegawai/getallpendidikan"
                );
                this.pendidikans = response.data;
            } catch (error) {
                console.error("Error fetching data:", error);
            }
        },
        async fetchstatuspegawai() {
            try {
                const response = await axios.get(
                    "/kontrakpegawai/getallstatuskontrak"
                );
                this.statuspegawais = response.data;
            } catch (error) {
                console.error("Error fetching data:", error);
            }
        },
        async fetchunit() {
            try {
                const response = await axios.get("/biodata/getallunit");
                this.units = response.data;
            } catch (error) {
                console.error("Error fetching data:", error);
            }
        },
        async fetchdepartemen() {
            try {
                const response = await axios.get(
                    "/kontrakpegawai/getalldepartemen"
                );
                this.departemens = response.data;
            } catch (error) {
                console.error("Error fetching data:", error);
            }
        },
        async fetchjabatan() {
            try {
                const response = await axios.get(
                    "/kontrakpegawai/getalljabatan"
                );
                this.jabatans = response.data;
            } catch (error) {
                console.error("Error fetching data:", error);
            }
        },
        async fetchinchargejabatan() {
            try {
                const response = await axios.get(
                    "/biodata/getallinchargejabatan"
                );
                this.incharges = response.data;
            } catch (error) {
                console.error("Error fetching data:", error);
            }
        },
        async fetchstatus() {
            try {
                const response = await axios.get(
                    "/biodata/getallstatushubungan"
                );
                this.statuss = response.data;
            } catch (error) {
                console.error("Error fetching data:", error);
            }
        },
        async fetchgoldarah() {
            try {
                const response = await axios.get("/biodata/getallgoldar");
                this.goldarahs = response.data;
            } catch (error) {
                console.error("Error fetching data:", error);
            }
        },

        async fetchagama() {
            try {
                const response = await axios.get("/kontrakpegawai/getallagama");
                this.agamas = response.data;
            } catch (error) {
                console.error("Error fetching data:", error);
            }
        },
        async fetchkwn() {
            try {
                const response = await axios.get("/biodata/getallkwn");
                this.negaras = response.data;
            } catch (error) {
                console.error("Error fetching data:", error);
            }
        },

        async fetchbajupriakerja() {
            try {
                const response = await axios.get(
                    "/biodata/getallbajupriakerja"
                );
                this.ukuranbajupria_kerjas = response.data;
            } catch (error) {
                console.error("Error fetching data:", error);
            }
        },

        async fetchbajuolahraga() {
            try {
                const response = await axios.get(
                    "/biodata/getallbajupriakerja"
                );
                this.ukuranbajupria_olahragas = response.data;
            } catch (error) {
                console.error("Error fetching data:", error);
            }
        },

        async fetchcelana() {
            try {
                const response = await axios.get(
                    "/biodata/getallbajupriakerja"
                );
                this.ukuranbajupria_celanas = response.data;
            } catch (error) {
                console.error("Error fetching data:", error);
            }
        },
        async fetchblazer() {
            try {
                const response = await axios.get(
                    "/biodata/getallbajupriakerja"
                );
                this.ukuranbajuwanita_blazers = response.data;
            } catch (error) {
                console.error("Error fetching data:", error);
            }
        },
        async fetchblouse() {
            try {
                const response = await axios.get(
                    "/biodata/getallbajupriakerja"
                );
                this.ukuranbajuwanita_blouses = response.data;
            } catch (error) {
                console.error("Error fetching data:", error);
            }
        },
        async fetchrok() {
            try {
                const response = await axios.get(
                    "/biodata/getallbajupriakerja"
                );
                this.ukuranbajuwanita_roks = response.data;
            } catch (error) {
                console.error("Error fetching data:", error);
            }
        },
        async fetchwarnakulit() {
            try {
                const response = await axios.get("/biodata/getallwarnakulit");
                this.warnakulits = response.data;
            } catch (error) {
                console.error("Error fetching data:", error);
            }
        },
        async fetchbentukmuka() {
            try {
                const response = await axios.get("/biodata/getallbentukmuka");
                this.bentukmukas = response.data;
            } catch (error) {
                console.error("Error fetching data:", error);
            }
        },
        async fetchjenisrambut() {
            try {
                const response = await axios.get("/biodata/getalljenisrambut");
                this.jenisrambuts = response.data;
            } catch (error) {
                console.error("Error fetching data:", error);
            }
        },

        async fetchukuransepatu() {
            try {
                const response = await axios.get("/biodata/getallukuransepatu");
                this.ukuransepatus = response.data;
            } catch (error) {
                console.error("Error fetching data:", error);
            }
        },
        async fetchbanklain() {
            try {
                const response = await axios.get("/biodata/getallbanklain");
                this.banklains = response.data;
            } catch (error) {
                console.error("Error fetching data:", error);
            }
        },
        async fetchpendidikanayah() {
            try {
                const response = await axios.get(
                    "/kontrakpegawai/getallpendidikan"
                );
                this.pendidikanayahs = response.data;
            } catch (error) {
                console.error("Error fetching data:", error);
            }
        },
        async fetchpendidikanibu() {
            try {
                const response = await axios.get(
                    "/kontrakpegawai/getallpendidikan"
                );
                this.pendidikanibus = response.data;
            } catch (error) {
                console.error("Error fetching data:", error);
            }
        },
        async fetchpendidikanpasangan() {
            try {
                const response = await axios.get(
                    "/kontrakpegawai/getallpendidikan"
                );
                this.pendidikanpasangans = response.data;
            } catch (error) {
                console.error("Error fetching data:", error);
            }
        },
        async fetchgoldarahpasangan() {
            try {
                const response = await axios.get("/biodata/getallgoldar");
                this.goldarahpasangans = response.data;
            } catch (error) {
                console.error("Error fetching data:", error);
            }
        },
        async fetchagamapasangan() {
            try {
                const response = await axios.get("/kontrakpegawai/getallagama");
                this.agamapasangans = response.data;
            } catch (error) {
                console.error("Error fetching data:", error);
            }
        },
        async submitForm() {
            try {
                await axios.post("/biodata/simpanbiodata", this.form);
                alert("Data berhasil ditambahkan!");
                this.resetForm();
            } catch (error) {
                console.error("Error submitting form:", error);
                alert("Gagal menambahkan data!");
            }
        },
        resetForm() {
            this.form = {
                nip: "",
                noidentitas: "",
                npwp: "",
                gelardepan: "",
                gelarbelakang: "",
                namalengkap: "",
                idjeniskelamin: "",
                iddaftarjenispendidikan: "",
                idstatuskontrak: "",
                idunit: "",
                iddepartment: "",
                idjabatan: "",
                idinchargejabatan: "",
                tglmasukkerja: "",
                tglkontrak: "",
                idstatus: "",
                tempatlahir: "",
                tanggallahir: "",
                idgoldarah: "",
                idagama: "",
                idkewarganegaraan: "",
                namajalan_ktp: "",
                kelurahan_ktp: "",
                kecamatan_ktp: "",
                provinsi_ktp: "",
                kodepos_ktp: "",
                namajalan_domisili: "",
                kelurahan_domisili: "",
                kecamatan_domisili: "",
                provinsi_domisili: "",
                kodepos_domisili: "",
                telprumah: "",
                handphone1: "",
                handphone2: "",
                linkedin: "",
                emailpribadi: "",
                emailkantor: "",
                idwarnakulit: "",
                idbentukmuka: "",
                idjenisrambut: "",
                tinggibadan: "",
                beratbadan: "",
                idpria_kerja: "",
                idpria_olahraga: "",
                idpria_celana: "",
                idwanita_blazer: "",
                idwanita_blouse: "",
                idwanita_rok: "",
                idukuransepatu: "",
                norekeningmandiri: "",
                atasnamamandiri: "",
                banklain: "",
                norekeninglain: "",
                atasnamalain: "",
                namaayah: "",
                pekerjaanayah: "",
                idpendidikanayah: "",
                namaibu: "",
                pekerjaanibu: "",
                idpendidikanibu: "",
                namapasangan: "",
                pekerjaanpasangan: "",
                idpendidikanpasangan: "",
                tempatlahirpasangan: "",
                tgllahirpasangan: "",
                idgoldarahpasangan: "",
                idagamapasangan: "",
            };
        },
    },
    created() {
        this.fetchjeniskelamin();
        this.fetchpendidikan();
        this.fetchstatuspegawai();
        this.fetchunit();
        this.fetchdepartemen();
        this.fetchjabatan();
        this.fetchinchargejabatan();
        this.fetchstatus();
        this.fetchgoldarah();
        this.fetchagama();
        this.fetchkwn();
        this.fetchbajupriakerja();
        this.fetchbajuolahraga();
        this.fetchcelana();
        this.fetchwarnakulit();
        this.fetchbentukmuka();
        this.fetchjenisrambut();
        this.fetchblazer();
        this.fetchblouse();
        this.fetchrok();
        this.fetchukuransepatu();
        this.fetchbanklain();
        this.fetchpendidikanayah();
        this.fetchpendidikanibu();
        this.fetchpendidikanpasangan();
        this.fetchgoldarahpasangan();
        this.fetchagamapasangan();
    },
};
</script>
