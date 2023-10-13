<!-- ======= Hero Slider Section ======= -->
<section id="hero-slider" class="hero-slider">
    <div class="container-md" data-aos="fade-in">
        <div class="row">
            <div class="col-12">
                <div class="swiper sliderFeaturedPosts">
                    <div class="swiper-wrapper">
                        @foreach ($cars as $car)
                        <div class="swiper-slide">
                            <a href="/{{ $car['id'] }}/{{ Str::slug($car['brand']['name'] . ' ' . $car['car_model']['name'], '-') }}" class="img-bg d-flex align-items-end"
                                style="background-image: url('{{ $car['images'][0]['original_url'] }}');">
                                <div class="img-bg-inner">
                                    <h2>{{ $car['brand']['name'] }} {{ $car['car_model']['name'] }}</h2>
                                    <h1 class="color-white">{{ number_format($car['price'], 2, '.', ' ') }} <small>€</small></h1>
                                    <p>
                                        <strong>Ano: {{ $car['year'] }}</strong><br>
                                        <strong>Mês: {{ $car['month']['name'] }}</strong><br>
                                        <strong>Origem: {{ $car['origin']['name'] }}</strong><br>
                                        <strong>Estado: {{ $car['status']['name'] }}</strong>
                                    </p>
                                </div>
                            </a>
                        </div>
                        @endforeach
                    </div>
                    <div class="custom-swiper-button-next">
                        <span class="bi-chevron-right"></span>
                    </div>
                    <div class="custom-swiper-button-prev">
                        <span class="bi-chevron-left"></span>
                    </div>

                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </div>
    </div>
</section><!-- End Hero Slider Section -->