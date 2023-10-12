@extends('layouts.app')
@section('content')
<section class="single-post-content">
    <div class="container">
        <div class="row">
            <div class="col-md-9" data-aos="fade-up">
                @foreach ($cars as $car)
                <div class="card mb-4">
                    <div class="card-body">
                        <div class="row g-0 product"
                            onclick="goStandCar({{ $car['id'] }}, '{{ Str::slug($car['brand']['name'] . ' ' . $car['car_model']['name'], '-') }}')">
                            <div class="col-12 col-md-6 col-lg-4">
                                <div class="image"><img class="img-fluid d-block mx-auto"
                                        src="{{ $car['images'][0]['url'] }}"></div>
                            </div>
                            <div class="col">
                                <div style="margin-left: 20px;">
                                    <div class="row">
                                        <div class="col">
                                            <p class="fw-bold text-uppercase">{{ $car['brand']['name'] }} {{
                                                $car['car_model']['name'] }}</p>
                                        </div>
                                        <div class="col text-end">
                                            <span class="badge bg-danger">{{ $car['status']['name'] }}</span>
                                        </div>
                                    </div>
                                    <h3><small>€</small> {{ number_format($car['price'], 2, '.', ' ') }}</h3>
                                    <div class="row">
                                        <div class="col" style="font-size: 12px">
                                            <span class="text-uppercase fw-bold">Combustivel</span><br>
                                            <span>{{ $car['fuel']['name'] }}</span>
                                        </div>
                                        <div class="col" style="font-size: 12px">
                                            <span class="text-uppercase fw-bold">Mês | Ano</span><br>
                                            <span>{{ $car['month']['name'] }} | {{ $car['year'] }}</span>
                                        </div>
                                        <div class="col" style="font-size: 12px">
                                            <span class="text-uppercase fw-bold">Caixa</span><br>
                                            <span>{{ $car['transmision'] }}</span>
                                        </div>
                                        <div class="col" style="font-size: 12px">
                                            <span class="text-uppercase fw-bold">Quilómetros</span><br>
                                            <span>{{ number_format($car['kilometers'], 0, '', ' ') }} km</span>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col" style="font-size: 12px">
                                            <span class="text-uppercase fw-bold">Cilindrada</span><br>
                                            <span>{{ $car['cylinder_capacity'] }} cm3</span>
                                        </div>
                                        <div class="col" style="font-size: 12px">
                                            <span class="text-uppercase fw-bold">Potência</span><br>
                                            <span>{{ $car['power'] }} CV</span>
                                        </div>
                                        <div class="col" style="font-size: 12px">
                                            <span class="text-uppercase fw-bold">Origem</span><br>
                                            <span>{{ $car['origin']['name'] }}</span>
                                        </div>
                                        <div class="col" style="font-size: 12px">
                                            <span class="text-uppercase fw-bold">Localidade</span><br>
                                            <span>{{ $car['distance'] }}</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="col-md-3">
                <div class="card">
                    <div class="card-header">
                        Filtros
                    </div>
                    <div class="car-body p-2">
                        <div class="form-group">
                            <select name="brand_id" class="form-control select2">
                                <option selected disabled>Marca</option>
                                @foreach ($brands as $brand)
                                <option value="{{ $brand['id'] }}">{{ $brand['name'] }}</option>
                                @endforeach
                            </select>
                            <hr>
                            <select name="model_id" class="form-control select2">
                                <option selected disabled>Modelo</option>
                                @foreach ($models as $model)
                                <option value="{{ $model['id'] }}">{{ $model['name'] }}</option>
                                @endforeach
                            </select>
                            <hr>
                            <select name="fuel_id" class="form-control select2">
                                <option selected disabled>Combustivel</option>
                                @foreach ($fuels as $fuel)
                                <option value="{{ $fuel['id'] }}">{{ $fuel['name'] }}</option>
                                @endforeach
                            </select>
                            <hr>
                            <select name="transmision" class="form-control select2">
                                <option selected disabled>Caixa</option>
                                <option value="Manual">Manual</option>
                                <option value="Auto">Auto</option>
                            </select>
                            <hr>
                            <select name="origin_id" class="form-control select2">
                                <option selected disabled>Origem</option>
                                @foreach ($origins as $origin)
                                <option value="{{ $origin['id'] }}">{{ $origin['name'] }}</option>
                                @endforeach
                            </select>
                            <hr>
                            <label for="kilometers_max" class="form-label">Quilómetros máx. <span id="kilometers_max_val"></span></label>
                            <input type="range" class="form-range" id="kilometers_max" min="{{ $kilometers['min'] }}" max="{{ $kilometers['max'] }}" value="5000000" onchange="updateKilometersRange()">
                            <hr>
                            <label for="prices_max" class="form-label">Preço máx. <span id="prices_max_val"></span></label>
                            <input type="range" class="form-range" id="prices_max" min="{{ $prices['min'] }}" max="{{ $prices['max'] }}" value="5000000" onchange="updatePricesRange()">
                        </div>
                        <div class="card footer">
                            <button class="btn btn-primary">Filtrar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@section('scripts')
@parent
<script>
    goStandCar = (id, slug) => {
        window.location.href="/" + id + "/" + slug;
    }
    $(document).ready(function() {
        $('.select2').select2();
    });
    updateKilometersRange = () => {
        $('#kilometers_max_val').text($('#kilometers_max').val() + ' km');
    }
    updatePricesRange = () => {
        $('#prices_max_val').text($('#prices_max').val() + ' €');
    }
</script>
@endsection

@section('styles')
<style>
    hr {
        margin: 5px;
        color: inherit;
        border: 0;
        border-top: none;
        opacity: .25;
    }
</style>
@endsection