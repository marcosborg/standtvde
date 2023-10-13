@extends('layouts.app')
@section('content')
<div class="container pt-4">
    @if ($page['image'])
    <div
        style="height: 20vw; background-image: url('{{ $page['image']['url'] }}'); background-size: cover; background-position: center center;">
    </div>
    @else
    <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3111.734008416103!2d-9.100816484314361!3d38.74686566340748!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd193162d890dce1%3A0x3de3d2bfbb5db5ef!2sR.%20Tabaqueira%202a%2C%201950-256%20Lisboa!5e0!3m2!1spt-PT!2spt!4v1672165151255!5m2!1spt-PT!2spt"
        width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
        referrerpolicy="no-referrer-when-downgrade"></iframe>
    @endif
    <div class="m-5">
        <h2 class="mt-4 mb-5">{{ $page['title'] }}</h2>
        {!! $page['text'] !!}
    </div>
</div>
@endsection