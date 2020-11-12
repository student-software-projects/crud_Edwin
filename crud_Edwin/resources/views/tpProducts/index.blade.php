<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tipo de Productos</title>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <a class="btn btn-primary mt-4 mb-3" href="{{ route('tpproducto.create') }}">CREAR NUEVO PRODUCTO</a>

            <div class="table-resposive">
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>NOMBRE</th>
                        <th>FECHA CREACIÓN</th>
                        <th>OPCIONES</th>
                    </tr>
                    </thead>

                    <tbody>
                    @foreach($TpProducts  as $tpproducto)
                        <tr>
                            <td>{{$tpproducto->id }}</td>
                            <td>{{$tpproducto->name_tp_products}}</td>
                            <td>{{$tpproducto->created_at }}</td>
                            <td>
                                <form action="{{route('tpproducto.destroy',$tpproducto->id)}}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <a href="{{route('tpproducto.show',$tpproducto->id)}}" class="btn btn-sm btn-info">Detalles</a>
                                    <a href="{{route('tpproducto.edit',$tpproducto->id)}}" class="btn btn-sm btn-warning">Editar</a>
                                    <button type="submit" class="btn btn-sm btn-danger">Eliminar</button>
                                </form>

                            </td>
                        </tr>
                    @endforeach

                    </tbody>
                </table>
                <a href="{{ route('product.index') }}" class="btn btn-outline-primary">Ir a productos</a>
                <a href="{{ route('company.index') }}" class="btn btn-outline-info">Ir a companias</a>

            </div>
        </div>
    </div>
</div>


</div>
</body>
</html>
