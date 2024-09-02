@extends('layouts.app')

{{-- The below code would change the title variable. The title here is yield --}}
@section('title','Products section')
@section('main-content')

{{-- demoText start --}}



<div class="conatiner  text-center">
    <h1 class="mt-5">Enter Product - 2</h1>
</div>

<div class="container m-5">
<form action="/create-2" method="POST">
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

    <label for="Quantity_per_pack">Quantity per pack</label>
    <input type="text" class="form-control" id="Quantity_per_pack" name="Quantity_per_pack" required>

    <label for="Quantity_per_pack_2">Quantity per pack</label>
    <input type="text" class="form-control" id="Quantity_per_pack_2" name="Quantity_per_pack_3" required>

    {{-- Pack amount and prize --}}
    {{-- <div id="pack_details"> --}}

    {{-- <label for="Test_1">Packet Weight:</label>
    <input type="text" id="Test_1" name=Test_1" placeholder="Enter packet weight" required>
    <label for="Test_2">Price:</label>
    <input type="number" id="Test_2" name="Test_2" placeholder="Enter price" required> --}}

    {{-- </div> --}}
    <div id="pack_details">

        <label for="Weight1">Weight</label>
        <input type="text" class="form-control" id="Weight_1" name="Weight_1" required>

        <label for="Prize1">Prize</label>
        <input type="text" class="form-control" id="Price_1" name="Price_1" required>
    </div>


    <button type="button" onclick="addField()">Add More Packs</button>
    <br>
    <br>
    <input type="submit" value="Add product">


    {{-- the JS code  --}}
    <script>
        let fieldCount = 2; // Keeps track of the number of input fields

        function addField() {
            const container = document.getElementById('pack_details');

            const newField = document.createElement('div');
            newField.className = 'form-group';

            newField.innerHTML = `
                <br>
                <label>Packet Weight:</label>
                <input type="text" name="Weight_${fieldCount}" placeholder="Enter packet weight">
                <label>Price:</label>
                <input type="number" name="Price_${fieldCount}" placeholder="Enter price">
                <button class="remove-btn" onclick="removeField(this)">Remove</button>

            `;

            container.appendChild(newField);
            fieldCount++;
        }

        function removeField(element) {
            element.parentElement.remove();
        }


    </script>




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
