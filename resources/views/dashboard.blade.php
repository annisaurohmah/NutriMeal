<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NutriMeal</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid ">
            <a class="navbar-brand" href="#">NutriMeal</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse d-flex justify-content-end" id="navbarNavAltMarkup">
                <div class="navbar-nav ">
                    <a class="nav-link" aria-current="page" href="#">Home</a>
                    <a class="nav-link" href="#">About</a>
                    <a class="nav-link" href="#">Foodpage</a>
                </div>
            </div>
        </div>
    </nav>
    <div class="hero-header">
        <div class="container px-lg-5">
            <div class="row-g-5 text-center text-lg-center">
                <h1 class="title mb-1 animated slideInDown">Generate Your Food!</h3>
                    <h3 class="sub-title mb-4 animated slideInDown">Embark on a culinary journey like never before</h5>
            </div>
        </div>
    </div>


    <div class="filter">
        <div class="filterBox container-xxl mx-auto">
            <form method="POST" enctype="multipart/form-data" class="d-flex align-items-end row g-4 p-3">
                @csrf
                <div class="col-md-2" style="flex: 0 0 20%;">
                    <label for="budget" class="form-label">Budget</label>
                    <select class="form-control" id="budget" name="budget" required>
                    </select>
                </div>
                <div class="col-md-2" style="flex: 0 0 20%;">
                    <label for="activity" class="form-label">Activity</label>
                    <input type="text" class="form-control" id="activity" placeholder="Tulis aktivitas.." name="activity" required>
                </div>
                <div class="col-md-2" style="flex: 0 0 20%;">
                    <label for="alergi" class="form-label">Alergi</label>
                    <input type="text" class="form-control" id="alergi" name="alergi">
                </div>
                <div class="col-md-2" style="flex: 0 0 20%;">
                    <label for="kandungan" class="form-label">Kandungan</label>
                    <input type="text" class="form-control" id="kandungan" name="kandungan">
                </div>
                <div class="col-md-2" style="flex: 0 0 20%;">
                    <button type="submit" class="btn btn-success" style="width: 100%">Search</button>
                </div>
            </form>
        </div>
    </div>

    <div class="about">
        <div class="row">
            <div class="col-md-12 mx-auto d-flex justify-content-center align-items-center">
                <img src="{{ asset('img/aboutimg.svg') }}" alt="food" class="img-fluid">
                <div class="container-s ml-4">
                    <h1 class="title mb-1 animated slideInDown">About Us</h1>
                    <h3 class="sub-title mb-4 animated slideInDown">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</h3>
                </div>
            </div>
        </div>
    </div>

    <div class="work">
        <div class="row">
            <h1 class="title animated slideInDown text-center text-cream">How the NutriMeal’s Work</h1>
            <div class="col-md-10 mx-auto d-flex justify-content-center align-items-end">
                <div>
                    <img src="{{ asset('img/filterfood.svg') }}" alt="food" class="img-fluid">
                    <p class="sub-heading mb-4 animated slideInDown text-center text-cream">Decide your Budget</p>
                </div>
                <div class="my-auto">
                    <img src="{{ asset('img/arrow.svg') }}" alt="food" class="img-fluid">
                </div>
                <div>
                    <img src="{{ asset('img/decidebudget.svg') }}" alt="food" class="img-fluid">
                    <p class="sub-heading mb-4 animated slideInDown text-center text-cream">Filter your Food</p>
                </div>
                <div class="my-auto">
                    <img src="{{ asset('img/arrow.svg') }}" alt="food" class="img-fluid">
                </div>
                <div>
                    <img src="{{ asset('img/generatefood.svg') }}" alt="food" class="img-fluid">
                    <p class="sub-heading mb-4 animated slideInDown text-center text-cream">Generate your Food</p>
                </div>
            </div>
        </div>
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

</html>