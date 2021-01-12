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
        <input class="form-control form-control-navbar" name="buscar" type="search" placeholder="Search"
            aria-label="Search">
        En:
        <input class="form-control form-control-navbar autocomplete" name="buscaren" type="search"
            placeholder="En yahualica Jal." aria-label="Search">
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
<div>
    <div class="panel panel-default-success">
        <div class="card-header with-border ">
            <h3 class="card-title">Commerces</h3>
        </div>
        @guest
        @else

    <button type="button" class="btn btn-outline-dark mr-2" data-toggle="modal" data-target="#modal-commerce-view"
        data-method="create">
        <i class="fe fe-plus"></i> Nuevo
    </button>
    @endguest
</div>
<div>

    <section class="content">

       {{--  <div class="flex-container"> --}}
<div class="row">
            @foreach ($commerces as $commerce)
            <!-- /.col -->

            <!-- /.col -->
            <div class="col-sm-6 col-md-3 col-lg-4 shadow p-3 mb-5 rounded">
                <div class="card text-center">
                    <div class="card-header">
                        <a href="{{ route('commerce_show', $commerce->commerce_id) }}">
                            <h3 class="align-middle"data-placement="top" title="{{ $commerce->nombre }}"
                             style =" overflow: hidden;
                            white-space: nowrap;display: block;
                            text-overflow: ellipsis;"data-toggle="tooltip" >{{ $commerce->nombre }}</h3>
                        </a>
                      </div>
                <div class="card-body">
                    <div class="text-center" style="height:99px;">
                        <img   class="img-circle" style="height:100px;" src="{{$commerce->file}}" alt="img">
                      </div>

                    <p class="card-text align-middle"  style="height:60px; max-height:60px;" >{{ $commerce->descripcion }}</p>
                </div>
                <div class="card-footer">
                    <div class="row text-center">
                        <div class="col border-right">{{ $commerce->hora_apertura }}</div>
                        <div class="col border-left">{{ $commerce->hora_cierre }}</div>
                    </div>
                </div>
                </div>
            </div>

            @endforeach
        </div>
</div>
</section>
{{ $commerces->render() }}
</div>

<div class="modal fade" id="modal-commerce-view" role="dialog" aria-labelledby="modalCommerceView" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <form enctype="multipart/form-data" id="form-mail" novalidate>
                @csrf
                <div class="modal-header">
                    <h5 class="modal-title" id="modalCommerceView"></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"
                        onclick="this.form.reset();">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <div class="controls">
                                <input type="hidden" class="form-control" id="id" name="id" />
                            </div>
                        </div>

                        <div class="form-group col-md-12">
                            <div class="controls">
                                <label for="image">Imagen</label>
                                <input type="file" class="dropify" id="image" name="image"
                                        data-default-file="" data-allowed-file-extensions="jpg jpeg png bmp svg gif"
                                        data-max-file-size-preview="8M"/>
                            </div>
                        </div>

                        <div class="form-group col-md-12">
                            <div class="controls">
                                <label for="nombre">Nombre</label>
                                <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre"
                                    required data-validation-required-message="El campo titulo es obligatorio" />
                            </div>
                        </div>
                        <div class="form-group col-md-12">
                            <div class="controls">
                                <label for="slug">Url amigable</label>
                                <input type="text" class="form-control" id="slug" name="slug" placeholder="Nombre"
                                    required data-validation-required-message="El campo titulo es obligatorio" />
                            </div>
                        </div>

                        <div class="form-group col-md-12">
                            <div class="controls">
                                <label for="descripcion">Descripcion</label>
                                <textarea class="form-control" id="descripcion" name="descripcion" placeholder="Cuerpo"
                                    required
                                    data-validation-required-message="El campo cuerpo es obligatorio"></textarea>
                            </div>
                        </div>
                        <div class="form-group col-md-6">
                            <div class="controls">
                                <label for="hora_apertura">Horario de apertura</label>
                                <input type="time" class="form-control" id="hora_apertura" name="hora_apertura"
                                    placeholder="Despedida" required
                                    data-validation-required-message="El campo despedida es obligatorio" />
                            </div>
                        </div>
                        <div class="form-group col-md-6">
                            <div class="controls">
                                <label for="hora_cierre">Horario de cierre</label>
                                <input type="time" class="form-control" id="hora_cierre" name="hora_cierre"
                                    placeholder="Despedida" required
                                    data-validation-required-message="El campo despedida es obligatorio" />
                            </div>
                        </div>

                        <div class="form-group col-md-6">
                            <div class="controls">
                                <label for="num_telefono">Telefono</label>
                                <input type="text" class="form-control" id="num_telefono" name="num_telefono"
                                    placeholder="Despedida" required
                                    data-validation-required-message="El campo despedida es obligatorio" />
                            </div>
                        </div>
                        <div class="form-group col-md-6">
                            <div class="controls">
                                <label for="email">Email</label>
                                <input type="text" class="form-control" id="email" name="email" placeholder="Despedida"
                                    required data-validation-required-message="El campo despedida es obligatorio" />
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-12">
                                <div class="controls">
                                    <label for="calle">Calle</label>
                                    <input type="text" class="form-control" id="calle" name="calle"
                                        placeholder="grove st" required
                                        data-validation-required-message="El campo calle es obligatorio" />
                                </div>
                            </div>
                            <div class="form-group col-md-6">
                                <div class="controls">
                                    <label for="numero_exterior">Numero exterior</label>
                                    <input type="text" class="form-control" id="numero_exterior" name="numero_exterior" placeholder="Despedida"
                                        required data-validation-required-message="El campo despedida es obligatorio" />
                                </div>
                            </div>
                            <div class="form-group col-md-6">
                                <div class="controls">
                                    <label for="numero_interior">Numero interior</label>
                                    <input type="text" class="form-control" id="numero_interior" name="numero_interior" placeholder="Despedida"
                                        required data-validation-required-message="El campo despedida es obligatorio" />
                                </div>
                            </div>
                            <div class="form-group col-md-4">
                                <div class="controls">
                                    <label for="city">Ciudad o municipio</label>
                                    <input type="text" class="form-control" id="city" name="city" placeholder="Despedida"
                                        required data-validation-required-message="El campo despedida es obligatorio" />
                                </div>
                            </div>
                            <div class="form-group col-md-4">
                                <div class="controls">
                                    <label for="state">Estado</label>
                                    <input type="text" class="form-control" id="state" name="state" placeholder="Despedida"
                                        required data-validation-required-message="El campo despedida es obligatorio" />
                                </div>
                            </div>
                            <div class="form-group col-md-4">
                                <div class="controls">
                                    <label for="country">Pais</label>
                                    <input type="text" class="form-control" id="country" name="country" placeholder="Despedida"
                                        required data-validation-required-message="El campo despedida es obligatorio" />
                                </div>
                            </div>
                            <div class="form-group col-md-6">
                                <div class="controls">
                                    <label for="latitud">Latitud</label>
                                    <input type="text" class="form-control" id="latitud" name="latitud" placeholder="Despedida"
                                        />
                                </div>
                            </div>
                            <div class="form-group col-md-6">
                                <div class="controls">
                                    <label for="longitud">Longitud</label>
                                    <input type="text" class="form-control" id="longitud" name="longitud" placeholder="Despedida"
                                        />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal" onclick="this.form.reset();" id="close">Cerrar</button>
                    <button type="submit" class="btn btn-primary" id="save">Guardar</button>
                </div>
            </form>
        </div>
    </div>
    <!-- /.card -->
    @endsection
    @section('footer_script')

    <script type="text/javascript">
        $("#modal-commerce-view").on("show.bs.modal", function (e) {
            var button = $(e.relatedTarget);
            var modal = $(this);
            var method = button.data("method");
            if (method === "create") {
                modal.find("#modalCommerceView").text("Crear mail");
                modal.find("#id").val("");
            }
            if (method === "edit") {
                var mail = button.data("mail");
                modal.find("#modalCommerceView").text("Editar mail");

                modal.find("#id").val(mail["id"]);
                modal.find("#title").val(mail["titulo"]);
                modal.find("#body").val(mail["cuerpo"]);
                modal.find("#farewell").val(mail["despedida"]);
                //modal.find("#image").val(mail["imagen"]);
                modal.find('#imagen').attr("src", "/images/mail/").val(mail["imagen"]);
            }
        });

        $("#form-mail").find("input,select,textarea").not("[type=submit]").jqBootstrapValidation({
            filter: function () {
                return !$(this).is(":disabled");
            },
            preventSubmit: true,
            submitSuccess: function ($form, event) {
                event.preventDefault();
                var url = "";
                if ($form.find("#id").val() === "") {
                    url = "{{ route('commerces.store') }}";
                } else {
                    url = "{{ route('commerces.update', ':id') }}";
                    url = url.replace(":id", $form.find("#id").val());
                }
                $.ajax({
                    url: url,
                    data: new FormData($form[0]),
                    type: "POST",
                    processData: false,
                    contentType: false,
                    enctype: "multipart/form-data",
                    headers: {
                        "X-CSRF-TOKEN": "{{ csrf_token() }}"
                    },
                    success: function (data) {
                        mail_datatable.ajax.reload();
                        setTimeout(function () {
                            $("#modal-commerce-view #close").trigger("click");
                        }, 500);
                    },
                    error: function (xhr, ajaxOptions, thrownError) {
                        swal({
                            title: '¡Alerta!',
                            text: xhr.responseText,
                            type: 'info',
                            confirmButtonText: 'Cerrar',
                            confirmButtonClass: 'btn-primary'
                        });
                    }
                });
            }
        });


        $(document).ready(function () {
            $("#nombre, #slug").stringToSlug({
                callback: function (text) {
                    $('#slug').val(text);
                }
            });
        });
    </script>
    @endsection
