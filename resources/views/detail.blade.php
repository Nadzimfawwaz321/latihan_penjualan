<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="utf-8">
  <title>Detail Produk - {{ $detail['nama'] }}</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="{{ asset('css/style.css') }}" rel="stylesheet">
  <style>
    body {
      background: radial-gradient(circle at top, #0a0a15, #060611 90%);
      color: #fff;
      font-family: 'Poppins', sans-serif;
    }
    .card-detail {
      background: rgba(17, 17, 34, 0.8);
      border-radius: 16px;
      box-shadow: 0 0 20px rgba(255, 0, 204, 0.15);
      padding: 30px;
    }
    .btn-glow {
      background: linear-gradient(90deg, #00eaff, #ff00cc);
      border: none;
      color: #fff;
      font-weight: 600;
      border-radius: 30px;
      box-shadow: 0 0 15px rgba(0, 234, 255, 0.4);
      transition: all 0.3s ease;
    }
    .btn-glow:hover {
      transform: scale(1.08);
      box-shadow: 0 0 25px rgba(255, 0, 204, 0.7);
    }
    .img-fluid {
      border-radius: 16px;
      transition: transform 0.5s ease, box-shadow 0.5s ease;
    }
    .img-fluid:hover {
      transform: scale(1.05);
      box-shadow: 0 0 25px rgba(255, 0, 204, 0.4);
    }
    .price {
      background: linear-gradient(90deg, #ff00cc, #00eaff);
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
      font-weight: 700;
      font-size: 1.5rem;
    }
  </style>
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-gradient-brand">
    <div class="container">
      <a class="navbar-brand" href="{{ route('produk') }}">✨ TokoHP Terbaru</a>
      <div class="d-flex">
        <a href="{{ route('logout') }}" class="btn btn-outline-light btn-sm">Logout</a>
      </div>
    </div>
  </nav>

  <div class="container mt-5 fade-in">
    <div class="row justify-content-center">
      <div class="col-md-10 card-detail">
        <div class="row g-4 align-items-center">
          <div class="col-md-5 text-center">
            <!-- 🔥 Gambar lokal dari public/images -->
            <img src="{{ asset($detail['foto']) }}" alt="{{ $detail['nama'] }}" class="img-fluid shadow-lg">
          </div>

          <div class="col-md-7">
            <h2>{{ $detail['nama'] }}</h2>
            <h4 class="price">{{ $detail['harga'] }}</h4>
            <p class="mt-3">{{ $detail['deskripsi'] }}</p>

            <div class="mt-4 d-flex gap-3">
              <button class="btn btn-glow btn-lg">💸 Beli Sekarang</button>
              <a href="{{ route('produk') }}" class="btn btn-outline-light btn-lg">⬅️ Kembali</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <footer class="text-center mt-5 py-4">
    <small>© {{ date('Y') }} <b>TokoHP</b> • Dibuat dengan 💙 oleh ChatGPT</small>
  </footer>
</body>
</html>
