<!-- ======= Footer ======= -->
<footer id="footer" class="footer">

    <div class="footer-content">
        <div class="container">

            <div class="row g-5">
                <div class="col-lg-3">
                    <h3 class="footer-heading">Stand TVDE</h3>
                    <p>O standTVDE é uma marca do sector automóvel, que comercializa todo o tipo de automóveis tvde e
                        particular. Somos assim uma referência no sector automóvel, a motivação e a competência dos
                        colaboradores do Standtvde são a principal riqueza da empresa.</p>
                </div>
                <div class="col-6 col-lg-3">
                    <h3 class="footer-heading">Navegação</h3>
                    <ul class="footer-links list-unstyled">
                        <li><a href="/"><i class="bi bi-chevron-right"></i> Início</a></li>
                        <li><a href="/viaturas"><i class="bi bi-chevron-right"></i> Viaturas</a></li>
                        @foreach ($pages as $page)
                        <li><a href="/pagina/{{ $page['id'] }}/{{ Str::slug($page['title'], '-') }}"><i class="bi bi-chevron-right"></i> {{ $page['title'] }}</a></li>
                        @endforeach
                        <li><a href="https://mundotvde.pt" target="_new"><i class="bi bi-chevron-right"></i> Mundo
                                TVDE</a></li>
                    </ul>
                </div>
                @php
                $cols = array_chunk($cars, 2);
                @endphp
                @foreach ($cols as $rows)
                <div class="col-lg-3">
                    <ul class="footer-links footer-blog-entry list-unstyled">
                        @foreach ($rows as $car)
                        <li>
                            <a href="/{{ $car['id'] }}/{{ Str::slug($car['brand']['name'] . ' ' . $car['car_model']['name'], '-') }}"
                                class="d-flex align-items-center">
                                <img src="{{ $car['images'][0]['thumbnail'] }}" alt="" class="img-fluid me-3">
                                <div>
                                    <span>
                                        {{ $car['brand']['name'] }} {{
                                        $car['car_model']['name'] }}
                                    </span>
                                    <div class="post-meta d-block">
                                        <span class="date">
                                            <strong>Ano: {{ $car['year'] }}</strong><br>
                                            <strong>Mês: {{ $car['month']['name'] }}</strong><br>
                                            <strong>Origem: {{ $car['origin']['name'] }}</strong><br>
                                            <strong>Estado: {{ $car['status']['name'] }}</strong>
                                        </span>
                                    </div>
                                </div>
                            </a>
                        </li>
                        @endforeach
                    </ul>
                </div>
                @endforeach

            </div>
        </div>
    </div>

    <div class="footer-legal">
        <div class="container">

            <div class="row justify-content-between">
                <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                    <div class="copyright">
                        © Copyright <strong><span>Mundo TVDE</span></strong>.
                    </div>

                    <div class="credits">
                        Desenvolvido por <a href="https://netlook.pt/">Netlook</a>
                    </div>

                </div>

                <div class="col-md-6">
                    <div class="social-links mb-3 mb-lg-0 text-center text-md-end">
                        <a href="https://www.facebook.com/mundotvde" class="facebook" target="_new"><i
                                class="bi bi-facebook"></i></a>
                        <a href="https://www.instagram.com/mundotvde/" class="instagram" target="_new"><i
                                class="bi bi-instagram"></i></a>
                    </div>

                </div>

            </div>

        </div>
    </div>

</footer>