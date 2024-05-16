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
                    <th scope="col">Controls</th>
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
                        <td scope="row"><a class="bg-danger p-2 text-dark"
                                href="{{ route('comics.show', $comic) }}">View</a>
                            <a class="bg-danger p-2 text-dark" href="{{ route('comics.edit', $comic) }}">Edit</a>
                            <!-- Modal trigger button -->
                            <button type="button" class="btn btn-danger btn-lg" data-bs-toggle="modal"
                                data-bs-target="#modalId{{ $comic->id }}">
                                Delete
                            </button>

                            <!-- Modal Body -->
                            <!-- if you want to close by clicking outside the modal, delete the last endpoint:data-bs-backdrop and data-bs-keyboard -->
                            <div class="modal fade" id="modalId{{ $comic->id }}" tabindex="-1"
                                data-bs-backdrop="static" data-bs-keyboard="false" role="dialog"
                                aria-labelledby="modalTitleId" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-sm"
                                    role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="modalTitleId">
                                                Attention Deleting : {{ $comic->title }}
                                            </h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">⚠ Attention !! You are about to delete this record. </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-primary" data-bs-dismiss="modal">
                                                Close
                                            </button>
                                            <form action="{{ route('comics.destroy', $comic) }}" method="post">

                                                @csrf
                                                @method('DELETE')
                                                <button class="btn btn-danger" type="submit">DELETE</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Optional: Place to the bottom of scripts -->
                            <script>
                                const myModal = new bootstrap.Modal(
                                    document.getElementById("modalId"),
                                    options,
                                );
                            </script>



                        </td>
                    </tr>
                @empty
                    <h3>There aren't any comics </h3>
                @endforelse
            </tbody>
        </table>
    </div>
@endsection
