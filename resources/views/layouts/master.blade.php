<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/sass/app.css', 'resources/js/app.js'])
    <title>Document</title>
</head>

<body>
    <div class="container-fluid min-vh-100 d-flex flex-column justify-content-center align-items-center bg-dark ">
        <div class="row text-danger fw-bold fs-1 my-3">
            <div class="col">
                Tabellone treni</div>
        </div>
        <div class="row w-100">
            <div class="col">
                @yield('content')
            </div>
        </div>
    </div>
</body>


</html>
