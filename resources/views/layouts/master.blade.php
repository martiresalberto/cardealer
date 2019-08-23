
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

</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper" id="app">

    @include('admin.category.partials.nav')


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


 @include('admin.category.partials.footer')

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


$('#editCabezal').on('show.bs.modal', function (event) {
    
    var button = $(event.relatedTarget)
    
    var marca = button.data('marca') 
    var modelo = button.data('modelo') 
    var motor = button.data('motor') 
    var camarote = button.data('camarote') 
    var caja = button.data('caja') 
    var llantas = button.data('llantas') 
    var freno = button.data('freno') 
    var color = button.data('color') 
    var ejes = button.data('ejes') 
    var ubication = button.data('ubication') 
    var estado = button.data('statecab') 
    var price = button.data('price') 
    var cab_id = button.data('cabid') 
    var modal = $(this)

    modal.find('.modal-body #name_marca').val(marca);
    modal.find('.modal-body #modelo').val(modelo);
    modal.find('.modal-body #type_motor').val(motor);
    modal.find('.modal-body #type_camarote').val(camarote);
    modal.find('.modal-body #type_caja').val(caja);
    modal.find('.modal-body #type_llantas').val(llantas);
    modal.find('.modal-body #type_freno').val(freno);
    modal.find('.modal-body #color').val(marca);
    modal.find('.modal-body #type_ejes').val(ejes);
    modal.find('.modal-body #ubication').val(ubication);
    modal.find('.modal-body #state_cabezal').val(estado);
    modal.find('.modal-body #price').val(price);
    modal.find('.modal-body #cab_id').val(cab_id);
})


$('#deleteCabezal').on('show.bs.modal', function (event) {
      
      var button = $(event.relatedTarget) 
      
      var cab_id = button.data('cabid') 
      var modal = $(this)

      modal.find('.modal-body #cab_id').val(cab_id);
})  

 
</script>

</body>
</html>
