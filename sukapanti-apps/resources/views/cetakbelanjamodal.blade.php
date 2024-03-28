<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cetak Data Usulan Belanja Modal</title>
    <style>
        table.static{
            position: relative;
            border: 1px solid black;
        }
    </style>
</head>
<body>
    <div class="form-group">
        <p align="center"><b>Data Usulan Belanja Modal</b></p>
        <table class="static" align="center" rules="all" border="1px" style="width: 95%;">
        <tr>
            <th scope="col">No</th>
            <th scope="col">Unit Kerja</th>
            <th scope="col">Usulan</th>
            <th scope="col">Volume</th>
            <th scope="col">Peruntukan</th>
            <th scope="col">Di Input</th>
        </tr>
        @foreach($data as $item)
            <tr>
                <th scope="row"> {{ $loop->iteration }} </th> 
                <td>{{ $item->namaunit }}</td> 
                <td>{{ $item->usulan }}</td>   
                <td>{{ $item->volume }}</td> 
                <td>{{ $item->peruntukan }}</td> 
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