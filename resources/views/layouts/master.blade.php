<!DOCTYPE html>
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





    <!-- Aqui esta todo el contenido de la pagina -->

    <div class="wrapper">

        <!-- Aqui esta el menu de navegacion de la pagina -->
         @includeIf('admin.partials.nav')
        <!-- Aqui esta el menu de navegacion de la pagina -->

        <!-- Todo el contenido de las subpaginas -->
        <div class="content-wrapper">

            <div class="content">

                <div class="container">

                    @yield('content')

                </div>

            </div>

        </div>
        <!-- Todo el contenido de las subpaginas-->

        <!-- Aqui esta el footer de la pagina -->
        @include('admin.partials.footer')
        <!-- Aqui esta el footer de la pagina -->

    </div>

    <!-- Aqui esta todo el contenido de la pagina -->






    <!-- Script general -->

    <script src="{{ asset('js/app.js') }}"></script>

    <!-- Script general -->

    <script>
        <!-- Administracion de usuario 
        -->

    <!-- Editar de usuario -->

    $('#editUser').on('show.bs.modal', function (event) {

    var button = $(event.relatedTarget)

    var image = button.data('image')
    var user_id = button.data('userid')
    var modal = $(this)

    modal.find('.modal-body #image').val(image);
    modal.find('.modal-body #user_id').val(user_id);
    })

    <!-- Editar de usuario -->



    <!-- Administracion de las categorias -->

    <!-- Editar de categoria -->

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

    <!-- Editar de categoria -->

    <!-- Eliminar de categoria -->

    $('#delete').on('show.bs.modal', function (event) {

    var button = $(event.relatedTarget)

    var cat_id = button.data('catid')
    var modal = $(this)

    modal.find('.modal-body #cat_id').val(cat_id);
    })

    <!-- Eliminar de categoria -->

    <!-- Administracion de las categorias -->

    <!-- Administracion de la condicion -->

    <!-- Editar de condicion -->

    $('#editCondicion').on('show.bs.modal', function (event) {

    var button = $(event.relatedTarget)

    var titulo = button.data('mytitulo')
    var con_id = button.data('conid')
    var modal = $(this)

    modal.find('.modal-body #titulo').val(titulo);
    modal.find('.modal-body #con_id').val(con_id);
    })

    <!-- Eliminar de condicion -->

    $('#deleteCondicion').on('show.bs.modal', function (event) {

    var button = $(event.relatedTarget)

    var con_id = button.data('conid')
    var modal = $(this)

    modal.find('.modal-body #con_id').val(con_id);
    })

    <!-- Administracion de la condicion -->

    
    
    <!-- Administracion de Predio -->

    <!-- Editar de predio -->

    $('#editCabezal').on('show.bs.modal', function (event) {

    var button = $(event.relatedTarget)

    var titulo = button.data('titulo')
    var precio = button.data('precio')
    var modelo = button.data('modelo')
    var km = button.data('km')
    var ubicacion = button.data('ubicacion')
    var categoria = button.data('categoria')
    var condicion = button.data('condicion')
    var image = button.data('image')
    var descripcioncompleta = button.data('descripcioncompleta')
    var pre_id = button.data('preid')
    var modal = $(this)

    modal.find('.modal-body #titulo').val(titulo);
    modal.find('.modal-body #modelo').val(modelo);
    modal.find('.modal-body #precio').val(precio);
    modal.find('.modal-body #km').val(km);
    modal.find('.modal-body #ubicacion').val(ubicacion);
    modal.find('.modal-body #categoria').val(categoria);
    modal.find('.modal-body #condicion').val(condicion);
    modal.find('.modal-body #image').val(image);
    modal.find('.modal-body #descripcioncompleta').val(descripcioncompleta);
    modal.find('.modal-body #pre_id').val(pre_id);
    })

    <!-- Eliminar predio -->

    $('#deleteCabezal').on('show.bs.modal', function (event) {

    var button = $(event.relatedTarget)

    var pre_id = button.data('preid')
    var modal = $(this)

    modal.find('.modal-body #pre_id').val(pre_id);
    })

    <!-- Administracion de los cabezales -->


    </script>

</body>

</html>
