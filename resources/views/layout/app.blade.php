<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('assets/css/backend-plugin.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/backend.css')}}">
    <title>@yield('title')</title>

</head>
<body class=" ">

    @yield('content')

    {{-- <footer class="iq-footer">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6">
                    <ul class="list-inline mb-0">
                        <li class="list-inline-item"><a href="#">Privacy Policy</a></li>
                        <li class="list-inline-item"><a href="#">Terms of Use</a></li>
                    </ul>
                </div>
                <div class="col-lg-6 text-right">
                    <span class="mr-1">
                        Copyright
                        <script>document.write(new Date().getFullYear())</script>© <a href="#" class="">Zigmawave</a>
                        All Rights Reserved.
                    </span>
                </div>
            </div>
        </div>
    </footer> --}}



    <script src="{{asset('assets/js/backend-bundle.min.js')}}"></script>
    <script src="{{asset('assets/js/sidebar.js')}}"></script>
    <script src="{{asset('assets/js/app.js')}}"></script>
</body>
</html>