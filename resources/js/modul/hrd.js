window.Vue = require('vue').default;
import Vue from 'vue';

import daftardepartemen from './../components/hrd/daftardepartemen.vue';
import tambahdaftardepartemen from './../components/hrd/tambahdaftardepartemen.vue';
import editdaftardepartemen from './../components/hrd/editdaftardepartemen.vue';
import daftarjenispendidikan from './../components/hrd/daftarjenispendidikan.vue';
import tambahdaftarjenispendidikan from './../components/hrd/tambahdaftarjenispendidikan.vue';
import editdaftarjenispendidikan from './../components/hrd/editdaftarjenispendidikan.vue';
import harilibur from './../components/hrd/harilibur.vue';
import tambahharilibur from './../components/hrd/tambahharilibur.vue';
import editharilibur from './../components/hrd/editharilibur.vue';
import daftarfakultas from './../components/hrd/daftarfakultas.vue';
import tambahdaftarfakultas from './../components/hrd/tambahdaftarfakultas.vue';
import editdaftarfakultas from './../components/hrd/editdaftarfakultas.vue';
import daftarjurusan from '../components/hrd/daftarjurusan.vue';
import tambahdaftarjurusan from '../components/hrd/tambahdaftarjurusan.vue';
import editdaftarjurusan from './../components/hrd/editdaftarjurusan.vue';
import trainee from './../components/hrd/trainee.vue';
import unithotel from './../components/hrd/unithotel.vue';
import tambahunithotel from './../components/hrd/tambahunithotel.vue';
import editunithotel from './../components/hrd/editunithotel.vue';
import leveljabatan from './../components/hrd/leveljabatan.vue';
import editleveljabatan from './../components/hrd/editleveljabatan.vue';
import kontrakpegawai from './../components/hrd/kontrakpegawai.vue';
import tambahkontrakpegawai from './../components/hrd/tambahkontrakpegawai.vue';
import editkontrakpegawai from './../components/hrd/editkontrakpegawai.vue';
import daftarpegawai from './../components/hrd/daftarpegawai.vue';
import biodata from './../components/hrd/biodata.vue';
import masuk from './../components/hrd/masuk.vue';
import jeniscuti from './../components/hrd/jeniscuti.vue';
import pengajuancuti from './../components/hrd/pengajuancuti.vue';
import tambahpengajuancuti from './../components/hrd/tambahpengajuancuti.vue';
import editpengajuancuti from './../components/hrd/editpengajuancuti.vue';
import pengajuanpjs from './../components/hrd/pengajuanpjs.vue';
import tambahpengajuanpjs from './../components/hrd/tambahpengajuanpjs.vue';
import editpengajuanpjs from './../components/hrd/editpengajuanpjs.vue';
import approval from './../components/hrd/approval.vue';
import approvepjs from './../components/hrd/approvepjs.vue';

Vue.component('daftardepartemen',daftardepartemen);
Vue.component('tambahdaftardepartemen',tambahdaftardepartemen);
Vue.component('editdaftardepartemen',editdaftardepartemen);
Vue.component('daftarjenispendidikan',daftarjenispendidikan);
Vue.component('tambahdaftarjenispendidikan',tambahdaftarjenispendidikan);
Vue.component('editdaftarjenispendidikan',editdaftarjenispendidikan);
Vue.component('harilibur',harilibur);
Vue.component('tambahharilibur',tambahharilibur);
Vue.component('editharilibur',editharilibur);
Vue.component('daftarfakultas',daftarfakultas);
Vue.component('tambahdaftarfakultas',tambahdaftarfakultas);
Vue.component('editdaftarfakultas',editdaftarfakultas);
Vue.component('daftarjurusan', daftarjurusan);
Vue.component('tambahdaftarjurusan', tambahdaftarjurusan);
Vue.component('editdaftarjurusan', editdaftarjurusan);
Vue.component('trainee', trainee);
Vue.component('unithotel', unithotel);
Vue.component('tambahunithotel', tambahunithotel);
Vue.component('editunithotel', editunithotel);
Vue.component('leveljabatan', leveljabatan);
Vue.component('editleveljabatan', editleveljabatan);
Vue.component('kontrakpegawai', kontrakpegawai);
Vue.component('tambahkontrakpegawai', tambahkontrakpegawai);
Vue.component('editkontrakpegawai', editkontrakpegawai);
Vue.component('daftarpegawai', daftarpegawai);
Vue.component('biodata', biodata);
Vue.component('masuk', masuk);
Vue.component('jeniscuti', jeniscuti);
Vue.component('pengajuancuti', pengajuancuti);
Vue.component('tambahpengajuancuti', tambahpengajuancuti);
Vue.component('editpengajuancuti', editpengajuancuti);
Vue.component('pengajuanpjs', pengajuanpjs);
Vue.component('tambahpengajuanpjs', tambahpengajuanpjs);
Vue.component('editpengajuanpjs', editpengajuanpjs);
Vue.component('approval', approval);
Vue.component('approvepjs', approvepjs);

import config from './config.js';
import { add } from 'date-fns';

const app = new Vue({
    el: '#app',
    data: {
        baseurl: config.baseurl
    }
});