@extends('layout-with-filter')

@section('title', 'Dashboard')

@section('content')
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
@endsection

