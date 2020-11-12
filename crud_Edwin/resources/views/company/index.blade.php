<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Companias</title>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-12">

            <a class="btn btn-primary mt-4 mb-3" href="{{ route('company.create') }}">CREAR NUEVA EMPRESA</a>
            <div class="table-resposive">
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>NOMBRE</th>
                        <th>NIT</th>
                        <th>DIRECCIÓN</th>
                        <th>FECHA CREACIÓN</th>
                        <th>OPCIONES</th>
                    </tr>
                    </thead>

                    <tbody>
                    @foreach($companies  as $company)
                        <tr>
                            <td>{{ $company->id }}</td>
                            <td>{{ $company->name_companies }}</td>
                            <td>{{ $company->nit }}</td>
                            <td>{{ $company->address }}</td>
                            <td>{{ $company->created_at }}</td>
                            <td>
                                <form action="{{route('company.destroy',$company->id)}}" method="post">
                                    @csrf
                                    @method('DELETE')
                                <a href="{{ route('company.show',$company->id) }}" class="btn btn-sm btn-info">Detalles</a>
                                <a href="{{route('company.edit',$company->id)}}" class="btn btn-sm btn-warning">Editar</a>
                                <button type="submit" class="btn btn-sm btn-danger">Eliminar</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach

                    </tbody>
                </table>
                <a href="{{ route('tpproducto.index') }}" class="btn btn-outline-primary">Ir a tipo de Producto</a>
                <a href="{{ route('product.index') }}" class="btn btn-outline-info">Ir a Productos</a>

            </div>
        </div>
    </div>
</div>
</body>
</html>
