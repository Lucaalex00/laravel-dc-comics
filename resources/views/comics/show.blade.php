@extends('layouts.app')

@section('content')
    <h1>COMIX</h1>
    <a class="text-danger" href="{{ route('home') }}"> HOME </a></br>
    <img src="{{ $comic->thumb }}"></img>
    <h3>{{ $comic->title }}</h3>
    <h3>{{ $comic->description }}</h3>
    <h3>{{ $comic->price }}</h3>
    <h3>{{ $comic->sale_date }}</h3>
@endsection
