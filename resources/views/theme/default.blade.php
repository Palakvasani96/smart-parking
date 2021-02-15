<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Dashboard - SB Admin</title> 
        <link href="{!! asset('https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css') !!}" crossorigin="anonymous" rel="stylesheet">
        <link href="{!! asset('css/styles.css') !!}" rel="stylesheet">   
       
    </head>
    <body class="sb-nav-fixed">
        <div id="wrapper">
            <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
                @include('theme.header')
                @include('theme.sidebar')
            </nav>
            <div id="page-wrapper">
                @yield('content')
            </div>
        </div> 
        <script src="{!! asset('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js') !!}" crossorigin="anonymous"></script>
        <script src="{!! asset('https://code.jquery.com/jquery-3.5.1.slim.min.js') !!}" crossorigin="anonymous"></script>
        <script src="{!! asset('https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js') !!}" crossorigin="anonymous"></script>
        <script src="{!! asset('js/scripts.js') !!}" crossorigin="anonymous"></script>
        <script src="{!! asset('https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js') !!}" crossorigin="anonymous"></script>
        <script src="{!! asset('js/chart-area-demo.js') !!}" crossorigin="anonymous"></script>
        <script src="{!! asset('js/chart-bar-demo.js') !!}" crossorigin="anonymous"></script>
        <script src="{!! asset('https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js') !!}" crossorigin="anonymous"></script>
        <script src="{!! asset('https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js') !!}" crossorigin="anonymous"></script>
        <script src="{!! asset('js/datatables-demo.js') !!}" crossorigin="anonymous"></script>
    </body>
</html>