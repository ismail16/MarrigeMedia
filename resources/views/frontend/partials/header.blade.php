<!DOCTYPE html>
<html lang="en">

<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
	<meta name="robots" content="noindex" />
	<title>@yield('title')</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="shortcut icon" href="{{ asset('images/icon.png') }}">
	<link href="https://fonts.googleapis.com/css?family=Work+Sans:100,200,300,400,500,600,700,800,900" rel="stylesheet">
	<link rel="stylesheet" href="{{ asset('frontend_assets/css/open-iconic-bootstrap.min.css')}}">
	<link rel="stylesheet" href="{{ asset('frontend_assets/css/animate.css') }}">
	<link rel="stylesheet" href="{{ asset('frontend_assets/css/owl.carousel.min.css') }}">
	<link rel="stylesheet" href="{{ asset('frontend_assets/css/owl.theme.default.min.css') }}">
	<link rel="stylesheet" href="{{ asset('frontend_assets/css/magnific-popup.css') }}">
	<link rel="stylesheet" href="{{ asset('frontend_assets/css/aos.css') }}">
	<link rel="stylesheet" href="{{ asset('frontend_assets/css/ionicons.min.css') }}">
	<link rel="stylesheet" href="{{ asset('frontend_assets/css/bootstrap-datepicker.css') }}">
	<link rel="stylesheet" href="{{ asset('frontend_assets/css/jquery.timepicker.css') }}">
	<link rel="stylesheet" href="{{ asset('frontend_assets/css/flaticon.css') }}">
	<link rel="stylesheet" href="{{ asset('frontend_assets/css/icomoon.css') }}">
	<link rel="stylesheet" href="{{ asset('frontend_assets/css/bootstrap.css') }}">
	<link href="{{ asset('frontend_assets/fontawesome/css/all.css') }}" rel="stylesheet">
	<!-- <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"> -->
	<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"> -->
	<link rel="stylesheet" href="{{ asset('frontend_assets/css/style.css') }}">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />
	<link href="{{ asset('backend_assets/timeline.css') }}" rel="stylesheet" type="text/css" >
	<style type="text/css">
		span {
		    color: #040404;
		}
		.image-size{
			max-height: 150px !important;
		}
		.bg-light-green{
            background-color: #f5ffd7e0;;
        }
        .bg-body-green{
                background-color: #91d2ab3b;
        }
        .form-label{
            color: #cf51a4 !important;
        }
	</style>

	@stack('css')

</head>
<body>