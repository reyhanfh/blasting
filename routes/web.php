<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Hotelfacility;
use App\Models\Hotelfacilitymodel;
use App\Http\Controllers\Jenispetalokal;
use App\Http\Controllers\Refregion;
use App\Http\Controllers\Refkota;
use App\Http\Controllers\Petalokal;
use App\Http\Controllers\Accomodationtype;
use App\Http\Controllers\Brand;
use App\Http\Controllers\Hotel;
use App\Http\Controllers\Roomtype;
use App\Http\Controllers\Amenities;
use App\Http\Controllers\Hotelroom;
use App\Http\Controllers\Test;
use App\Http\Controllers\Rateplan;
use App\Http\Controllers\webhome;
use App\Http\Controllers\newapi;
use App\Http\Controllers\Pushdata;
use App\Http\Controllers\Pushdata1;
use App\Http\Controllers\Aboutus;
use App\Http\Controllers\Rateplanhotel;
use Carbon\Carbon;
use App\Http\Controllers\Bnlapi;
use App\Http\Controllers\Xmltes;
use App\Http\Controllers\Lapbooking;
use App\Http\Controllers\Rateallotment;
use App\Http\Controllers\Setuprateplan;
use App\Http\Controllers\Login;
use App\Http\Controllers\Createuser;
use App\Http\Controllers\setinirateallotment;
use App\Http\Controllers\Setting;
use App\Http\Controllers\Newrateplanhotel;
use App\Http\Controllers\User;
use App\Http\Controllers\Loginmember;
use App\Http\Controllers\SalesPlanController;
use App\Http\Controllers\Simulasi;
use App\Http\Controllers\Blasting;
use App\Http\Controllers\hrd;

//website
use App\Http\Controllers\Bookinghome;
use App\Http\Controllers\Jobs;

Route::get('home',function () {
    return view('dashboard');
});

Route::get('/', function () {
    return redirect('masuk');
});

//Website
Route::get('webhome',[webhome::class,'index']);
Route::get('webhome/getsuggestion',[Webhome::class,'getsuggestion']);
Route::post('webhome/searchhotel',[Webhome::class,'searchhotel']);
Route::get('webhome/roomdetail/{id}',[webhome::class,'roomdetail']);
Route::get('webhome/booking/{id}',[webhome::class,'booking']);
Route::post('webhome/confirmation',[webhome::class,'confirmation']);
Route::post('webhome/checkout',[webhome::class,'checkout']);
Route::get('popularhotel/{id}',[Webhome::class,'searchhotel1']);
Route::get('sendbooking/{id}',[webhome::class,'sendbooking']);

Route::get('tes',[Test::class,'index']);
Route::post('tes',[Test::class,'simpan']);

//setting
Route::get('setting',[Setting::class,'index']);
Route::get('setting/getdata',[Setting::class,'getdata']);
Route::post('setting',[Setting::class,'savesetting']);

//Reference
Route::get('jenispetalokal',[jenispetalokal::class,'index']);
Route::get('jenispetalokal/create',[jenispetalokal::class,'addjenislokasi']);
Route::get('jenispetalokal/getalldata',[jenispetalokal::class,'getalldata']);
Route::delete('jenispetalokal/delete/{id}',[jenispetalokal::class,'hapusdata']);
Route::post('jenispetalokal/savejenislokasi',[jenispetalokal::class,'savejenislokasi']);
Route::get('jenispetalokal/edit/{id}',[jenispetalokal::class,'editlokasi']);
Route::get('jenispetalokal/getdata/{id}',[jenispetalokal::class,'getdata']);
Route::post('jenispetalokal/saveupdatejenislokasi',[jenispetalokal::class,'updatejenislokasi']);

Route::get('refregion',[Refregion::class,'index']);
Route::get('refregion/create',[Refregion::class,'addregion']);
Route::get('refregion/getalldata',[Refregion::class,'getalldata']);
Route::delete('refregion/delete/{id}',[Refregion::class,'hapusdata']);
Route::post('refregion/saveregion',[Refregion::class,'saveregion']);
Route::get('refregion/edit/{id}',[Refregion::class,'editregion']);
Route::get('refregion/getdata/{id}',[Refregion::class,'getdata']);
Route::patch('refregion/saveregion',[Refregion::class,'updateregion']);

Route::get('jobs',[Jobs::class,'index']);
Route::get('jobs/create',[Jobs::class,'addjobs']);
Route::get('jobs/getalldata',[Jobs::class,'getalldata']);
Route::get('jobs/gethotel',[Jobs::class,'gethotel']);
Route::delete('jobs/delete/{id}',[Jobs::class,'hapusdata']);
Route::post('jobs/savejobs',[Jobs::class,'savejobs']);
Route::get('jobs/edit/{id}',[Jobs::class,'editjobs']);
Route::get('jobs/getdata/{id}',[Jobs::class,'getdata']);
Route::post('jobs/saveupdatejobs',[Jobs::class,'updatejobs']);

Route::get('refkota',[Refkota::class,'index']);
Route::get('refkota/create',[Refkota::class,'addkota']);
Route::get('refkota/getalldata',[Refkota::class,'getalldata']);
Route::delete('refkota/delete/{id}',[Refkota::class,'hapusdata']);
Route::post('refkota/savekota',[Refkota::class,'savekota']);
Route::get('refkota/edit/{id}',[Refkota::class,'editkota']);
Route::get('refkota/getdata/{id}',[Refkota::class,'getdata']);
Route::patch('refkota/savekota',[Refkota::class,'updatekota']);

Route::get('petalokal',[Petalokal::class,'index']);
Route::get('petalokal/create',[Petalokal::class,'addpetalokal']);
Route::get('petalokal/getalldata',[Petalokal::class,'getalldata']);
Route::get('petalokal/getkota',[Petalokal::class,'getkota']);
Route::delete('petalokal/delete/{id}',[Petalokal::class,'hapusdata']);
Route::post('petalokal/savepetalokal',[Petalokal::class,'savepetalokal']);
Route::get('petalokal/getjenispetalokal',[Petalokal::class,'getjenispetalokal']);
Route::get('petalokal/edit/{id}',[Petalokal::class,'editpetalokal']);
Route::get('petalokal/getdata/{id}',[Petalokal::class,'getdata']);
Route::post('petalokal/saveupdatepetalokal',[Petalokal::class,'updatepetalokal']);

Route::get('hotelfacility',[Hotelfacility::class,'index']);
Route::post('hotelfacility/savefacility',[Hotelfacility::class,'savefacility']);
Route::get('hotelfacility/create',[Hotelfacility::class,'addfacility']);
Route::get('hotelfacility/edit/{id}',[Hotelfacility::class,'editfacility']);
Route::get('hotelfacility/getdata/{id}',[Hotelfacility::class,'getdata']);
Route::post('hotelfacility/saveupdatefacility',[Hotelfacility::class,'updatefacility']);
Route::delete('hotelfacility/delete/{id}',[Hotelfacility::class,'hapusdata']);

Route::get('jenisakomodasi',[Accomodationtype::class,'index']);
Route::get('jenisakomodasi/create',[Accomodationtype::class,'addjenisakomodasi']);
Route::get('jenisakomodasi/getalldata',[Accomodationtype::class,'getalldata']);
Route::delete('jenisakomodasi/delete/{id}',[Accomodationtype::class,'hapusdata']);
Route::post('jenisakomodasi/savejenisakomodasi',[Accomodationtype::class,'savejenisakomodasi']);
Route::get('jenisakomodasi/edit/{id}',[Accomodationtype::class,'editakomodasi']);
Route::get('jenisakomodasi/getdata/{id}',[Accomodationtype::class,'getdata']);
Route::patch('jenisakomodasi/saveupdateakomodasi',[Accomodationtype::class,'saveupdateakomodasi']);

Route::get('brand',[Brand::class,'index']);
Route::get('brand/getalldata',[Brand::class,'getalldata']);
Route::get('brand/create',[Brand::class,'addbrand']);
Route::post('brand/savebrand',[Brand::class,'savebrand']);
Route::delete('brand/delete/{id}',[Brand::class,'hapusdata']);
Route::get('brand/edit/{id}',[Brand::class,'editbrand']);
Route::get('brand/getdata/{id}',[Brand::class,'getdata']);
Route::post('brand/saveupdatebrand',[Brand::class,'saveupdatebrand']);

Route::get('hotel',[Hotel::class,'index']);
Route::get('hotel/getdata/{id}',[Hotel::class,'getdata']);
Route::get('hotel/getbrand',[Hotel::class,'getbrand']);
Route::get('hotel/getregion',[Hotel::class,'getregion']);
Route::get('hotel/getkota',[Hotel::class,'getkota']);
Route::get('hotel/getaccomodation',[Hotel::class,'getaccomodation']);
Route::get('hotel/getalldata',[Hotel::class,'getalldata']);
Route::get('hotel/detail/{id}',[Hotel::class,'detail']);
Route::post('hotel/savenewdata',[Hotel::class,'savenewdata']);
Route::post('hotel/saveupdatehotel',[Hotel::class,'saveupdatehotel']);
Route::get('hotel/detailtes',[Hotel::class,'detailtes']);
Route::get('hotel/create',[Hotel::class,'addhotel']);
Route::post('hotel/uploadlogo',[Hotel::class,'uploadlogo']);
Route::post('hotel/savefacility',[Hotel::class,'savefacility']);
Route::post('hotel/deletefacility',[Hotel::class,'deletefacility']);
Route::get('hotel/gallery/{id}',[Hotel::class,'gallery']);
Route::post('hotel/hapusgallery',[Hotel::class,'hapusgallery']);
Route::post('hotel/addgalery',[Hotel::class,'addgalery']);

Route::get('roomtype',[Roomtype::class,'index']);
Route::get('roomtype/getalldata',[Roomtype::class,'getalldata']);
Route::get('roomtype/create',[Roomtype::class,'addroomtype']);
Route::post('roomtype/saveroomtype',[Roomtype::class,'saveroomtype']);
Route::delete('roomtype/delete/{id}',[Roomtype::class,'hapusdata']);
Route::get('roomtype/edit/{id}',[Roomtype::class,'editroomtype']);
Route::get('roomtype/getdata/{id}',[Roomtype::class,'getdata']);
Route::patch('roomtype/saveupdateroomtype',[Roomtype::class,'saveupdateroomtype']);

Route::get('amenities',[Amenities::class,'index']);
Route::get('amenities/getalldata',[Amenities::class,'getalldata']);
Route::get('amenities/create',[Amenities::class,'addamenities']);
Route::post('amenities/saveamenities',[Amenities::class,'saveamenities']);
Route::delete('amenities/delete/{id}',[Amenities::class,'hapusdata']);
Route::get('amenities/edit/{id}',[Amenities::class,'editamenities']);
Route::get('amenities/getdata/{id}',[Amenities::class,'getdata']);
Route::patch('amenities/saveupdateamenities',[Amenities::class,'saveupdateamenities']);

Route::get('hotelroom',[Hotelroom::class,'index']);
Route::get('hotelroom/getalldata',[Hotelroom::class,'getalldata']);
Route::get('hotelroom/create',[Hotelroom::class,'addhotelroom']);
Route::get('hotelroom/gethotel',[Hotelroom::class,'gethotel']);
Route::get('hotelroom/getroomtype',[Hotelroom::class,'getroomtype']);
Route::post('hotelroom/savedata',[Hotelroom::class,'savedata']);
Route::post('hotelroom/saveupdatedata',[Hotelroom::class,'saveupdatedata']);
Route::get('hotelroom/detail/{id}',[Hotelroom::class,'detail']);
Route::get('hotelroom/getdata/{id}',[Hotelroom::class,'getdata']);
Route::get('hotelroom/getroomamenities/{id}',[Hotelroom::class,'getroomamenities']);
Route::post('hotelroom/addamenities',[Hotelroom::class,'addamenities']);
Route::post('hotelroom/hapusamenities',[Hotelroom::class,'hapusamenities']);
Route::get('hotelroom/roomgallery/{id}',[Hotelroom::class,'roomgallery']);
Route::post('hotelroom/hapusgallery',[Hotelroom::class,'hapusgallery']);
Route::post('hotelroom/uploadlogo',[Hotelroom::class,'uploadlogo']);

Route::get('rateplan',[Rateplan::class,'index']);
Route::get('rateplan/getalldata',[Rateplan::class,'getalldata']);
Route::get('rateplan/create',[Rateplan::class,'addrateplan']);
Route::get('rateplan/getbaserate/{idroomtype}',[Rateplan::class,'getbaserate']);
Route::post('rateplan/savenewdata',[Rateplan::class,'savenewdata']);
Route::get('rateplan/edit/{id}',[Rateplan::class,'editrateplan']);
Route::get('rateplan/getdata/{id}',[Rateplan::class,'getdata']);
Route::post('rateplan/saveupdatedata',[Rateplan::class,'saveupdatedata']);
Route::get('rateplan/getpolicy',[Rateplan::class,'getpolicy']);
Route::get('rateplan/setup/{id}',[Rateplan::class,'setup']);
Route::get('rateplan/gethotel',[Rateplan::class,'gethotel']);
Route::delete('rateplan/withdrawrateplan/{id}',[Rateplan::class,'withdrawrateplan']);
Route::post('rateplan/applyrateplan',[Rateplan::class,'applyrateplan']);
Route::post('rateplan/saveavaibility',[Rateplan::class,'saveavaibility']);
Route::get('rateplan/getrateplan/{id}',[Rateplan::class,'getrateplan']);
Route::post('rateplan/roomavaibility',[Rateplan::class,'roomavaibility']);
Route::get('rateplan/getroom/{id}',[Rateplan::class,'getroom']);

Route::get('rateplanhotel',[Rateplanhotel::class,'index']);
Route::get('rateplanhotel/getdata',[Rateplanhotel::class,'getdata']);
Route::get('rateplanhotel/create',[Rateplanhotel::class,'create']);

Route::get('newrateplanhotel',[Newrateplanhotel::class,'index']);
Route::get('newrateplanhotel/getroom/{idhotel}',[Newrateplanhotel::class,'getroom']);
Route::get('newrateplanhotel/getrateplan',[Newrateplanhotel::class,'getrateplan']);
Route::post('newrateplanhotel/savenewdata',[Newrateplanhotel::class,'savenewdata']);
Route::get('newrateplanhotel/getroomonly/{idhotel}',[Newrateplanhotel::class,'getroomonly']);
Route::get('newrateplanhotel/getroombreakfast/{idhotel}',[Newrateplanhotel::class,'getroombreakfast']);
Route::get('newrateplanhotel/getdata/{id}',[Newrateplanhotel::class,'getdata']);
Route::delete('newrateplanhotel/delete/{id}',[Newrateplanhotel::class,'hapusdata']);

Route::get('rateallotment',[Rateallotment::class,'index']);
Route::post('rateallotment/getdata',[Rateallotment::class,'getdata']);
Route::post('rateallotment/checkdata',[Rateallotment::class,'checkdata']);
Route::post('rateallotment/updateallotment',[Rateallotment::class,'updateallotment']);
Route::post('rateallotment/updaterate',[Rateallotment::class,'updaterate']);
Route::post('rateallotment/updatestatus',[Rateallotment::class,'updatestatus']);

Route::get('ratesetup',[Setuprateplan::class,'index']);
Route::get('ratesetup/gethotel',[Setuprateplan::class,'gethotel']);
Route::get('ratesetup/getrateplan',[Setuprateplan::class,'getrateplan']);
Route::get('ratesetup/getroom/{id}',[Setuprateplan::class,'getroom']);
Route::post('ratesetup/proses',[Setuprateplan::class,'proses']);



Route::get('laporan/booking',[Lapbooking::class,'index']);
Route::post('laporan/booking/getdata',[Lapbooking::class,'getdata']);
Route::get('laporan/booking/detail/{idhotel}',[Lapbooking::class,'laporanbookingdetail']);
Route::get('laporan/booking/getdatadetail/{idhotel}',[Lapbooking::class,'getdatadetail']);
Route::get('laporan/booking/voucher/{id}',[Lapbooking::class,'laporanbookingvoucher']);

Route::post('laporan/booking/exceldetail',[Lapbooking::class,'exceldetail']);
Route::post('laporan/booking/exceldetailTotal',[Lapbooking::class,'eksporexcellTotal']);

// Route::get('rateplan/tes',[Hotelroom::class,'tes']);

Route::get('/api/hotel-facilities', function () {
    $data= Hotelfacilitymodel::all();
    return response()->json($data);
});


//Website
Route::get('aboutus',[Aboutus::class,'index']);
Route::get('offers',[Aboutus::class,'offers']);
Route::get('career',[Aboutus::class,'career']);
Route::get('loyaltyprogram',[Aboutus::class,'loyaltyprogram']);
Route::get('loyaltyprogramregister',[Aboutus::class,'loyaltyprogramregister']);
Route::post('loyaltipost',[Aboutus::class,'loyaltiregister']);
Route::get('leadership',[Aboutus::class,'leadership']);
Route::get('horisoncsr',[Aboutus::class,'horisoncsr']);
Route::get('worldofhorison',[Aboutus::class,'worldofhorison']);
Route::get('sustainabletourism',[Aboutus::class,'sustainabletourism']);
Route::get('accolades',[Aboutus::class,'accolades']);
Route::get('booking',[Bookinghome::class,'index']);
Route::get('booking/loaddata',[Bookinghome::class,'loaddata']);
Route::post('booking/search',[Bookinghome::class,'search']);

Route::get('webhome/noavailabletes',[Webhome::class,'noavailabletes']);



//api chatapp
Route::get('request',[newapi::class,'index']);
Route::post('request/searchbylocation',[newapi::class,'searchbylocation']);
Route::post('request/listroom',[newapi::class,'listroom']);
Route::post('request/hotelinfo',[newapi::class,'hotelinfo']);
Route::post('request/roominfo',[newapi::class,'roominfo']);
Route::post('request/booking',[newapi::class,'booking']);
Route::post('request/updatepayment',[newapi::class,'updatepayment']);
Route::post('post/booking',[newapi::class,'postbooking']);
Route::get('checkpush',[newapi::class,'checkpush']);

Route::get('pushdata',[Pushdata::class,'index']);
Route::get('pushdata1',[Pushdata1::class,'index']);


//BnL Api
Route::post('request/getallroom',[Bnlapi::class,'getallroom']);
Route::get('tes/roomdata',[Xmltes::class,'roomdata']);
Route::get('tes/roomdatarespon',[Xmltes::class,'roomdatarespon']);
Route::get('tes/pushdata',[Xmltes::class,'pushdata']);
Route::get('tes/pushrate',[Xmltes::class,'pushrate']);
Route::post('tes/pushraterespon',[Xmltes::class,'pushraterespon']);


Route::get('login',[Login::class,'index'])->name('login')->middleware('guest');
Route::post('login',[Login::class,'signin']);
Route::get('login/logout',[Login::class,'logout']);

Route::get('loginmember',[Loginmember::class,'index']);
Route::get('registermember',[Loginmember::class,'registermember']);

Route::get('user',[User::class,'index']);
Route::get('user/getdata',[User::class,'getdata']);
Route::get('user/create',[User::class,'create']);
Route::get('user/gethotel',[User::class,'gethotel']);
Route::post('user/create',[User::class,'simpanuserbaru']);
Route::get('user/edit/{id}',[User::class,'useredit']);
Route::get('user/getdata/{id}',[User::class,'getdatauser']);
Route::post('user/edit',[User::class,'userupdate']);
Route::delete('user/delete/{id}',[User::class,'hapusdata']);
//testing
Route::get('tes/testavaibility/{start}/{end}/{id}',[Webhome::class,'avaibility']);
Route::get('tes/createuser',[Createuser::class,'index']);

Route::get('ini/rateallotment',[setinirateallotment::class,'index']);

Route::get('blasting/segmentasi',[Blasting::class,'segementasi']);
Route::get('blasting/segmentasi/getalldata',[Blasting::class,'getdatasegmentasi']);
Route::get('blasting/segmentasi/tambahsegmentasi', [Blasting::class, 'tambahsegmentasi']);
Route::post('blasting/segmentasi/simpandatasegmentasi', [Blasting::class, 'simpandatasegmentasi']);
Route::get('blasting/segmentasi/hapussegmentasi/{id}', [Blasting::class, 'hapussegmentasi']);
Route::get('blasting/segmentasi/editsegmentasi/{id}', [Blasting::class, 'editsegmentasi']);
Route::post('blasting/segmentasi/updatesegmentasi', [Blasting::class, 'updatesegmentasi']);
Route::get('blasting/segmentasi/getsegmentasi/{id}', [Blasting::class, 'getsegmentasi']);



Route::get('blasting/kontak',[Blasting::class,'kontak']);
Route::get('blasting/kontak/getalldata',[Blasting::class,'getdatakontak']);
Route::get('blasting/kontak/create',[Blasting::class,'create']);
Route::get('blasting/kontak/gethoteldata',[Blasting::class,'gethoteldata']);
Route::get('blasting/kontak/getkota', [Blasting::class, 'getkota']);
Route::get('blasting/kontak/getsegmen', [Blasting::class, 'getsegmen']);
Route::post('blasting/kontak/store', [Blasting::class,'store']);
Route::get('blasting/kontak/delete/{id}', [Blasting::class, 'delete']);
Route::get('blasting/kontak/edit/{id}', [Blasting::class, 'edit']);
Route::post('blasting/kontak/update', [Blasting::class,'update']);
Route::get('blasting/kontak/getkontak/{id}', [Blasting::class, 'getkontak']);

Route::get('blasting/template',[Blasting::class,'message']);
Route::get('blasting/template/getalldata',[Blasting::class,'getdatamessage']);
Route::get('blasting/template/tambahtemplate', [Blasting::class, 'tambahtemplate']);
Route::post('blasting/template/simpantemplate', [Blasting::class,'simpantemplate']);
Route::get('blasting/template/hapustemplate/{id}', [Blasting::class,'hapustemplate']);
Route::get('blasting/template/edittemplate/{id}', [Blasting::class,'edittemplate']);
Route::get('blasting/template/gettemplate/{id}', [Blasting::class, 'gettemplate']);
Route::post('blasting/template/updatetemplate', [Blasting::class,'updatetemplate']);


Route::get('blasting/champaign',[Blasting::class,'champaign']);
Route::get('blasting/champaign/getalldata',[Blasting::class,'getdatachampaign']);
Route::get('blasting/champaign/audien/{id}',[Blasting::class,'champaigndetail']);
Route::get('blasting/champaign/audien/getalldata/{id}',[Blasting::class,'getdataaudien']);
Route::get('blasting/champaign/audien/{id}/addaudien',[Blasting::class,'addaudien']);
Route::get('blasting/champaign/audien/{id}/getcontact',[Blasting::class,'getcontact']);
Route::get('blasting/champaign/audien/{id}/getsegmen',[Blasting::class,'getsegmen']);
Route::post('blasting/champaign/audien/{id}/saveaudien', [Blasting::class,'saveaudien']);
Route::get('blasting/champaign/audien/deleteaudien/{id}', [Blasting::class, 'deleteaudien']);
Route::get('blasting/champaign/schedule/{id}', [Blasting::class,'schedule']);
Route::get('blasting/champaign/schedule/getallschedule/{id}', [Blasting::class,'getallschedule']);
Route::get('blasting/champaign/schedule/{id}/addschedule', [Blasting::class,'addschedule'])->name('schedule.add');
Route::post('blasting/champaign/schedule/{id}/saveschedule', [Blasting::class,'saveschedule']);
Route::get('blasting/champaign/process/{idchampaign}', [Blasting::class, 'process']);


Route::get('blasting/payment',[Blasting::class,'payment']);
Route::get('blasting/payment/getdatapayment', [Blasting::class,'getdatapayment']);
Route::get('blasting/payment/tambahpayment', [Blasting::class,'tambahpayment']);
Route::post('blasting/payment/simpanpayment', [Blasting::class,'simpanpayment']);
Route::get('blasting/payment/hapuspayment/{id}', [Blasting::class,'hapuspayment']);
Route::get('blasting/payment/editpayment/{id}', [Blasting::class,'editpayment']);
Route::get('blasting/payment/getpayment/{id}', [Blasting::class,'getpayment']);
Route::post('blasting/payment/updatepayment', [Blasting::class,'updatepayment']);

Route::get('blasting/transfer', [Blasting::class,'transfer']);
Route::get('blasting/transfer/getalldatatransfer', [Blasting::class,'getalldatatransfer']);
Route::get('blasting/transfer/tambahtransfer',[Blasting::class,'tambahtransfer']);
Route::get('blasting/kontak/gethoteldata',[Blasting::class,'gethoteldata']);
Route::get('blasting/transfer/getmethod', [Blasting::class, 'getmethod']);
Route::post('blasting/transfer/simpantransfer', [Blasting::class,'simpantransfer']);
Route::get('blasting/transfer/hapustransfer/{id}', [Blasting::class,'hapustransfer']);
Route::get('blasting/transfer/edittransfer/{id}', [Blasting::class,'edittransfer']);
Route::get('blasting/transfer/gettransfer/{id}', [Blasting::class,'gettransfer']);
Route::post('blasting/transfer/updatetransfer', [Blasting::class,'updatetransfer']);

Route::get('blasting/deposit', [Blasting::class,'deposit']);
Route::get('blasting/deposit/getalldeposit', [Blasting::class,'getalldeposit']);
Route::get('blasting/deposit/tambahdeposit',[Blasting::class,'tambahdeposit']);
Route::get('blasting/kontak/gethoteldata',[Blasting::class,'gethoteldata']);
Route::post('blasting/deposit/simpandeposit', [Blasting::class,'simpandeposit']);
Route::get('blasting/deposit/history/{idhotel}',[Blasting::class,'history']);
Route::get('blasting/deposit/viewhistory/{idhotel}', [Blasting::class,'viewhistory']);

Route::get('simulasi',[Simulasi::class,'index']);
Route::get('simulasi/bayar/{id}',[Simulasi::class,'bayar']);

Route::get('daftardepartemen', [hrd::class, 'daftardepartemen']);
Route::get('daftardepartemen/getalldaftardepartemen', [hrd::class,'getalldaftardepartemen']);
Route::get('daftardepartemen/tambahdaftardepartemen', [hrd::class,'tambahdaftardepartemen']);
Route::post('daftardepartemen/simpandaftardepartemen', [hrd::class,'simpandaftardepartemen']);
Route::get('daftardepartemen/editdaftardepartemen/{id}', [hrd::class,'editdaftardepartemen']);
Route::get('daftardepartemen/prevdaftardepartemen/{id}', [hrd::class,'prevdaftardepartemen']);
Route::post('daftardepartemen/updatedaftardepartemen', [hrd::class,'updatedaftardepartemen']);
Route::get('daftardepartemen/hapusdaftardepartemen/{id}', [hrd::class,'hapusdaftardepartemen']);

Route::get('daftarjenispendidikan', [hrd::class,'daftarjenispendidikan']);
Route::get('daftarjenispendidikan/getalldaftarjenispendidikan', [hrd::class,'getalldaftarjenispendidikan']);
Route::get('daftarjenispendidikan/tambahdaftarjenispendidikan', [hrd::class,'tambahdaftarjenispendidikan']);
Route::post('daftarjenispendidikan/simpandaftarjenispendidikan', [hrd::class,'simpandaftarjenispendidikan']);
Route::get('daftarjenispendidikan/editdaftarjenispendidikan/{id}', [hrd::class,'editdaftarjenispendidikan']);
Route::get('daftarjenispendidikan/prevdaftarjenispendidikan/{id}', [hrd::class,'prevdaftarjenispendidikan']);
Route::post('daftarjenispendidikan/updatedaftarjenispendidikan', [hrd::class,'updatedaftarjenispendidikan']);
Route::get('daftarjenispendidikan/hapusdaftarjenispendidikan/{id}', [hrd::class,'hapusdaftarjenispendidikan']);

Route::get('harilibur', [hrd::class,'harilibur']);
Route::get('harilibur/getallharilibur', [hrd::class,'getallharilibur']);
Route::get('harilibur/tambahharilibur', [hrd::class,'tambahharilibur']);
Route::post('harilibur/simpanharilibur', [hrd::class,'simpanharilibur']);
Route::get('harilibur/editharilibur/{id}', [hrd::class, 'editharilibur']);
Route::get('harilibur/prevharilibur/{id}', [hrd::class, 'prevharilibur']);
Route::post('harilibur/updateharilibur', [hrd::class,'updateharilibur']);
Route::get('harilibur/hapusharilibur/{id}', [hrd::class,'hapusharilibur']);

Route::get('daftarfakultas', [hrd::class,'daftarfakultas']);
Route::get('daftarfakultas/getalldaftarfakultas',[hrd::class,'getalldaftarfakultas']);
Route::get('daftarfakultas/tambahdaftarfakultas', [hrd::class,'tambahdaftarfakultas']);
Route::post('daftarfakultas/simpandaftarfakultas', [hrd::class, 'simpandaftarfakultas']);
Route::get('daftarfakultas/editdaftarfakultas/{id}', [hrd::class, 'editdaftarfakultas']);
Route::get('daftarfakultas/prevdaftarfakultas/{id}', [hrd::class, 'prevdaftarfakultas']);
Route::post('daftarfakultas/updatedaftarfakultas', [hrd::class,'updatedaftarfakultas']);
Route::get('daftarfakultas/hapusdaftarfakultas/{id}', [hrd::class,'hapusdaftarfakultas']);

Route::get('daftarjurusan', [hrd::class,'daftarjurusan']);
Route::get('daftarjurusan/getalldaftarjurusan', [hrd:: class, 'getalldaftarjurusan']);
Route::get('daftarjurusan/tambahdaftarjurusan', [hrd:: class, 'tambahdaftarjurusan']);
Route::post('daftarjurusan/simpandaftarjurusan', [hrd:: class, 'simpandaftarjurusan']);
Route::get('daftarjurusan/editdaftarjurusan/{id}', [hrd::class,'editdaftarjurusan']);
Route::get('daftarjurusan/prevdaftarjurusan/{id}', [hrd::class,'prevdaftarjurusan']);
Route::post('daftarjurusan/updatedaftarjurusan', [hrd::class,'updatedaftarjurusan']);
Route::get('daftarjurusan/hapusdaftarjurusan/{id}', [hrd::class,'hapusdaftarjurusan']);

Route::get('trainee', [hrd::class,'trainee']);
Route::get('trainee/getalltrainee', [hrd::class,'getalltrainee']);

Route::get('leveljabatan', [hrd::class,'leveljabatan']);
Route::get('leveljabatan/getallleveljabatan', [hrd::class,'getallleveljabatan']);
Route::get('leveljabatan/editleveljabatan/{id}', [hrd::class,'editleveljabatan']);
Route::get('leveljabatan/prevleveljabatan/{id}', [hrd::class,'prevleveljabatan']);
Route::post('leveljabatan/updateleveljabatan', [hrd::class,'updateleveljabatan']);

Route::get('unithotel', [hrd::class,'unithotel']);
Route::get('unithotel/getallunithotel',[hrd::class,'getallunithotel']);
Route::get('unithotel/tambahunithotel', [hrd:: class, 'tambahunithotel']);
Route::post('unithotel/simpanunithotel', [hrd::class,'simpanunithotel']);
Route::get('unithotel/editunithotel/{id}', [hrd::class,'editunithotel']);
Route::get('unithotel/prevunithotel/{id}', [hrd::class,'prevunithotel']);
Route::post('unithotel/updateunithotel', [hrd::class,'updateunithotel']);
Route::get('unithotel/hapusunithotel/{id}', [hrd::class,'hapusunithotel']);

Route::get('kontrakpegawai', [hrd::class,'kontrakpegawai']);
Route::get('kontrakpegawai/getallkontrakpegawai', [hrd::class,'getallkontrakpegawai']);
Route::get('kontrakpegawai/tambahkontrakpegawai', [hrd::class,'tambahkontrakpegawai']);
Route::post('kontrakpegawai/simpankontrakpegawai', [hrd::class,'simpankontrakpegawai']);
Route::get('kontrakpegawai/getalljeniskelamin', [hrd::class, 'getalljeniskelamin']);
Route::get('kontrakpegawai/getallpendidikan', [hrd::class, 'getallpendidikan']);
Route::get('kontrakpegawai/getallagama', [hrd::class, 'getallagama']);
Route::get('kontrakpegawai/getalldepartemen', [hrd::class, 'getalldepartemen']);
Route::get('kontrakpegawai/getalljabatan', [hrd::class, 'getalljabatan']);
Route::get('kontrakpegawai/getallstatuskontrak', [hrd::class, 'getallstatuskontrak']);
Route::get('kontrakpegawai/editkontrakpegawai/{id}', [hrd::class,'editkontrakpegawai']);
Route::get('kontrakpegawai/prevkontrakpegawai/{id}', [hrd::class,'prevkontrakpegawai']);
Route::post('kontrakpegawai/updatekontrakpegawai', [hrd::class,'updatekontrakpegawai']);
Route::get('kontrakpegawai/getallkodeunit', [hrd::class, 'getallkodeunit']);

Route::get('daftarpegawai', [hrd::class,'daftarpegawai']);
Route::get('daftarpegawai/getalldaftarpegawai', [hrd::class, 'getalldaftarpegawai']);

Route::get('biodata', [hrd::class,'biodata']);
Route::post('biodata/simpanbiodata', [hrd::class,'simpanbiodata']);
Route::get('biodata/getallunit', [hrd::class,'getallunit']);
Route::get('biodata/getallinchargejabatan', [hrd::class,'getallinchargejabatan']);
Route::get('biodata/getallstatushubungan', [hrd::class,'getallstatushubungan']);
Route::get('biodata/getallgoldar', [hrd::class,'getallgoldar']);
Route::get('biodata/getallkwn', [hrd::class,'getallkwn']);
Route::get('biodata/getallbajupriakerja', [hrd::class,'getallbajupriakerja']);
Route::get('biodata/getallwarnakulit', [hrd::class, 'getallwarnakulit']);
Route::get('biodata/getallbentukmuka', [hrd::class, 'getallbentukmuka']);
Route::get('biodata/getalljenisrambut', [hrd::class, 'getalljenisrambut']);
Route::get('biodata/getallukuransepatu', [hrd::class, 'getallukuransepatu']);
Route::get('biodata/getallbanklain', [hrd::class, 'getallbanklain']);

Route::get('masuk', [hrd::class,'masuk']);
Route::post('masuk/redirect', [hrd::class,'redirect']);

Route::get('keluar', [hrd::class,'keluar']);

Route::get('cuti/jeniscuti', [hrd::class,'jeniscuti']);
Route::get('cuti/getalljeniscuti', [hrd::class, 'getalljeniscuti']);
Route::get('cuti/pengajuancuti', [hrd::class, 'pengajuancuti']);
Route::get('cuti/getallpengajuancuti', [hrd::class, 'getallpengajuancuti']);
Route::get('cuti/tambahpengajuancuti', [hrd::class, 'tambahpengajuancuti']);
Route::post('cuti/simpanpengajuancuti', [hrd::class, 'simpanpengajuancuti']);
Route::get('cuti/editpengajuancuti/{id}', [hrd::class, 'editpengajuancuti']);
Route::get('cuti/prevpengajuancuti/{id}', [hrd::class,'prevpengajuancuti']);
Route::post('cuti/updatepengajuancuti', [hrd::class,'updatepengajuancuti']);
Route::get('cuti/approval', [hrd::class, 'approval']);
Route::get('cuti/getallapproval', [hrd::class, 'getallapproval']);
Route::get('cuti/getbawahan', [hrd::class, 'getbawahan']);
Route::post('cuti/approvebyatasan', [hrd::class, 'approvebyatasan']);
Route::post('cuti/approvebyhrd', [hrd::class, 'approvebyhrd']);
Route::get('cuti/checkhrd', [hrd::class, 'checkhrd']);

Route::get('perjalanandinas/pengajuanpjs', [hrd::class, 'pengajuanpjs']);
Route::get('perjalanandinas/tambahpengajuanpjs', [hrd::class, 'tambahpengajuanpjs']);
Route::get('perjalanandinas/getallpengajuanpjs', [hrd::class, 'getallpengajuanpjs']);
Route::get('perjalanandinas/getstatushoteltujuan', [hrd::class, 'getstatushoteltujuan']);
Route::post('perjalanandinas/simpanpengajuanpjs', [hrd::class, 'simpanpengajuanpjs']);
Route::get('perjalanandinas/getholidays', [hrd::class, 'getholidays']);
Route::get('/perjalanandinas/getmeal', [hrd::class, 'getMealForUser']);
Route::post('/perjalanandinas/getuangsaku', [hrd::class, 'getUangSaku']);
Route::get('/perjalanandinas/editpengajuanpjs', [hrd::class, 'editpengajuanpjs']);
Route::get('/perjalanandinas/approvepjs', [hrd::class, 'approvepjs']);
Route::get('perjalanandinas/getallapprovepjs', [hrd::class, 'getallapprovepjs']);
Route::post('perjalanandinas/hrdapproval', [hrd::class, 'hrdapproval']);
Route::post('perjalanandinas/opapproval', [hrd::class, 'opapproval']);
Route::post('perjalanandinas/financeapproval', [hrd::class, 'financeapproval']);
Route::get('perjalanandinas/checkdepartment', [hrd::class, 'checkdepartment']);

