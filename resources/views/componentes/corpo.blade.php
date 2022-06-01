<!DOCTYPE html>
<html class="no-js" lang="en">
<head>

    <!--- basic page needs
    ================================================== -->
    <meta charset="utf-8">
    <title>Abstract</title>
    <meta name="description" content="">
    <meta name="author" content="">

   <!-- mobile specific metas
    ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSS
    ================================================== -->
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/vendor.css">

    <!-- script
    ================================================== -->
    <script src="js/modernizr.js"></script>

    <!-- favicons
    ================================================== -->
    <link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon-16x16.png">
    <link rel="manifest" href="site.webmanifest">

</head>

<body id="top">


    <!-- preloader
    ================================================== -->
    <div id="preloader">
        <div id="loader"></div>
    </div>


    <!-- header
    ================================================== -->
 @component('componentes.topo')@endcomponent<!-- end header -->


    <!-- masonry
    ================================================== -->
    @yield('conteudo')


    <!-- footer
    ================================================== -->
    @component('componentes.rodape')@endcomponent <!-- end s-footer -->


   <!-- Java Script
   ================================================== -->
   <script src="assets/js/jquery-3.2.1.min.js"></script>
   <script src="assets/js/plugins.js"></script>
   <script src="assets/js/main.js"></script>

</body>

</html>