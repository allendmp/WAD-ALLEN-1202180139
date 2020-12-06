@extends('layouts.app')

@section('title', 'List Product')
@section('content')


<div class="container justify-content-center">
    @if ($products->count())


    <div class="container">
        <a href="/input_product" role="button" class="btn btn-dark">Add Product</a>

        <table class="table">
            <thead class="thead-dark">
                <tr class="">
                    <th scope="col" class="">#</th>
                    <th scope="col" class="">Name</th>
                    <th scope="col" class="">Price</th>
                    <th scope="col" class="">Action</th>
                </tr>
            </thead>
            <tbody>
                @php
                $i=1
                @endphp
                @foreach ($products as $product)
                <tr>

                    <th scope="row">{{ $i }} </th>
                    <td>{{ $product->name }}</td>
                    <td>$ {{ $product->price }}</td>
                    <td class="align-content-left">
                        <div>

                            <form action="/delete/{{$product->id }}" method="post">
                                @csrf
                                @method('delete')
                                <a href="/update/{{ $product->id }}" class="btn btn-primary">Edit</a>
                                <button class="btn btn-danger" type="submit"> Delete</button>
                            </form>
                    </td>
                </tr>
                @php
                $i++
                @endphp
                @endforeach
            </tbody>
        </table>
    </div>
</div>
</div>
@else
<center>
    <div>
        <br>
        There is no data.... <br>
        <a href="/input_product" role="button" class="btn btn-dark">Add Product</a>
    </div>
</center>
@endif

@endsection