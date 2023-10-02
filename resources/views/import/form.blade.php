<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload de Arquivo Excel</title>
</head>
<body>
    <h1>Upload de Arquivo Excel</h1>

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('import') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div>
            <label for="file">Selecione um arquivo Excel (.xlsx)</label>
            <input type="file" name="file" accept=".xlsx" required>
        </div>

        <button type="submit">Importar</button>
    </form>
</body>
</html>
