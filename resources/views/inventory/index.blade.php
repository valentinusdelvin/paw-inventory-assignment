<!doctype html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Inventoris Lab</title>
    <style>
        body {
            font-family: sans-serif;
            margin: 20px;
        }

        h1, h2 {
            margin-bottom: 10px;
        }

        table {
            border-collapse: collapse;
            width: 60%;
            margin-bottom: 40px;
        }

        td, th {
            border: 1px solid black;
            padding: 8px;
            text-align: center;
        }

        #btn-submit {
            background-color: limegreen;
            padding: 5px 10px;
            border-radius: 5px;
            text-decoration: none;
            color: black;
            border: none;
        }

        #btn-submit:hover {
            cursor: pointer;
            background-color: #2aa52a;
        }

        .delete-btn {
            background-color: red;
            color: white;
            border: none;
            padding: 5px 10px;
            border-radius: 5px;
            cursor: pointer;
        }

        .delete-btn:hover {
            background-color: darkred;
        }

        input[type="text"],
        input[type="number"] {
            width: 250px;
            padding: 5px;
        }

        .error {
            color: red;
            font-size: 0.9em;
            margin-bottom: 10px;
        }

        form {
            margin-bottom: 15px;
        }

        label {
            display: block;
            margin-bottom: 5px;
        }

        #divider {
            border-top: 2px solid #ccc;
            margin: 40px 0;
        }
    </style>
</head>
<body>

<h1>Inventoris Lab</h1>

@if($inventories->isNotEmpty())
    <table>
        <tr>
            <th>Kode Inventoris</th>
            <th>Nama Inventoris</th>
            <th>Aksi</th>
        </tr>
        @foreach($inventories as $inventory)
            <tr>
                <td>{{ $inventory->inventory_id }}</td>
                <td>{{ $inventory->inventory_name }}</td>
                <td>
                    <form action="{{ route('inventory.delete', $inventory->inventory_id) }}" method="POST" onsubmit="return confirm('Yakin ingin menghapus inventoris ini?');">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="delete-btn">Hapus</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
@else
    <p>Belum ada inventoris.</p>
@endif

<div id="divider"></div>

<h2>Tambah Inventoris Baru</h2>

@if ($errors->any())
    <div class="error">
        <strong>Ada masalah dengan input:</strong>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('inventory.store') }}" method="POST">
    @csrf

    <div>
        <label for="id">Kode Barang:</label>
        <input type="text" id="id" name="id" value="{{ old('id') }}">
    </div>

    <div>
        <label for="name">Nama Barang:</label>
        <input type="text" id="name" name="name" value="{{ old('name') }}">
    </div>

    <br>
    <div>
        <button id="btn-submit" type="submit">Simpan Produk</button>
    </div>
</form>

</body>
</html>
