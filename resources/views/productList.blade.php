@extends('layouts.app')
@section('title','ProductList')


@section('main-content')


<h6 class="demoText__heading">Product List page</h6>

<div class="conatiner  text-center">
    <h1 class="mt-5">Products: <a href="/InProduct">Insert</a></h1>
</div>

<div class="container text-center">
<div class="row">
    {{-- A card  --}}

    @forelse ($products as $product)
     <div class="col-md-4">

     <div class="card my-3" style="width: 25rem;">
        <img src="..." class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">{{ $product->Product_Name }}</h5>
          <p class="card-text">{{ $product->Product_Details }}</p>
          {{-- <a href="edit/{{ $product -> id }}" class="btn btn-primary">Edit</a> --}}
          <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
            View
          </button>
          {{-- <a href="delete/{{ $product -> id }}"><button class="btn"><i class="fa fa-trash"></i></button>
          </a> --}}
        </div>
       </div>

      {{-- The content of the model  --}}
      <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
      <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>


      <div class="modal-body">
        {{ $product->Product_Name }} <br>
        {{ $product->Model_number }} <br>
        {{ $product->Product_Details }} <br>
        {{ $product->Shipping_details }} <br>
        {{ $product->Prize }} <br>
        {{ $product->Weight }} <br>
        {{ $product->Quantity_per_pack }}
      </div>

      <div class="modal-footer">
        {{-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button> --}}
        {{-- <button type="button" class="btn btn-primary">Save changes</button> --}}
        <a href="edit/{{ $product -> id }}" class="btn btn-primary">Edit</a>
        <a href="delete/{{ $product -> id }}"><button class="btn"><i class="fa fa-trash"></i></button>
        </a>
      </div>
    </div>
  </div>
</div>

     </div>

    @empty
     <p>No prodcuts saved, Enter new products <a href="/InProduct">here</a></p>

    @endforelse


  </div>
</div>
@endsection


@section('styles')
<link rel="stylesheet" href="{{ asset('css/events.css') }}">
@endsection

@section('scripts')
<script src="{{ asset('js/events.js') }}"></script>
@endsection
