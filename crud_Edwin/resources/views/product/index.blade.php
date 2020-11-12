<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Productos</title>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <a class="btn btn-primary mt-4 mb-3" href="{{ route('product.create') }}">CREAR NUEVO PRODUCTO</a>

            <div class="table-resposive">
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>NOMBRE</th>
                        <th>DESCRIPCION</th>
                        <th>PRECIO</th>
                        <th>NOMBRE DE COMPAÑIA</th>
                        <th>NOMBRE DEL PRODUCTO</th>
                        <th>FECHA CREACIÓN</th>
                        <th>OPCIONES</th>
                    </tr>
                    </thead>

                    <tbody>
                    @foreach($products as $product)
                        <tr>
                            <td>{{$product->id}}</td>
                            <td>{{$product->name_products}}</td>
                            <td>{{$product->description}}</td>
                            <td>{{$product->price}}</td>
                            <td>{{$product->name_companies}}</td>
                            <td>{{$product->name_tp_products}}</td>
                            <td>{{$product->created_at}}</td>
                            <td>
                                <form action="{{route('product.destroy',$product->id)}}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <a href="{{ route('product.show',$product->id) }}" class="btn btn-sm btn-info">Detalles</a>
                                    <a href="" class="btn btn-sm btn-warning">Editar</a>
                                    <button type="submit" class="btn btn-sm btn-danger">Eliminar</button>
                                    </form>
                            </td>
                        </tr>
                    @endforeach

                    </tbody>
                </table>
                <a href="{{ route('tpproducto.index') }}" class="btn btn-outline-primary">Ir a tipo de productos</a>
                <a href="{{ route('company.index') }}" class="btn btn-outline-info">Ir a companias</a>
            </div>
        </div>
    </div>
</div>
</body>
</html>

