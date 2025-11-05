<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Daftar Produk - Dlogok Store</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      margin: 0;
      overflow-x: hidden;
      font-family: 'Poppins', sans-serif;
      color: #fff;
      background: linear-gradient(135deg, #090019, #0f0035, #1c004e);
      background-size: 300% 300%;
      animation: bgFlow 10s ease infinite;
    }
    @keyframes bgFlow {
      0% { background-position: 0% 50%; }
      50% { background-position: 100% 50%; }
      100% { background-position: 0% 50%; }
    }

    /* Navbar */
    .navbar {
      background: linear-gradient(90deg, #ff00cc, #00bfff);
      padding: 15px 30px;
      box-shadow: 0 2px 15px rgba(0,0,0,0.5);
    }
    .navbar-brand {
      font-weight: 700;
      color: #fff !important;
    }

    /* Stars animation */
    .stars {
      position: absolute;
      width: 100%;
      height: 100%;
      top: 0;
      left: 0;
      overflow: hidden;
      pointer-events: none;
      z-index: 0;
    }
    .stars span {
      position: absolute;
      width: 3px;
      height: 3px;
      border-radius: 50%;
      animation: moveStar 6s linear infinite;
    }
    @keyframes moveStar {
      from { transform: translateY(0px); opacity: 0.8; }
      to { transform: translateY(700px); opacity: 0; }
    }

    /* Produk Cards */
    .container {
      position: relative;
      z-index: 1;
    }
    .card {
      background: rgba(255, 255, 255, 0.05);
      border: 1px solid rgba(255,255,255,0.1);
      border-radius: 16px;
      overflow: hidden;
      box-shadow: 0 0 15px rgba(255, 0, 204, 0.1);
      backdrop-filter: blur(10px);
      transition: transform 0.3s ease, box-shadow 0.3s ease;
    }
    .card:hover {
      transform: translateY(-10px);
      box-shadow: 0 0 25px rgba(0,234,255,0.6);
    }
    .card img {
      width: 100%;
      height: 220px;
      object-fit: cover;
      transition: transform 0.5s ease;
    }
    .card:hover img {
      transform: scale(1.05);
    }
    .card-title {
      background: linear-gradient(90deg, #00eaff, #ff00cc);
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
      font-weight: 600;
    }
    .card-text {
      color: #ddd;
      font-size: 0.9rem;
      min-height: 60px;
    }

    /* Harga produk (✨ Bright Glow) */
    .harga {
      font-size: 1.2rem;
      font-weight: 700;
      background: linear-gradient(90deg, #00f0ff, #ff00cc, #ff8c00);
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
      animation: shimmer 3s infinite linear;
      text-shadow: 0 0 15px rgba(255, 255, 255, 0.3);
    }
    @keyframes shimmer {
      0% { filter: brightness(1); }
      50% { filter: brightness(1.4); }
      100% { filter: brightness(1); }
    }

    /* Tombol detail */
    .btn-glow {
      background: linear-gradient(90deg, #00eaff, #ff00cc);
      border: none;
      color: #fff;
      border-radius: 25px;
      padding: 8px 18px;
      font-weight: 600;
      box-shadow: 0 0 10px rgba(0, 234, 255, 0.4);
      transition: all 0.3s ease;
      animation: pulse 2.5s infinite ease-in-out;
    }
    @keyframes pulse {
      0%, 100% { box-shadow: 0 0 15px rgba(255,0,204,0.6); transform: scale(1); }
      50% { box-shadow: 0 0 25px rgba(0,234,255,0.9); transform: scale(1.05); }
    }
    .btn-glow:hover {
      transform: scale(1.08);
      box-shadow: 0 0 25px rgba(255,255,255,0.8);
    }

    footer {
      margin-top: 60px;
      text-align: center;
      color: #ccc;
      font-size: 0.9rem;
    }
  </style>
</head>
<body>

  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg">
    <div class="container">
      <a class="navbar-brand" href="{{ route('beranda') }}">Dlogok Store</a>
      <div class="d-flex">
        <a href="{{ route('logout') }}" class="btn btn-outline-light btn-sm">Logout</a>
      </div>
    </div>
  </nav>

  <!-- Stars animation -->
  <div class="stars">
    @for ($i = 0; $i < 50; $i++)
      <span style="
        top:{{ rand(-100,100) }}%;
        left:{{ rand(1,100) }}%;
        background: {{ ['#00eaff','#ff00cc','#ffa500'][rand(0,2)] }};
        animation-delay: {{ rand(0,5) }}s;
        animation-duration: {{ rand(4,8) }}s;">
      </span>
    @endfor
  </div>

  <div class="container py-5">
    <div class="text-center mb-5">
      <h2 style="background:linear-gradient(90deg,#00eaff,#ff00cc);-webkit-background-clip:text;-webkit-text-fill-color:transparent;font-weight:700;">📱 Koleksi Smartphone Terbaru 2025</h2>
      <p class="text-light">Pilih produk terbaik dari brand favoritmu dengan harga kompetitif dan jaminan 100% original.</p>
    </div>

    <div class="row g-4">
      @foreach($produk as $p)
      <div class="col-md-4 col-lg-3">
        <div class="card h-100">
          <img src="{{ asset($p['foto']) }}" alt="{{ $p['nama'] }}">
          <div class="card-body text-center">
            <h5 class="card-title">{{ $p['nama'] }}</h5>
            <p class="card-text">{{ $p['deskripsi'] }}</p>
            <p class="harga">{{ $p['harga'] }}</p>
            <a href="{{ route('produk.detail', $p['id']) }}" class="btn btn-glow btn-sm">Lihat Detail</a>
          </div>
        </div>
      </div>
      @endforeach
    </div>
  </div>

  <footer>
    © 2025 <b>Dlogok Store</b> • Semua hak dilindungi
  </footer>
</body>
</html>
