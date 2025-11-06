<!doctype html>
<html>
<head>
    <title>Tabel Inventory</title>
</head>
<style>
    table, td, th {
        border: 1px solid black;
    }
</style>
<body>
<h1>Inventory</h1>
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


</body>
</html>
