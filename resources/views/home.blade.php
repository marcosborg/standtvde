@extends('layouts.app')

@section('content')
    
<x-slider :cars=$cars />

<x-posts :cars=$cars />

@endsection