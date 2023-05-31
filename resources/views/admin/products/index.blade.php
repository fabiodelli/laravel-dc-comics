@extends('layouts.app');
@section('title', 'Admin:Table Products')
@section('content')

    @if (session('message'))
        <div class="alert alert-success" role="alert">
            <strong>{{ session('message') }}</strong>
        </div>
    @endif

    <a name="" id="" class="btn btn-primary" href="{{ route('comic.create') }}" role="button">New
        Product +</a>
    <div class="table-responsive">
        <table
            class="table table-striped
        table-hover	
        table-borderless
        table-primary
        align-middle">
            <thead class="table-light">
                <caption>Products</caption>
                <tr>
                    <th>ID</th>
                    <th>TITLE</th>
                    <th>DESCRIPTION</th>
                    <th>IMAGE</th>
                    <th>PRICE</th>
                    <th>SERIES</th>
                    <th>SALES DATE</th>
                    <th>TYPE</th>
                </tr>
            </thead>
            <tbody class="table-group-divider">
                @forelse ($comics as $comic)
                    <tr class="table-primary">
                        <td scope="row">{{ $comic->id }}</td>
                        <td>{{ $comic->title }}</td>
                        <td>{{ $comic->description }}</td>
                        <td><img src="{{ $comic->thumb }}" width="100" alt="{{ $comic->title }}"></td>
                        <td>{{ $comic->price }}</td>
                        <td>{{ $comic->series }}</td>
                        <td>{{ $comic->sale_date }}</td>
                        <td>{{ $comic->type }}</td>
                        <td>
                            <a name="" id="" class="btn btn-primary"
                                href="{{ route('comics.show', $comic->id) }}" role="button">View</a>
                            <a name="" id="" class="btn btn-primary"
                                href="{{ route('comics.edit', $comic->id) }}" role="button">Edit</a>
                            <!-- Modal trigger button -->
                            <button type="button" class="btn btn-danger " data-bs-toggle="modal"
                                data-bs-target="#{{ $comic->id }}">
                                Delete
                            </button>

                            <!-- Modal Body -->
                            <!-- if you want to close by clicking outside the modal, delete the last endpoint:data-bs-backdrop and data-bs-keyboard -->
                            <div class="modal fade" id="{{ $comic->id }}" tabindex="-1" data-bs-backdrop="static"
                                data-bs-keyboard="false" role="dialog" aria-labelledby="modalTitle-{{ $comic->id }}"
                                aria-hidden="true">
                                <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-sm"
                                    role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="modalTitle-{{ $comic->id }}">Delete
                                                {{ $comic->title }}</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            are you sure?
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-bs-dismiss="modal">Close</button>
                                            <form action="{{ route('comics.destroy', $comic->id) }}"
                                                method="post">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger ">yes</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <!-- Optional: Place to the bottom of scripts -->
                            <script>
                                const myModal = new bootstrap.Modal(document.getElementById('{{ $comic->id }}'), options)
                            </script>
                        </td>
                    </tr>
                @empty
                    <tr class="table-primary">
                        <td scope="row">products are not in stock</td>
                    </tr>
                @endforelse

            </tbody>
            <tfoot>

            </tfoot>
        </table>
    </div>

@endsection
