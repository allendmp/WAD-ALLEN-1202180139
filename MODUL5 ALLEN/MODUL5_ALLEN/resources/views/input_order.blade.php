@extends('layouts.app')
@section('title', 'Input Order')
@section('content')


<div class="container">
    <div class="card mb-3" style="max-width: 1300px;">
        <div class="row no-gutters">
            <div class="col-md-4">
                <img width="500" height="250" src="/img/upload/{{ $products->img_path }}" class="card-img" alt="allen bangsat">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title">{{ $products->name }}</h5>
                    <p class="card-text">{{ $products->description }}</p>
                    <p class="card-text"><small class="text-muted"> Stock : {{ $products->stock }}</small></p>
                    <p class="card-text">$ {{ $products->price }}</p>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="container" style="background-color: white;">
    <center>
        <h2> Buyer Information </h2>
    </center>
    <form action="/makeOrder" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="buyer_name">Name</label>
            <input type="text" class="form-control" id="buyer_name" placeholder="Name" name="buyer_name">
        </div>

        <div class="form-group">
            <label for="buyer_contact">Contact</label>
            <input type="text" class="form-control" id="buyer_contact" placeholder="Contact" name="buyer_contact">
        </div>

        <div class="form-group">
            <label for="qty">Quantity</label>
            <input type="number" class="form-control" id="qty" placeholder="Quantity" name="qty">
        </div>

        <input type="hidden" name="name" value="{{ $products->name }}">
        <input type="hidden" name="product_id" value="{{ $products->id }}">
        <input type="hidden" name="price" value="{{ $products->price }}">

        <center>
            <button type="submit" class="btn btn-success">Submit</button>
        </center>


    </form>
</div>
</div>

@endsection