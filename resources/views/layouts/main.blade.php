
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>@yield('title')</title>

    <!-- General CSS Files -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100italic,300,300italic,400,400italic,500,500italic,700,700italic,900,900italic" rel="stylesheet" type="text/css" />

    <!-- CSS Libraries -->
    <link rel="stylesheet" href="{{ asset('assets/third-party/bootstrap/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/node_modules/@fortawesome/fontawesome-free/css/all.min.css')}} ">
    <link rel="stylesheet" href="{{ asset('assets/node_modules/izitoast/dist/css/iziToast.min.css')}} ">
    <link rel="stylesheet" href="{{ asset('assets/node_modules/datatables.net-bs4/css/dataTables.bootstrap4.min.css')}} ">
    <link rel="stylesheet" href="{{ asset('assets/node_modules/select2/dist/css/select2.min.css')}} ">
    <link rel="stylesheet" href="{{ asset('assets/node_modules/swal/dist/sweetalert2.min.css')}} ">
    <link rel="stylesheet" href="{{ asset('assets/node_modules/bootstrap-datepicker/css/bootstrap-datepicker.css')}} ">

    <!-- Template CSS -->
    <link rel="stylesheet" href="{{ asset('assets/assets/css/style.css')}} ">
    <link rel="stylesheet" href="{{ asset('assets/assets/css/components.css')}} ">
</head>

<body>
    <div id="app">
        <div class="main-wrapper">
            <div class="navbar-bg"></div>
        <!-- NAVBAR -->
        @include('layouts.navbar')
        <!-- END NAVBAR -->

        <!-- SIDEBAR -->
        @include('layouts.sidebar')
        <!-- ENDSIDEBAR -->

        <!-- START CONTENT -->
        <div class="main-content">
            <section class="section">
                <div class="section-header">
                    <h1>@yield('title')</h1>
                    <div class="section-header-breadcrumb">
                        <div class="breadcrumb-item active"><a href="#">@yield('title')</a></div>
                    </div>
                </div>
                @yield('content')
            </section>
        </div>
        <!-- END CONTENT -->

        <!-- FOOTER -->
        @include('layouts.footer')
        <!-- ENDFOOTER -->

        </div>
    </div>

    <!-- General JS Scripts -->
    <script src="{{asset('assets/third-party/jquery.js')}}"></script>
    <script src="{{asset('assets/third-party/popper.js')}}"></script>
    <script src="{{asset('assets/third-party/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('assets/third-party/nicescroll.js')}}"></script>
    <script src="{{asset('assets/third-party/moment.js')}}"></script>
    <script src="{{asset('assets/assets/js/stisla.js')}}"></script>

    <!-- JS Libraies -->
    <script src="{{asset('assets/node_modules/izitoast/dist/js/iziToast.min.js')}}"></script>
    <script src="{{asset('assets/node_modules/datatables/media/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('assets/node_modules/bootbox/bootbox.all.min.js')}}"></script>
    <script src="{{asset('assets/node_modules/numeric/jquery.number.min.js')}}"></script>
    <script src="{{asset('assets/node_modules/select2/dist/js/select2.full.js')}}"></script>
    <script src="{{asset('assets/node_modules/swal/dist/sweetalert2.all.min.js')}}"></script>
    <script src="{{asset('assets/node_modules/datatables.net-bs4/js/dataTables.bootstrap4.min.js')}}"></script>

    <!-- Template JS File -->
    <script src="{{asset('assets/assets/js/scripts.js')}}"></script>
    <script src="{{asset('assets/assets/js/custom.js')}}"></script>

    <!-- Page Specific JS File -->
    <script>

    </script>
        @yield('script')
</body>
</html>
