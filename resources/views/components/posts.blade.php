<!-- ======= Post Grid Section ======= -->
<section id="posts" class="posts">
    <div class="container" data-aos="fade-up">
        <div class="row g-5">
            <div class="col-lg-4">
                <div class="post-entry-1 lg">
                    <a href="/{{ $cars[0]['id'] }}/{{ Str::slug($cars[0]['brand']['name'] . ' ' . $cars[0]['car_model']['name'], '-') }}"><img src="{{ $cars[0]['images'][0]['original_url'] }}" alt="" class="img-fluid"></a>
                    <h4><a href="/{{ $cars[0]['id'] }}/{{ Str::slug($cars[0]['brand']['name'] . ' ' . $cars[0]['car_model']['name'], '-') }}">{{ $cars[0]['brand']['name'] }} {{ $cars[0]['car_model']['name']
                            }}</a></h4>
                    <p class="mb-4 d-block">
                        <strong>Ano: {{ $cars[0]['year'] }}</strong><br>
                        <strong>Mês: {{ $cars[0]['month']['name'] }}</strong><br>
                        <strong>Origem: {{ $cars[0]['origin']['name'] }}</strong><br>
                        <strong>Estado: {{ $cars[0]['status']['name'] }}</strong>
                    </p>
                </div>
                <div class="post-entry-1 lg">
                    <a href="/{{ $cars[1]['id'] }}/{{ Str::slug($cars[1]['brand']['name'] . ' ' . $cars[1]['car_model']['name'], '-') }}"><img src="{{ $cars[1]['images'][1]['original_url'] }}" alt="" class="img-fluid"></a>
                    <h4><a href="/{{ $cars[1]['id'] }}/{{ Str::slug($cars[1]['brand']['name'] . ' ' . $cars[1]['car_model']['name'], '-') }}">{{ $cars[1]['brand']['name'] }} {{ $cars[1]['car_model']['name']
                            }}</a></h4>
                    <p class="mb-4 d-block">
                        <strong>Ano: {{ $cars[1]['year'] }}</strong><br>
                        <strong>Mês: {{ $cars[1]['month']['name'] }}</strong><br>
                        <strong>Origem: {{ $cars[1]['origin']['name'] }}</strong><br>
                        <strong>Estado: {{ $cars[1]['status']['name'] }}</strong>
                    </p>
                </div>
            </div>

            <div class="col-lg-8">
                <div class="row g-5">
                    @php
                    $cols = array_chunk($cars, 3);
                    @endphp
                    @foreach ($cols as $col)
                    <div class="col-lg-4 border-start custom-border">
                        @foreach ($col as $car)
                        <div class="post-entry-1">
                            <a href="/{{ $car['id'] }}/{{ Str::slug($car['brand']['name'] . ' ' . $car['car_model']['name'], '-') }}"><img src="{{ $car['images'][0]['url'] }}" alt=""
                                    class="img-fluid"></a>
                            <h2><a href="/{{ $car['id'] }}/{{ Str::slug($car['brand']['name'] . ' ' . $car['car_model']['name'], '-') }}">{{ $car['brand']['name'] }} {{ $car['car_model']['name']
                                    }}</a></h2>
                            <p>
                                <strong>Ano: {{ $car['year'] }}</strong><br>
                                <strong>Mês: {{ $car['month']['name'] }}</strong><br>
                                <strong>Origem: {{ $car['origin']['name'] }}</strong><br>
                                <strong>Estado: {{ $car['status']['name'] }}</strong>
                            </p>
                        </div>
                        @endforeach
                    </div>
                    @endforeach

                    <!-- Trending Section -->
                    <div class="col-lg-4">

                        <div class="trending">
                            <h3>Tendências</h3>
                            <ul class="trending-post">
                                @foreach ($cars as $car)
                                <li>
                                    <a href="/{{ $car['id'] }}/{{ Str::slug($car['brand']['name'] . ' ' . $car['car_model']['name'], '-') }}">
                                        <span class="number">1</span>
                                        <h3>{{ $car['brand']['name'] }} {{ $car['car_model']['name'] }}</h3>
                                        <span class="author">
                                            <strong>Ano: {{ $car['year'] }}</strong><br>
                                            <strong>Mês: {{ $car['month']['name'] }}</strong><br>
                                            <strong>Origem: {{ $car['origin']['name'] }}</strong><br>
                                            <strong>Estado: {{ $car['status']['name'] }}</strong>
                                        </span>
                                    </a>
                                </li>
                                @endforeach
                            </ul>
                        </div>

                    </div> <!-- End Trending Section -->
                </div>
            </div>

        </div> <!-- End .row -->
    </div>
</section> <!-- End Post Grid Section -->