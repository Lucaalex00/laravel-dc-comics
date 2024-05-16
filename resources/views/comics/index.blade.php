@extends('layouts.app')

@section('content')
    <h1>COMICS</h1>
    <a href="{{ route('home') }}"> HOME </a>
    <div class="table-responsive">
        <table class="table table-primary">
            <thead>
                <tr>
                    <th scope="col">Title</th>
                    <th scope="col">Image</th>
                    <th scope="col">Price</th>
                    <th scope="col">Series</th>
                    <th scope="col">Sale_date</th>
                    <th scope="col">Type</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($comics as $comic)
                    <tr class="">
                        <td scope="row">{{ $comic->title }}</td>
                        <td scope="row"><img width="80"src="{{ $comic->thumb }}" alt="{{ $comic->title }}"></td>
                        <td scope="row">{{ $comic->price }}</td>
                        <td scope="row">{{ $comic->series }}</td>
                        <td scope="row">{{ $comic->sale_date }}</td>
                        <td scope="row">{{ $comic->type }}</td>
                    </tr>
                @empty
                    <h3>There aren't any comics </h3>
                @endforelse
            </tbody>
        </table>
    </div>
@endsection
