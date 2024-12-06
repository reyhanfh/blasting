window.Vue = require('vue').default;
import Vue from 'vue';

import SegmentasiList from './../components/blasting/segmentasilist.vue';
import KontakList from './../components/blasting/kontaklist.vue';
import TemplateList from './../components/blasting/templatelist.vue';
import ChampaignList from './../components/blasting/champaignlist.vue';
import AudienList from './../components/blasting/audienlist.vue';
import kontakadd from './../components/blasting/kontak-add.vue';
import kontakedit from './../components/blasting/kontak-edit.vue';
import tambahsegmentasi from './../components/blasting/tambahsegmentasi.vue';
import editsegmentasi from './../components/blasting/editsegmentasi.vue';
import tambahtemplate from './../components/blasting/tambahtemplate.vue';
import edittemplate from './../components/blasting/edittemplate.vue';
import paymentlist from './../components/blasting/paymentlist.vue';
import tambahpayment from './../components/blasting/tambahpayment.vue';
import editpayment from './../components/blasting/editpayment.vue';
import transferlist from './../components/blasting/transferlist.vue';
import tambahtransfer from './../components/blasting/tambahtransfer.vue';
import edittransfer from './../components/blasting/edittransfer.vue';
import depositlist from './../components/blasting/depositlist.vue';
import tambahdeposit from './../components/blasting/tambahdeposit.vue';
import history from './../components/blasting/history.vue';
import addaudien from './../components/blasting/addaudien.vue';
import schedulelist from './../components/blasting/schedulelist.vue';
import addschedule from './../components/blasting/addschedule.vue';

Vue.component('segmentasi-list',SegmentasiList);
Vue.component('kontak-list',KontakList);
Vue.component('template-list',TemplateList);
Vue.component('champaign-list',ChampaignList);
Vue.component('audien-list',AudienList);
Vue.component('kontak-add',kontakadd);
Vue.component('kontak-edit',kontakedit);
Vue.component('tambahsegmentasi', tambahsegmentasi);
Vue.component('editsegmentasi', editsegmentasi);
Vue.component('tambahtemplate', tambahtemplate);
Vue.component('edittemplate', edittemplate);
Vue.component('paymentlist', paymentlist);
Vue.component('tambahpayment', tambahpayment);
Vue.component('editpayment', editpayment);
Vue.component('transferlist', transferlist);
Vue.component('tambahtransfer', tambahtransfer);
Vue.component('edittransfer', edittransfer);
Vue.component('depositlist', depositlist);
Vue.component('tambahdeposit', tambahdeposit);
Vue.component('history', history);
Vue.component('addaudien', addaudien);
Vue.component('schedulelist', schedulelist);
Vue.component('addschedule', addschedule);

import config from './config.js';
import { add } from 'date-fns';

const app = new Vue({
    el: '#app',
    data: {
        baseurl: config.baseurl
    }
});