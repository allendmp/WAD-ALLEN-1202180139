@extends('layouts.app')

@section('title', 'History')
@section('content')


<div class="container justify-content-center">
  @if ($orders->count())
  <div class="container">
    <table class="table">
      <thead class="thead-dark">
        <tr>
          <th scope="col">#</th>
          <th scope="col">Product</th>
          <th scope="col">Buyer Name</th>
          <th scope="col">Contact</th>
          <th scope="col">Amount</th>
        </tr>
      </thead>
      <tbody>
        @php
        $i=1
        @endphp
        @foreach ($orders as $order)
        <tr>
          <th scope="row">{{ $i }} </th>
          <td>{{ $order->id }}</td>
          <td>{{ $order->buyer_name }}</td>
          <td>{{ $order->buyer_contact }}</td>
          <td>$ {{ $order->amount}}</td>
        </tr>
        @php
        $i++
        @endphp
        @endforeach
      </tbody>
    </table>


  </div>
  @else
  <center>
    <div>
      <br>
      There is no data <br>
      <a href="/input_product" role="button" class="btn btn-dark">Add Product</a>
    </div>
  </center>
  @endif

  @endsection