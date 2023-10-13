@extends('layouts.app')

@section('content')
    
<x-slider :cars=$cars />

<x-pubs :pubs=$pubs />

<x-posts :cars=$cars />

@endsection