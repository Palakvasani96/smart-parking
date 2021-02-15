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
        <link rel="stylesheet" href="css/bootstrap.min.css" />
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
        <script src="{!! asset('js/scripts.js') !!}" crossorigin="anonymous"></script>
        
        <script src="{!! asset('https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js') !!}" crossorigin="anonymous"></script>
        <script src="{!! asset('https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js') !!}" crossorigin="anonymous"></script>
        <script src="{!! asset('js/datatables-demo.js') !!}" crossorigin="anonymous"></script>


        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>  
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
<script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>




<!-- CSS For Data Table -->
<link href="{!! asset('https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css') !!}" rel="stylesheet">   
    <link href="{!! asset('https://cdn.datatables.net/1.10.23/css/dataTables.bootstrap4.min.css') !!}" rel="stylesheet">   

<script type="text/javascript">
  $(function () 
  {    
        var table = $('#userDataTable').DataTable(
        {
            processing: true,
            serverSide: true,
            ajax: "{{ route('userData') }}",
            columns: [
                {data: 'id', name: 'id'},
                {data: 'name', name: 'name'},
                {data: 'email', name: 'email'},
                {data: 'is_admin', name: 'is_admin'},
                {
                    data: 'action', 
                    name: 'action', 
                    orderable: true, 
                    searchable: true
                },
            ]
        });    
  });
</script>
    </body>
</html>