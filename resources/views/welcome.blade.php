{{--<!DOCTYPE html>--}}
{{--<html lang="en">--}}

{{--<head>--}}

{{--    <meta charset="utf-8">--}}
{{--    <meta http-equiv="X-UA-Compatible" content="IE=edge">--}}
{{--    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">--}}
{{--    <meta name="description" content="">--}}
{{--    <meta name="author" content="">--}}

{{--    <title>SB Admin 2 - Login</title>--}}

{{--    <link--}}
{{--        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"--}}
{{--        rel="stylesheet">--}}

{{--    <!-- Custom styles for this template-->--}}
{{--    <link href="{{asset('css/sb-admin-2.min.css')}}" rel="stylesheet">--}}

{{--</head>--}}

{{--<body>--}}


{{--    <!-- Outer Row -->--}}

{{--        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">--}}



{{--             <a class="text-dark font-weight-bolder font-semibold ml-lg-5" style="font-size: x-large; text-decoration-line: none"--}}
{{--             href="/">Health Care System</a>--}}


{{--            <!-- Topbar Navbar -->--}}
{{--            <ul class="navbar-nav ml-auto mr-lg-5">--}}

{{--                <!-- Nav Item - Alerts -->--}}
{{--                <li class="nav-item pt-4">--}}
{{--                    <a class="text-dark" href="{{route('login')}}" style="font-size: medium; text-decoration-line: none">--}}
{{--                        Login--}}
{{--                    </a>--}}
{{--                </li>--}}

{{--                <!-- Nav Item - Messages -->--}}
{{--                <li class="nav-item p-4">--}}
{{--                    <a class="text-dark" href="{{route('register')}}"style="font-size: medium; text-decoration-line: none">--}}
{{--                       Register--}}
{{--                    </a>--}}
{{--                </li>--}}

{{--            </ul>--}}

{{--        </nav>--}}


{{--    <!-- Welcome Section -->--}}
{{--    <div class="flex items-center justify-center min-h-screen bg-cover bg-center" style="background-color: rgba(255,255,255,0.64);">--}}
{{--        <div class="bg-black bg-opacity-50 p-10 rounded-lg text-center">--}}
{{--            <img src="{{asset('img/start.jfif')}}">--}}
{{--            <h1 class="text-4xl md:text-5xl font-semibold mb-4 text-dark">Welcome to MyApp</h1>--}}
{{--            <p class="text-lg text-dark mb-4">Your go-to platform for all things awesome!</p>--}}
{{--        </div>--}}
{{--    </div>--}}





{{--</body>--}}

{{--</html>--}}
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Health Care System</title>

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700&display=swap" rel="stylesheet">

    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>

    <style>
        :root {
            --primary-color: #4e73df; /* موف غامق */
            --secondary-color: #fff;
            --accent-color: #ffffff;
        }

        body {
            font-family: 'Nunito', sans-serif;
        }

        .hero-overlay {
            background: rgba(0, 0, 0, 0.4);
        }

        .fade-in {
            opacity: 0;
            animation: fadeIn 1.5s forwards;
        }

        @keyframes fadeIn {
            to { opacity: 1; }
        }

        .btn-primary {
            background-color: var(--primary-color);
            color: var(--accent-color);
            transition: transform 0.2s, background-color 0.3s;
        }

        .btn-primary:hover {
            background-color: #2e2166;
            transform: scale(1.05);
        }

        .section-title {
            color: var(--primary-color);
        }
    </style>
</head>
<body class="bg-white">

<!-- Hero Section with Navigation -->
<section class="relative flex flex-col justify-center items-center min-h-screen">
    <img src="{{asset('img/her.jpg')}}"
         alt="Healthcare" class="absolute inset-0 w-full h-full object-cover">
    <div class="absolute inset-0 hero-overlay"></div>

    <nav class="absolute top-0 left-0 w-full z-50 bg-transparent">
        <div class="container mx-auto px-6 py-6 flex items-center justify-between">
            <a href="/" class="text-2xl font-extrabold text-white">Health Care</a>
            <ul class="flex space-x-6 text-white">
                <li><a href="#features" class="hover:text-purple-300 transition">Features</a></li>
                <li><a href="#how-it-works" class="hover:text-purple-300 transition">How It Works</a></li>
                <li><a href="{{route('login')}}" class="hover:text-purple-300 transition">Login</a></li>
                <li><a href="{{route('register')}}" class="hover:text-purple-300 transition">Register</a></li>
            </ul>
        </div>
    </nav>

    <div class="relative z-10 text-center max-w-3xl fade-in p-8 rounded-lg text-white">
        <h1 class="text-5xl md:text-6xl font-extrabold mb-4 leading-tight">Your Health, Our Priority</h1>
        <p class="text-lg md:text-xl mb-6">Digital solutions to simplify healthcare management for everyone.</p>
        <a href="#features" class="btn-primary px-6 py-3 rounded-lg text-lg font-semibold">Explore Features</a>
    </div>
</section>

<!-- Features Section with Background -->
<section id="features" class="relative py-24">
    <div class="absolute inset-0 section-overlay"></div>
    <div class="relative z-10 container mx-auto px-6 text-center">
        <h2 class="text-4xl font-extrabold mb-12 section-title">Our Services</h2>
        <div class="grid md:grid-cols-3 gap-12">
            <div class="bg-white/90 p-8 rounded-lg shadow-lg transform transition duration-500 hover:scale-105 hover:shadow-2xl">
                <h3 class="text-xl font-bold mb-2 section-title">Patient Management</h3>
                <p class="text-gray-700">Securely manage patient records and appointments.</p>
            </div>
            <div class="bg-white/90 p-8 rounded-lg shadow-lg transform transition duration-500 hover:scale-105 hover:shadow-2xl">
                <h3 class="text-xl font-bold mb-2 section-title">Appointments</h3>
                <p class="text-gray-700">Simplify booking and scheduling for patients and staff.</p>
            </div>
            <div class="bg-white/90 p-8 rounded-lg shadow-lg transform transition duration-500 hover:scale-105 hover:shadow-2xl">
                <h3 class="text-xl font-bold mb-2 section-title">Analytics</h3>
                <p class="text-gray-700">Gain actionable insights from healthcare data.</p>
            </div>
        </div>
    </div>
</section>
<!-- Stats Section with Background Image and Overlay -->
<section class="relative py-20">
    <!-- Background Image -->
    <img src="{{asset('img/back.jpg')}}"
         alt="Healthcare Background" class="absolute inset-0 w-full h-full object-cover">

    <!-- Overlay -->
    <div class="absolute inset-0 bg-[#4e73df] opacity-80"></div>

    <!-- Content -->
    <div class="relative z-10 container mx-auto px-6 text-center text-white">
        <div class="grid md:grid-cols-4 gap-8">
            <div>
                <h3 class="text-4xl font-extrabold">150+</h3>
                <p class="mt-2 text-lg">Doctors</p>
            </div>
            <div>
                <h3 class="text-4xl font-extrabold">2000+</h3>
                <p class="mt-2 text-lg">Patients</p>
            </div>
            <div>
                <h3 class="text-4xl font-extrabold">5000+</h3>
                <p class="mt-2 text-lg">Appointments</p>
            </div>
            <div>
                <h3 class="text-4xl font-extrabold">95%</h3>
                <p class="mt-2 text-lg">Satisfaction</p>
            </div>
        </div>
    </div>
</section>
<!-- How It Works Section with Icons -->
<section id="how-it-works" class="relative py-24 bg-white">
    <div class="container mx-auto px-6 text-center">
        <h2 class="text-4xl font-extrabold mb-12 section-title" style="color:#4e73df;">How It Works</h2>
        <div class="grid md:grid-cols-3 gap-12">
            <!-- Step 1 -->
            <div class="bg-white/90 p-8 rounded-lg shadow-lg transform transition duration-500 hover:scale-105 hover:shadow-2xl flex flex-col items-center">
                <div class="text-[#4e73df] mb-4">
                    <!-- Icon: User Add -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-16 h-16" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 9v6m3-3h-6M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zM6 18v-2a4 4 0 014-4h4a4 4 0 014 4v2" />
                    </svg>
                </div>
                <h3 class="text-xl font-bold mb-2 section-title" style="color:#4e73df;">Step 1: Register</h3>
                <p class="text-gray-700">Create profiles for patients and doctors.</p>
            </div>


            <!-- Step 2 -->
            <div class="bg-white/90 p-8 rounded-lg shadow-lg transform transition duration-500 hover:scale-105 hover:shadow-2xl flex flex-col items-center">
                <div class="text-[#4e73df] mb-4">
                    <!-- Icon: Calendar -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-16 h-16" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                    </svg>
                </div>
                <h3 class="text-xl font-bold mb-2 section-title" style="color:#4e73df;">Step 2: Manage</h3>
                <p class="text-gray-700">Track appointments, medical data, and progress.</p>
            </div>


            <!-- Step 3 -->
            <div class="bg-white/90 p-8 rounded-lg shadow-lg transform transition duration-500 hover:scale-105 hover:shadow-2xl flex flex-col items-center">
                <div class="text-[#4e73df] mb-4">
                    <!-- Icon: Chart / Analytics -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-16 h-16" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3v18h18M9 17V9m4 8V5m4 12v-6" />
                    </svg>
                </div>
                <h3 class="text-xl font-bold mb-2 section-title" style="color:#4e73df;">Step 3: Optimize</h3>
                <p class="text-gray-700">Make decisions using smart analytics.</p>
            </div>
        </div>
    </div>
</section>
<!-- Call to Action Section -->
<section class="relative py-24 bg-black text-white text-center">
    <h2 class="text-4xl font-extrabold mb-6">Start Your Journey Today</h2>
    <p class="text-lg mb-8">Join our platform for efficient and modern healthcare solutions.</p>
    <a href="#" class="btn-primary px-8 py-3 rounded-lg text-lg font-semibold">Get Started Now</a>
</section>

</body>
</html>
