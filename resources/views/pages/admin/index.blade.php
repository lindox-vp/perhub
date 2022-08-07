
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>{{ str($title)->title() }} | Administrator - Dinas Perhubungan Kota Kupang</title>
    <link rel="icon" type="image/png" href="{{ asset('assets/img/fav/icon.png') }}">

	<!-- Global stylesheets -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
	<link href="{{ asset('assets/limitless-assets/global/css/icons/icomoon/styles.css') }}" rel="stylesheet" type="text/css">
	<link href="{{ asset('assets/limitless-assets/layout/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
	<link href="{{ asset('assets/limitless-assets/layout/css/bootstrap_limitless.min.css') }}" rel="stylesheet" type="text/css">
	<link href="{{ asset('assets/limitless-assets/layout/css/layout.min.css') }}" rel="stylesheet" type="text/css">
	<link href="{{ asset('assets/limitless-assets/layout/css/components.min.css') }}" rel="stylesheet" type="text/css">
	<link href="{{ asset('assets/limitless-assets/layout/css/colors.min.css') }}" rel="stylesheet" type="text/css">

	
	<link href="{{ asset('assets/lindox-assets/css/lindox.css') }}" rel="stylesheet" type="text/css">
	<link href="{{ asset('assets/lindox-assets/css/main.css') }}" rel="stylesheet" type="text/css">
	<!-- /global stylesheets -->

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

<body>

	<!-- Main navbar -->
	@include('pages.admin.layouts.inc-main-navbar')

	<!-- /main navbar -->
    
    
	<!-- Page header -->
	@include('pages.admin.layouts.inc-page-header')
	
	<!-- /page header -->
    
    
	<!-- Page content -->
	<div class="page-content content-boxed pt-0">
        
        <!-- Main sidebar -->
        @include('pages.admin.layouts.inc-main-sidebar')
		
		<!-- /main sidebar -->

        
		<!-- Main content -->
		<div class="content-wrapper">

			<!-- Content area -->
			<div class="content">

                @yield('content')
                
			</div>
			<!-- /content area -->

		</div>
		<!-- /main content -->

	</div>
	<!-- /page content -->

    
	<!-- Footer -->
    @include('pages.admin.layouts.inc-footer')
	
	<!-- /footer -->
		
</body>
</html>
