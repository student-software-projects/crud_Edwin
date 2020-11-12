<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Editar Tipo de Productos</title>
</head>
<body>

<div class="container">
    <div class="row">
        <div class="col-md-4">
            <form action="{{route('tpproducto.update',$tpProducts->id)}}" method="post">
                @csrf
                @method('put')
                <div class="form-group mt-5">
                    <label for="name_tp_products">Nombre del producto</label>
                    <input name="name_tp_products" id="name_tp_products" type="text" class="form-control" value="{{$tpProducts->name_tp_products}}">
                </div>
                <hr>
                <button type="submit" class="btn btn-primary">GUARDAR CAMBIOS</button>
                <a href="{{ route('tpproducto.index') }}">Cancelar</a>
            </form>
        </div>
    </div>
</div>

</body>
</html>
