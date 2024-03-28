<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Data Usulan Inovasi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
    <link rel="stylesheet" href="css/tabel.css" />

    <!-- datatable -->
    <link href="https://cdn.datatables.net/v/bs5/dt-2.0.3/b-3.0.1/b-html5-3.0.1/datatables.min.css" rel="stylesheet">

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
                <a class="nav-link mx-lg-2" href="/usulanfisik">Usulan Rehab Fisik</a>
              </li>
              <li class="nav-item">
                <a class="nav-link mx-lg-2 active" aria-current="page" href="#">Usulan Inovasi</a>
              </li>
            </ul>
          </div>
        </div>
        <a href="/" class="logout-button">Kembali</a>
        <button class="navbar-toggler pe-0" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      </div>
    </nav>
    <!-- navbar akhir -->

    
    <!-- tabel -->
        <div class="container-fluid">
        <div class="tbl">
          <h1 class="text-center mb-4">Data Usulan Inovasi</h1>
        </div>
            <div class="tombol">
              <a href="/formusulaninovasi" class="btn btn-success">Tambah Data</a>
              @if (auth()->user() <> null)
              <!-- if pertama untuk ngecek apakah sudah login atau belum -->
                @if (auth()->user()->username == 'admin')
                <!-- if yg kdua ini utk ngecek login sebagai apa, apakah admin atau panti -->
                <!-- <a href="/cetakinovasi" target="_blank" class="btn btn-primary">Cetak Data</a> -->
                @endif
              @endif
            </div>

        <div class="row">
        @if ($message = Session::get('success'))
          <div class="alert alert-success" role="alert">
            {{ $message }}
          </div>
        @endif
        <!-- <div class="outer-wrapper"> -->
        <div class="table-wrapper table-responsive">
          <table id="tabel_1" class="table table-striped table-hover table-bordered">
          <thead>
              <tr>
              <th scope="col">id</th>
              <th scope="col">Nama Panti</th>
              <th scope="col">Nama Inovasi</th>
              <th scope="col">Pagu Anggaran</th>
              <th scope="col">Tahun Pelaksanaan</th>
              <th scope="col">Latar Belakang</th>
              <th scope="col">Tujuan</th>
              <th scope="col">Deskripsi Inovasi</th>
              <th scope="col">Proposal</th>
              <th scope="col">RAB</th>
              <th scope="col">Tanggal Usulan</th>
              <th scope="col">Catatan Pengusul</th>
              <th scope="col">Status Usulan</th>
              <!-- <th scope="col">Verifikasi</th> -->
              <th scope="col">Aksi</th>
              </tr>
          </thead>
          <tbody>
            @php
              $no = 1;
            @endphp
            @foreach ($data as $index => $row)
                <tr>
                    <th scope="row"> {{ $loop->iteration }} </th>
                    <td>{{ $row->namapanti }}</td>
                    <td>{{ $row->namainovasi }}</td>
                    <td>{{ $row->paguanggaran }}</td>
                    <td>{{ $row->tahunpelaksanaan }}</td>
                    <td>{{ $row->latarbelakang }}</td>
                    <td>{{ $row->tujuan }}</td>
                    <td>{{ $row->deskripsiinovasi }}</td>
                    <td><a href="/downloaddoc4/proposal/{{ $row->proposal }}" class="btn btn-success">Download</a></td>
                    <td><a href="/downloaddoc4/rab/{{ $row->rab }}" class="btn btn-success">Download</a></td>
                    <td>{{ $row->tanggalusulan }}</td>
                    <td><a href="/downloaddoc4/catatankeuangan/{{ $row->catatankeuangan }}" class="btn btn-success">Download</a></td>
                    <td>{{ $row->statususulan }}</td>
                    <td>
                        <a href="/deletedatainovasi/{{ $row->id }}" class="btn btn-danger">Hapus</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
        
          </table>
        </div>
        <!-- </div> -->
        </div>
        </div>
    <!-- tabel end -->

    <!-- footer -->
    <footer>
      <p>copyright&copyDinas Sosial - Provinsi Jawa Tengah 2024</p>
    </footer>
    <!-- footer end -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <!-- datatable -->
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/v/bs5/dt-2.0.3/b-3.0.1/b-html5-3.0.1/datatables.min.js"></script>
    <!-- <script src="https://cdn.datatables.net/buttons/2.0.0/js/dataTables.buttons.min.js"></script> -->
    <!-- <script src="https://cdn.datatables.net/buttons/2.0.0/js/buttons.html5.min.js"></script> -->


    <script>
     $('#tabel_1').DataTable({
          layout: {
              topStart: {
                  buttons: ['excelHtml5', 'csvHtml5']
              }
          }
      });

    </script>

  </body>
</html>