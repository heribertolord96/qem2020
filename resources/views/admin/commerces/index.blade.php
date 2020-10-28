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
         

           {{--  <div class="row card-for">
               
              
             </div> --}}
         
         <div class="flex-container">
            
            @foreach ($commerces as $commerce)
             <!-- /.col -->
             <div class="commerce-card col-md-3" style=" background-color: #058">
               <!-- Widget: user widget style 1 -->
               <div class="box box-widget widget-user">
                  <a class="topcard"  href="{{ route('commerce_show', $commerce->commerce_id) }}">
                     <h3 class="widget-user-username">{{ $commerce->nombre }}</h3></a>
                 
                 <!-- Add the bg color to the header using any of the bg-* classes -->
                 <div class="widget-user-header bg-black" 
               style="background: url('data:image/jpeg;base64,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') center center;">
                  <div class="row widget-user-image">
           
                     {{-- <img class="img-circle"  src="{{ $commerce->file }}" alt="User Avatar"> --}}
                     <img class="img-circle"  src="https://adminlte.io/themes/AdminLTE/dist/img/user1-128x128.jpg" alt="User Avatar">
                   </div>
                 </div>
               </div>
                 <div class="row border-top" >
                    <div class="row border-top top-card">
                       <div class="col-sm-12">
                        <h5 class="widget-user-desc">{{ $commerce->descripcion }}</h5>
                       </div>
                    </div>
                   <div class="row border-top">
                     <div class="col-sm-6 border-right">
                       <div class="description-block">
                         <h5 class="description-header">{{ $commerce->hora_apertura }}</h5>
                         {{-- <span class="description-text">Abrimos a:</span> --}}
                         <h6 class="description-text">Abrimos a:</h6>
                       </div>
                       <!-- /.description-block -->
                     </div>
                     <!-- /.col -->
                     <div class="col-sm-6">
                       <div class="description-block">
                         <h5 class="description-header">{{ $commerce->hora_cierre }}</h5>
                         <h6 class="description-text">Cerramos a:</h6>
                       </div>
                       <!-- /.description-block -->
                     </div>
                     <!-- /.col -->
                     
                     <!-- /.col -->
                   </div>
                   <!-- /.row -->
                 </div>
               
               <!-- /.widget-user -->
             </div>
             <!-- /.col -->
            
         
         @endforeach  
      </div>
   </div>
   </section>
   {{ $commerces->render() }}
</div>
<!-- /.card -->
@endsection