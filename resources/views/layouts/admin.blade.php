<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

  <!-- plugins:css -->
  <link rel="stylesheet" href="{{asset('admin/css/materialdesignicons.min.css')}}">
  <link rel="stylesheet" href="{{asset('admin/css/vendor.bundle.base.css')}}">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <link rel="stylesheet" href="{{asset('admin/datatables.net-bs4/dataTables.bootstrap4.css')}}">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="{{asset('admin/css/style.css')}}">
  <!-- endinject -->
  <link rel="shortcut icon" href="{{asset('admin/images/favicon.ico')}}" />
    @livewireStyles
</head>
<body>
<div class="container-scroller">
    @include('layouts.inc.admin.navbar')
<div class="container-fluid page-body-wrapper">
@include('layouts.inc.admin.sidebar') 
<div class="main-panel">
<div class="content-wrapper">
    @yield('content')
</div>
</div>
</div>
    </div>

     <!-- plugins:js -->
  <script src="{{asset('admin/js/vendor.bundle.base.js')}}"></script>
  <!-- endinject -->
  <!-- Plugin js for this page-->
  <script src={{asset('admin/chart.js/chart.umd.js')}}"></script>
  <script src={{asset('admin/datatables.net/jquery.dataTables.js')}}"></script>
  <script src={{asset('admin/datatables.net-bs4/dataTables.bootstrap4.js')}}"></script>
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src={{asset('admin/js/off-canvas.js')}}"></script>
  <script src={{asset('admin/js/hoverable-collapse.js')}}"></script>
  <script src={{asset('admin/js/template.js')}}"></script>
  <script src={{asset('admin/js/settings.js')}}"></script>
  <script src={{asset('admin/js/todolist.js')}}"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src={{asset('admin/js/dashboard.js')}}"></script>
    <script src={{asset('admin/js/proBanner.js')}}"></script>

  <!-- End custom js for this page-->
  <script src={{asset('admin/js/jquery.cookie.js')}}" type="text/javascript"></script>
@livewireScripts
    </body>
    </html>