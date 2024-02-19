<!DOCTYPE html>
<html>
<heade>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    </header>

    <body>
        <div class="container">
            <div class="row">
                <h1>Crea tu notita</h1>
                <a type="button" class="btn btn-secondary" href="{{route('gatitos.index')}}" >Regresar</a>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <form action="{{route('gatitos.store')}}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="formGroupExampleInput" class="form-label">Nombre</label>
                        <input type="text" class="form-control"
                            placeholder="Ponle un nombre" name="nombre">
                    </div>
                    <div class="mb-3">
                        <label for="formGroupExampleInput2" class="form-label">Raza</label>
                        <input type="text" class="form-control"
                            placeholder="Crea una raza" name="raza">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Historia</label>
                        <textarea class="form-control" rows="3" name="historia" ></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Guardar</button>
                </form>
            </div>
        </div>
    </body>

</html>
