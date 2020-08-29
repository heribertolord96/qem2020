@extends("theme/lte/layout") 
@section('search_form')
<!-- SEARCH FORM -->
<form class="form-inline ml-3">
   <div class="input-group input-group-sm">
      <select class="form-control form-control-navbar col-md-3" name="criterio">
         <option value="products.name">Articulo</option>
         <option value="products.descripcion">Descripcion</option>
         <option value="products.presentacion" >Marca</option>
         <option value="products.category.nombre" >Category</option>
         <option value="products.departamento.nombre" >Departamento</option>
         <option value="" >fabricante</option>
      </select>
      <input class="form-control form-control-navbar" name="buscar" type="search" placeholder="Search" aria-label="Search">
      <div class="input-group-append">
         <button class="btn btn-navbar" type="submit">
         <i class="fas fa-search"></i>
         </button>
      </div>
   </div>
</form>
@endsection
@section('contenido')
<div class="card card-success">
   <div class="panel panel-default-success">
      <div class="card-header success with-border ">
         <h2 class="card-title success">Articulos encontrados </h2>
      </div>
   </div>
   <section class="content">
      <div class="row">
         @foreach ($products  as $product)        
         <div class="col-md-3 col-sm-6 col-xs-12 rowproduct"   >
            <div class="card-header with-border ">
               <div class="card-tools pull-right">
                  <button type="button" class="btn btn-card-tool" >
                  <a  href="{{ route('products.show', $product->id) }}">
                  <i class="fa fa-fw fa-eye 10px"></i>
                  </a>
               </div>
               <br>
               <h3 class="card-title">{{ $product->pname }}</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
               <img style="max-width:300px, max-height:200px"  class="d-block w-100" src="{{ $product->pfile }}"    height="100" width="100" alt="src-file">
            </div>
            <!-- /.card-body -->                
            <table class="table table-bordered">
               <tbody>
                  <tr>
                     <td><b>Precio:</b></td>
                     <td>{{ $product->precio_venta }}</td>
                  </tr>
                  <tr>
                     <td><b>Descripcion</b></td>
                     <td>{{ $product->pdescripcion }}</td>
                  </tr>
                  <tr>
                     <td><b>Presentacion</b></td>
                     <td>{{ $product->ppresentacion }}</td>
                  </tr>
                  <tr>
                     <td><b>De venta en: </b></td>
                     <td>
                        {{$product->excerpt}}
                        <a href="{{route('commerce_show', $product->commerce_id)}}" class="">
                        {{ $product->cnombre }}
                        </a>
                     </td>
                  </tr>
                  </tr>
               </tbody>
            </table>
         </div>
         @endforeach
      </div>
   </section>
   {{ $products->render() }}
   <!-- /.footer -->   
</div>
<!-- /.card -->
@endsection