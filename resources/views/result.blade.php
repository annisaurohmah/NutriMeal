@extends('layout-no-filter')

@section('content')
<div class="p-5 bg-cream d-flex align-items-center justify-content-start">
    <button class="btn btn-success" id="backToCategorialPage" type="button"><i class="fa fa-arrow-left"></i>Back</button>
    <div class="text-center mx-auto">
        <h3 class="text-green">{{ $categoryName }}</h2>
    </div>
</div>
@foreach ($menus as $menu)
<div class="bg-cream p-5 justify-content-center">
    <div class="card mb-3" style="max-width: 100%;">
      <div class="row g-0">
        <div class="col-md-3">
          <img src="{{ asset('img/food.png') }}" class="img-fluid"  alt="...">
        </div>
        <div class="col-md-9">
          <div class="card-body ">
            <h4 class="card-title">{{ $menu['nama'] }}</h5>
            <h5 class="card-title">{{ $menu['nama_restaurant'] }}</h5>
            <p class="card-text text-green">Rp{{ $menu['harga'] }}</p>
            <p class="card-text text-green"><small>{{ $menu['alamat_restaurant'] }}</small></p>
          </div>
        </div>
      </div>
    </div>
</div>
@endforeach

@endsection