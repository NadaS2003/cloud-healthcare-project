<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Login</title>

    <!-- Custom fonts for this template-->
{{--    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">--}}
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{asset('css/sb-admin-2.min.css')}}" rel="stylesheet">

</head>

<body>


    <!-- Outer Row -->

        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">



             <a class="text-dark font-weight-bolder font-semibold ml-lg-5" style="font-size: x-large; text-decoration-line: none"
             href="/">Health Care System</a>


            <!-- Topbar Navbar -->
            <ul class="navbar-nav ml-auto mr-lg-5">

                <!-- Nav Item - Alerts -->
                <li class="nav-item pt-4">
                    <a class="text-dark" href="{{route('login')}}" style="font-size: medium; text-decoration-line: none">
                        Login
                    </a>
                </li>

                <!-- Nav Item - Messages -->
                <li class="nav-item p-4">
                    <a class="text-dark" href="{{route('register')}}"style="font-size: medium; text-decoration-line: none">
                       Register
                    </a>
                </li>

            </ul>

        </nav>


    <!-- Welcome Section -->
    <div class="flex items-center justify-center min-h-screen bg-cover bg-center" style="background-color: rgba(255,255,255,0.64);">
        <div class="bg-black bg-opacity-50 p-10 rounded-lg text-center">
            <img src="{{asset('img/start.jfif')}}">
            <h1 class="text-4xl md:text-5xl font-semibold mb-4 text-dark">Welcome to MyApp</h1>
            <p class="text-lg text-dark mb-4">Your go-to platform for all things awesome!</p>
        </div>
    </div>



{{--<!-- Bootstrap core JavaScript-->--}}
{{--<script src={{asset('vendor/jquery/jquery.min.js')}}></script>--}}
{{--<script src={{asset('vendor/bootstrap/js/bootstrap.bundle.min.js')}}></script>--}}

{{--<!-- Core plugin JavaScript-->--}}
{{--<script src={{asset('vendor/jquery-easing/jquery.easing.min.js')}}></script>--}}

<!-- Custom scripts for all pages-->
{{--<script src="{{asset('js/sb-admin-2.min.js')}}"></script>--}}

</body>

</html>

