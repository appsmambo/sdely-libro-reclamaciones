<!doctype html>
<html lang="{{ app()->getLocale() }}">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway:400,600" type="text/css">
    <link rel="stylesheet" href="{{url('css/estilos.css')}}" type="text/css">
    <title>Libro de reclamaciones (Ley 29571) - Sdely.com</title>
  </head>
  <body>
    <section class="container">
      <form id="registro_reclamo" action="{{ route('actualizar_reclamo') }}" method="post" enctype="multipart/form-data">
        {{csrf_field()}}
        <h2>Datos personales del consumidor:</h2>
        <div class="row">
          <div class="col-md">
            <div class="form-group">
              <label for="tipo_documento">Tipo de documento:</label>
              <select id="tipo_documento" class="form-control validate[required]" disabled>
                <option value="">Seleccione</option>
                <option value="DNI" {{$data->tipo_documento=='DNI'?'selected':''}}>DNI</option>
                <option value="CE" {{$data->tipo_documento=='CE'?'selected':''}}>C.E.</option>
                <option value="PASAPORTE" {{$data->tipo_documento=='PASAPORTE'?'selected':''}}>Pasaporte</option>
              </select>
            </div>
          </div>
          <div class="col-md">
            <div class="form-group">
              <label for="numero_documento">Número de documento:</label>
              <input type="text" id="numero_documento" class="form-control validate[required,min[8]]" maxlength="50" value="{{$data->numero_documento}}" readonly>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md">
            <div class="form-group">
              <label for="nombres">Nombres:</label>
              <input type="text" id="nombres" class="form-control validate[required,custom[onlyLetterSpecial]]" maxlength="50" value="{{$data->nombres}}" readonly>
            </div>
          </div>
          <div class="col-md">
            <div class="form-group">
              <label for="apellido_paterno">Apellido paterno:</label>
              <input type="text" id="apellido_paterno" class="form-control validate[required,custom[onlyLetterSpecial]]" maxlength="50" value="{{$data->apellido_paterno}}" readonly>
            </div>
          </div>
          <div class="col-md">
            <div class="form-group">
              <label for="apellido_materno">Apellido materno:</label>
              <input type="text" id="apellido_materno" class="form-control validate[required,custom[onlyLetterSpecial]]" maxlength="50" value="{{$data->apellido_materno}}" readonly>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md">
            <div class="form-group">
              <label for="telefono_fijo">Teléfono fijo:</label>
              <input type="tel" id="telefono_fijo" class="form-control validate[required,custom[onlyNumberSp]]" maxlength="50" value="{{$data->telefono_fijo}}" readonly>
            </div>
          </div>
          <div class="col-md">
            <div class="form-group">
              <label for="telefono_celular">Teléfono celular:</label>
              <input type="tel" id="telefono_celular" class="form-control validate[required,custom[onlyNumberSp]]" maxlength="50" value="{{$data->telefono_celular}}" readonly>
            </div>
          </div>
          <div class="col-md">
            <div class="form-group">
              <label for="email">Email:</label>
              <input type="email" id="email" class="form-control validate[required,custom[email]]" maxlength="100" value="{{$data->email}}" readonly>
            </div>
          </div>
        </div>
        <h4>Datos del apoderado (En caso la persona que presenta el reclamo sea menor de edad)</h4>
        <div class="row">
          <div class="col-md">
            <div class="form-group">
              <label for="nombre_apoderado">Nombres y apellidos:</label>
              <input type="tel" id="nombre_apoderado" class="form-control validate[custom[onlyLetterSpecial]]" maxlength="100" value="{{$data->nombre_apoderado}}" readonly>
            </div>
          </div>
          <div class="col-md">
            <div class="form-group">
              <label for="tipo_documento_apoderado">Tipo de documento:</label>
              <select id="tipo_documento_apoderado" class="form-control" disabled>
                <option value="">Seleccione</option>
                <option value="DNI" {{$data->tipo_documento=='DNI'?'selected':''}}>DNI</option>
                <option value="CE" {{$data->tipo_documento=='CE'?'selected':''}}>C.E.</option>
                <option value="PASAPORTE" {{$data->tipo_documento=='PASAPORTE'?'selected':''}}>Pasaporte</option>
              </select>
            </div>
          </div>
          <div class="col-md">
            <div class="form-group">
              <label for="numero_documento_apoderado">Número de documento:</label>
              <input type="text" id="numero_documento_apoderado" class="form-control" maxlength="20" value="{{$data->numero_documento_apoderado}}" readonly>
            </div>
          </div>
        </div>
        <h2>Información general y detalle de su reclamo:</h2>
        <div class="row">
          <div class="col-md">
            <div class="form-group">
              <label for="tienda">Tienda de compra:</label>
              <select id="tienda" class="form-control validate[required]" disabled>
                <option value="">Seleccione</option>
                <optgroup label="Jesus María">
                    <option value="JM1" {{$data->tienda=='JM1'?'selected':''}}>Av. Arnaldo Marquez 1314</option>
                    <option value="JM2" {{$data->tienda=='JM2'?'selected':''}}>Av. República Dominicana 286</option>
                    <option value="JM3" {{$data->tienda=='JM3'?'selected':''}}>Av. Horacio Urteaga 526</option>
                </optgroup>
                <option value="Plaza Norte" {{$data->tienda=='Plaza Norte'?'selected':''}}>Plaza Norte</option>
                <option value="Minka" {{$data->tienda=='Minka'?'selected':''}}>Minka</option>
                <option value="Megaplaza" {{$data->tienda=='Megaplaza'?'selected':''}}>Megaplaza</option>
                <option value="Huacho" {{$data->tienda=='Huacho'?'selected':''}}>Huacho</option>
              </select>
            </div>
          </div>
          <div class="col-md">
            <div class="form-group">
              <label for="motivo">Motivo:</label>
              <select id="motivo" class="form-control validate[required]" disabled>
                <option value="">Seleccione</option>
                <option value="Reclamo" {{$data->motivo=='Reclamo'?'selected':''}}>Reclamo</option>
                <option value="Queja" {{$data->motivo=='Queja'?'selected':''}}>Queja</option>
              </select>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md">
            <div class="form-group">
              <label for="detalle">Detalle:</label>
              <textarea id="detalle" class="form-control validate[required]" rows="4" readonly>{{$data->detalle}}</textarea>
            </div>
          </div>
          <div class="col-md">
            <div class="form-group">
              <label for="pedido">Pedido:</label>
              <textarea id="pedido" class="form-control validate[required]" rows="4" readonly>{{$data->pedido}}</textarea>
            </div>
          </div>
        </div>
        <div class="row" id="bloqueRespuesta" {{$data->estado == 2 ? '' : 'style="display:none"'}}>
          <div class="col-md">
            <div class="form-group">
              <label for="respuesta">Ingresar respuesta:</label>
              <textarea name="respuesta" id="respuesta" class="form-control" rows="4" {{$data->estado == 2 ? 'readonly' : ''}}>{{$data->respuesta}}</textarea>
            </div>
          </div>
        </div>
        @if ($data->estado == 1)
        <button type="button" class="btn btn-info" id="responder">Responder</button>
        <button type="submit" class="btn btn-primary" id="actualizar" style="display:none">Actualizar</button>
        @endif
        <a href="{{route('ver_reclamos')}}" class="btn btn-danger pull-right">Cancelar</a>
        <input type="hidden" name="id" value="{{$data->id}}">
      </form>
    </section>
    <script type="text/javascript" src="{{url('js/jquery-1.8.2.min.js')}}"></script>
    <script>
      $(function() {
        $('#responder').click(function() {
          $('#respuesta').prop('readonly', true);
          $('#actualizar').toggle('fast');
          $(this).fadeOut('fast');
        });
      })
    </script>
  </body>
</html>