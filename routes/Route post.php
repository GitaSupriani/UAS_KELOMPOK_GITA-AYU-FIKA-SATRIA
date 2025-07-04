php
use Illuminate\Http\Request;

Route::post('/login', function (Request $request) {
    // Contoh: Login manual (belum pakai database)
    $email = $request->email;
    $password = $request->password;

    if ($email === 'admin@example.com' && $password === '123456') {
        return 'Login Berhasil!';
    } else {
        return 'Login Gagal!';
    }
});
