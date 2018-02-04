<!doctype html>
<html lang="{{ app()->getLocale() }}">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway:400,600" type="text/css">
    <link rel="stylesheet" href="{{url('css/datatables.min.css')}}" type="text/css"/>
    <link rel="stylesheet" href="{{url('css/estilos.css')}}" type="text/css">
    <title>Libro de reclamaciones (Ley 29571) - Sdely.com</title>
  </head>
  <body>
    <section class="container">
      <table id="registros" class="table table-hover">
        <thead>
            <tr>
              <th>Código</th>
              <th>Fecha</th>
              <th>Nombre</th>
              <th>Tienda</th>
              <th>Motivo</th>
              <th>Atendido</th>
              <th>&nbsp;</th>
            </tr>
        </thead>
        <tbody>
        @forelse ($data as $registro)
          <tr>
            <td>{{$registro->codigo}}</td>
            <td>{{date('d/m/Y', strtotime($registro->created_at))}}</td>
            <td>{{$registro->apellido_paterno.' '.$registro->apellido_materno.', '.$registro->nombres}}</td>
            <td>{{$registro->tienda}}</td>
            <td>{{$registro->motivo}}</td>
            <td>{{$registro->estado == 1 ? 'No' : 'Si'}}</td>
            <td><a href="{{url('ver-reclamo/'.$registro->id)}}" class="btn btn-info btn-sm">Ver</a></td>
          </tr>
        @empty
          <tr>
            <td colspan="2"><p class="">No se encontraron registros</p></td>
          </tr>
        @endforelse
        </tbody>
      </table>
    </section>
    <script type="text/javascript" src="{{url('js/jquery-1.8.2.min.js')}}"></script>
    <script type="text/javascript" src="{{url('js/datatables.min.js')}}"></script>
    <script>
      $(function() {
        $('#registros').DataTable({
          order:[],
          searching:false,
          language:{
            'url':'DataTables-1.10.16/languages/Spanish.json'
          }
        });
      })
    </script>
  </body>
</html>