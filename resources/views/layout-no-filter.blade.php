<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha256-rav46N6Xu7l5KtTVTMwopBtZ5X2ahzkj5onHfrylXgc=" crossorigin="anonymous" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

    <div>
        @include('navbar')
    </div>

    <div>
        @yield('filter')
    </div>

    <div>
        @yield('content')
    </div>
    

    <div class="bottom">
        <div class="row">
            <h1 class="title animated slideInDown text-center text-green">NutriMeal</h1>
            <div class="d-flex justify-content-center">
                <a href="#" class="mx-2 text-green">about us</a>
                <a href="#" class="mx-2 text-green">contact</a>
                <a href="#" class="mx-2 text-green">privacy policy</a>
            </div>
        </div>

    </div>
    <footer>
        <p class="text-green"> 2023. NutriMeal. All Rights reserved </p>
    </footer>

</body>
<script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/js/all.min.js" integrity="sha256-tdNm2j9GbxFWUON/krcMIR5aS30st3xRYpk6DRHq0q4=" crossorigin="anonymous"></script>
</html>