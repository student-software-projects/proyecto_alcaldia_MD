<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-7 offset-md-3 mt-5">
            <form action="{{ route('jugador.update', $jugador->id) }}" method="post">
                @csrf
                @method('PUT')
            <table class="table table-bordered">
                <tr>
                    <th>NOMBRES</th>
                    <td><input type="text" name="nombres" class="form-control" value="{{ $jugador->nombres }}"></td>
                </tr>
                <tr>
                    <th>APELLIDOS</th>
                    <td><input type="text" name="apellidos" class="form-control" value="{{ $jugador->apellidos }}"></td>
                </tr>
                <tr>
                    <th>NUMERO DE CAMISA</th>
                    <td><input type="text" name="numero_camisa" class="form-control" value="{{ $jugador->numero_camisa }}"></td>
                </tr>
                <tr>
                    <th>APODO</th>
                    <td><input type="text" name="apodo" class="form-control" value="{{ $jugador->apodo }}"></td>
                </tr>
                <tr>
                    <th>EQUIPOS</th>
                    <td><input type="text" name="equipos_id" class="form-control" value="{{ $jugador->equipos_id }}"></td>
                </tr>
            </table>
            <a href="{{ route('jugador.index') }}" class="btn btn-danger">CANCELAR</a>
            <button class="btn btn-warning" type="submit">GUARDAR CAMBIOS</button>
            </form>
        </div>
    </div>
</div>
</body>
</html>

