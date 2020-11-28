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
            <form action="{{ route('equipo.update', $equipo->id) }}" method="post">
                @csrf
                @method('PUT')
            <table class="table table-bordered">
                    <tr>
                        <th>NOMBRE DEL EQUIPO</th>
                        <td><input type="text" name="nombre_equipo" class="form-control" value="{{ $equipo->nombre_equipo }}"></td>
                    </tr>
                    <tr>
                        <th>LOGO DEL EQUIPO</th>
                        <td><input type="text" name="logo" class="form-control" value="{{ $equipo->logo }}"></td>
                    </tr>
                    <tr>
                        <th>LOCALIDADES</th>
                        <td><input type="text" name="localidades_id" class="form-control" value="{{ $equipo->localidades_id }}"></td>
                    </tr>
            </table>
                <a href="{{ route('equipo.index') }}" class="btn btn-danger">CANCELAR</a>
                <button class="btn btn-primary" type="submit">GUARDAR CAMBIOS</button>
            </form>
        </div>
    </div>
</div>
</body>
</html>
