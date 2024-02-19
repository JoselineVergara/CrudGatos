<!DOCTYPE html>
<html>
<header>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</header>

<body>
    <!-- will be used to show any messages -->
    @if (Session::has('message'))
        <div class="alert alert-info">{{ Session::get('message') }}</div>
    @endif
    <div class="container">
        <div class="row">
            <div class="col text-center">
                <h1>Gatos</h1>
                <a type="button" class="btn btn-primary" href="{{ route('gatitos.create') }}">Crear una historia de un gatito</a>
            </div>
        </div>
        <div class="row">
            <div class="col">
                @if ($mensaje = Session::get('successs'))
                    <div class="alert alert-success" role="alert">
                        {{ $mensaje }}
                    </div>
                @endif
            </div>
        </div>
        <div class="row">
            <div class="col">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nombre</th>
                            <th scope="col">Historia</th>
                            <th scope="col">Botones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($gatitos as $value)
                            <tr>
                                <th scope="row">{{ $value->id }}</th>
                                <td>{{ $value->nombre }}</td>
                                <td>{{ $value->historia }}</td>
                                <td>
                                    <form action="{{ route('gatitos.edit', $value->id) }}" method="GET">
                                        <button type="submit" class="btn btn-warning" href="editar">Editar</button>
                                    </form>
                                    <form action="{{ route('gatitos.show', $value->id) }}" method="GET">
                                        <button type="submit" class="btn btn-danger">Eliminar</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>

</html>
