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
    <!-- Navbar -->
    <nav class="navbar navbar-dark fixed-top" style>
      <div class="container">
        <a class="navbar-brand" href="/portal">
          <img src="gambar/logo jateng.png" alt="" width="50" height="50" class="d-inline-block align-text-top" />
          <span class="ms-2">Dinas Sosial</span>
          <span class="ms-2">Provinsi Jawa Tengah</span>
        </a>
      </div>
    </nav>
    <!-- Navbar end -->

    <!-- tabel -->
    <div class="container-tbl">
        <h1 class="text-center mb-4">Form Data Perencanaan</h1>
        <div class="row justify-content-center">
          <div class="col-10">
          <div class="card">
            <div class="card-body">
            <form action="inserttbdataperencanaan" method="POST" enctype="multipart/form-data">
              @csrf
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nama Dokumen</label>
                <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Inputkan Nama Dokumen" required>
              </div>
              <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Upload Dokumen (Upload Data dengan Format .docx/.pdf max 10 MB)</label>
                <input type="file" name="file" class="form-control" id="exampleInputPassword1" placeholder="" required>
              </div>
              <button type="submit" class="btn btn-primary">Submit</button>
              <a href="/tbdataperencanaan" class="btn btn-danger">Batal</a>
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