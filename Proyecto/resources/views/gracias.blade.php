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
      <h2>
        Estimado: {{$nombres}}, <small>su solicitud fue ingresado con éxito.</small>
      </h2>
      <p>
        Su código de solicitud es: <strong>{{$codigo}}</strong>.
        <br>
        Puede consultar el estado de su {{strtolower($motivo)}} en el siguiente enlace: <a href="{{url('/consulta-reclamo/'.$codigo)}}" target="_blank">consultar el estadode su solicitud</a>.
      </p>
    </section>
  </body>
</html>