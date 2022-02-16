<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{env('APP_NAME')}}</title>
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
	<link rel="stylesheet" href="{{asset('vendor/plugins/fontawesome-free/css/all.min.css')}}">
	<link rel="stylesheet" href="{{asset('vendor/dist/css/adminlte.min.css')}}">
	@yield('css')
</head>
	<body class="hold-transition sidebar-mini">
		<div class="wrapper">
			@include('layout.navbar')
			@include('layout.sidebar')
			<div class="content-wrapper">
				<div class="content">
      				<div class="container-fluid">
					@yield('content')
					</div>
				</div>
			</div>
			<aside class="control-sidebar control-sidebar-dark">
				<div class="p-3">
					<h5>Title</h5>
					<p>Sidebar content</p>
				</div>
			</aside>
			@include('layout.footer')
		</div>
		<input type="hidden" name="url_root" value="{{ url('/') }}">
		<script src="{{asset('vendor/plugins/jquery/jquery.min.js')}}"></script>
		<script src="{{asset('vendor/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
		<script src="{{asset('vendor/dist/js/adminlte.min.js')}}"></script>
        @yield('js')
	</body>
</html>
