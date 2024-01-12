@extends('layout-with-filter')

@section('title', 'Hasil Pencarian')

@section('content')

@foreach ($menus as $menu)
<div class="result pt-3">
    <div class="card bg-cream" style="width: 18rem;">
        <div class="image">
            <img src="{{ asset('img/food.png') }}" class="card-img-top" alt="...">
        </div>
        <div class="card-body">
            <h5 class="card-title">{{ $menu['nama'] }}</h5>
            <p class="btn btn-success">+- Rp.{{ $menu['harga_rata_rata'] }}</p>
            <div class="row">
                <a href="{{ route('result.place', $menu['category_id'] ) }}"class="card-text text-green text-end">Show location <i class="fa fa-arrow-right"></i></a>
            </div>            
        </div>
    </div>
</div>
@endforeach

@endsection