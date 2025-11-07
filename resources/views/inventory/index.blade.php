<!doctype html>
<html>
<head>
    <title>Tabel Inventoris</title>
</head>
<style>
    body {
        font-family: sans-serif;
        margin: 20px;
    }
    table, td, th {
        border: 1px solid black;
        width: 35%;
    }

    #create{
        background-color: limegreen;
        padding: 5px;
        border-radius: 5px;
        text-decoration: none;
        color: black;
    }

    #create:hover{
        background-color: #2aa52a;
    }
</style>
<body>
<h1>Inventoris Lab</h1>
@if($inventories->isNotEmpty())
    <table>
        <tr>
            <th>Kode Inventoris</th>
            <th>Nama Inventoris</th>
            <th>Jumlah Stok</th>
        </tr>
        @foreach($inventories as $inventory)
        <tr>
            <td>{{ $inventory-> inventory_id }}</td>
            <td>{{ $inventory-> inventory_name }}</td>
            <td>{{ $inventory-> inventory_amount }}</td>
        </tr>
        @endforeach
    </table>
@endif
@if($inventories->isEmpty())
    <p>Belum ada inventoris.</p>
@endif
<br>
<br>
<a id="create" href="{{ route('inventory.create') }}">+ Tambah Inventoris Baru</a>
</body>
</html>
