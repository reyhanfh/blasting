use Illuminate\Support\Facades\Cookie;

// ...

Route::post('/save-to-cookie', function(Request $request) {
    $dataToSave = [
        'variable1' => $request->input('variable1'),
        'variable2' => $request->input('variable2'),
        // Tambahkan variabel lain sesuai kebutuhan
    ];

    // Simpan data ke dalam cookie, ubah 'my_data' sesuai kebutuhan Anda
    $cookie = Cookie::make('my_data', json_encode($dataToSave), 60);

    return response()->json(['message' => 'Data saved to cookie successfully'])->withCookie($cookie);
});



use Illuminate\Http\Request;

// ...

Route::get('/retrieve-from-cookie', function(Request $request) {
    // Ambil nilai cookie dengan nama 'my_data'
    $cookieValue = $request->cookie('my_data');

    // Dekode nilai JSON dari cookie
    $decodedData = json_decode($cookieValue, true); // Parameter kedua true agar mengembalikan array associative

    // Sekarang $decodedData berisi data yang Anda simpan sebelumnya dalam cookie
    // Anda dapat mengakses variabel-variabel tersebut seperti berikut:
    $variable1 = $decodedData['variable1'];
    $variable2 = $decodedData['variable2'];

    // Lakukan apa pun yang diperlukan dengan variabel-variabel tersebut

    return response()->json(['message' => 'Data retrieved from cookie successfully']);
});

select: function(event, ui) {
                $("#suggest").val(ui.item.label);
                var selectedData = ui.item.data;
                
                // Simpan data ke dalam cookie menggunakan AJAX ke endpoint di Laravel
                $.ajax({
                    url: '/save-to-cookie', // Gantilah dengan endpoint yang sesuai di Laravel
                    method: 'POST',
                    data: {
                        selectedData: selectedData
                    },
                    success: function(response) {
                        console.log('Data saved to cookie successfully');
                    }
                });

                return false;
            }


            use Illuminate\Support\Facades\Cookie;

// ...

// Ambil nilai cookie yang sudah ada
$existingCookie = json_decode(request()->cookie('mycookies'), true);

// Tambahkan variabel baru
$existingCookie['newVariable'] = $newValue;

// Enkode kembali array dengan variabel baru ke dalam format JSON
$updatedCookie = json_encode($existingCookie);

// Setel kembali cookie dengan nilai yang telah diperbarui
$cookie = Cookie::make('mycookies', $updatedCookie, 1440);

return response()->json(['message' => 'Cookie updated successfully'])->withCookie($cookie);