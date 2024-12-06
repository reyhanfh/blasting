<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Carbon\Carbon;
use Carbon\CarbonPeriod;
use Illuminate\Support\Facades\Validator;

class hrd extends Controller
{
    public function daftardepartemen()
    {
        $parameter = [
            "modulname" => "daftardepartemen",
            "title" => "Daftar Departemen",
        ];
        return view('hrd.daftardepartemen', $parameter);
    }
    public function getalldaftardepartemen()
    {
        $data = DB::table('daftardepartemen')->get();
        return response()->json($data);
    }

    public function tambahdaftardepartemen()
    {
        $parameter = [
            'title' => 'Departemen Baru',
        ];

        return view('hrd.tambahdaftardepartemen', $parameter);
    }

    public function simpandaftardepartemen(Request $request)
    {
        $request = $request->validate([
            'kodedepartemen' => 'required|max:50',
            'namadepartemen' => 'required|max:50',
        ]);

        DB::table('daftardepartemen')->insert([
            'kodedepartemen' => $request['kodedepartemen'],
            'namadepartemen' => $request['namadepartemen'],
        ]);

        return response()->json(['message' => 'Data has been saved successfully.']);
    }

    public function editdaftardepartemen($id)
    {
        $parameter = [
            'id' => $id,
            'title' => 'Edit Departemen',
        ];

        return view('hrd.editdaftardepartemen', $parameter);
    }

    public function prevdaftardepartemen($id)
    {
        $data = DB::table('daftardepartemen')->where('id', $id)->first();
        return response()->json($data);
    }

    public function updatedaftardepartemen(Request $request)
    {
        $request = $request->validate([
            'id' => 'required|exists:daftardepartemen,id',
            'kodedepartemen' => 'required|max:50',
            'namadepartemen' => 'required|max:50',
        ]);

        DB::table('daftardepartemen')
            ->where('id', $request['id'])
            ->update([
                'kodedepartemen' => $request['kodedepartemen'],
                'namadepartemen' => $request['namadepartemen'],
            ]);

        return response()->json(['message' => 'Data has been saved successfully.']);
    }

    public function hapusdaftardepartemen($id)
    {
        $deleted = DB::table('daftardepartemen')->where('id', $id)->delete();

        if ($deleted) {
            return response()->json(['message' => 'Data berhasil dihapus!'], 200);
        } else {
            return response()->json(['message' => 'Data gagal dihapus!'], 404);
        }
    }

    public function daftarjenispendidikan()
    {
        $parameter = [
            "modulname" => "daftarjenispendidikan",
            "title" => "Daftar Jenis Pendidikan",
        ];
        return view('hrd.daftarjenispendidikan', $parameter);
    }

    public function getalldaftarjenispendidikan()
    {
        $data = DB::table('daftarjenispendidikan')->get();
        return response()->json($data);
    }

    public function tambahdaftarjenispendidikan()
    {
        $parameter = [
            'title' => 'Jenis Pendidikan Baru',
        ];

        return view('hrd.tambahdaftarjenispendidikan', $parameter);
    }

    public function simpandaftarjenispendidikan(Request $request)
    {
        $request = $request->validate([
            'pendidikan' => 'required|max:50'
        ]);

        DB::table('daftarjenispendidikan')->insert([
            'pendidikan' => $request['pendidikan']
        ]);

        return response()->json(['message' => 'Data has been saved successfully.']);
    }

    public function editdaftarjenispendidikan($id)
    {
        $parameter = [
            'id' => $id,
            'title' => 'Edit Jenis Pendidikan',
        ];

        return view('hrd.editdaftarjenispendidikan', $parameter);
    }

    public function prevdaftarjenispendidikan($id)
    {
        $data = DB::table('daftarjenispendidikan')->where('id', $id)->first();
        return response()->json($data);
    }

    public function updatedaftarjenispendidikan(Request $request)
    {
        $request = $request->validate([
            'id' => 'required|exists:daftarjenispendidikan,id',
            'pendidikan' => 'required|max:50'
        ]);

        DB::table('daftarjenispendidikan')
            ->where('id', $request['id'])
            ->update([
                'pendidikan' => $request['pendidikan']
            ]);

        return response()->json(['message' => 'Data has been saved successfully.']);
    }

    public function hapusdaftarjenispendidikan($id)
    {
        $deleted = DB::table('daftarjenispendidikan')->where('id', $id)->delete();

        if ($deleted) {
            return response()->json(['message' => 'Data berhasil dihapus!'], 200);
        } else {
            return response()->json(['message' => 'Data gagal dihapus!'], 404);
        }
    }

    public function harilibur()
    {
        $parameter = [
            "modulname" => "harilibur",
            "title" => "Hari Libur",
        ];
        return view('hrd.harilibur', $parameter);
    }

    public function getallharilibur()
    {
        $data = DB::table('harilibur')->get();
        return response()->json($data);
    }

    public function tambahharilibur()
    {
        $parameter = [
            'title' => 'Hari Libur Baru',
        ];

        return view('hrd.tambahharilibur', $parameter);
    }

    public function simpanharilibur(Request $request)
    {
        $request = $request->validate([
            'dari' => 'required|date',
            'sampai' => 'required|date',
            'keterangan' => 'required|max:50'
        ]);

        DB::table('harilibur')->insert([
            'dari' => $request['dari'],
            'sampai' => $request['sampai'],
            'keterangan' => $request['keterangan']
        ]);

        return response()->json(['message' => 'Data has been saved successfully.']);
    }

    public function editharilibur($id)
    {
        $parameter = [
            'id' => $id,
            'title' => 'Edit Hari Libur',
        ];

        return view('hrd.editharilibur', $parameter);
    }

    public function prevharilibur($id)
    {
        $data = DB::table('harilibur')->where('id', $id)->first();
        return response()->json($data);
    }

    public function updateharilibur(Request $request)
    {
        $request = $request->validate([
            'id' => 'required|exists:harilibur,id',
            'dari' => 'required|date',
            'sampai' => 'required|date',
            'keterangan' => 'required|max:50'
        ]);

        DB::table('harilibur')
            ->where('id', $request['id'])
            ->update([
                'dari' => $request['dari'],
                'sampai' => $request['sampai'],
                'keterangan' => $request['keterangan']
            ]);

        return response()->json(['message' => 'Data has been saved successfully.']);
    }

    public function hapusdaftarfakultas($id)
    {
        $deleted = DB::table('daftarfakultas')->where('id', $id)->delete();

        if ($deleted) {
            return response()->json(['message' => 'Data berhasil dihapus!'], 200);
        } else {
            return response()->json(['message' => 'Data gagal dihapus!'], 404);
        }
    }

    public function daftarfakultas()
    {
        $parameter = [
            "modulname" => "daftarfakultas",
            "title" => "Daftar Fakultas",
        ];
        return view('hrd.daftarfakultas', $parameter);
    }

    public function getalldaftarfakultas()
    {
        $data = DB::table('daftarfakultas')->get();
        return response()->json($data);
    }

    public function tambahdaftarfakultas()
    {
        $parameter = [
            'title' => 'Fakultas Baru',
        ];

        return view('hrd.tambahdaftarfakultas', $parameter);
    }

    public function simpandaftarfakultas(Request $request)
    {
        $request = $request->validate([
            'fakultas' => 'required|max:50'
        ]);

        DB::table('daftarfakultas')->insert([
            'fakultas' => $request['fakultas']
        ]);

        return response()->json(['message' => 'Data has been saved successfully.']);
    }

    public function editdaftarfakultas($id)
    {
        $parameter = [
            'id' => $id,
            'title' => 'Edit Fakultas',
        ];

        return view('hrd.editdaftarfakultas', $parameter);
    }

    public function prevdaftarfakultas($id)
    {
        $data = DB::table('daftarfakultas')->where('id', $id)->first();
        return response()->json($data);
    }

    public function updatedaftarfakultas(Request $request)
    {
        $request = $request->validate([
            'id' => 'required|exists:daftarfakultas,id',
            'fakultas' => 'required|max:50'
        ]);

        DB::table('daftarfakultas')
            ->where('id', $request['id'])
            ->update([
                'fakultas' => $request['fakultas']
            ]);

        return response()->json(['message' => 'Data has been saved successfully.']);
    }

    public function daftarjurusan()
    {
        $parameter = [
            "modulname" => "daftarjurusan",
            "title" => "Daftar Jurusan",
        ];
        return view('hrd.daftarjurusan', $parameter);
    }

    public function getalldaftarjurusan()
    {
        $data = DB::table('daftarjurusan')->get();
        return response()->json($data);
    }

    public function tambahdaftarjurusan()
    {
        $parameter = [
            'title' => 'Tambah Jurusan Baru',
        ];

        return view('hrd.tambahdaftarjurusan', $parameter);
    }

    public function simpandaftarjurusan(Request $request)
    {
        $request = $request->validate([
            'kodejurusan' => 'required|max:50',
            'jurusan' => 'required|max:50',
        ]);

        DB::table('daftarjurusan')->insert([
            'kodejurusan' => $request['kodejurusan'],
            'jurusan' => $request['jurusan'],
        ]);

        return response()->json(['message' => 'Data has been saved successfully.']);
    }

    public function editdaftarjurusan($id)
    {
        $parameter = [
            'id' => $id,
            'title' => 'Edit Jurusan',
        ];

        return view('hrd.editdaftarjurusan', $parameter);
    }

    public function prevdaftarjurusan($id)
    {
        $data = DB::table('daftarjurusan')->where('id', $id)->first();
        return response()->json($data);
    }

    public function updatedaftarjurusan(Request $request)
    {
        $request = $request->validate([
            'id' => 'required|exists:daftarjurusan,id',
            'kodejurusan' => 'required|max:50',
            'jurusan' => 'required|max:50',
        ]);

        DB::table('daftarjurusan')
            ->where('id', $request['id'])
            ->update([
                'kodejurusan' => $request['kodejurusan'],
                'jurusan' => $request['jurusan'],
            ]);

        return response()->json(['message' => 'Data has been saved successfully.']);
    }

    public function hapusdaftarjurusan($id)
    {
        $deleted = DB::table('daftarjurusan')->where('id', $id)->delete();

        if ($deleted) {
            return response()->json(['message' => 'Data berhasil dihapus!'], 200);
        } else {
            return response()->json(['message' => 'Data gagal dihapus!'], 404);
        }
    }

    public function hapusharilibur($id)
    {
        $deleted = DB::table('harilibur')->where('id', $id)->delete();

        if ($deleted) {
            return response()->json(['message' => 'Data berhasil dihapus!'], 200);
        } else {
            return response()->json(['message' => 'Data gagal dihapus!'], 404);
        }
    }

    public function trainee()
    {
        $parameter = [
            "modulname" => "trainee",
            "title" => "Daftar DW/Trainee",
        ];
        return view('hrd.trainee', $parameter);
    }
    public function getalltrainee()
    {
        $data = DB::table('trainee')->get();
        return response()->json($data);
    }

    public function leveljabatan()
    {
        $parameter = [
            "modulname" => "leveljabatan",
            "title" => "Level Jabatan",
        ];
        return view('hrd.leveljabatan', $parameter);
    }
    public function getallleveljabatan()
    {
        $data = DB::table('leveljabatan')->get();
        return response()->json($data);
    }

    public function editleveljabatan($id)
    {
        $parameter = [
            'id' => $id,
            'title' => 'Edit Level Jabatan',
        ];

        return view('hrd.editleveljabatan', $parameter);
    }

    public function prevleveljabatan($id)
    {
        $data = DB::table('leveljabatan')->where('id', $id)->first();
        return response()->json($data);
    }

    public function updateleveljabatan(Request $request)
    {
        $request = $request->validate([
            'id' => 'required|exists:leveljabatan,id',
            'uangsaku_7h' => 'required|numeric',
            'uangsaku_29h' => 'required|numeric',
            'uangsaku_30h' => 'required|numeric',
            'uangsaku_unit' => 'required|numeric',
            'uangmakan' => 'required|numeric',
        ]);

        DB::table('leveljabatan')
            ->where('id', $request['id'])
            ->update([
                'uangsaku_7h' => $request['uangsaku_7h'],
                'uangsaku_29h' => $request['uangsaku_29h'],
                'uangsaku_30h' => $request['uangsaku_30h'],
                'uangsaku_unit' => $request['uangsaku_unit'],
                'uangmakan' => $request['uangmakan'],
            ]);

        return response()->json(['message' => 'Data has been saved successfully.']);
    }

    public function unithotel()
    {
        $parameter = [
            "modulname" => "unithotel",
            "title" => "Unit Hotel",
        ];
        return view('hrd.unithotel', $parameter);
    }

    public function getallunithotel()
    {
        $data = DB::table('unithotel')->get();
        return response()->json($data);
    }

    public function tambahunithotel()
    {
        $parameter = [
            "title" => "Tambah Unit Hotel",
        ];
        return view('hrd.tambahunithotel', $parameter);
    }

    public function simpanunithotel(Request $request)
    {
        $request = $request->validate([
            'namaunit' => 'required|max:50',
            'hrleader' => 'required|max:50',
            'kota' => 'required|max:50',
            'telp' => 'required|max:50',
            'email' => 'required|max:50',
        ]);

        DB::table('unithotel')->insert([
            'namaunit' => $request['namaunit'],
            'hrleader' => $request['hrleader'],
            'kota' => $request['kota'],
            'telp' => $request['telp'],
            'email' => $request['email'],
        ]);

        return response()->json(['message' => 'Data has been saved successfully.']);
    }

    public function editunithotel($id)
    {
        $parameter = [
            'id' => $id,
            'title' => 'Edit Unit Hotel',
        ];

        return view('hrd.editunithotel', $parameter);
    }

    public function prevunithotel($id)
    {
        $data = DB::table('unithotel')->where('id', $id)->first();
        return response()->json($data);
    }

    public function updateunithotel(Request $request)
    {
        $request = $request->validate([
            'id' => 'required|exists:unithotel,id',
            'namaunit' => 'required|max:50',
            'hrleader' => 'required|max:50',
            'kota' => 'required|max:50',
            'telp' => 'required|max:50',
            'email' => 'required|max:50',
        ]);

        DB::table('unithotel')
            ->where('id', $request['id'])
            ->update([
                'namaunit' => $request['namaunit'],
                'hrleader' => $request['hrleader'],
                'kota' => $request['kota'],
                'telp' => $request['telp'],
                'email' => $request['email'],
            ]);

        return response()->json(['message' => 'Data has been saved successfully.']);
    }

    public function hapusunithotel($id)
    {
        $deleted = DB::table('unithotel')->where('id', $id)->delete();

        if ($deleted) {
            return response()->json(['message' => 'Data berhasil dihapus!'], 200);
        } else {
            return response()->json(['message' => 'Data gagal dihapus!'], 404);
        }
    }

    public function kontrakpegawai()
    {
        $parameter = [
            "modulname" => "kontrakpegawai",
            "title" => "Daftar PKWT",
        ];
        return view('hrd.kontrakpegawai', $parameter);
    }
    public function getallkontrakpegawai()
    {
        $data = DB::table('kontrakpegawai as k')
            ->leftjoin('statuskontrak as s', 'k.idstatuskontrak', 's.id')
            ->select('k.id', 'k.nokontrak', 'k.tglkontrak', 'k.namalengkap', 'k.awalkontrak', 'k.akhirkontrak', 's.statuskontrak')
            ->get();
        return response()->json($data);
    }

    public function tambahkontrakpegawai()
    {
        $parameter = [
            "title" => "Kontrak Pegawai Baru",
        ];
        return view('hrd.tambahkontrakpegawai', $parameter);
    }

    public function simpankontrakpegawai(Request $request)
    {
        $validatedData = $request->validate([
            'ktp' => 'required|string|max:16',
            'namalengkap' => 'required|string|max:50',
            'gelardepan' => 'nullable|string|max:50',
            'gelarbelakang' => 'nullable|string|max:50',
            'idjeniskelamin' => 'required|numeric|exists:jeniskelamin,id',
            'idpendidikan' => 'required|numeric|exists:daftarjenispendidikan,id',
            'idagama' => 'required|numeric|exists:agama,id',
            'namajalan_ktp' => 'nullable|string|max:50',
            'kelurahan_ktp' => 'nullable|string|max:50',
            'kecamatan_ktp' => 'nullable|string|max:50',
            'namajalan_domisili' => 'nullable|string|max:50',
            'kelurahan_domisili' => 'nullable|string|max:50',
            'kecamatan_domisili' => 'nullable|string|max:50',
            'nokontrak' => 'required|string|max:50',
            'tglkontrak' => 'required|date',
            'idstatuskontrak' => 'required|numeric|exists:statuskontrak,id',
            'iddepartemen' => 'required|numeric|exists:daftardepartemen,id',
            'idleveljabatan' => 'required|numeric|exists:leveljabatan,id',
            'awalkontrak' => 'required|date',
            'akhirkontrak' => 'required|date',
            'idkodeunit' => 'required|numeric|exists:unit,id',
        ]);

        $kodeUnit = DB::table('unit')
            ->where('id', $validatedData['idkodeunit'])
            ->value('kodeunit');

        $kodeDepartemen = DB::table('daftardepartemen')
            ->where('id', $validatedData['iddepartemen'])
            ->value('kodedepartemen');

        $tahunMulai = (new \DateTime($validatedData['awalkontrak']))->format('y');

        $nomorUrut = DB::table('kontrakpegawai')->count() + 1;
        $nomorUrutFormatted = str_pad($nomorUrut, 3, '0', STR_PAD_LEFT);

        $nip = "{$kodeUnit}.{$tahunMulai}.{$kodeDepartemen}.{$nomorUrutFormatted}";

        DB::table('kontrakpegawai')->insert([
            'ktp' => $validatedData['ktp'],
            'namalengkap' => $validatedData['namalengkap'],
            'gelardepan' => $validatedData['gelardepan'],
            'gelarbelakang' => $validatedData['gelarbelakang'],
            'idjeniskelamin' => $validatedData['idjeniskelamin'],
            'idpendidikan' => $validatedData['idpendidikan'],
            'idagama' => $validatedData['idagama'],
            'namajalan_ktp' => $validatedData['namajalan_ktp'],
            'kelurahan_ktp' => $validatedData['kelurahan_ktp'],
            'kecamatan_ktp' => $validatedData['kecamatan_ktp'],
            'namajalan_domisili' => $validatedData['namajalan_domisili'],
            'kelurahan_domisili' => $validatedData['kelurahan_domisili'],
            'kecamatan_domisili' => $validatedData['kecamatan_domisili'],
            'nokontrak' => $validatedData['nokontrak'],
            'tglkontrak' => $validatedData['tglkontrak'],
            'idstatuskontrak' => $validatedData['idstatuskontrak'],
            'iddepartemen' => $validatedData['iddepartemen'],
            'idleveljabatan' => $validatedData['idleveljabatan'],
            'awalkontrak' => $validatedData['awalkontrak'],
            'akhirkontrak' => $validatedData['akhirkontrak'],
            'idkodeunit' => $validatedData['idkodeunit'],
            'nip' => $nip,
        ]);

        DB::table('user')->insert([
            'username' => $nip,
            'password' => Hash::make('12345'),
        ]);

        return response()->json(['message' => 'Data berhasil ditambahkan!'], 201);
    }


    public function getalljeniskelamin()
    {
        $data = DB::table('jeniskelamin')
            ->select('id', 'jeniskelamin')
            ->get();

        return response()->json($data);
    }

    public function getallpendidikan()
    {
        $data = DB::table('daftarjenispendidikan')
            ->select('id', 'pendidikan')
            ->get();

        return response()->json($data);
    }

    public function getallagama()
    {
        $data = DB::table('agama')
            ->select('id', 'agama')
            ->get();

        return response()->json($data);
    }

    public function getalldepartemen()
    {
        $data = DB::table('daftardepartemen')
            ->select('id', 'namadepartemen')
            ->get();

        return response()->json($data);
    }

    public function getalljabatan()
    {
        $data = DB::table('leveljabatan')
            ->select('id', 'namalevel')
            ->get();

        return response()->json($data);
    }

    public function getallstatuskontrak()
    {
        $data = DB::table('statuskontrak')
            ->select('id', 'statuskontrak')
            ->get();

        return response()->json($data);
    }

    public function editkontrakpegawai($id)
    {
        $parameter = [
            'id' => $id,
            'title' => 'Edit Pegawai',
        ];

        return view('hrd.editkontrakpegawai', $parameter);
    }

    public function prevkontrakpegawai($id)
    {
        $data = DB::table('kontrakpegawai')->where('id', $id)->first();
        return response()->json($data);
    }

    public function updatekontrakpegawai(Request $request)
    {
        $validatedData = $request->validate([
            'id' => 'required|exists:kontrakpegawai,id',
            'ktp' => 'required|string|max:255',
            'namalengkap' => 'required|string|max:255',
            'gelardepan' => 'nullable|string|max:255',
            'gelarbelakang' => 'nullable|string|max:255',
            'idjeniskelamin' => 'required|integer|exists:jeniskelamin,id',
            'idpendidikan' => 'required|integer|exists:daftarjenispendidikan,id',
            'idagama' => 'required|integer|exists:agama,id',
            'namajalan_ktp' => 'nullable|string|max:255',
            'kelurahan_ktp' => 'nullable|string|max:255',
            'kecamatan_ktp' => 'nullable|string|max:255',
            'namajalan_domisili' => 'nullable|string|max:255',
            'kelurahan_domisili' => 'nullable|string|max:255',
            'kecamatan_domisili' => 'nullable|string|max:255',
            'nokontrak' => 'required|string|max:255',
            'tglkontrak' => 'required|date',
            'idstatuskontrak' => 'required|integer|exists:statuskontrak,id',
            'iddepartemen' => 'required|integer|exists:daftardepartemen,id',
            'idleveljabatan' => 'required|integer|exists:leveljabatan,id',
            'awalkontrak' => 'required|date',
            'akhirkontrak' => 'required|date',
        ]);

        DB::table('kontrakpegawai')
            ->where('id', $validatedData['id'])
            ->update([
                'ktp' => $validatedData['ktp'],
                'namalengkap' => $validatedData['namalengkap'],
                'gelardepan' => $validatedData['gelardepan'],
                'gelarbelakang' => $validatedData['gelarbelakang'],
                'idjeniskelamin' => $validatedData['idjeniskelamin'],
                'idpendidikan' => $validatedData['idpendidikan'],
                'idagama' => $validatedData['idagama'],
                'namajalan_ktp' => $validatedData['namajalan_ktp'],
                'kelurahan_ktp' => $validatedData['kelurahan_ktp'],
                'kecamatan_ktp' => $validatedData['kecamatan_ktp'],
                'namajalan_domisili' => $validatedData['namajalan_domisili'],
                'kelurahan_domisili' => $validatedData['kelurahan_domisili'],
                'kecamatan_domisili' => $validatedData['kecamatan_domisili'],
                'nokontrak' => $validatedData['nokontrak'],
                'tglkontrak' => $validatedData['tglkontrak'],
                'idstatuskontrak' => $validatedData['idstatuskontrak'],
                'iddepartemen' => $validatedData['iddepartemen'],
                'idleveljabatan' => $validatedData['idleveljabatan'],
                'awalkontrak' => $validatedData['awalkontrak'],
                'akhirkontrak' => $validatedData['akhirkontrak'],
            ]);

        return response()->json(['message' => 'Data berhasil diperbarui!'], 200);
    }


    public function daftarpegawai()
    {
        $parameter = [
            "modulname" => "daftarpegawai",
            "title" => "Daftar Pegawai",
        ];
        return view('hrd.daftarpegawai', $parameter);
    }

    public function getalldaftarpegawai()
    {
        $data = DB::table('kontrakpegawai as k')
            ->leftjoin('daftardepartemen as d', 'k.iddepartemen', 'd.id')
            ->leftjoin('leveljabatan as j', 'k.idleveljabatan', 'j.id')
            ->select('k.nip', 'k.namalengkap', 'd.namadepartemen', 'j.namalevel')
            ->get();
        return response()->json($data);
    }

    public function biodata()
    {
        $parameter = [
            "modulname" => "biodata",
            "title" => "Data Pribadi",
        ];
        return view('hrd.biodata', $parameter);
    }

    public function simpanbiodata(Request $request)
    {
        $request = $request->validate([
            'nip' => 'required|string|max:50',
            'noidentitas' => 'required|string|max:50',
            'npwp' => 'required|string|max:50',
            'gelardepan' => 'required|string|max:50',
            'gelarbelakang' => 'required|string|max:50',
            'namalengkap' => 'required|string|max:50',
            'idjeniskelamin' => 'required|integer|exists:jeniskelamin,id',
            'iddaftarjenispendidikan' => 'required|integer|exists:daftarjenispendidikan,id',
            'idstatuskontrak' => 'required|integer|exists:statuskontrak,id',
            'idunit' => 'required|integer|exists:unit,id',
            'iddepartment' => 'required|integer|exists:daftardepartemen,id',
            'idjabatan' => 'required|integer|exists:leveljabatan,id',
            'idinchargejabatan' => 'required|integer|exists:inchargejabatan,id',
            'tglmasukkerja' => 'required|date',
            'tglkontrak' => 'required|date',
            'idstatus' => 'required|integer|exists:status,id',
            'tempatlahir' => 'required|string|max:50',
            'tanggallahir' => 'required|date',
            'idgoldarah' => 'required|integer|exists:goldarah,id',
            'idagama' => 'required|integer|exists:agama,id',
            'idkewarganegaraan' => 'required|integer|exists:kewarganegaraan,id',
            'namajalan_ktp' => 'required|string|max:50',
            'kelurahan_ktp' => 'required|string|max:255',
            'kecamatan_ktp' => 'required|string|max:50',
            'kodepos_ktp' => 'required|string|max:50',
            'provinsi_ktp' => 'required|string|max:50',
            'namajalan_domisili' => 'required|string|max:50',
            'kelurahan_domisili' => 'required|string|max:50',
            'kecamatan_domisili' => 'required|string|max:50',
            'kodepos_domisili' => 'required|string|max:50',
            'provinsi_domisili' => 'required|string|max:50',
            'telprumah' => 'required|string|max:50',
            'handphone1' => 'required|string|max:50',
            'handphone2' => 'required|string|max:50',
            'linkedin' => 'required|string|max:50',
            'emailpribadi' => 'required|string|max:50',
            'emailkantor' => 'required|string|max:50',
            'idwarnakulit' => 'required|integer|exists:warnakulit,id',
            'idbentukmuka' => 'required|integer|exists:bentukmuka,id',
            'idjenisrambut' => 'required|integer|exists:jenisrambut,id',
            'tinggibadan' => 'required|integer',
            'beratbadan' => 'required|integer',
            'idpria_kerja' => 'required|integer|exists:ukuranbaju,id',
            'idpria_olahraga' => 'required|integer|exists:ukuranbaju,id',
            'idpria_celana' => 'required|integer|exists:ukuranbaju,id',
            'idwanita_blazer' => 'required|integer|exists:ukuranbaju,id',
            'idwanita_blouse' => 'required|integer|exists:ukuranbaju,id',
            'idwanita_rok' => 'required|integer|exists:ukuranbaju,id',
            'idukuransepatu' => 'required|integer|exists:ukuransepatu,id',
            'norekeningmandiri' => 'required|string|max:50',
            'atasnamamandiri' => 'required|string|max:50',
            'banklain' => 'required|integer|exists:banklain,id',
            'norekeninglain' => 'required|string|max:50',
            'atasnamalain' => 'required|string|max:50',
            'namaayah' => 'required|string|max:50',
            'pekerjaanayah' => 'required|string|max:50',
            'idpendidikanayah' => 'required|integer|exists:daftarjenispendidikan,id',
            'namaibu' => 'required|string|max:50',
            'pekerjaanibu' => 'required|string|max:50',
            'idpendidikanibu' => 'required|integer|exists:daftarjenispendidikan,id',
            'namapasangan' => 'required|string|max:50',
            'pekerjaanpasangan' => 'required|string|max:50',
            'idpendidikanpasangan' => 'required|integer|exists:daftarjenispendidikan,id',
            'tempatlahirpasangan' => 'required|string|max:50',
            'tgllahirpasangan' => 'required|date',
            'idgoldarahpasangan' => 'required|integer|exists:goldarah,id',
            'idagamapasangan' => 'required|integer|exists:agama,id',
        ]);

        DB::table('biodata')->insert([
            'nip' => $request['nip'],
            'noidentitas' => $request['noidentitas'],
            'npwp' => $request['npwp'],
            'gelardepan' => $request['gelardepan'],
            'gelarbelakang' => $request['gelarbelakang'],
            'namalengkap' => $request['namalengkap'],
            'idjeniskelamin' => $request['idjeniskelamin'],
            'iddaftarjenispendidikan' => $request['iddaftarjenispendidikan'],
            'idstatuskontrak' => $request['idstatuskontrak'],
            'idunit' => $request['idunit'],
            'iddepartment' => $request['iddepartment'],
            'idjabatan' => $request['idjabatan'],
            'idinchargejabatan' => $request['idinchargejabatan'],
            'tglmasukkerja' => $request['tglmasukkerja'],
            'tglkontrak' => $request['tglkontrak'],
            'idstatus' => $request['idstatus'],
            'tempatlahir' => $request['tempatlahir'],
            'tanggallahir' => $request['tanggallahir'],
            'idgoldarah' => $request['idgoldarah'],
            'idagama' => $request['idagama'],
            'idkewarganegaraan' => $request['idkewarganegaraan'],
            'namajalan_ktp' => $request['namajalan_ktp'],
            'kelurahan_ktp' => $request['kelurahan_ktp'],
            'kecamatan_ktp' => $request['kecamatan_ktp'],
            'provinsi_ktp' => $request['provinsi_ktp'],
            'kodepos_ktp' => $request['kodepos_ktp'],
            'namajalan_domisili' => $request['namajalan_domisili'],
            'kelurahan_domisili' => $request['kelurahan_domisili'],
            'kecamatan_domisili' => $request['kecamatan_domisili'],
            'provinsi_domisili' => $request['provinsi_domisili'],
            'kodepos_domisili' => $request['kodepos_domisili'],
            'telprumah' => $request['telprumah'],
            'handphone1' => $request['handphone1'],
            'handphone2' => $request['handphone2'],
            'linkedin' => $request['linkedin'],
            'emailpribadi' => $request['emailpribadi'],
            'emailkantor' => $request['emailkantor'],
            'idwarnakulit' => $request['idwarnakulit'],
            'idbentukmuka' => $request['idbentukmuka'],
            'idjenisrambut' => $request['idjenisrambut'],
            'tinggibadan' => $request['tinggibadan'],
            'beratbadan' => $request['beratbadan'],
            'idpria_kerja' => $request['idpria_kerja'],
            'idpria_olahraga' => $request['idpria_olahraga'],
            'idpria_celana' => $request['idpria_celana'],
            'idwanita_blazer' => $request['idwanita_blazer'],
            'idwanita_blouse' => $request['idwanita_blouse'],
            'idwanita_rok' => $request['idwanita_rok'],
            'idukuransepatu' => $request['idukuransepatu'],
            'norekeningmandiri' => $request['norekeningmandiri'],
            'atasnamamandiri' => $request['atasnamamandiri'],
            'banklain' => $request['banklain'],
            'norekeninglain' => $request['norekeninglain'],
            'atasnamalain' => $request['atasnamalain'],
        ]);

        DB::table('orangtua_pasangan')->insert([
            'namaayah' => $request['namaayah'],
            'pekerjaanayah' => $request['pekerjaanayah'],
            'idpendidikanayah' => $request['idpendidikanayah'],
            'namaibu' => $request['namaibu'],
            'pekerjaanibu' => $request['pekerjaanibu'],
            'idpendidikanibu' => $request['idpendidikanibu'],
            'namapasangan' => $request['namapasangan'],
            'pekerjaanpasangan' => $request['pekerjaanpasangan'],
            'idpendidikanpasangan' => $request['idpendidikanpasangan'],
            'tempatlahirpasangan' => $request['tempatlahirpasangan'],
            'tgllahirpasangan' => $request['tgllahirpasangan'],
            'idgoldarahpasangan' => $request['idgoldarahpasangan'],
            'idagamapasangan' => $request['idagamapasangan'],
        ]);

        return response()->json(['message' => 'Data berhasil ditambahkan!'], 201);
    }

    public function getallunit()
    {
        $data = DB::table('unit')
            ->select('id', 'unit')
            ->get();

        return response()->json($data);
    }

    public function getallinchargejabatan()
    {
        $data = DB::table('inchargejabatan')
            ->select('id', 'inchargejabatan')
            ->get();

        return response()->json($data);
    }

    public function getallstatushubungan()
    {
        $data = DB::table('status')
            ->select('id', 'status')
            ->get();

        return response()->json($data);
    }

    public function getallgoldar()
    {
        $data = DB::table('goldarah')
            ->select('id', 'goldarah')
            ->get();

        return response()->json($data);
    }

    public function getallkwn()
    {
        $data = DB::table('kewarganegaraan')
            ->select('id', 'kewarganegaraan')
            ->get();

        return response()->json($data);
    }

    public function getallbajupriakerja()
    {
        $data = DB::table('ukuranbaju')
            ->select('id', 'ukuran')
            ->get();

        return response()->json($data);
    }


    public function getallwarnakulit()
    {
        $data = DB::table('warnakulit')
            ->select('id', 'warnakulit')
            ->get();

        return response()->json($data);
    }

    public function getallbentukmuka()
    {
        $data = DB::table('bentukmuka')
            ->select('id', 'bentukmuka')
            ->get();

        return response()->json($data);
    }

    public function getalljenisrambut()
    {
        $data = DB::table('jenisrambut')
            ->select('id', 'jenisrambut')
            ->get();

        return response()->json($data);
    }

    public function getallukuransepatu()
    {
        $data = DB::table('ukuransepatu')
            ->select('id', 'ukuransepatu')
            ->get();

        return response()->json($data);
    }
    public function getallbanklain()
    {
        $data = DB::table('banklain')
            ->select('id', 'banklain')
            ->get();
        return response()->json($data);
    }
    public function getallkodeunit()
    {
        $data = DB::table('unit')
            ->select('id', 'unit')
            ->get();
        return response()->json($data);
    }

    public function masuk()
    {
        $parameter = [
            "modulname" => "masuk",
            "title" => "Login",
        ];
        return view('hrd.masuk', $parameter);
    }

    public function redirect(Request $request)
    {
        $username = $request->input('username');
        $password = $request->input('password');

        // Retrieve the user from the 'user' table based on the username
        $user = DB::table('user as u')
            ->leftJoin('kontrakpegawai as k', 'u.username', 'k.nip')
            ->where('username', $username)
            ->first();

        // Check if user exists and if the provided password is correct
        if ($user && Hash::check($password, $user->password)) {

            // Store user data in the session
            $s = [
                'username' => $user->username,
                'namalengkap' => $user->namalengkap,
                'iddepartemen' => $user->iddepartemen,
                'idleveljabatan' => $user->idleveljabatan
            ];

            Session::put($s);

            // Redirect to the home page
            return redirect()->to('http://127.0.0.1:8000/home');
        } else {
            // If credentials are incorrect, return an error response
            return response()->json(['error' => 'Invalid credentials'], 401);
        }
    }



    public function keluar()
    {
        return Redirect::to('http://127.0.0.1:8000/masuk');
    }

    public function jeniscuti()
    {
        $parameter = [
            "modulname" => "jeniscuti",
            "title" => "Jenis Cuti",
        ];
        return view('hrd.jeniscuti', $parameter);
    }

    public function getalljeniscuti()
    {
        $data = DB::table('jeniscuti')->get();
        return response()->json($data);
    }
    public function pengajuancuti()
    {
        $parameter = [
            "modulname" => "pengajuancuti",
            "title" => "Pengajuan Cuti Anda",
        ];
        return view('hrd.pengajuancuti', $parameter);
    }

    public function getallpengajuancuti()
    {
        $username = Session::get('username');

        $data = DB::table('pengajuancuti as p')
            ->leftJoin('jeniscuti as j', 'p.idjeniscuti', 'j.id')
            ->leftJoin('kontrakpegawai as k', 'p.atasan', 'k.nip')
            ->where('p.nip', $username)
            ->select('p.id', 'p.tanggalpengajuan', 'p.dari', 'p.sampai', 'j.jeniscuti', 'k.namalengkap', 'p.hrd', 'p.operasional', 'p.direksi', 'p.status', 'p.alasanditolak')
            ->get();

        return response()->json($data);
    }
    
    public function getatasan() {
        $iddepartemen = Session::get('iddepartemen');

        $highestPosition = DB::table('kontrakpegawai as k')
            ->leftJoin('leveljabatan as l', 'k.idleveljabatan', 'l.id')
            ->where('k.iddepartemen', $iddepartemen)
            ->orderBy('l.leveljabatan', 'asc')
            ->select('k.nip')
            ->first();

        return $highestPosition->nip;
    }

    // public function getbawahan() {
    //     // Mendapatkan departemen dari sesi
    //     $iddepartemen = Session::get('iddepartemen');
    
    //     // Mendapatkan NIP atasan
    //     $nipAtasan = $this->getatasan();
    
    //     // Mendapatkan level jabatan atasan
    //     $levelAtasan = DB::table('kontrakpegawai as k')
    //         ->leftJoin('leveljabatan as l', 'k.idleveljabatan', '=', 'l.id')
    //         ->where('k.nip', $nipAtasan)
    //         ->select('l.leveljabatan')
    //         ->first();
    
    //     // Mencari semua karyawan yang memiliki level jabatan lebih rendah dari atasan dalam departemen yang sama
    //     $bawahan = DB::table('kontrakpegawai as k')
    //         ->leftJoin('leveljabatan as l', 'k.idleveljabatan', '=', 'l.id')
    //         ->where('k.iddepartemen', $iddepartemen)
    //         ->where('l.leveljabatan', '>', $levelAtasan->leveljabatan)
    //         ->select('k.nip')
    //         ->get();
    
    //     return $bawahan;
    // }

    public function simpanpengajuancuti(Request $request)
{
    $username = Session::get('username');

    $validated = $request->validate([
        'tanggalpengajuan' => 'required|date',
        'idjeniscuti' => 'required|integer|exists:jeniscuti,id',
        'dari' => 'required|date',
        'sampai' => 'required|date',
        'keterangan' => 'required|string',
        'alamatcuti' => 'required|string',
        'kontak' => 'required|string|max:50',
        'harikerja' => 'required|integer|min:1',
    ]);

    $startDate = new \DateTime($validated['dari']);
    $endDate = new \DateTime($validated['sampai']);
    $harikerja = 0;

    for ($date = $startDate; $date <= $endDate; $date->modify('+1 day')) {
        $dayOfWeek = $date->format('w');
        if ($dayOfWeek != 0 && $dayOfWeek != 6) { // Exclude Sundays (0) and Saturdays (6)
            $harikerja++;
        }
    }

    DB::table('pengajuancuti')->insert([
        'tanggalpengajuan' => $validated['tanggalpengajuan'],
        'idjeniscuti' => $validated['idjeniscuti'],
        'dari' => $validated['dari'],
        'sampai' => $validated['sampai'],
        'keterangan' => $validated['keterangan'],
        'alamatcuti' => $validated['alamatcuti'],
        'kontak' => $validated['kontak'],
        'harikerja' => $harikerja,
        'atasan' => $this->getatasan(),
        'hrd' => null,
        'operasional' => null,
        'direksi' => null,
        'status' => null,
        'alasanditolak' => null,
        'nip' => $username,
        'jam' => now()
    ]);

    return response()->json(['message' => 'Data berhasil ditambahkan!'], 201);
}



    public function tambahpengajuancuti()
    {
        $parameter = [
            "title" => "Tambah Pengajuan Cuti",
        ];

        return view('hrd.tambahpengajuancuti', $parameter);
    }

    public function editpengajuancuti($id)
    {
        $parameter = [
            'id' => $id,
            'title' => 'Edit Pengajuan Cuti',
        ];

        return view('hrd.editpengajuancuti', $parameter);
    }

    public function prevpengajuancuti($id)
    {
        $data = DB::table('pengajuancuti')->where('id', $id)->first();
        return response()->json($data);
    }

    public function updatepengajuancuti(Request $request)
    {
        $validated = $request->validate([
            'id' => 'required|exists:pengajuancuti,id',
            'tanggalpengajuan' => 'required|date',
            'idjeniscuti' => 'required|integer|exists:jeniscuti,id',
            'dari' => 'required|date',
            'sampai' => 'required|date',
            'keterangan' => 'required|string',
            'alamatcuti' => 'required|string',
            'kontak' => 'required|string|max:50',
            'harikerja' => 'required|integer|min:1',
        ]);

        $startDate = new \DateTime($validated['dari']);
        $endDate = new \DateTime($validated['sampai']);
        $harikerja = 0;

        for ($date = $startDate; $date <= $endDate; $date->modify('+1 day')) {
            $dayOfWeek = $date->format('w');
            if ($dayOfWeek != 0 && $dayOfWeek != 6) { // Exclude Sundays (0) and Saturdays (6)
                $harikerja++;
            }
        }

        DB::table('pengajuancuti')
            ->where('id', $request['id'])
            ->update([
                'tanggalpengajuan' => $validated['tanggalpengajuan'],
                'idjeniscuti' => $validated['idjeniscuti'],
                'dari' => $validated['dari'],
                'sampai' => $validated['sampai'],
                'keterangan' => $validated['keterangan'],
                'alamatcuti' => $validated['alamatcuti'],
                'kontak' => $validated['kontak'],
                'harikerja' => $harikerja,
                'atasan' => null,
                'hrd' => null,
                'operasional' => null,
                'direksi' => null,
                'status' => null,
                'alasanditolak' => null,
            ]);

        return response()->json(['message' => 'Data has been saved successfully.']);
    }

    public function approval() {
        $param = [
            'modulname' => 'Approval Ajuan Cuti',
            'title' => 'Approval Ajuan Cuti'
        ];

        return view('hrd.approval', $param);
    }

    public function getallapproval() {
        $username = Session::get('username');
        
        // Ambil data iddepartemen user yang login
        $user = DB::table('kontrakpegawai as k')
            ->join('daftardepartemen as d', 'k.iddepartemen', '=', 'd.id')
            ->where('k.nip', $username)
            ->select('k.iddepartemen')
            ->first();
        
        // Cek apakah user adalah HRD (iddepartemen = 7)
        if ($user && $user->iddepartemen == 7) {
            // Jika HRD, tampilkan semua pengajuan cuti yang sudah di-approve
            $data = DB::table('pengajuancuti as p')
                ->leftJoin('kontrakpegawai as k', 'p.nip', '=', 'k.nip')
                ->leftJoin('kontrakpegawai as x', 'p.atasan', '=', 'x.nip')
                ->leftJoin('leveljabatan as l', 'k.idleveljabatan', '=', 'l.id')
                ->where('p.approvebyatasan', 1) // Hanya yang sudah di-approve oleh atasan
                ->select('p.id', 'p.tanggalpengajuan', 'k.namalengkap', 'p.jam', 'p.alamatcuti', 'p.keterangan', 'x.namalengkap as n')
                ->get();
        } else {
            // Jika bukan HRD, tampilkan hanya data bawahan dari user yang login yang belum di-approve
            $data = DB::table('pengajuancuti as p')
                ->leftJoin('kontrakpegawai as k', 'p.nip', '=', 'k.nip')
                ->leftJoin('kontrakpegawai as x', 'p.atasan', '=', 'x.nip')
                ->leftJoin('leveljabatan as l', 'k.idleveljabatan', '=', 'l.id')
                ->where('p.atasan', $username)
                ->where('p.approvebyatasan', 0)
                ->select('p.id', 'p.tanggalpengajuan', 'k.namalengkap', 'p.jam', 'p.alamatcuti', 'p.keterangan', 'x.namalengkap as n')
                ->get();
        }
    
        return response()->json($data);
    }
    
    
    
    

    public function approvebyatasan(Request $request) {
        // Validate the request
        $request->validate([
            'id' => 'required|integer|exists:pengajuancuti,id',
        ]);
    
        // Update the approval status
        $updated = DB::table('pengajuancuti')
            ->where('id', $request->input('id'))
            ->update(['approvebyatasan' => 1]);
    
        // Return a response
        if ($updated) {
            return response()->json(['success' => true, 'message' => 'Approval successful!']);
        }
    
        return response()->json(['success' => false, 'message' => 'Failed to approve request.'], 400);
    }

    public function approvebyhrd(Request $request) {
        // Validate the request
        $request->validate([
            'id' => 'required|integer|exists:pengajuancuti,id',
        ]);
    
        // Update the approval status
        $updated = DB::table('pengajuancuti')
            ->where('id', $request->input('id'))
            ->update(['approvebyhrd' => 1]);
    
        // Return a response
        if ($updated) {
            return response()->json(['success' => true, 'message' => 'Approval successful!']);
        }
    
        return response()->json(['success' => false, 'message' => 'Failed to approve request.'], 400);
    }
    
    public function checkhrd()
    {
        // Ambil username dari session
        $username = Session::get('username');

        // Cari data user berdasarkan username
        $user = DB::table('kontrakpegawai as k')
            ->join('daftardepartemen as d', 'k.iddepartemen', '=', 'd.id')
            ->where('k.nip', $username)
            ->select('k.iddepartemen')
            ->first();

        // Cek apakah user berada di departemen HRD (iddepartemen = 7)
        $isHRD = ($user && $user->iddepartemen == 7);

        // Kembalikan respon JSON dengan status HRD
        return response()->json(['isHRD' => $isHRD]);
    }

    public function pengajuanpjs()
    {
        $parameter = [
            'modulname' => 'Pengajuan PJS',
            'title' => 'Pengajuan PJS'
        ];

        return view('hrd.pengajuanpjs', $parameter);
    }


    public function getallpengajuanpjs()
    {
        $data = DB::table('pengajuanpjs')
            ->select('tanggalpengajuan', 'dari', 'sampai', 'kotatujuan', 'keperluanbisnis')
            ->get();
        return response()->json($data);
    }

    public function tambahpengajuanpjs()
    {
        $parameter = [
            'title' => 'Tambah Pengajuan PJS'
        ];

        return view('hrd.tambahpengajuanpjs', $parameter);
    }

    public function getstatushoteltujuan()
    {
        $data = DB::table('statushoteltujuan')->get();

        return response()->json($data);
    }

    public function simpanpengajuanpjs(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'tanggalpengajuan' => 'required|date',
            'dari' => 'required|date',
            'sampai' => 'required|date',
            'extraoff' => 'nullable|integer',
            'kotatujuan' => 'required|string|max:50',
            'idstatushoteltujuan' => 'required|integer|exists:statushoteltujuan,id',
            'keperluanbisnis' => 'required|string|max:50',
            'tiket' => 'required|string|max:50',
            'remarktiket' => 'required|string|max:50',
            'akomodasi' => 'required|string|max:50',
            'remarkakomodasi' => 'required|string|max:50',
            'transport' => 'required|string|max:50',
            'remarktransport' => 'required|string|max:50',
            'meal' => 'nullable|integer',
            'remarkmeal' => 'required|string|max:50',
            'uangsaku' => 'nullable|integer',
            // 'remarkuangsaku' => 'required|string|max:50',
            // 'lainlain' => 'required|string|max:50',
            // 'remarklainlain' => 'required|string|max:50',
            // 'total' => 'nullable|integer'
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }
        // $startDate = Carbon::parse($validated['dari']);
        // $endDate = Carbon::parse($validated['sampai']);
        // $harikerja = 0;
        // $extraoff = 0;

        // // Fetch holidays from harilibur table
        // $holidays = DB::table('harilibur')
        //     ->where(function ($query) use ($startDate, $endDate) {
        //         $query->whereBetween('dari', [$startDate, $endDate])
        //             ->orWhereBetween('sampai', [$startDate, $endDate])
        //             ->orWhere(function ($query) use ($startDate, $endDate) {
        //                 $query->where('dari', '<=', $startDate)
        //                     ->where('sampai', '>=', $endDate);
        //             });
        //     })
        //     ->get();

        // $holidaySet = collect();

        // foreach ($holidays as $holiday) {
        //     $currentHolidayStart = Carbon::parse($holiday->dari);
        //     $currentHolidayEnd = Carbon::parse($holiday->sampai);

        //     while ($currentHolidayStart <= $currentHolidayEnd) {
        //         $holidaySet->push($currentHolidayStart->toDateString());
        //         $currentHolidayStart->addDay();
        //     }
        // }

        // for ($date = $startDate->copy(); $date <= $endDate; $date->addDay()) {
        //     $dayOfWeek = $date->dayOfWeek;

        //     if ($dayOfWeek == Carbon::SUNDAY || $dayOfWeek == Carbon::SATURDAY) {
        //         $extraoff++;
        //     }

        //     if ($holidaySet->contains($date->toDateString())) {
        //         $extraoff++;
        //     } else {
        //         if ($dayOfWeek != Carbon::SUNDAY && $dayOfWeek != Carbon::SATURDAY) {
        //             $harikerja++;
        //         }
        //     }
        // }

        // // Fetch the meal value based on namalengkap
        // $namalengkap = session('namalengkap');
        // if (!$namalengkap) {
        //     return response()->json(['error' => 'Session data not found'], 400);
        // }

        // $employee = DB::table('kontrakpegawai')
        //     ->where('namalengkap', $namalengkap)
        //     ->first();

        // $meal = 0;
        // if ($employee) {
        //     $leveljabatan = DB::table('leveljabatan')
        //         ->where('id', $employee->idleveljabatan)
        //         ->first();

        //     if ($leveljabatan) {
        //         $meal = $leveljabatan->uangmakan;
        //     }
        // }

        // $total = $meal + ($request->input('uangsaku', 0));

        DB::table('pengajuanpjs')->insert([
            'tanggalpengajuan' => $request->tanggalpengajuan,
            'dari' => $request->dari,
            'sampai' => $request->sampai,
            'extraoff' => $request->extraoff,
            'kotatujuan' => $request->kotatujuan,
            'idstatushoteltujuan' => $request->idstatushoteltujuan,
            'keperluanbisnis' => $request->keperluanbisnis,
            'tiket' => $request->tiket,
            'remarktiket' => $request->remarktiket,
            'akomodasi' => $request->akomodasi,
            'remarkakomodasi' => $request->remarkakomodasi,
            'transport' => $request->transport,
            'remarktransport' => $request->remarktransport,
            'meal' => $request->meal,
            'remarkmeal' => $request->remarkmeal,
            'uangsaku' => $request->uangsaku,
            'remarkuangsaku' => $request->remarkuangsaku,
            'lainlain' => $request->lainlain,
            'remarklainlain' => $request->remarklainlain,
            'total' => $request->total,
        ]);

        $respon = [
            "status" => '1',
            "keterangan" => 'Data telah disimpan'
        ];

        return response()->json($respon);
    }



    public function getholidays(Request $request)
    {
        $holidays = DB::table('harilibur')
            ->whereBetween('dari', [$request->dari, $request->sampai])
            ->orWhereBetween('sampai', [$request->dari, $request->sampai])
            ->get();

        return response()->json($holidays);
    }

    public function getMealForUser()
    {
        $namalengkap = session('namalengkap'); // Retrieve the full name from session
        if (!$namalengkap) {
            return response()->json(['meal' => 0], 403); // Unauthorized if no session full name
        }

        // Find the NIP from the full name
        $employee = DB::table('kontrakpegawai')
            ->where('namalengkap', $namalengkap)
            ->first();

        if (!$employee) {
            return response()->json(['meal' => 0], 404); // Not found if employee doesn't exist
        }

        // Find the meal value from leveljabatan
        $meal = DB::table('leveljabatan')
            ->where('id', $employee->idleveljabatan)
            ->pluck('uangmakan')
            ->first();

        return response()->json(['meal' => $meal ? $meal : 0]);
    }

    public function getUangSaku(Request $request)
    {
        $user = Session::get('idleveljabatan'); // assuming the user is authenticated

        $duration = $request->input('params.duration'); // duration in days

        $uangSakuField = '';
        if ($duration <= 7) {
            $uangSakuField = 'uangsaku_7h';
        } elseif ($duration <= 29) {
            $uangSakuField = 'uangsaku_29h';
        } elseif ($duration >= 30) {
            $uangSakuField = 'uangsaku_30h';
        }


        $uangSaku = DB::table('leveljabatan')
            ->where('id', $user)
            ->value($uangSakuField);

        return response()->json(['uangSaku' => $uangSaku]);
    }

    public function approvepjs() {
        $param = [
            'modulname' => 'approvalperjalanandinas',
            'title' => 'Approval Perjalanan Dinas'
        ];

        return view('hrd.approvepjs', $param);
    }

    public function getallapprovepjs()
{
    // Ambil username dari session
    $username = session('username');

    // Dapatkan idDepartemen berdasarkan username
    $idDepartemen = DB::table('kontrakpegawai')
        ->where('nip', $username)
        ->value('iddepartemen');

    $query = DB::table('pengajuanpjs');

    if ($idDepartemen == 7) {
        // Jika user adalah HRD, tampilkan semua data
        $data = $query->get();
    } elseif ($idDepartemen == 9) {
        // Jika user adalah Operations, tampilkan hanya data dengan hrdapproval = 1
        $data = $query->where('hrdapproval', 1)->get();
    } elseif ($idDepartemen == 6) {
        $data = $query->where('opapproval', 1)->get();
    } else {
        // Jika bukan HRD atau Operations, bisa ditambahkan logika lain atau batasi akses
        $data = []; // Atau bisa return response dengan pesan error
    }

    return response()->json($data);
}


    public function hrdapproval(Request $request) {
        $request->validate([
            'id' => 'required|integer|exists:pengajuanpjs,id',
        ]);
    
        $updated = DB::table('pengajuanpjs')
            ->where('id', $request->input('id'))
            ->update(['hrdapproval' => 1]);

        if ($updated) {
            return response()->json(['success' => true, 'message' => 'Approval successful!']);
        }
    
        return response()->json(['success' => false, 'message' => 'Failed to approve request.'], 400);
    }
    public function opapproval(Request $request) {
        $request->validate([
            'id' => 'required|integer|exists:pengajuanpjs,id',
        ]);
    
        $updated = DB::table('pengajuanpjs')
            ->where('id', $request->input('id'))
            ->update(['opapproval' => 1]);

        if ($updated) {
            return response()->json(['success' => true, 'message' => 'Approval successful!']);
        }
    
        return response()->json(['success' => false, 'message' => 'Failed to approve request.'], 400);
    }

    public function financeapproval(Request $request) {
        $request->validate([
            'id' => 'required|integer|exists:pengajuanpjs,id',
        ]);
    
        $updated = DB::table('pengajuanpjs')
            ->where('id', $request->input('id'))
            ->update(['financeapproval' => 1]);

        if ($updated) {
            return response()->json(['success' => true, 'message' => 'Approval successful!']);
        }
    
        return response()->json(['success' => false, 'message' => 'Failed to approve request.'], 400);
    }

    public function checkDepartment(Request $request)
    {
        // Ambil username dari session
        $username = session('username');

        if (!$username) {
            return response()->json(['error' => 'User not logged in'], 401);
        }

        // Cari iddepartemen dari tabel kontrakpegawai berdasarkan username
        $idDepartemen = DB::table('kontrakpegawai')
            ->where('nip', $username)
            ->value('iddepartemen');

        // Tentukan departemen berdasarkan iddepartemen
        $department = '';

        switch ($idDepartemen) {
            case 7:
                $department = 'HRD';
                break;
            case 9:
                $department = 'Operations';
                break;
            case 6: 
                $department = 'Finance';
                break;
            default:
                $department = 'Unknown';
        }

        return response()->json(['department' => $department]);
    }
}