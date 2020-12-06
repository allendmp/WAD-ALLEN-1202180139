@extends('layouts.app')

@section('content')
@section('title', 'Order')
@if ($products->count())


<div class="row no-gutters">
        <div class="container">
                <div class="card-deck">
                        <div class="container">
                                <div class="row">
                                        @foreach ($products as $product)
                                        <div class="col-md-4 py-3">
                                                <div class="card card-home">
                                                        <img width="150" height="250" src="img/upload/{{ $product->img_path }}" class="card-img-top img-poster" alt="">

                                                        <div class="card-body">
                                                                <h3> {{ $product->name }} </h3>
                                                                <p class="card-text">
                                                                        <pi>{{ $product->description }}</pi>
                                                                        <h3>$ {{ $product->price }}</h3>
                                                                </p>
                                                        </div>


                                                        <a href="/input_order/{{$product->id}}">
                                                                <div>
                                                                        <p style="text-align: left; margin-left:20px;"><button type="button" class="btn btn-primary"> Order Now</button></p>
                                                                </div>
                                                        </a>
                                                </div>
                                        </div>
                                        @endforeach
                                </div>
                        </div>
                </div>
        </div>
</div>


@else
<center>
        <div class="py-2 mt-4">
                <div class="py-2 mt-4">
                        There is no data <br>
                        <a href="/product_input" role="button" class="btn btn-dark">Add Product</a>
                </div>
        </div>
</center>
@endif

@endsection