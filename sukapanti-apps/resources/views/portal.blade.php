<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <link rel="stylesheet" href="css/index.css" />
    <title>Dinas Sosial Provinsi Semarang</title>
  </head>
  <body>
    <!-- Navbar -->
    <nav class="navbar navbar-dark fixed-top" style>
      <div class="container">
        <a class="navbar-brand" href="#">
          <img src="gambar/logo jateng.png" alt="" width="50" height="50" class="d-inline-block align-text-top" />
          <span class="ms-2">Dinas Sosial</span>
          <span class="ms-2">Provinsi Jawa Tengah</span>
        </a>
        @auth <!-- Memeriksa apakah pengguna telah login -->
          <a href="/logout" class="logout-button">Logout</a> <!-- Tombol logout -->
        @else
          <a href="/login" class="login-button">Login</a> <!-- Tombol login -->
        @endauth
      </div>
    </nav>
    <!-- Navbar end -->

    <!-- Menu -->
    <div class="container">
      <div class="menu">
        <div class="row row-cols-1 row-cols-md-3 g-4">
          <div class="col">
            <div class="card">
              <a href="/usulanbelanjamodal"><img src="gambar/dinsos.jpg" height="200px" class="card-img-top" /></a>
              <div class="card-body">
                <a href="/usulanbelanjamodal">
                  <h5 class="card-title">Suka Panti</h5>
                  <p class="card-text">Usulan Rehab Panti</p>
                </a>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card">
              <a href="/tbdataperencanaan"><img src="gambar/gambar 8.jpg" height="200px" class="card-img-top" /></a>
              <div class="card-body">
                <a href="/tbdataperencanaan">
                  <h5 class="card-title">Data Perencanaan</h5>
                  <p class="card-text">Data Perencanaan Dinas Sosial</p>
                </a>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card">
              <a href="/tbdatamonitoring"><img src="gambar/monitoring.jpg" height="200px" class="card-img-top" /></a>
              <div class="card-body">
                <a href="/tbdatamonitoring">
                  <h5 class="card-title">Data Monitoring/Evaluasi</h5>
                  <p class="card-text">Data Monitoring atau Evaluasi Dinas Sosial</p>
                </a>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card">
              <a href="/tbmodul"><img src="gambar/gambar 12.jpg" height="200px" class="card-img-top" /></a>
              <div class="card-body">
                <a href="/tbmodul">
                  <h5 class="card-title">Modul</h5>
                  <p class="card-text">Modul Dinas Sosial</p>
                </a>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card">
              <a href="/tbmateri"><img src="gambar/paparan.jpg" height="200px" class="card-img-top" /></a>
              <div class="card-body">
                <a href="/tbmateri">
                  <h5 class="card-title">Materi/Paparan</h5>
                  <p class="card-text">Materi atau Paparan Dinas Sosial</p>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Menu end -->

    <!-- contact -->
    <div class="kontak">
      <div class="container">
        <div class="row">
          <div class="col-6">
            <h2>Contact</h2>
            <h4>Dinas Sosial Provinsi Jawa Tengah</h4>
          </div>
        </div>
        <div class="row">
          <div class="col-8">
            <p>Alamat : Jl.Pahlawan No.12 Semarang</p>
            <p>Telp : (024)8311729</p>
            <p>Telp : (024)84507041</p>
            <p>Email : dinsos@jatengprov.go.id</p>
          </div>
          <div class="col-4">
            <iframe
              width="100%"
              height="100%"
              id="gmap-canvas"
              src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.121959460995!2d110.41890917419398!3d-6.994914768505088!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e708b5e16e7bfb7%3A0x9f439051a9612c87!2sDinas%20Sosial%20Provinsi%20Jawa%20Tengah%2C%20Jl.%20Kusuma%20Wardani%2C%20Pleburan%2C%20Kec.%20Semarang%20Sel.%2C%20Kota%20Semarang%2C%20Jawa%20Tengah%2050241!5e0!3m2!1sid!2sid!4v1709539092121!5m2!1sid!2sid "
              frameborder="0"
              scrolling="no"
              marginheight="0"
              marginwidth="0"
            ></iframe>
          </div>
        </div>
      </div>
    </div>
    <!-- contact end -->

    <!-- footer -->
    <footer>
      <p>copyright&copyDinas Sosial - Provinsi Jawa Tengah 2024</p>
    </footer>
    <!-- footer end -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>