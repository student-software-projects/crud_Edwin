<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Detalles</title>
</head>
<body>

<div class="container">
    <div class="row">
        <div class="col-md-6 mt-4">
            <div class="table-responsive">
                <table class="table table-bordered">
                    <tr>
                        <th>NOMBRE DEL PRODUCTO</th>
                        <td>{{ $product->name_products }}</td>
                    </tr>
                    <tr>
                        <th>DESCRIPCION</th>
                        <td>{{ $product->description }}</td>
                    </tr>
                    <tr>
                        <th>PRECIO</th>
                        <td>{{ $product->price }}</td>
                    </tr>
                    <tr>
                        <th>NOMBRE DE LA COMPAÑIA</th>
                        <td>{{ $product->name_companies }}</td>
                    </tr>
                    <tr>
                        <th>TIPO DE PRODUCTO</th>
                        <td>{{ $product->name_tp_products }}</td>
                    </tr>
                    <tr>
                        <th>CREACIÓN</th>
                        <td>{{ $product->created_at }}</td>
                    </tr>
                    <tr>
                        <th>ACTUALIZACION</th>
                        <td>{{ $product->updated_at }}</td>
                    </tr>
                </table>
                <a class="btn btn-primary btn-sm" href="{{ route('product.index') }}">Volver</a>
            </div>
        </div>
    </div>
</div>

</body>
</html>

