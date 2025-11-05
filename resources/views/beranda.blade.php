<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Dlogok Store - Toko HP Terbaru 2025</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      margin: 0;
      overflow-x: hidden;
      font-family: 'Poppins', sans-serif;
      color: #fff;
      background: linear-gradient(135deg, #0b0019, #0a0022, #130040);
      background-size: 300% 300%;
      animation: bgMove 10s ease infinite;
    }

    @keyframes bgMove {
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
      display: flex;
      align-items: center;
      gap: 8px;
    }
    .navbar-brand::before {
      content: "✨";
      animation: rotateStar 3s infinite linear;
    }
    @keyframes rotateStar {
      0% { transform: rotate(0deg); }
      100% { transform: rotate(360deg); }
    }

    /* Hero */
    .hero {
      text-align: center;
      padding: 140px 0;
      position: relative;
      z-index: 1;
      overflow: hidden;
    }
    h1 {
      font-size: 2.8rem;
      opacity: 0;
      animation: fadeSlideDown 1.5s ease forwards;
    }
    h1 span {
      background: linear-gradient(90deg, #00eaff, #ff00cc, #ff9900);
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
      font-weight: 700;
    }
    .desc {
      color: #d3d3d3;
      max-width: 650px;
      margin: 20px auto;
      line-height: 1.7;
      opacity: 0;
      animation: fadeSlideUp 1.5s ease 0.5s forwards;
    }
    @keyframes fadeSlideDown {
      from { opacity: 0; transform: translateY(-30px); }
      to { opacity: 1; transform: translateY(0); }
    }
    @keyframes fadeSlideUp {
      from { opacity: 0; transform: translateY(30px); }
      to { opacity: 1; transform: translateY(0); }
    }

    /* Tombol Glow Animasi */
    .btn-glow {
      background: linear-gradient(90deg, #00eaff, #ff00cc);
      border: none;
      color: #fff;
      font-weight: 600;
      border-radius: 40px;
      box-shadow: 0 0 15px rgba(0, 234, 255, 0.4);
      transition: all 0.3s ease;
      padding: 12px 32px;
      font-size: 1.1rem;
      position: relative;
      z-index: 2;
      animation: pulse 2.5s infinite ease-in-out;
    }
    @keyframes pulse {
      0%, 100% { box-shadow: 0 0 20px rgba(255,0,204,0.7); transform: scale(1); }
      50% { box-shadow: 0 0 30px rgba(0,234,255,0.9); transform: scale(1.05); }
    }
    .btn-glow:hover {
      transform: scale(1.08);
      box-shadow: 0 0 25px rgba(255, 255, 255, 0.8);
    }

    /* Efek bintang */
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

    /* Footer */
    footer {
      margin-top: 80px;
      padding: 20px;
      text-align: center;
      font-size: 0.9rem;
      color: #ccc;
    }
  </style>
</head>
<body>

  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg">
    <div class="container">
      <a class="navbar-brand" href="#">Dlogok Store</a>
      <div class="d-flex">
        <a href="{{ route('logout') }}" class="btn btn-outline-light btn-sm">Logout</a>
      </div>
    </div>
  </nav>

  <!-- Hero -->
  <section class="hero">
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

    <h1>🌟 Selamat Datang di <span>Dlogok Store</span></h1>
    <p class="desc">
      Dlogok Store adalah pusat penjualan smartphone terbaru 2025 dengan koleksi terbaik dari brand ternama seperti Apple, Samsung, Xiaomi, dan lainnya.
      Kami berkomitmen memberikan pengalaman belanja yang cepat, mudah, dan memuaskan dengan jaminan kualitas produk 100% original.
    </p>
    <a href="{{ route('produk') }}" class="btn btn-glow mt-4">🔍 Lihat Produk Sekarang</a>
  </section>

  <!-- Footer -->
  <footer>
    © 2025 <b>Dlogok Store</b> • Semua hak dilindungi
  </footer>
</body>
</html>
