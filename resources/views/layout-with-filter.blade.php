@extends('layout-no-filter')


@section('filter')
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
                    <select class="form-select" id="budget" name="budget" required>
                        <option value="" selected disabled hidden> Budget</option>
                        <option value="1">Rp. 10.000 - Rp. 50.000</option>
                        <option value="2">Rp. 50.000 - Rp. 100.000</option>
                        <option value="3">Rp. 100.000 - Rp. 200.000</option>
                        <option value="4">Rp. 200.000 - Rp. 500.000</option>
                        <option value="5">Rp. 500.000 - Rp. 1.000.000</option>
                    </select>
                </div>
                <div class="col-md-2" style="flex: 0 0 20%;">
                    <label for="activity" class="form-label">Activity</label>
                    <select class="form-select" id="activity" name="activity" required>
                        <option value="" selected disabled hidden>Aktivitas</option>
                        <option value="1">Berat</option>
                        <option value="2">Sedang</option>
                        <option value="3">Ringan</option>
                    </select>
                </div>
                <div class="col-md-2" style="flex: 0 0 20%;">
                    <label for="alergi" class="form-label">Alergi</label>
                    <select class="form-select" id="alergi" name="alergi">
                        <option value="" selected disabled hidden>Alergi</option>
                        <option value="1">Udang</option>
                        <option value="2">Ayam</option>
                        <option value="3">Protein Hewani</option>
                        <option value="4">Susu</option>
                        <option value="5">Telur</option>
                    </select>
                </div>
                <div class="col-md-2" style="flex: 0 0 20%;">
                    <label for="kandungan" class="form-label">Kandungan</label>
                    <select class="form-select" id="kandungan" name="kandungan">
                        <option value="" selected disabled hidden >Kandungan</option>
                        <option value="1">Protein</option>
                        <option value="2">Karbohidrat</option>
                        <option value="3">Vitamin C</option>
                        <option value="4">Kalsium</option>
                    </select>
                </div>
                <div class="col-md-2" style="flex: 0 0 20%;">
                    <button type="submit" class="btn btn-success" style="width: 100%">Search</button>
                </div>
            </form>
        </div>
    </div>

@endsection