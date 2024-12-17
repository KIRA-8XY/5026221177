<!DOCTYPE html>
<html lang="en">
<head>
  <title>Muhammad Ariq Alwin - 5026221177</title>

  <!-- Meta Information -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

  <!-- FontAwesome (if required) -->
  <script src="/js/fontawesome.js"></script>
  <script src="/js/solid.js"></script>
  <script src="/js/regular.js"></script>
</head>
<body class="bg-light">

  <!-- Navigation Bar -->
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="/pegawai">Pegawai</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/modem">Modem</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/karyawan">EAS</a>
            </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Content Section -->
  <div class="container mt-4">
    <div class="text-center">
      <h2 class="fw-bold text-primary">Muhammad Ariq Alwin - 5026221177</h2>
      <h3 class="fw-semibold text-secondary">@yield('tulisan1')</h3>
    </div>

    @yield('link1')

    <div class="my-4">
      @yield('konten')
    </div>
  </div>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
