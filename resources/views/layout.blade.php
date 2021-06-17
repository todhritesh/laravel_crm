<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRM | @yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>
<body class=' alert-danger'>
    <nav class="navbar navbar-expand-lg bg-dark navbar-dark fixed-top">
        <div class="container">
            <a href="{{route('home')}}" class="navbar-brand">CRM</a>
        </div>
    </nav>
<div class="container-fluid pb-5 pt-5 mt-3">
    <div class="row">

        @section('content')
        @show

        @section('sidebar')
        @show

    </div>
</div>

    <div class="container-fluid px-0 bg-dark fixed-bottom ">
        <div class="row py-2">
            <h5 class="text-light text-center">This is CRM footer</h5>
        </div>
    </div>
</body>
</html>
