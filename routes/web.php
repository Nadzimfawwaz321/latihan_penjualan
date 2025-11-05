<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| DLOGOK STORE - ROUTES FIX FINAL (12 PRODUK LENGKAP)
|--------------------------------------------------------------------------
*/

Route::middleware(['web'])->group(function () {

    // 🔐 LOGIN
    Route::get('/login', function () {
        return view('login');
    })->name('login');

    Route::post('/login', function (Request $request) {
        $username = $request->username;
        $password = $request->password;

        if ($username === 'admin' && $password === '12345') {
            session(['logged_in' => true]);
            return redirect()->route('beranda');
        }

        return back()->with('error', 'Username atau password salah!');
    })->name('login.process');

    // 🚪 LOGOUT
    Route::get('/logout', function () {
        session()->flush();
        return redirect()->route('login');
    })->name('logout');

    // 🏠 BERANDA (WAJIB LOGIN)
    Route::get('/', function () {
        if (!session('logged_in')) {
            return redirect()->route('login');
        }

        return view('beranda');
    })->name('beranda');

    // 📱 PRODUK (12 PRODUK)
    Route::get('/produk', function () {

        if (!session('logged_in')) {
            return redirect()->route('login');
        }

        $produk = [
            ['id'=>1, 'nama'=>'iPhone 15 Pro Max','brand'=>'Apple','harga'=>'Rp 24.999.000','foto'=>'images/iphone15promax.jpg','deskripsi'=>'iPhone 15 Pro Max, A17 chip, kamera 48MP, layar ProMotion 120Hz.'],
            ['id'=>2, 'nama'=>'Samsung Galaxy S24 Ultra','brand'=>'Samsung','harga'=>'Rp 19.499.000','foto'=>'images/galaxyS24ultra.jpg','deskripsi'=>'Samsung S24 Ultra dengan S-Pen dan kamera 200MP.'],
            ['id'=>3, 'nama'=>'Google Pixel 8 Pro','brand'=>'Google','harga'=>'Rp 13.250.000','foto'=>'images/pixel8pro.jpg','deskripsi'=>'Pixel 8 Pro, Tensor G3 dan kamera AI terbaik.'],
            ['id'=>4, 'nama'=>'Xiaomi 14 Pro','brand'=>'Xiaomi','harga'=>'Rp 11.750.000','foto'=>'images/xiaomi14pro.jpg','deskripsi'=>'Xiaomi 14 Pro dengan fast charging 120W super cepat.'],
            ['id'=>5, 'nama'=>'OnePlus 12','brand'=>'OnePlus','harga'=>'Rp 10.999.000','foto'=>'images/oneplus12.jpg','deskripsi'=>'OnePlus 12 dengan OxygenOS ringan & mulus.'],
            ['id'=>6, 'nama'=>'OPPO Find X7 Pro','brand'=>'OPPO','harga'=>'Rp 12.650.000','foto'=>'images/findx7pro.jpg','deskripsi'=>'Find X7 Pro dengan kamera flagship premium.'],
            ['id'=>7, 'nama'=>'Vivo X100 Pro','brand'=>'Vivo','harga'=>'Rp 12.100.000','foto'=>'images/vivox100pro.jpg','deskripsi'=>'Vivo X100 Pro dengan kamera Zeiss dan layar 120Hz.'],
            ['id'=>8, 'nama'=>'Realme GT 6','brand'=>'Realme','harga'=>'Rp 7.499.000','foto'=>'images/realmegt6.jpg','deskripsi'=>'Realme GT 6 dengan performa kencang di kelas menengah.'],
            ['id'=>9, 'nama'=>'Samsung Galaxy A55','brand'=>'Samsung','harga'=>'Rp 4.199.000','foto'=>'images/galaxya55.jpg','deskripsi'=>'Samsung Galaxy A55, HP midrange terbaik 2025.'],
            ['id'=>10, 'nama'=>'iPhone SE (2024)','brand'=>'Apple','harga'=>'Rp 6.999.000','foto'=>'images/iphonese2024.jpg','deskripsi'=>'iPhone SE 2024 compact tapi super bertenaga.'],
            ['id'=>11, 'nama'=>'Motorola Edge 50','brand'=>'Motorola','harga'=>'Rp 5.299.000','foto'=>'images/motoedge50.jpg','deskripsi'=>'Motorola Edge 50 dengan layar OLED jernih.'],
            ['id'=>12, 'nama'=>'Honor Magic5 Pro','brand'=>'Honor','harga'=>'Rp 9.350.000','foto'=>'images/honormagic5pro.jpg','deskripsi'=>'Honor Magic5 Pro: kamera AI dan performa tinggi.'],
        ];

        return view('produk', compact('produk'));
    })->name('produk');

    // 🔍 DETAIL PRODUK
    Route::get('/produk/{id}', function ($id) {

        $produk = [
            1 => ['nama'=>'iPhone 15 Pro Max','harga'=>'Rp 24.999.000','foto'=>'images/iphone15promax.jpg','deskripsi'=>'iPhone 15 Pro Max dengan A17 dan kamera 48MP terbaik.'],
            2 => ['nama'=>'Samsung Galaxy S24 Ultra','harga'=>'Rp 19.499.000','foto'=>'images/galaxyS24ultra.jpg','deskripsi'=>'Samsung S24 Ultra flagship dengan S-Pen.'],
            3 => ['nama'=>'Google Pixel 8 Pro','harga'=>'Rp 13.250.000','foto'=>'images/pixel8pro.jpg','deskripsi'=>'Pixel 8 Pro dengan AI kamera tercanggih.'],
            4 => ['nama'=>'Xiaomi 14 Pro','harga'=>'Rp 11.750.000','foto'=>'images/xiaomi14pro.jpg','deskripsi'=>'Xiaomi 14 Pro fast charging 120W super cepat.'],
            5 => ['nama'=>'OnePlus 12','harga'=>'Rp 10.999.000','foto'=>'images/oneplus12.jpg','deskripsi'=>'OnePlus 12 OxygenOS mulus dan flagship.'],
            6 => ['nama'=>'OPPO Find X7 Pro','harga'=>'Rp 12.650.000','foto'=>'images/findx7pro.jpg','deskripsi'=>'OPPO Find X7 Pro kamera flagship premium.'],
            7 => ['nama'=>'Vivo X100 Pro','harga'=>'Rp 12.100.000','foto'=>'images/vivox100pro.jpg','deskripsi'=>'Vivo X100 Pro kamera Zeiss.'],
            8 => ['nama'=>'Realme GT 6','harga'=>'Rp 7.499.000','foto'=>'images/realmegt6.jpg','deskripsi'=>'Realme GT 6 performa gaming kelas menengah.'],
            9 => ['nama'=>'Samsung Galaxy A55','harga'=>'Rp 4.199.000','foto'=>'images/galaxya55.jpg','deskripsi'=>'Samsung A55 midrange favorit.'],
            10 => ['nama'=>'iPhone SE (2024)','harga'=>'Rp 6.999.000','foto'=>'images/iphonese2024.jpg','deskripsi'=>'iPhone SE 2024 compact powerful.'],
            11 => ['nama'=>'Motorola Edge 50','harga'=>'Rp 5.299.000','foto'=>'images/motoedge50.jpg','deskripsi'=>'Motorola Edge 50 layar OLED cerah.'],
            12 => ['nama'=>'Honor Magic5 Pro','harga'=>'Rp 9.350.000','foto'=>'images/honormagic5pro.jpg','deskripsi'=>'Honor Magic5 Pro kamera AI super detail.'],
        ];

        if (!isset($produk[$id])) abort(404);

        return view('detail', ['detail' => $produk[$id]]);
    })->name('produk.detail');

});
