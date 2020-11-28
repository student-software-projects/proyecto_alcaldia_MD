
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
        <div class="col-md-20 mt-5 mb-4">
            <div class="table-responsive">
                <td>
                    <label class="">ALCALDIA MAYOR DE BOGOTÁ</label>
                </td>
                <table class ="table table-bordered">
                    <thead>
                    <tr>
                        <th>CONTENIDO</th>
                    </tr>
                    </thead>
                    <tbody>
                    <td>
                        <a href="{{ route('equipo.index') }}" class="btn btn-primary">EQUIPOS</a>
                    </td>
                    <td>
                        <a href="{{ route('jugador.index') }}" class="btn btn-primary">JUGADORES</a>
                    </td>
                    <td>
                        <a href="{{ route('localida.index') }}" class="btn btn-primary">LOCALIDADES</a>
                    </td>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
</body>
</html>

