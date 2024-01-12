@extends('layout-no-filter')

@section('content')
<div class="p-5 bg-cream d-flex align-items-center justify-content-start">
        <button class="btn btn-success"><i class="fa fa-arrow-left"></i> Back</button>
        <div class="text-center mx-auto">
            <h3 class="text-green">Rendang</h2>
        </div>
</div>
<div class="bg-cream p-5 justify-content-center">

    <div class="card mb-3" style="max-width: 100%;">
      <div class="row g-0">
        <div class="col-md-3">
          <img src="{{ asset('img/food.png') }}" class="img-fluid"  alt="...">
        </div>
        <div class="col-md-9">
          <div class="card-body ">
            <h5 class="card-title">Rm Padang sabana Murah 3 - UGM</h5>
            <p class="card-text text-green">Rp15.000</p>
            <p class="card-text text-green"><small>Gg. Swakarya, Kocoran, Caturtunggal, Kec. Depok, Kabupaten Sleman, Daerah Istimewa Yogyakarta 55281 </small></p>
          </div>
        </div>
      </div>
    </div>

</div>



@endsection