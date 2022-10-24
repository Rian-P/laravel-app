<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Perusahaan</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/style.css">
		<!-- responsive style sheet -->
		<link rel="stylesheet" type="text/css" href="css/responsive.css">
		<link rel="stylesheet" type="text/css" href="css/esteh.css">

    <style>
        .dropdown:hover .dropdown-menu {
            display: block;
        }

        @import url('https://fonts.googleapis.com/css2?family=Inter&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@200&display=swap');
    </style>

    @yield('extra-css')
</head>
<body>
    <nav class="bg-white shadow-sm">
        @include('landing.layouts.includes.navbar')
    </nav>

    <main>@yield('content')</main>

    <footer class=" body-font">
        @include('landing.layouts.includes.footer')
    </footer>

    @yield('extra-js')
</body>
</html>
