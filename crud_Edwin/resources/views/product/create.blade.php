<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Creat Productos</title>
</head>
<body>

<div class="container">
    <div class="row">
        <div class="col-md-4">
            <form action="{{ route('product.store') }}" method="post">
                @csrf
                <div class="form-group mt-5">
                    <label for="company_id">Compañia</label>
                    <select name="company_id" id="company_id" class="form-control" required>
                        <option value="">Seleccionar...</option>
                        @foreach($companies as $company)
                        <option value="{{$company->id}}">{{$company->name_companies}}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label for="product_type_id">Tipo de producto</label>
                    <select name="product_type_id" id="product_type_id" class="form-control" required>
                        <option value="">Seleccionar...</option>
                        @foreach($tpproducts as $tpproduct)
                        <option value="{{$tpproduct->id}}">{{$tpproduct->name_tp_products}}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label for="name_products">Nombre del producto</label>
                    <input name="name_products" id="name_products" type="text" class="form-control">
                </div>

                <div class="form-group">
                    <label for="description">Descripcion del producto</label>
                    <input name="description" id="description" type="text" class="form-control">
                </div>

                <div class="form-group">
                    <label for="price">Precio</label>
                    <input name="price" id="price" type="text" class="form-control">
                </div>


                <hr>
                <button type="submit" class="btn btn-primary">GUARDAR PRODUCTO</button>
                <a href="{{ route('product.index') }}">Cancelar</a>
            </form>
        </div>
    </div>
</div>

</body>
</html>

