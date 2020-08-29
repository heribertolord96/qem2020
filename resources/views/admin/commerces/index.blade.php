@extends("theme/lte/layout")
@section('search_form')
<!-- SEARCH FORM -->
<form class="form-inline ml-3">
   <div class="input-group input-group-sm">
      <select class="form-control form-control-navbar col-md-3" name="criterio">
         <option value="commerces.nombre">Commerce</option>
         <option value="commerces.descripcion">Descripcion</option>
         <option value="">Ubicacion</option>
      </select>
      <input class="form-control form-control-navbar" name="buscar" type="search" placeholder="Search" aria-label="Search">
      En: 
      <input class="form-control form-control-navbar autocomplete" name="buscaren" type="search" placeholder="En yahualica Jal." aria-label="Search">
      <div class="input-group-append">
         <button class="btn btn-navbar" type="submit">
         <i class="fas fa-search"></i>
         <i class="fas fa-map-marked-alt"></i>
         </button>
      </div>
   </div>
</form>
@endsection
@section('contenido')
<!----------------------------------------------------------------->
<div class="card card-success">
   <div class="panel panel-default-success">
      <div class="card-header with-border ">
         <h3 class="card-title">Commerces</h3>
      </div>
      @guest
      @else
      <div class="card-tool pull-right">
         <a href="{{ route('commerces.create') }}" class="btn btn-block btn-info btn-sm">
         <i class="fa fa-fw fa-plus-circle"></i> Agregar commerce
         </a>
      </div>
      @endguest                
   </div>
   <div class="card-body">
      <div class="col-md-12">
         <div class="card mb-3 mt-3" v-for="item in list" :key="commerce.id" >
            <a class="card_header" v-bind:href="item.slug" v-text="item.nombre"></a>
            <div class="card-body">
               <p class="card-text" v-text="item.descripcion"></p>
            </div>
         </div>
      </div>
      <section class="content">
         <div class="row productrow">
            @foreach ($commerces as $commerce)
            <div class="col-md-3 col-sm-6 col-xs-12">
               <h3 class="card-title">{{ $commerce->nombre }}</h3>
               <div class="card-tools pull-right">
                  <button type="button" class="btn btn-card-tool" >
                  <a  href="{{ route('commerce_show', $commerce->commerce_id) }}">
                  <i class="fa fa-fw fa-eye"></i>
                  </a>
                  </button>
                  <button type="button" class="btn btn-card-tool" data-widget="collapse">
                  <i class="fa fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-card-tool" data-widget="remove">
                  <i class="fa fa-times"></i></button>
               </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body"  >          
               <img  class="d-block w-100" src="{{ $commerce->file }}" height="42" width="42"   height="100" width="100" alt="src-file">
            </div>
            <!-- /.card-body -->
            <div class="card-footer no-padding">
               <tr>
                  <p><b>Descripción: <br>
                     </b> {{ $commerce->descripcion }}
                  </p>
               </tr>
               <table class="table table-bordered">
                  <tbody>
                     <tr>
                        <td><b>Abrimos a:</b></td>
                        <td>{{ $commerce->hora_apertura }}</td>
                     </tr>
                     <tr>
                        <td><b>Cerramos a:</b></td>
                        <td>{{ $commerce->hora_cierre }}</td>
                     </tr>
                     </tr>
                  </tbody>
               </table>
            </div>
            <!-- /.footer -->
         </div>
         @endforeach  
   </div>
   </section>
   {{ $commerces->render() }}
</div>
<!-- /.card -->
@endsection