
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Dinas Perhubungan Kota Kupang</title>
    <link rel="icon" type="image/png" href="{{ asset('assets/img/fav/icon.png') }}">

	<!-- Global stylesheets -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
	<link href="{{ asset('assets/limitless-assets/global/css/icons/icomoon/styles.css') }}" rel="stylesheet" type="text/css">
	<link href="{{ asset('assets/limitless-assets/layout/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
	<link href="{{ asset('assets/limitless-assets/layout/css/bootstrap_limitless.min.css') }}" rel="stylesheet" type="text/css">
	<link href="{{ asset('assets/limitless-assets/layout/css/layout.min.css') }}" rel="stylesheet" type="text/css">
	<link href="{{ asset('assets/limitless-assets/layout/css/components.min.css') }}" rel="stylesheet" type="text/css">
	<link href="{{ asset('assets/limitless-assets/layout/css/colors.min.css') }}" rel="stylesheet" type="text/css">
	<!-- /global stylesheets -->

	<style>
		@media (max-width:900px){.s-none{display:none}}
	</style>
    
    @stack('first-css')

	<!-- Core JS files -->
	<script src="{{ asset('assets/limitless-assets/global/js/main/jquery.min.js') }}"></script>
	<script src="{{ asset('assets/limitless-assets/global/js/main/bootstrap.bundle.min.js') }}"></script>
	<script src="{{ asset('assets/limitless-assets/global/js/plugins/loaders/blockui.min.js') }}"></script>
	<!-- /core JS files -->

	<!-- Theme JS files -->

    @stack('first-js')
	<script src="{{ asset('assets/limitless-assets/layout/js/app.js') }}"></script>
    @stack('second-js')
	<!-- /theme JS files -->

</head>

<body class="bg-white">

	<!-- Page content -->
	<div class="page-content content-boxed pt-0 pb-0">

		<!-- Main content -->
		<div class="content-wrapper">

			<!-- Content area -->
			<div class="content d-flex justify-content-between">
                @yield('content')

			</div>
			<!-- /content area -->

		</div>
		<!-- /main content -->

	</div>
	<!-- /page content -->

</body>
</html>
