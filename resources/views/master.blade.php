<!DOCTYPE html>
<html lang="en">
<head>
     <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Rental Mobil - Laravel</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Bootstrap icons-->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css"
      rel="stylesheet"
    />
    <link
      href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css"
      rel="stylesheet"
    />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="{{  asset('frontend/css/styles.css') }}" rel="stylesheet" />
    <link rel="stylesheet" href="{{  asset('frontend/css/custom.css') }}" />
  </head>
</head>
<body>
   @include('layout.nav');
   @yield('konten');
   @include('layout.footer');
 <!-- Bootstrap core JS-->
    <script src="{{  asset('frontend/js/bootstrap.js') }}"></script>
    <!-- Core theme JS-->
    <script src="{{  asset('frontend/js/scripts.js') }}"></script>
</body>
</html>