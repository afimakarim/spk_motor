<!doctype html>
<html lang="zxx">

<head>
    <!-- Required meta tags -->


    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.2/css/bootstrap-select.min.css">

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>SPK Motor Roda Dua</title>
    <link rel="icon" href="{{asset('template/img/tr.png')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('template/css/bootstrap.min.css')}}">
    <!-- animate CSS -->
    <link rel="stylesheet" href="{{asset('template/css/animate.css')}}">
    <!-- owl carousel CSS -->
    <link rel="stylesheet" href="{{asset('template/css/owl.carousel.min.css')}}">
    <!-- font awesome CSS -->
{{--    <link rel="stylesheet" href="{{asset('template/css/all.css')}}">--}}
    <!-- flaticon CSS -->
    <link rel="stylesheet" href="{{asset('template/css/flaticon.css')}}">
    <link rel="stylesheet" href="{{asset('template/css/themify-icons.css')}}">
    <link rel="stylesheet" href="{{asset('template/css/nice-select.css')}}">
    <!-- font awesome CSS -->
    <link rel="stylesheet" href="{{asset('template/css/magnific-popup.css')}}">
    <!-- swiper CSS -->
    <link rel="stylesheet" href="{{asset('template/css/slick.css')}}">
    <!-- style CSS -->
    <link rel="stylesheet" href="{{asset('template/css/style.css')}}">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.2/css/bootstrap-select.min.css">
</head>

<body class="nav-md">
    {{-- Include file sidebarAdminPusat.blade.php --}}
    @include('navbarUser')
    {{-- Memanggil Halaman section main --}}
    @yield('main')
    {{-- Include file footerAdmin.blade.php --}}
    @include('footerUser')
    {{-- Memanggil Halaman section footer --}}
    @yield('footer')
</body>
<!-- jquery plugins here-->
<!-- jquery -->
<script src="{{asset('template/js/jquery-1.12.1.min.js')}}"></script>
<!-- popper js -->
<script src="{{asset('template/js/popper.min.js')}}"></script>
<!-- bootstrap js -->
<script src="{{asset('template/js/bootstrap.min.js')}}"></script>
<!-- easing js -->
<script src="{{asset('template/js/jquery.magnific-popup.js')}}"></script>
<!-- particles js -->
<script src="{{asset('template/js/owl.carousel.min.js')}}"></script>
<script src="{{asset('template/js/jquery.nice-select.min.js')}}"></script>
<!-- slick js -->
<script src="{{asset('template/js/slick.min.js')}}"></script>
<script src="{{asset('template/js/jquery.counterup.min.js')}}"></script>
<script src="{{asset('template/js/waypoints.min.js')}}"></script>
<script src="{{asset('template/js/contact.js')}}"></script>
<script src="{{asset('template/js/jquery.ajaxchimp.min.js')}}"></script>
<script src="{{asset('template/js/jquery.form.js')}}"></script>
<script src="{{asset('template/js/jquery.validate.min.js')}}"></script>
<script src="{{asset('template/js/mail-script.js')}}"></script>

<!-- custom js -->
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>

<script type="text/javascript">
    $(document).ready( function () {
        $('#myTable').DataTable();
    } );
</script><script src="{{asset('template/js/custom.js')}}"></script>
@yield('script')


</body>

</html>