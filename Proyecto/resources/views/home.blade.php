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
      <form>
        <h2>Datos personales del consumidor:</h2>
        <div class="row">
          <div class="col-md">
            <div class="form-group">
              <label for="tipo_documento">Tipo de documento:</label>
              <select name="tipo_documento" id="tipo_documento" class="form-control">
                <option value="">Seleccione</option>
                <option value="DNI">DNI</option>
                <option value="CE">C.E.</option>
                <option value="PASAPORTE">Pasaporte</option>
              </select>
            </div>
          </div>
          <div class="col-md">
            <div class="form-group">
              <label for="numero_documento">Número de documento:</label>
              <input type="text" name="numero_documento" id="numero_documento" class="form-control">
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md">
            <div class="form-group">
              <label for="nombres">Nombres:</label>
              <input type="text" name="nombres" id="nombres" class="form-control">
            </div>
          </div>
          <div class="col-md">
            <div class="form-group">
              <label for="apellido_paterno">Apellido paterno:</label>
              <input type="text" name="apellido_paterno" id="apellido_paterno" class="form-control">
            </div>
          </div>
          <div class="col-md">
            <div class="form-group">
              <label for="apellido_materno">Apellido materno:</label>
              <input type="text" name="apellido_materno" id="apellido_materno" class="form-control">
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md">
            <div class="form-group">
              <label for="telefono_fijo">Teléfono fijo:</label>
              <input type="tel" name="telefono_fijo" id="telefono_fijo" class="form-control">
            </div>
          </div>
          <div class="col-md">
            <div class="form-group">
              <label for="telefono_celular">Teléfono celular:</label>
              <input type="tel" name="telefono_celular" id="telefono_celular" class="form-control">
            </div>
          </div>
          <div class="col-md">
            <div class="form-group">
              <label for="email">Email:</label>
              <input type="email" name="email" id="email" class="form-control">
            </div>
          </div>
        </div>
        <h4>Datos del apoderado (En caso la persona que presenta el reclamo sea menor de edad)</h4>
        <div class="row">
          <div class="col-md">
            <div class="form-group">
              <label for="nombre_apoderado">Nombres y apellidos:</label>
              <input type="tel" name="nombre_apoderado" id="nombre_apoderado" class="form-control">
            </div>
          </div>
          <div class="col-md">
            <div class="form-group">
              <label for="tipo_documento_apoderado">Tipo de documento:</label>
              <select name="tipo_documento_apoderado" id="tipo_documento_apoderado" class="form-control">
                <option value="">Seleccione</option>
                <option value="DNI">DNI</option>
                <option value="CE">C.E.</option>
                <option value="PASAPORTE">Pasaporte</option>
              </select>
            </div>
          </div>
          <div class="col-md">
            <div class="form-group">
              <label for="numero_documento_apoderado">Número de documento:</label>
              <input type="text" name="numero_documento_apoderado" id="numero_documento_apoderado" class="form-control">
            </div>
          </div>
        </div>
        <h2>Información general y detalle de su reclamo:</h2>
        <div class="row">
          <div class="col-md">
            <div class="form-group">
              <label for="tienda">Tienda de compra:</label>
              <select name="tienda" id="tienda" class="form-control">
                <option value="">Seleccione</option>
                <optgroup label="Jesus María">
                    <option value="JM1">Av. Arnaldo Marquez 1314</option>
                    <option value="JM2">Av. República Dominicana 286</option>
                    <option value="JM3">Av. Horacio Urteaga 526</option>
                </optgroup>
                <option value="Plaza Norte">Plaza Norte</option>
                <option value="Minka">Minka</option>
                <option value="Megaplaza">Megaplaza</option>
                <option value="Huacho">Huacho</option>
              </select>
            </div>
          </div>
          <div class="col-md">
            <div class="form-group">
              <label for="motivo">Motivo:</label>
              <select name="motivo" id="motivo" class="form-control">
                <option value="">Seleccione</option>
                <option value="reclamo">Reclamo</option>
                <option value="queja">Queja</option>
              </select>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md">
            <div class="form-group">
              <label for="detalle">Detalle:</label>
              <textarea name="detalle" id="detalle" class="form-control" rows="4"></textarea>
            </div>
          </div>
          <div class="col-md">
            <div class="form-group">
              <label for="pedido">Pedido:</label>
              <textarea name="pedido" id="pedido" class="form-control" rows="4"></textarea>
            </div>
          </div>
        </div>
        <button type="submit" class="btn btn-primary">Enviar</button>
      </form>
    </section>




    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js" integrity="sha384-a5N7Y/aK3qNeh15eJKGWxsqtnX/wWdSZSKp+81YjTmS15nvnvxKHuzaWwXHDli+4" crossorigin="anonymous"></script>
  </body>
</html>