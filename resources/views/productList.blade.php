@extends('layouts.app')
@section('title','ProductList')


@section('main-content')


<h6 class="demoText__heading">Product List page</h6>

<div class="row">
    {{-- A card  --}}
    @foreach ($products as $product)
    <div class="col-md-4">


    <div class="card my-4" style="width: 18rem;">
        <img src="..." class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">{{ $product->Product_Name }}</h5>
          <p class="card-text">{{ $product->Product_Details }}</p>
          <a href="#" class="btn btn-primary">View product</a>
        </div>
      </div>
    </div>
    @endforeach

  </div>
@endsection


@section('styles')
<link rel="stylesheet" href="{{ asset('css/events.css') }}">
@endsection

@section('scripts')
<script src="{{ asset('js/events.js') }}"></script>
@endsection
