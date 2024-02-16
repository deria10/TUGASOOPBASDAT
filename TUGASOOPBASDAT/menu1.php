<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Deskripsi Tumbuhan</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
            color: #333;
            line-height: 1.6;
        }
        .header{
          margin: 5px;
          text-align: center;
        }
        .container {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        h2, h3 {
            text-align: center;
            color: #007bff;
        }
        .page-link1{
          color:black;
        }
        p {
            margin-bottom: 15px;
        }

        .plant {
            border-bottom: 1px solid #ddd;
            padding-bottom: 15px;
            margin-bottom: 15px;
        }
        .nav-link{
          border-radius:20px;
        }
    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
<header>
  <div class="header">
        <h1>KELOMPOK 2: DERI AFANDI, MR.p</h1>
  </div>
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg bg-body">
    <div class="container-fluid">
      <button
        data-mdb-collapse-init
        class="navbar-toggler"
        type="button"
        data-mdb-target="#navbarExample01"
        aria-controls="navbarExample01"
        aria-expanded="false"
        aria-label="Toggle navigation"
      >
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarExample01">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item active">
            <a class="nav-link" aria-current="page" href="home.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="menu1.php" style="background-color:black; color:white;">menu1</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="menu2.php">menu2</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="menu3.php">menu3</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- Navbar -->
</header>
    <div class="container">
        <h3>Implementasi inheritance</h3>

        <div class="plant">
            <?php
            // Include file yang berisi definisi kelas
            include 'tumbuhan.php';

            // Buat instance dari kelas
            $tumbuhan = new Tumbuhan("Pohon Mangga", "Buah-buahan", 5);
            $tumbuhanBerbuah = new TumbuhanBerbuah("Pohon Jeruk", "Buah-buahan", 3, 50);
            $tumbuhanBerbunga = new TumbuhanBerbunga("Mawar", "Bunga", 1, "Merah");
            $tumbuhanBerkayu = new TumbuhanBerkayu("Pohon Oak", "Berkayu", 10, 8);

            // Tampilkan deskripsi tumbuhan
            echo "<p>" . $tumbuhan->deskripsi() . "</p>";
            echo "<p>" . $tumbuhanBerbuah->deskripsi() . "</p>";
            echo "<p>" . $tumbuhanBerbunga->deskripsi() . "</p>";
            echo "<p>" . $tumbuhanBerkayu->deskripsi() . "</p>";

            // Biarkan tumbuhan tumbuh
            $tumbuhan->tumbuh();
            $tumbuhanBerbuah->tumbuh();
            $tumbuhanBerbunga->tumbuh();
            $tumbuhanBerkayu->tumbuh();

            // Tampilkan deskripsi tumbuhan setelah tumbuh
            echo "<h3>implementasi polymorphism</h3>";
            echo "<p>" . $tumbuhan->deskripsi() . "</p>";
            echo "<p>" . $tumbuhanBerbuah->deskripsi() . "</p>";
            echo "<p>" . $tumbuhanBerbunga->deskripsi() . "</p>";
            echo "<p>" . $tumbuhanBerkayu->deskripsi() . "</p>";

            echo "<h3>Implementasi abstraksi</h3>";
            // Fungsionalitas tambahan untuk kelas TumbuhanBerbuah
            $tumbuhanBerbuah->tambahBuah(5);
            echo "<p>Setelah menambahkan buah: " . $tumbuhanBerbuah->deskripsi() . "</p>";

            // Fungsionalitas tambahan untuk kelas TumbuhanBerbunga
            $tumbuhanBerbunga->setWarnaBunga("Putih");
            echo "<p>Setelah mengubah warna bunga: " . $tumbuhanBerbunga->deskripsi() . "</p>";

            // Fungsionalitas tambahan untuk kelas TumbuhanBerkayu
            $tumbuhanBerkayu->setTinggi(12);
            echo "<p>Setelah mengubah tinggi tumbuhan: " . $tumbuhanBerkayu->deskripsi() . "</p>";
            ?>
        </div>
    <nav aria-label="Page navigation example">
    <ul class="pagination">
    <li class="page-item"><a class="page-link" href="home.php">Previous</a></li>
    <li class="page-item"><a class="page-link" href="menu1.php" style="background:blue; color:white;">1</a></li>
    <li class="page-item"><a class="page-link" href="menu2.php">2</a></li>
    <li class="page-item"><a class="page-link" href="menu3.php">3</a></li>
    <li class="page-item"><a class="page-link" href="menu2.php">Next</a></li>
  </ul>
</nav>
    </div>

<!-- Footer -->
<footer class="text-center text-lg-start bg-body-tertiary text-muted">
  <!-- Section: Social media -->
  <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
    <!-- Left -->
    <div class="me-5 d-none d-lg-block">
      <span>Get connected with us on social networks:</span>
    </div>
    <!-- Left -->

    <!-- Right -->
    <div>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-facebook-f"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-twitter"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-google"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-instagram"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-linkedin"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-github"></i>
      </a>
    </div>
    <!-- Right -->
  </section>
  <!-- Section: Social media -->

  <!-- Section: Links  -->
  <section class="">
    <div class="container text-center text-md-start mt-5">
      <!-- Grid row -->
      <div class="row mt-3">
        <!-- Grid column -->
        <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
          <!-- Content -->
          <h6 class="text-uppercase fw-bold mb-4">
            <i class="fas fa-gem me-3"></i>Company name
          </h6>
          <p>
            Here you can use rows and columns to organize your footer content. Lorem ipsum
            dolor sit amet, consectetur adipisicing elit.
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">
            Products
          </h6>
          <p>
            <a href="#!" class="text-reset">Angular</a>
          </p>
          <p>
            <a href="#!" class="text-reset">React</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Vue</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Laravel</a>
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">
            Useful links
          </h6>
          <p>
            <a href="#!" class="text-reset">Pricing</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Settings</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Orders</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Help</a>
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">Contact</h6>
          <p><i class="fas fa-home me-3"></i> New York, NY 10012, US</p>
          <p>
            <i class="fas fa-envelope me-3"></i>
            info@example.com
          </p>
          <p><i class="fas fa-phone me-3"></i> + 01 234 567 88</p>
          <p><i class="fas fa-print me-3"></i> + 01 234 567 89</p>
        </div>
        <!-- Grid column -->
      </div>
      <!-- Grid row -->
    </div>
  </section>
  <!-- Section: Links  -->

  <!-- Copyright -->
  <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
    © 2021 Copyright:
    <a class="text-reset fw-bold" href="https://mdbootstrap.com/">MDBootstrap.com</a>
  </div>
  <!-- Copyright -->
</footer>
<!-- Footer -->
</body>
</html>
