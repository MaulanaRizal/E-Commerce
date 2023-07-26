<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Dashboard</title>

    <!-- Custom fonts for this template-->
    <link href="{{ url('startbootstrap/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{ url('startbootstrap/css/sb-admin-2.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <style>
        .notification{
            position: fixed;
            right: 23px;
            width: 400px;
            z-index: 9999;
            top: 60px;
            display: none;
        }
    </style>

    @yield('styles')
    
</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        @if(Session::has('success'))
        <div class="alert alert-success notification">
            <span><b>Succes!</b> {{ Session::get('success') }}</span>
        </div>
        @endif
        @if (Session::has('failed'))
        <div class="alert alert-danger notification">
            <span><b>Failed</b> {{ Session::get('failed') }}</span>
        </div>
        @endif

        @include('admin.layouts.sidebar')

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                @include('admin.layouts.topbar')

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    @yield('content')

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2021</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="{{ url('startbootstrap/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ url('startbootstrap/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    
    <!-- Core plugin JavaScript-->
    <script src="{{ url('startbootstrap/vendor/jquery-easing/jquery.easing.min.js') }}"></script>
    
    <!-- Custom scripts for all pages-->
    <script src="{{ url('startbootstrap/js/sb-admin-2.min.js') }}"></script>
    

    @stack('scripts')

    @yield('scripts')
    
    <script>
        $(document).ready(()=>{
            $('.notification').fadeIn('slow').delay(5000).fadeOut('slow');
        });
    </script>
    
</body>

</html>