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
        <div class="col-md-12">
            <a href="{{ route('menu.index') }}" class="btn btn-primary">INICIO</a>
            <a href="{{ route('jugador.create') }}" class="btn btn-primary mt-5 mb-5">CREAR JUGADORES</a>
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th>NOMBRES</th>
                        <th>APELLIDOS</th>
                        <th>NUMERO DE CAMISA</th>
                        <th>APODO</th>
                        <th>EQUIPO</th>
                        <th>FECHA DE CREACION</th>
                        <th>OPCIONES</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($jugadores as $jugador)
                    <tr>
                        <td>{{ $jugador->nombres }}</td>
                        <td>{{ $jugador->apellidos }}</td>
                        <td>{{ $jugador->numero_camisa }}</td>
                        <td>{{ $jugador->apodo }}</td>
                        <td>{{ $jugador->equipos_id }}</td>
                        <td>{{ $jugador->created_at }}</td>
                        <td>
                            <form action="{{ route('jugador.destroy', $jugador->id) }}" method="post">
                                @csrf
                                @method('DELETE')
                                <a href="{{ route('jugador.show', $jugador->id) }}" class="btn btn-info">DETALLES</a>
                                <a href="{{ route('jugador.edit', $jugador->id) }}" class="btn btn-warning">EDITAR</a>
                                <button type="submit" class="btn btn-danger">ELIMINAR</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach()
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
</body>
</html>
