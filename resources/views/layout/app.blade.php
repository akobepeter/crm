<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('assets/css/backend-plugin.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/backend.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/task.css')}}">
   
    <title>@yield('title')</title>

</head>
<body class=" ">

    @yield('content')

    <script src="{{asset('assets/js/task-drag.js')}}"></script>
    <script src="{{asset('assets/js/task-todo.js')}}"></script>
    <script src="{{asset('assets/js/backend-bundle.min.js')}}"></script>
    <script src="{{asset('assets/js/sidebar.js')}}"></script>
    <script src="{{asset('assets/js/app.js')}}"></script>
</body>
</html>