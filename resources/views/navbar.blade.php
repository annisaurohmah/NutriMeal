<nav class="navbar navbar-expand-lg">
    <div class="container-fluid ">
        <a class="navbar-brand ms-4" href="#">NutriMeal</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse d-flex justify-content-end" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-link active" aria-current="page" href="{{ route('dashboard') }}">Home</a>
                <a class="nav-link" href="#">About</a>
                <a class="nav-link" href="{{ route('foodpage') }}">Foodpage</a>
            </div>
        </div>
    </div>
</nav>