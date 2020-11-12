<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Crear Tipo de Productos</title>
</head>
<body>

<div class="container">
    <div class="row">
        <div class="col-md-4">
            <form action="{{ route('tpproducto.store') }}" method="post">
                @csrf
                <div class="form-group mt-5">
                    <label for="name_tp_products">Tipo de Producto</label>
                    <input name="name_tp_products" id="name_tp_products" type="text" class="form-control">
                </div>

                <button type="submit" class="btn btn-primary">GUARDAR NUEVO PRODUCTO</button>
                <a href="{{ route('tpproducto.index') }}">Cancelar</a>
            </form>
        </div>
    </div>
</div>

</body>
</html>
