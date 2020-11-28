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
        <div class="col-md-20 mt-5">
            <a href="{{ route('menu.index') }}" class="btn btn-primary ">INICIO</a>
            <a href="{{ route('localida.create') }}" class="btn btn-primary mt-5 mb-5">CREAR NUEVA LOCALIDAD</a>
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th>LOCALIDADES</th>
                        <th>FECHA DE CREACION</th>
                        <th>OPCIONES</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($localidades as $localidad)
                    <tr>
                        <td>{{ $localidad-> localidad }}</td>
                        <td>{{ $localidad-> created_at }}</td>
                        <td>
                            <form action="{{ route('localida.destroy',$localidad->id) }}" method="post">
                                @csrf
                                @method('DELETE')
                                <a href="{{route('localida.show', $localidad->id)}}" class="btn btn-info">DETALLES</a>
                                <a href="{{ route('localida.edit', $localidad->id) }}" class="btn btn-warning">EDITAR</a>
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
