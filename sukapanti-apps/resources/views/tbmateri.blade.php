<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Dinas Sosial Provinsi Semarang</title>
    <link rel="stylesheet" href="css/dashboard.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
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
    <div class="container">
        <div class="tbl">
          <h1 class="text-center mb-4">Dokumen Data Materi/Paparan</h1>
        </div>
            <div class="tombol">

            @if (auth()->user() <> null)
            <!-- if pertama untuk ngecek apakah sudah login atau belum -->
            @if (auth()->user()->username == 'admin')
              <!-- if yg kdua ini utk ngecek login sebagai apa, apakah admin atau panti -->
              <a href="/formtbmateri" class="btn btn-success">Tambah Data</a>
              @endif
            @endif

            <a href="/" class="btn btn-danger">Kembali</a>
              <div class="row g-3 align-items-center mt-2">
                <div class="col-auto">
                  <!-- <form action="/tbmateri" method="GET"> 
                    <input type="search" id="inputPassword6" name="search" class="form-control" aria-describedby="passwordHelpInline" placeholder="search unit kerja">
                  </form> -->
                </div>
              </div>
            </div>

        <div class="row">
          <div class="outer-wrapper">
          <div class="table-wrapper">
            <table class="table table-striped table-hover col-6 table-bordered">
            <thead>
                <tr>
                <th scope="col">No</th>
                <th scope="col">Nama Dokumen</th>
                <th scope="col">Download Dokumen</th>
                @if (auth()->user() <> null)
                <!-- if pertama untuk ngecek apakah sudah login atau belum -->
                @if (auth()->user()->username == 'admin')
                  <!-- if yg kdua ini utk ngecek login sebagai apa, apakah admin atau panti -->
                  <th scope="col">Aksi</th>
                  @endif
                @endif
                </tr>
            </thead>
            <tbody>
              @php
                $no = 1;
              @endphp
              @foreach ($data as $index => $row)
                <tr>
                <th scope="row">{{ $index + $data->firstItem() }}</th>
                <td>{{ $row->name }}</td>
                <td><a href="/downloaddoc3/{{ $row->file }}" class="btn btn-success">Download</a></td>
                @if (auth()->user() <> null)
                <!-- if pertama untuk ngecek apakah sudah login atau belum -->
                @if (auth()->user()->username == 'admin')
                  <!-- if yg kdua ini utk ngecek login sebagai apa, apakah admin atau panti -->
                  <td><a href="/deletetbmateri/{{ $row->id }}" class="btn btn-danger">Hapus</a></td>
                  @endif
                @endif
                </tr>
              @endforeach
            </tbody>
            </table>
          </div>
          </div>
          {{ $data->links() }}
        </div>
        </div>
    <!-- tabel end -->

    <!-- footer -->
    <footer>
      <p>copyright&copyDinas Sosial - Provinsi Jawa Tengah 2024</p>
    </footer>
    <!-- footer end -->
</body>
</html>
