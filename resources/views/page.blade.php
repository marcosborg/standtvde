@extends('layouts.app')
@section('content')
    <div class="container pt-4">
        @if ($page['image'])
        <div style="height: 20vw; background-image: url('{{ $page['image']['url'] }}'); background-size: cover; background-position: center center;"></div>    
        @endif
        @if ($page['description'])
        {!! $page['description'] !!}
        @endif
        <div class="m-5">
            <h2 class="mt-4 mb-5">{{ $page['title'] }}</h2>
            {!! $page['text'] !!}
        </div>
    </div>
@endsection