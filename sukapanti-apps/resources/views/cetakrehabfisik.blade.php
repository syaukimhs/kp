<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cetak Data Usulan Rehab Fisik</title>
    <style>
        table.static{
            position: relative;
            border: 1px solid black;
        }
    </style>
</head>
<body>
    <div class="form-group">
        <p align="center"><b>Data Usulan Rehab Fisik</b></p>
        <table class="static" align="center" rules="all" border="1px" style="width: 95%;">
        <tr>
            <th scope="col">No</th>
            <th scope="col">Unit Kerja</th>
            <th scope="col">Usulan Rehab</th>
            <th scope="col">Luas Bangunan</th>
            <!-- <th scope="col">Bukti Dukung</th> -->
            <th scope="col">Di Input</th>
        </tr>
        @foreach($data as $item)
            <tr>
                <th scope="row"> {{ $loop->iteration }} </th>
                <td>{{ $item->namaunit }}</td>
                <td>{{ $item->usulanrehab }}</td>
                <td>{{ $item->volume }}</td>
                <!-- <td><a href="/download/{{ $item->file }}" class="btn btn-success">Download</a></td> -->
                <td>{{ $item->created_at->format('D M Y') }}</td>
            </tr>
        @endforeach
        </table>
    </div>

    <script type="text/javascript">
        window.print();
    </script>
</body>
</html>