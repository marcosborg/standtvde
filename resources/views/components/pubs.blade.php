<div class="container">
    @foreach ($pubs as $pub)
    <div class="card text-bg-dark">
        <img class="card-img" style="height: 20vh; background-image: url('{{ $pub['image']['url'] }}'); background-size: cover; background-position: center center;">
        <div class="card-img-overlay text-center" style="background-color: #000000be;">
            <h1 class="card-title">{{ $pub['title'] }}</h1>
            {!! $pub['text'] !!}
        </div>
    </div>
    @endforeach
</div>