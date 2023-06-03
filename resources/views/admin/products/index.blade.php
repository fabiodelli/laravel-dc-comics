@extends('layouts.app')
@section('title', 'Admin')
@section('content')

    @if (session('message'))
        <div class="alert alert-success" role="alert">
            <strong>{{ session('message') }}</strong>
        </div>
    @endif

    <div class="container">

        <div class="d-flex justify-content-end">
            <a name="" id="" class="btn btn-primary ms-100%" href="{{ route('admin.products.create') }}" role="button">Add Product</a>
        </div>


        <div class="table-responsive">
            <table
                class="table table-striped
            table-hover	
            table-borderless
            table-primary
            align-middle">
                <thead class="table-light">
                    <tr>
                        <th>ID</th>
                        <th>TITLE</th>
                        <th>IMAGE</th>
                        <th>PRICE</th>
                        <th>SERIES</th>
                        <th>SALES DATE</th>
                        <th>TYPE</th>
                        <th>ACTIONS</th>
                    </tr>
                </thead>
                <tbody class="table-group-divider">
                    @forelse ($products as $product)
                        <tr class="table-primary">
                            <td scope="row">{{ $product->id }}</td>
                            <td>{{ $product->title }}</td>
                            <td><img src="{{ $product->thumb }}" width="100" alt="{{ $product->title }}"></td>
                            <td>€{{ $product->price }}</td>
                            <td>{{ $product->series }}</td>
                            <td>{{ $product->sale_date }}</td>
                            <td>{{ $product->type }}</td>
                            <td class="" >
                                <a name="" id="" class="btn btn-primary"
                                    href="{{ route('admin.products.show', $product->id) }}" role="button">View</a>
                                <a name="" id="" class="btn btn-primary"
                                    href="{{ route('admin.products.edit', $product->id) }}" role="button">Edit</a>
                                <!-- Modal trigger button -->
                                <button type="button" class="btn btn-danger mt-3 " data-bs-toggle="modal"
                                    data-bs-target="#{{ $product->id }}">
                                    Delete
                                </button>

                                <!-- Modal Body -->
                                <!-- if you want to close by clicking outside the modal, delete the last endpoint:data-bs-backdrop and data-bs-keyboard -->
                                <div class="modal fade" id="{{ $product->id }}" tabindex="-1" data-bs-backdrop="static"
                                    data-bs-keyboard="false" role="dialog"
                                    aria-labelledby="modalTitle-{{ $product->id }}" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-sm"
                                        role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="modalTitle-{{ $product->id }}">Delete
                                                    {{ $product->title }}</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                are you sure?
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-bs-dismiss="modal">Close</button>
                                                <form action="{{ route('admin.products.destroy', $product->id) }}"
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
                                    const myModal = new bootstrap.Modal(document.getElementById('{{ $product->id }}'), options)
                                </script>
                            </td>
                        </tr>
        </div>

    @empty
        <tr class="table-primary">
            <td scope="row">products not available</td>
        </tr>
        @endforelse

        </tbody>
        <tfoot>

        </tfoot>
        </table>
    </div>

@endsection
