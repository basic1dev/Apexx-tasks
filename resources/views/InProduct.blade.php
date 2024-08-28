@extends('layouts.app')

{{-- The below code would change the title variable. The title here is yield --}}
@section('title','Products section')
@section('main-content')

{{-- demoText start --}}



<div class="conatiner  text-center">
    <h1 class="mt-5">Enter Product</h1>
</div>

<div class="container m-5">
<form action="/create" method="post">
    @csrf
    <label for="product_name">Product Name</label>
    <input type="text" class="form-control" id="produt_name" name="product_name" required>

    <label for="model_number">Model Number</label>
    <input type="text" class="form-control" id="model_number" name="model_number" required>

    <label for="product_details">Product Details</label>
    <textarea type="text" class="form-control mb-2" id="product_details" name="product_details" required>
    </textarea>

    {{-- The below one is newly added  --}}

    <label for="How_to_use">How to use</label>
    <textarea type="text" class="form-control mb-2" id="How_to_use" name="How_to_use" required>
    </textarea>

    <label for="Shipping_details">Shipping Details</label>
    <textarea type="text" class="form-control mb-2" id="Shipping_details" name="Shipping_details" required>
    </textarea>

    <label for="Prize">Prize</label>
    <input type="text" class="form-control" id="Prize" name="Prize" required>

    <label for="Weight">Weight</label>
    <input type="text" class="form-control" id="Weight" name="Weight" required>

    <label for="Quantity_per_pack">Quantity per pack</label>
    <input type="text" class="form-control" id="Quantity_per_pack" name="Quantity_per_pack" required>

    <input type="submit" value="Add product">

</form>
</div>


@endsection

{{-- asset link start --}}
@section('styles')
<link rel="stylesheet" href="{{ asset('css/home.css') }}">
@endsection

@section('scripts')
<script src="{{ asset('js/home.js') }}"></script>
@endsection
{{-- asset link end --}}
