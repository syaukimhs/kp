<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
    <link rel="stylesheet" href="css/dashboard.css" />
  </head>
  <body>
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg fixed-top">
      <div class="container">
        <a class="navbar-brand" href="#"><img src="gambar/logo jateng.png" alt="Bootstrap" width="50" height="50" /></a>
        <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
          <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Menu</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
          </div>
          <div class="offcanvas-body">
            <ul class="navbar-nav justify-content-center flex-grow-1 pe-3">
              <li class="nav-item">
                <a class="nav-link mx-lg-2" href="/usulanbelanjamodal">Usulan Belanja Modal</a>
              </li>
              <li class="nav-item">
                <a class="nav-link mx-lg-2 active" aria-current="page" href="#">Usulan Rehab Fisik</a>
              </li>
              <li class="nav-item">
                <a class="nav-link mx-lg-2" href="/usulaninovasi">Usulan Inovasi</a>
              </li>
            </ul>
          </div>
        </div>
        <!-- <a href="/portal" class="logout-button">Logout</a> -->
        <button class="navbar-toggler pe-0" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      </div>
    </nav>

    <!-- navbar akhir -->

    <!-- tabel -->
    <div class="container-tbl">
        <h1 class="text-center mb-4">Form Usulan Fisik</h1>
        <div class="row justify-content-center mb-4">
          <div class="col-10">
          <div class="card">
            <div class="card-body">
            <form action="/insertdatafisik" method="POST" enctype="multipart/form-data">
              @csrf
              <div class="mb-3">  
                <!-- <label for="exampleInputEmail1" class="form-label">Unit Kerja</label> -->
                <input type="hidden" name="namaunit" value="{{auth()->user()->name}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
              </div>
              <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Usulan Rehab</label>
                <input type="text" name="usulanrehab" class="form-control" id="exampleInputPassword1" placeholder="Inputkan Usulan Rehab" required>
              </div>
              <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Volume</label>
                <input type="text" name="volume" class="form-control" id="exampleInputPassword1" placeholder="Inputkan Volume" required>
              </div>
              <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Bukti Dukung (Upload Data dengan Format .docx/.pdf max 10 MB)</label>
                <input type="file" name="file" class="form-control" id="exampleInputPassword1" placeholder="Upload Data dengan Format .docs/.pdf">
              </div>
              <button type="submit" class="btn btn-primary">Submit</button>
              <a href="/usulanfisik" class="btn btn-danger">Batal</a>
            </form>
            </div>
          </div>
          </div>
        </div>
        </div>
    <!-- tabel end -->

    <!-- footer -->
    <footer>
      <p>copyright&copyDinas Sosial - Provinsi Jawa Tengah 2024</p>
    </footer>
    <!-- footer end -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>