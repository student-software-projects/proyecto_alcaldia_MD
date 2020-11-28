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
        <div class="col-md-5 mt-5">
            <form action="{{ route('jugador.store') }}" method="post">
                @csrf
                <div class="form-group">
                    <label for="nombres">NOMBRES</label>
                    <input type="text" name="nombres" id="nombres" class="form-control">
                </div>
                <div class="form-group">
                    <label for="apellidos">APELLIDOS</label>
                    <input type="text" name="apellidos" id="apellidos" class="form-control">
                </div>
                <div class="form-group">
                    <label for="numero_camisa">NUMERO DE CAMISA</label>
                    <input type="text" name="numero_camisa" id="numero_camisa" class="form-control">
                </div>
                <div class="form-group">
                    <label for="apodo">APODO</label>
                    <input type="text" name="apodo" id="apodo" class="form-control">
                </div>
                <div class="form-group">
                    <label for="equipos_id">EQUIPO</label>
                    <input type="text" name="equipos_id" id="equipos_id" class="form-control">
                </div>
                <button class="btn btn-primary" type="submit">GUARDAR JUGADOR</button>
                <a href="{{ route('jugador.index') }}" class="btn btn-danger">CANCELAR</a>
            </form>
        </div>
    </div>
</div>
</body>
</html>
