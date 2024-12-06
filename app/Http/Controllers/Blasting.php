<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class Blasting extends Controller
{
    public function segementasi()
    {
        $param = [
            "modulname" => "blastingsegmentasi",
            "title" => "Segmentasi",
        ];
        return view('blasting.segmentasi', $param);
    }

    public function getdatasegmentasi()
    {
        $data = DB::table('blast_segmentasi')->get();

        return response()->json($data);
    }

    public function kontak()
    {
        $param = [
            "modulname" => "blastingkontak",
            "title" => "Kontak",
        ];
        return view('blasting.kontak', $param);
    }

    public function getdatakontak()
    {
        $data = DB::table('blast_kontak as b')
            ->leftjoin('tbl_hotel as h', 'b.idhotel', 'h.id')
            ->leftjoin('tbl_kota as k', 'b.kota', 'k.id')
            ->leftjoin('blast_segmentasi as s', 'b.idsegmen', 's.id')
            ->select('b.id', 'b.nama', 'h.hotelname', 'k.kotaName AS kota', 'b.nowa', 'b.tgl_lahir', 's.segmen')
            ->get();

        return response()->json($data);
    }

    public function message()
    {
        $param = [
            "modulname" => "blastingmessage",
            "title" => "Template Pesan",
        ];
        return view('blasting.message', $param);
    }

    public function getdatamessage()
    {
        $data = DB::table('blast_message')->get();

        return response()->json($data);
    }

    public function champaign()
    {
        $param = [
            "modulname" => "blastingmessage",
            "title" => "Champaign",
        ];
        return view('blasting.champaign', $param);
    }

    public function getdatachampaign()
    {
        $data = DB::table('blast_champaign as c')
            ->leftjoin('tbl_hotel as h', 'c.idhotel', 'h.id')
            ->leftjoin('blast_message as m', 'c.idtemplate', 'm.id')
            ->select('c.id', 'c.title', 'h.hotelname', 'm.title AS template', 'mulai', 'selesai')
            ->get();

        return response()->json($data);
    }

    public function champaigndetail($id)
    {
        $param = [
            "modulname" => "blastinaudien",
            "title" => "Champaign Detail",
            "id" => $id,
        ];
        return view('blasting.audien', $param);
    }

    public function getdataaudien($id)
    {
        $audien = DB::table('blast_audien as a')
            ->leftJoin('blast_kontak as k', 'a.idkontak', '=', 'k.id')
            ->leftJoin('blast_segmentasi as c', 'k.kota', '=', 'c.id')
            ->select('a.id', 'k.nama', 'k.nowa', 'c.segmen AS kota')
            ->where('a.idchampaign', $id)
            ->get();

        return response()->json($audien);
    }


    public function create()
    {
        $parameter = [
            'title' => 'Kontak Baru',
        ];

        return view('blasting/kontakadd', $parameter);
    }

    public function gethoteldata()
    {
        $data = DB::table('tbl_hotel')
            ->select('id', 'hotelname')
            ->get();

        return response()->json($data);
    }

    public function store(Request $request)
    {
        $request = $request->validate([
            'name' => 'required|string|max:255',
            'hotelId' => 'required|integer|exists:tbl_hotel,id',
            'cityId' => 'required|integer|exists:tbl_kota,id',
            'whatsapp' => 'required|string|max:255',
            'birthdate' => 'required|date',
            'segmen' => 'required|exists:blast_segmentasi,id'
        ]);

        DB::table('blast_kontak')->insert([
            'nama' => $request['name'],
            'idhotel' => $request['hotelId'],
            'kota' => $request['cityId'],
            'nowa' => $request['whatsapp'],
            'tgl_lahir' => $request['birthdate'],
            'idsegmen' => $request['segmen']
        ]);

        return response()->json(['message' => 'Data kontak berhasil ditambahkan!'], 201);
    }


    public function getkota()
    {
        $data = DB::table('tbl_kota')
            ->select('id', 'kotaName')
            ->get();

        return response()->json($data);
    }

    public function getsegmen()
    {
        $data = DB::table('blast_segmentasi')
            ->select('id', 'segmen')
            ->get();

        return response()->json($data);
    }

    public function delete($id)
    {
        $deleted = DB::table('blast_kontak')->where('id', $id)->delete();

        if ($deleted) {
            return response()->json(['message' => 'Data kontak berhasil dihapus!'], 200);
        } else {
            return response()->json(['message' => 'Data kontak gagal dihapus!'], 404);
        }
    }

    public function edit($id)
    {
        $parameter = [
            'id' => $id,
            'title' => 'Edit Data Kontak'
        ];
        return view('blasting/kontakedit', $parameter);
    }

    public function update(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'hotelId' => 'required|integer|exists:tbl_hotel,id',
            'cityId' => 'required|integer|exists:tbl_kota,id',
            'whatsapp' => 'required|string|max:255',
            'birthdate' => 'required|date',
            'segmen' => 'required|exists:blast_segmentasi,id'
        ]);

        DB::table('blast_kontak')
            ->where('id', $request->id)
            ->update([
                'nama' => $request->name,
                'idhotel' => $request->hotelId,
                'kota' => $request->cityId,
                'nowa' => $request->whatsapp,
                'tgl_lahir' => $request->birthdate,
                'idsegmen' => $request->segmen
            ]);

        return response()->json(['message' => 'Data kontak berhasil ditambahkan!'], 201);
    }

    public function getkontak($id)
    {
        $data = DB::table('blast_kontak')->where('id', $id)->first();
        return response()->json($data);
    }



    public function tambahsegmentasi()
    {
        $parameter = [
            'title' => 'Segmentasi Baru',
        ];

        return view('blasting/tambahsegmentasi', $parameter);
    }

    public function simpandatasegmentasi(Request $request)
    {
        $request->validate([
            'segmen' => 'required|max:50',
        ]);

        DB::table('blast_segmentasi')->insert([
            'segmen' => $request->segmen,
        ]);

        return response()->json(['message' => 'Data has been saved successfully'], 200);
    }

    public function hapussegmentasi($id)
    {
        $deleted = DB::table('blast_segmentasi')->where('id', $id)->delete();

        if ($deleted) {
            return response()->json(['message' => 'Data kontak berhasil dihapus!'], 200);
        } else {
            return response()->json(['message' => 'Data kontak gagal dihapus!'], 404);
        }
    }

    public function editsegmentasi($id)
    {
        $parameter = [
            'id' => $id,
            'title' => 'Edit Data Segmentasi'
        ];
        return view('blasting/editsegmentasi', $parameter);
    }

    public function getsegmentasi($id)
    {
        $data = DB::table('blast_segmentasi')->where('id', $id)->first();
        return response()->json($data);
    }

    public function updatesegmentasi(Request $request)
    {
        $request->validate([
            'segmen' => 'required|string|max:255',
        ]);

        DB::table('blast_segmentasi')
            ->where('id', $request->id)
            ->update(['segmen' => $request->segmen]);

        return response()->json(['message' => 'Data has been updated successfully']);
    }

    public function tambahtemplate()
    {
        $parameter = [
            'title' => 'Template Baru',
        ];

        return view('blasting/tambahtemplate', $parameter);
    }

    public function simpantemplate(Request $request)
    {
        $request->validate([
            'title' => 'required|max:50',
            'pesan' => 'required',
            'photo' => 'required|max:255',
        ]);

        DB::table('blast_message')->insert([
            'title' => $request->title,
            'pesan' => $request->pesan,
            'photo' => $request->photo,
        ]);

        return response()->json(['message' => 'Data has been saved successfully'], 200);
    }

    public function hapustemplate($id)
    {
        $deleted = DB::table('blast_message')->where('id', $id)->delete();

        if ($deleted) {
            return response()->json(['message' => 'Data berhasil dihapus!'], 200);
        } else {
            return response()->json(['message' => 'Data gagal dihapus!'], 404);
        }
    }
    public function edittemplate($id)
    {
        $parameter = [
            'id' => $id,
            'title' => 'Edit Data Template'
        ];
        return view('blasting/edittemplate', $parameter);
    }

    public function gettemplate($id)
    {
        $data = DB::table('blast_message')->where('id', $id)->first();
        return response()->json($data);
    }

    public function updatetemplate(Request $request)
    {
        $request->validate([
            'title' => 'required|max:50',
            'pesan' => 'required',
            'photo' => 'required|max:255',
        ]);

        DB::table('blast_message')
            ->where('id', $request->id)
            ->update([
                'title' => $request->title,
                'pesan' => $request->pesan,
                'photo' => $request->photo,
            ]);

        return response()->json(['message' => 'Data has been updated successfully']);
    }

    public function payment()
    {
        $param = [
            "modulname" => "payment",
            "title" => "Payment Method",
        ];
        return view('blasting/payment', $param);
    }
    public function getdatapayment()
    {
        $data = DB::table('blast_methodpembayaran')->get();

        return response()->json($data);
    }

    public function tambahpayment()
    {
        $parameter = [
            'title' => 'New Payment Method',
        ];

        return view('blasting/tambahpayment', $parameter);
    }

    public function simpanpayment(Request $request)
    {
        $request->validate([
            'method' => 'required|max:50',
        ]);

        DB::table('blast_methodpembayaran')->insert([
            'method' => $request->method,
        ]);

        return response()->json(['message' => 'Data has been saved successfully'], 200);
    }

    public function hapuspayment($id)
    {
        $deleted = DB::table('blast_methodpembayaran')->where('id', $id)->delete();

        if ($deleted) {
            return response()->json(['message' => 'Data kontak berhasil dihapus!'], 200);
        } else {
            return response()->json(['message' => 'Data kontak gagal dihapus!'], 404);
        }
    }

    public function editpayment($id)
    {
        $parameter = [
            'id' => $id,
            'title' => 'Edit Payment Method'
        ];
        return view('blasting/editpayment', $parameter);
    }

    public function getpayment($id)
    {
        $data = DB::table('blast_methodpembayaran')->where('id', $id)->first();
        return response()->json($data);
    }

    public function updatepayment(Request $request)
    {
        $request->validate([
            'method' => 'required|max:50',
        ]);

        DB::table('blast_methodpembayaran')
            ->where('id', $request->id)
            ->update(['method' => $request->method]);

        return response()->json(['message' => 'Data has been updated successfully']);
    }

    public function transfer()
    {
        $param = [
            "modulname" => "transfer",
            "title" => "Hotel Transfer Deposit",
        ];
        return view('blasting/transfer', $param);
    }

    public function getalldatatransfer()
    {
        $data = DB::table('blast_hoteltransfer as t')
            ->leftjoin('tbl_hotel as h', 't.idhotel', 'h.id')
            ->leftjoin('blast_methodpembayaran as m', 't.idmethodpembayaran', 'm.id')
            ->select(
                't.id',
                'h.hotelname',
                't.tanggal',
                'm.method',
                't.nominal',
            )
            ->get();

        return response()->json($data);
    }

    public function tambahtransfer()
    {
        $parameter = [
            'title' => 'Transfer Baru',
        ];

        return view('blasting/tambahtransfer', $parameter);
    }

    public function getmethod()
    {
        $data = DB::table('blast_methodpembayaran')->get();

        return response()->json($data);
    }

    public function simpantransfer(Request $request)
    {
        $request = $request->validate([
            'hotelId' => 'required|integer|exists:tbl_hotel,id',
            'birthdate' => 'required|date',
            'methodid' => 'required|integer|exists:blast_methodpembayaran,id',
            'nominal' => 'required|numeric',
        ]);

        DB::table('blast_hoteltransfer')->insert([
            'idhotel' => $request['hotelId'],
            'tanggal' => $request['birthdate'],
            'idmethodpembayaran' => $request['methodid'],
            'nominal' => $request['nominal'],
        ]);

        return response()->json(['message' => 'Data berhasil ditambahkan!'], 201);
    }

    public function hapustransfer($id)
    {
        $deleted = DB::table('blast_hoteltransfer')->where('id', $id)->delete();

        if ($deleted) {
            return response()->json(['message' => 'Data kontak berhasil dihapus!'], 200);
        } else {
            return response()->json(['message' => 'Data kontak gagal dihapus!'], 404);
        }
    }

    public function edittransfer($id)
    {
        $parameter = [
            'id' => $id,
            'title' => 'Edit Hotel Transfer Deposit'
        ];
        return view('blasting/edittransfer', $parameter);
    }



    public function updatetransfer(Request $request)
    {
        $request->validate([
            'hotelId' => 'required|integer|exists:tbl_hotel,id',
            'birthdate' => 'required|date',
            'methodid' => 'required|integer|exists:blast_methodpembayaran,id',
            'nominal' => 'required|numeric',
        ]);

        DB::table('blast_hoteltransfer')
        ->where('id', $request->id)
        ->update([
            'idhotel' => $request['hotelId'],
            'tanggal' => $request['birthdate'],
            'idmethodpembayaran' => $request['methodid'],
            'nominal' => $request['nominal'],
        ]);

        return response()->json(['message' => 'Data has been updated successfully']);
    }

    public function gettransfer($id)
    {
        $data = DB::table('blast_hoteltransfer')->where('id', $id)->first();
        if (!$data) {
            return response()->json(['message' => 'Data not found'], 404);
        }
        return response()->json($data);
    }

    public function deposit()
    {
        $param = [
            "modulname" => "deposit",
            "title" => "Hotel Deposit",
        ];
        return view('blasting/deposit', $param);
    }

    public function getalldeposit()
    {
        $data = DB::table('blast_deposit as d')
            ->leftjoin('tbl_hotel as h', 'd.idhotel', 'h.id')
            ->leftjoin('blast_hoteltransfer as t', 'd.idhotel', 't.idhotel')
            ->select(
                'd.idhotel',
                'h.hotelname',
                DB::raw('SUM(t.nominal) as nominal')
            )
            ->groupBy('d.idhotel', 'h.hotelname')
            ->get();

        return response()->json($data);
    }

    public function tambahdeposit()
    {
        $parameter = [
            'title' => 'Deposit Baru',
        ];

        return view('blasting/tambahdeposit', $parameter);
    }
    public function simpandeposit(Request $request)
    {
        $request = $request->validate([
            'hotelId' => 'required|integer|exists:tbl_hotel,id',
        ]);

        DB::table('blast_deposit')->insert([
            'idhotel' => $request['hotelId'],
        ]);

        return response()->json(['message' => 'Data berhasil ditambahkan!'], 201);
    }

    public function history($idhotel)
    {
        $data = DB::table('blast_hoteltransfer as t')
            ->leftjoin('tbl_hotel as h', 't.idhotel', 'h.id')
            ->leftjoin('blast_methodpembayaran as m', 't.idmethodpembayaran', 'm.id')
            ->select(
                't.id',
                'h.hotelname',
                't.tanggal',
                'm.method',
                't.nominal',
            )
            ->where('t.idhotel', $idhotel)
            ->get();

        return response()->json($data);
    }


    public function viewhistory($idhotel)
    {
        $parameter = [
            'idhotel' => $idhotel,
            'title' => 'History'
        ];
        return view('blasting/history', $parameter);
    }

    public function addaudien($id)
    {
        $parameter = [
            'title' => 'Audien Baru',
            'id' => $id,
        ];

        return view('blasting.addaudien', $parameter);
    }

    public function getcontact($id)
    {
        $contacts = DB::table('blast_kontak')
            ->leftjoin('tbl_kota', 'blast_kontak.kota', 'tbl_kota.id')
            ->select('blast_kontak.id', 'blast_kontak.nama', 'nowa', 'tbl_kota.kotaName as kota')
            ->get();
        return response()->json($contacts);
    }


    public function saveAudien(Request $request, $idc)
    {
        // Validate request
        $data = $request->validate([
            'contacts' => 'required|array',
            'contacts.*' => 'integer'
        ]);

        // Log the data to debug
        \Log::info('Received data:', $data);

        // Check if 'contacts' is not empty
        if (empty($data['contacts'])) {
            return response()->json(['message' => 'No contacts provided'], 422);
        }

        // Insert each contact into the pivot table
        foreach ($data['contacts'] as $id) {
            DB::table('blast_audien')->insert([
                'idchampaign' => $idc,
                'idkontak' => $id
            ]);
        }

        return response()->json(['message' => 'Audien added successfully'], 200);
    }

    public function deleteaudien($id)
    {
        $deleted = DB::table('blast_audien')->where('id', $id)->delete();

        if ($deleted) {
            return response()->json(['message' => 'Data kontak berhasil dihapus!'], 200);
        } else {
            return response()->json(['message' => 'Data kontak gagal dihapus!'], 404);
        }
    }

    public function schedule($id)
    {
        $parameter = [
            "modulname" => "schedule",
            "title" => "Schedule Details",
            "id" => $id,
        ];

        return view('blasting.schedule', $parameter);
    }

    public function getallschedule($id)
    {
        $schedule = DB::table('schedule as s')
            ->leftJoin('blast_champaign as c', 's.idchampaign', 'c.id')
            ->where('s.idchampaign', $id)
            ->get();



        return response()->json($schedule);
    }

    public function addschedule($id)
    {
        $parameter = [
            'title' => 'New Schedule',
            'id' => $id,
        ];

        return view('blasting.addschedule', $parameter);
    }

    public function saveschedule(Request $request, $idc)
    {
        // Validate the input
        $request->validate([
            'tanggal' => 'required|date',
            'jumlahpesan' => 'required|integer|min:1',
        ]);

        // Retrieve the campaign's start and end dates
        $champaign = DB::table('blast_champaign')->where('id', $idc)->first();

        if (!$champaign) {
            return response()->json(['error' => 'Campaign not found'], 404);
        }

        $mulai = $champaign->mulai;
        $selesai = $champaign->selesai;

        // Validate that the date is within the campaign's range
        if ($request->tanggal < $mulai || $request->tanggal > $selesai) {
            return response()->json(['error' => 'The date must be between the campaign start and end dates'], 400);
        }

        // Retrieve the count of contacts for the given campaign
        $contactCount = DB::table('blast_audien')->where('idchampaign', $idc)->count();

        // Validate that the number of messages does not exceed the number of contacts
        if ($request->jumlahpesan > $contactCount) {
            return response()->json(['error' => 'The number of messages exceeds the number of contacts'], 400);
        }

        // Calculate the total number of messages already scheduled for the given date
        $totalScheduledMessages = DB::table('schedule')
            ->where('idchampaign', $idc)
            ->whereBetween('tanggal', [$mulai, $selesai])
            ->sum('jumlahpesan');

        // Validate that the number of messages to be added does not exceed the number of available contacts
        $availableMessages = $contactCount - $totalScheduledMessages;

        if ($request->jumlahpesan > $availableMessages) {
            return response()->json(['error' => 'The number of messages exceeds the available messages for the date range'], 400);
        }

        // Insert the schedule
        DB::table('schedule')->insert([
            'tanggal' => $request->tanggal,
            'jumlahpesan' => $request->jumlahpesan,
            'idchampaign' => $idc,
        ]);

        return response()->json(['message' => 'Data has been saved successfully'], 200);
    }

    public function process($idchampaign)
{
    // Ambil data dari tabel schedule
    $schedules = DB::table('schedule')
        ->join('blast_champaign', 'schedule.idchampaign', '=', 'blast_champaign.id')
        ->where('idchampaign', $idchampaign)
        ->select('schedule.tanggal', 'schedule.jumlahpesan', 'schedule.idchampaign', 'blast_champaign.idtemplate')
        ->get();
    // Proses setiap entry dari schedule
    foreach ($schedules as $schedule) {
        // Ambil idtemplate dari blast_champaign
        $template = DB::table('blast_message')
            ->where('id', $schedule->idtemplate)
            ->first();

        if (!$template) {
            continue; // Skip jika template tidak ditemukan
        }

        // Ambil idkontak acak dari blast_audien berdasarkan idchampaign
        $audience = DB::table('blast_audien')
            ->where('idchampaign', $schedule->idchampaign)
            ->inRandomOrder()
            ->limit($schedule->jumlahpesan)
            ->pluck('idkontak');

        // Masukkan data ke tabel report
        foreach ($audience as $contactId) {
            DB::table('report')->insert([
                'tanggal' => $schedule->tanggal,
                'idchampaign' => $schedule->idchampaign,
                'idtemplate' => $schedule->idtemplate,
                'idkontak' => $contactId,
            ]);
        }
    }

    return response()->json(['message' => 'Data berhasil dipindahkan'], 200);
}


}
