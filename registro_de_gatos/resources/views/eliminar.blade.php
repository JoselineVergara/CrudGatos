<!DOCTYPE html>
<html>
<heade>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    </header>

    <body>
        <div class="card">
            <h5 class="card-header">Eliminar tu historia</h5>
            <div class="card-body">
                <p class="card-text">
                    <div class="alert alert-danger" role="alert">
                        Estas seguro de eliminar esta historia!!!
                    </div>
                    <form action="{{route('gatitos.destroy', $gatitos->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Eliminar</button>
                    </form>
                </p>
            </div>
        </div>
    </body>

</html>
