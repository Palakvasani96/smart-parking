<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<title>Dashboard - SB Admin</title>
		<!-- Admin Theme Css -->
		<link href="{!! asset('css/adminTheme.css') !!}" rel="stylesheet">
		<!-- Bootstrap core CSS-->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootswatch/4.3.1/flatly/bootstrap.min.css">
		<!-- Font Awesome -->
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
		<!-- Data table design -->
		<link href="{!! asset('//cdn.datatables.net/1.10.23/css/jquery.dataTables.min.css') !!}" rel="stylesheet">
	</head>
	<body class="sb-nav-fixed">
		<div id="wrapper">
			<nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0"> @include('theme.header') @include('theme.sidebar') </nav>
			<div id="page-wrapper"> @yield('content') </div>
		</div>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
		<script src="{!! asset('js/scripts.js') !!}" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
		<!-- Data Table Data Fetch Js -->
		<script src="{!! asset('//cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js') !!}" crossorigin="anonymous"></script>
	</body>
</html>