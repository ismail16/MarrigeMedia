<!DOCTYPE html>
<html>
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>@yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{asset('backend_assets/plugins/fontawesome-free/css/all.min.css')}}">
    <link rel="shortcut icon" href="{{ asset('images/icon.png') }}">
    <link rel="stylesheet" href="{{asset('backend_assets/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css')}}">
    <link rel="stylesheet" href="{{asset('backend_assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('backend_assets/plugins/jqvmap/jqvmap.min.css')}}">
    <link rel="stylesheet" href="{{asset('backend_assets/dist/css/adminlte.min.css')}}">
    <link rel="stylesheet" href="{{asset('backend_assets/plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}">
    <link rel="stylesheet" href="{{asset('backend_assets/plugins/daterangepicker/daterangepicker.css')}}">
    <link rel="stylesheet" href="{{asset('backend_assets/plugins/summernote/summernote-bs4.css')}}">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    <style type="text/css">
        .btn-xs{
            padding: 1px 5px;
            font-size: 12px;
            line-height: 1.5;
        }
        .session_contect{
            position: relative;
        }
        .session_message{
            position: absolute;
            z-index: 1;
            top: -38px;
        }
    </style>
    <script src="{{ asset('backend_assets/plugins/sweetalert2/sweetalert2.all.js') }}"></script>
    <link href="{{ asset('backend_assets/plugins/sweetalert2/sweetalert2.min.css') }}" rel="stylesheet">
 
    <link href="{{ asset('backend_assets/timeline.css') }}" rel="stylesheet" type="text/css" >
    <link rel="stylesheet" href="{{ asset('frontend_assets/css/customs.css') }}">
    <link rel="stylesheet" href="{{ asset('backend_assets/slimselect.min.css') }}">

    <script type="text/javascript">
        const Toast = Swal.mixin({
          toast: true,
          position: 'top-end',
          showConfirmButton: false,
          timer: 1500,
          timerProgressBar: true,
        })
    </script>
    @stack('css')
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">