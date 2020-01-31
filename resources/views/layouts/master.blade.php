
<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>CarDealer</title>

  <meta name="csrf-token" content="{{ csrf_token() }}">
 
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">

  <link href="https://fonts.googleapis.com/css?family=Anton&display=swap" rel="stylesheet">
  
 
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper" id="app">

    @include('admin.partials.nav')


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    
    <!-- Main content -->
    <div class="content">
      <div class="container">
        
        
          
          @yield('content')

     
         
      </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->


 @include('admin.partials.footer')

</div>
<!-- ./wrapper -->


<script src="{{ asset('js/app.js') }}"></script>


<!-- Script para mostrar datos en el modal update -->
<script>
 
  $('#edit').on('show.bs.modal', function (event) {
    
    var button = $(event.relatedTarget)
    
    var title = button.data('mytitle') 
    var des = button.data('mydescription') 
    var cat_id = button.data('catid') 
    var modal = $(this)

    modal.find('.modal-body #title').val(title);
    modal.find('.modal-body #des').val(des);
    modal.find('.modal-body #cat_id').val(cat_id);
})

$('#delete').on('show.bs.modal', function (event) {
      
      var button = $(event.relatedTarget) 
      
      var cat_id = button.data('catid') 
      var modal = $(this)

      modal.find('.modal-body #cat_id').val(cat_id);
})  


$('#editCondicion').on('show.bs.modal', function (event) {
    
    var button = $(event.relatedTarget)
    
    var titulo = button.data('mytitulo') 
    var con_id = button.data('conid') 
    var modal = $(this)

    modal.find('.modal-body #titulo').val(titulo);
    modal.find('.modal-body #con_id').val(con_id);
})

$('#deleteCondicion').on('show.bs.modal', function (event) {
      
      var button = $(event.relatedTarget) 
      
      var con_id = button.data('conid') 
      var modal = $(this)

      modal.find('.modal-body #con_id').val(con_id);
})  


$('#editCabezal').on('show.bs.modal', function (event) {
    
    var button = $(event.relatedTarget)
    
    var titulo = button.data('titulo') 
    var precio = button.data('precio') 
    var modelo = button.data('modelo') 
    var km = button.data('km') 
    var ubicacion = button.data('ubicacion') 
    var image = button.data('image') 
    var descripcioncompleta = button.data('descripcioncompleta') 
    var pre_id = button.data('preid') 
    var modal = $(this)

    modal.find('.modal-body #titulo').val(titulo);
    modal.find('.modal-body #modelo').val(modelo);
    modal.find('.modal-body #precio').val(precio);
    modal.find('.modal-body #km').val(km);
    modal.find('.modal-body #ubicacion').val(ubicacion);
    modal.find('.modal-body #image').val(image);
    modal.find('.modal-body #descripcioncompleta').val(descripcioncompleta);
    modal.find('.modal-body #pre_id').val(pre_id);
})


$('#deleteCabezal').on('show.bs.modal', function (event) {
      
      var button = $(event.relatedTarget) 
      
      var pre_id = button.data('preid') 
      var modal = $(this)

      modal.find('.modal-body #pre_id').val(pre_id);
})  


 
</script>

</body>
</html>
