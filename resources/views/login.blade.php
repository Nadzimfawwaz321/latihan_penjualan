<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="utf-8">
  <title>Login - TokoHP</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
  <div class="row justify-content-center">
    <div class="col-md-5">
      <div class="card fade-in">
        <div class="card-header bg-gradient-brand text-white text-center">
          <h4>Login Admin</h4>
        </div>
        <div class="card-body">
          @if(session('error'))
            <div class="alert alert-danger">{{ session('error') }}</div>
          @endif
          <form action="{{ route('login.process') }}" method="POST">
            @csrf
            <div class="mb-3">
              <label class="form-label">Username</label>
              <input type="text" name="username" class="form-control" required>
            </div>
            <div class="mb-3">
              <label class="form-label">Password</label>
              <input type="password" name="password" class="form-control" required>
            </div>
            <div class="d-grid">
              <button class="btn btn-brand">Login</button>
            </div>
          </form>
        </div>
        <div class="card-footer text-center small">
          Gunakan <b>admin</b> / <b>12345</b>
        </div>
      </div>
    </div>
  </div>
</div>
</body>
</html>
