<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cetak Data Usulan Inovasi</title>
    <style>
        table.static{
            position: relative;
            border: 1px solid black;
        }
    </style>
</head>
<body>
    <div class="form-group">
        <p align="center"><b>Data Usulan Inovasi</b></p>
        <table class="static" align="center" rules="all" border="1px" style="width: 95%;">
        <tr>
        <th scope="col">id</th>
              <th scope="col">Nama Panti</th>
              <th scope="col">Nama Inovasi</th>
              <th scope="col">Pagu Anggaran</th>
              <th scope="col">Tahun Pelaksanaan</th>
              <th scope="col">Latar Belakang</th>
              <th scope="col">Tujuan</th>
              <th scope="col">Deskripsi Inovasi</th>
              <!-- <th scope="col">Proposal</th> -->
              <!-- <th scope="col">RAB</th> -->
              <th scope="col">Tanggal Usulan</th>
              <!-- <th scope="col">Catatan Pengusul</th> -->
              <th scope="col">Status Usulan</th>
        </tr>
        @foreach($data as $item)
            <tr>
                <th scope="row"> {{ $loop->iteration }} </th>
                <td>{{ $item->namapanti }}</td>
                <td>{{ $item->namainovasi }}</td>
                <td>{{ $item->paguanggaran }}</td>
                <td>{{ $item->tahunpelaksanaan }}</td>
                <td>{{ $item->latarbelakang }}</td>
                <td>{{ $item->tujuan }}</td>
                <td>{{ $item->deskripsiinovasi }}</td>
                <!-- <td><a href="/downloaddoc4/proposal/{{ $item->proposal }}" class="btn btn-success">Download</a></td> -->
                <!-- <td><a href="/downloaddoc4/rab/{{ $item->rab }}" class="btn btn-success">Download</a></td> -->
                <td>{{ $item->tanggalusulan }}</td>
                <!-- <td><a href="/downloaddoc4/catatankeuangan/{{ $item->catatankeuangan }}" class="btn btn-success">Download</a></td> -->
                <td>{{ $item->statususulan }}</td>
            </tr>
        @endforeach
        </table>
    </div>

    <script type="text/javascript">
        window.print();
    </script>
</body>
</html>