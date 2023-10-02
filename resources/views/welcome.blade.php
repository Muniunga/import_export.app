<!DOCTYPE html>
<html lang="pt-br">

<head>
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Olá, mundo!</title>
</head>

<body>
    <div class="container">
        <div class="row justify-content-md-center">
            <div class="card-header align-center mr-3">
                <h3 class="card-title">Products (Total : {{$getRecord->total() }})</h3>
            </div>
            <table class="table  table-hover table-dark">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Description</th>
                        <th scope="col">Item Code</th>
                        <th scope="col">Unite Price</th>
                        <th scope="col">Created at</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($getRecord as $value)
                    <tr>
                        <td>{{ $value->id }}</td>
                        <td>{{ $value->description }}</td>
                        <td>{{ $value->item_code }}</td>
                        <td>{{ $value->unit_price }}</td>
                        <td>{{date('d-m-Y', strtotime($value->created_at))  }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <a  href="{{ route('novo') }}" class="btn-link text-secondary"> Novo</a>
            <a  href="{{ route('import.form') }}" class="btn-link text-secondary"> importar</a>
            <a  href="{{ route('export') }}" class="btn-link text-secondary"><i class="far fa-file-excel"></i></i> Exportar com ficheiro excel</a>
        </div>
    </div>
    <!-- JavaScript (Opcional) -->
    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
    <script src="https://kit.fontawesome.com/2d88b53577.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>

</html>
