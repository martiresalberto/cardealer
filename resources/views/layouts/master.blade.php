
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

    @include('admin.partials.nav')


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    
    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        
        <div class="row">
          
          @yield('content')

        </div>
         
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

<!-- REQUIRED SCRIPTS -->

<script src="{{ asset('js/app.js') }}"></script>

<script>

  $('#edit').on('show.bs.modal', function (event) {
    
    var button = $(event.relatedTarget)
    
    var title = button.data('mytitle') 
    var des = button.data('mydescription') 

    var modal = $(this)
    modal.find('.modal-body #title').val(title);
    modal.find('.modal-body #des').val(des);
})

</script>

</body>
</html>
