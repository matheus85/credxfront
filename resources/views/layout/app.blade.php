@include('layout.head')
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
		@include('layout.imports')
	</body>
</html>
