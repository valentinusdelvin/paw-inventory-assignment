<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Tambah Produk Baru</title>
    <style>
        body {
            font-family: sans-serif; margin: 20px;
        }
        div {
            margin-bottom: 15px;
        }
        label {
            display: block; margin-bottom: 5px;
        }
        input[type="text"] {
            width: 300px; padding: 5px;
        }
        button {
            padding: 8px 15px;
        }
        .error {
            color: red; font-size: 0.9em;
        }
        #create{
            background-color: darkgrey;
            padding: 5px;
            border-radius: 5px;
            text-decoration: none;
            color: #f1f1f1;
        }

        #create:hover{
            background-color: grey;
        }

        #btn-submit{
            background-color: limegreen;
            padding: 5px;
            border-radius: 5px;
            text-decoration: none;
            color: black;
        }

        #btn-submit:hover{
            cursor: pointer ;
            background-color: #2aa52a;
        }
    </style>
</head>
<body>
<h1>Tambah Inventoris Baru</h1>
@if ($errors->any())
    <div class="error">
        <strong>Ada masalah dengan input, masukkan kembali dengan format yang benar</strong>  <ul>
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

    <div>
        <label for="amount">Jumlah Barang:</label>
        <input type="number" id="amount" name="amount" value="{{ old('amount') }}">
    </div>

    <div>
        <button id="btn-submit" type="submit">Simpan Produk</button>
    </div>
</form>
<a id="create" href="{{ route('inventory.index') }}">Kembali ke Daftar Inventoris</a>
</body>
</html>
