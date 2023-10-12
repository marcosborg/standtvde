@extends('layouts.app')
@section('content')
<section class="single-post-content">
    <div class="container">
        <div class="row">
            <div class="col-md-6" data-aos="fade-up">

                <!-- ======= Single Post Content ======= -->
                <div class="single-post">
                    <div style="--swiper-navigation-color: #fff; --swiper-pagination-color: #fff"
                        class="swiper mySwiper2">
                        <div class="swiper-wrapper">
                            @foreach ($car['images'] as $image)
                            <div class="swiper-slide">
                                <img src="{{ $image['url'] }}" />
                            </div>
                            @endforeach
                        </div>
                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>
                    </div>
                    <div thumbsSlider="" class="swiper mySwiper">
                        <div class="swiper-wrapper">
                            @foreach ($car['images'] as $image)
                            <div class="swiper-slide">
                                <img src="{{ $image['preview'] }}" />
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div><!-- End Single Post Content -->

            </div>
            <div class="col-md-6">
                <h2>{{ $car['brand']['name'] }} {{ $car['car_model']['name'] }}</h2>
                <h1><small>€</small> {{ number_format($car['price'], 2, '.', ' ') }}</h1>
                <span class="badge bg-danger">{{ $car['status']['name'] }}</span>
                <div class="row mt-4">
                    <div class="col">
                        <p><strong>Ano: </strong>{{ $car['year'] }} | {{ $car['month']['name'] }}</p>
                        <p><strong>Quilómetros: </strong>{{ number_format($car['kilometers'], 0, '', ' ') }} km</p>
                        <p><strong>Caixa: </strong>{{ $car['transmision'] }}</p>
                        <p><strong>Combustivel: </strong>{{ $car['fuel']['name'] }}</p>
                    </div>
                    <div class="col">
                        <p><strong>Cilindrada: </strong>{{ $car['cylinder_capacity'] }} cm3</p>
                        <p><strong>Potência: </strong>{{ $car['power'] }} CV</p>
                        <p><strong>Origem: </strong>{{ $car['origin']['name'] }}</p>
                        <p><strong>Localidade: </strong>{{ $car['distance'] }}</p>
                    </div>
                </div>
                <div class="btn-group mb-5" role="group" aria-label="Basic example">
                    <a class="btn btn-primary"
                        href="https://www.facebook.com/sharer/sharer.php?u={{ url()->current() }}&amp;title={{ $car['brand']['name'] }} {{ $car['car_model']['name'] }}&amp;picture={{ $car['images'][0]['preview'] }}"
                        target="_blank">
                        <i class="bi bi-facebook"></i>
                    </a>
                    <a class="btn btn-success"
                        href="https://api.whatsapp.com/send?text=Titan of Douro Vale dos Mil Branco 2019 Magnum:%20{{ url()->current() }}"
                        target="_blank">
                        <i class="bi bi-whatsapp"></i>
                    </a>
                </div>
                <!-- ======= Comments Form ======= -->
                <div class="card">
                    <div class="card-header">
                        <h5 class="comment-title">Pedido de contacto</h5>
                    </div>
                    <div class="card-body">
                        <div class="row mt-4">
                            <div class="col-lg-6 mb-3">
                                <label for="name">Nome</label>
                                <input type="text" class="form-control" id="name" placeholder="Obrigatório">
                            </div>
                            <div class="col-lg-6 mb-3">
                                <label for="email">Email</label>
                                <input type="text" class="form-control" id="email" placeholder="Obrigatório">
                            </div>
                            <div class="col-lg-6 mb-3">
                                <label for="phone">Contacto</label>
                                <input type="text" class="form-control" id="phone" placeholder="Obrigatório">
                            </div>
                            <div class="col-lg-6 mb-3">
                                <label for="subject">Assunto</label>
                                <input type="text" class="form-control" id="subject" placeholder="Obrigatório">
                            </div>
                            <div class="col-12 mb-3">
                                <label for="message">Mensagem</label>
                                <textarea class="form-control" id="message" placeholder="" cols="30"
                                    rows="5"></textarea>
                            </div>
                            <div class="col-12">
                                <input type="submit" class="btn btn-primary" value="Pedir contacto para esta viatura">
                            </div>
                        </div>
                    </div>
                </div><!-- End Comments Form -->
            </div>
        </div>
    </div>
</section>
@endsection

@section('scripts')
@parent
<script>
    var swiper = new Swiper(".mySwiper", {
      loop: true,
      spaceBetween: 10,
      slidesPerView: 4,
      freeMode: true,
      watchSlidesProgress: true,
    });
    var swiper2 = new Swiper(".mySwiper2", {
      loop: true,
      spaceBetween: 10,
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
      thumbs: {
        swiper: swiper,
      },
    });
</script>
@endsection

@section('styles')
<style>
    .swiper {
        width: 100%;
        height: 100%;
    }

    .swiper-slide {
        text-align: center;
        font-size: 18px;
        background: #fff;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .swiper-slide img {
        display: block;
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .swiper {
        width: 100%;
        height: 300px;
        margin-left: auto;
        margin-right: auto;
    }

    .swiper-slide {
        background-size: cover;
        background-position: center;
    }

    .mySwiper2 {
        height: 80%;
        width: 100%;
    }

    .mySwiper {
        height: 20%;
        box-sizing: border-box;
        padding: 10px 0;
    }

    .mySwiper .swiper-slide {
        width: 25%;
        height: 100%;
        opacity: 0.4;
    }

    .mySwiper .swiper-slide-thumb-active {
        opacity: 1;
    }

    .swiper-slide img {
        display: block;
        width: 100%;
        height: 100%;
        object-fit: cover;
    }
</style>
@endsection