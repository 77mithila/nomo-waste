@extends('layout')

@section('content')

@include('partials.breadcrumb', [
                                    'title' => 'Add New Product to System',
                                    'linkOne' => true,
                                    'linkOneName' => 'Product',
                                    'linkOneUrl' => '#',
                                    'linkTwo' => true,
                                    'linkTwoName' => 'Add Product',
                                    'linkTwoUrl' => '#',
                                ])

<form action="/create-product" method="post">

    <label>Barcode No</label>
    <input name="barcode" type="text">
    <br>
    <label>Product Name</label>
    <input name="name" type="text">
    <br>
    <label>Category</label>
    <select name="categoryId">
        <option value="0">Select</option>
        <option value="1">Beverages</option>
        <option value="2">Bread / Bakery</option>
        <option value="3">Canned / Jarred</option>
        <option value="4">Dairy</option>
        <option value="5">Dray / Baking</option>
        <option value="6">Frozen</option>
        <option value="7">Fresh Meat</option>
        <option value="8">Produce</option>
        <option value="9">Cleaners</option>
        <option value="10">Paper Goods</option>
        <option value="11">Personal Care</option>
        <option value="12">Other</option>
    </select>
    <br>
    @csrf
    <input type="submit">

</form>

@endsection
