<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<title> @yield('title') </title>
	<meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
	<link rel="icon" href="{{ asset('admin/img/icon.ico') }}" type="image/x-icon"/>

	<!-- Fonts and icons -->
	<script src="{{ asset('admin/js/plugin/webfont/webfont.min.js') }}"></script>
	<script>
		WebFont.load({
			google: {"families":["Lato:300,400,700,900"]},
			custom: {"families":["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands", "simple-line-icons"], urls: ['admin/css/fonts.min.css']},
			active: function() {
				sessionStorage.fonts = true;
			}
		});
	</script>

	@include('admin.includes.style')
</head>
<body>
	<div class="wrapper">

        <!-- Header -->
		@include('admin.includes.header')
        <!-- End Header -->

		<!-- Sidebar -->
		@include('admin.includes.sidebar')
		<!-- End Sidebar -->

        <!-- Content -->
		@yield('content')
        <!-- End Content -->

	</div>

    @include('admin.includes.script')
</body>
</html>
