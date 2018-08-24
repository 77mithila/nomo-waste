@extends('layout')

@section('content')

    @include('partials.breadcrumb', [
                                        'title' => 'List of Existing Products',
                                        'linkOne' => true,
                                        'linkOneName' => 'Product',
                                        'linkOneUrl' => '#',
                                        'linkTwo' => true,
                                        'linkTwoName' => 'Products List',
                                        'linkTwoUrl' => '#',
                                    ])

    <div class="wrapper wrapper-content animated fadeInRight">
        <div class="row">
            <div class="col-lg-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>Input new product information</h5>
                    </div>
                    <div class="ibox-content">


                        <table class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <th>Product Name</th>
                                <th>Barcode</th>
                                <th>Category</th>
                                <th>Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($products as $product)
                                <tr>
                                    <td>{{ $product->name }}</td>
                                    <td>{{ $product->barcode }}</td>
                                    <td>{{ $product->categoryName() }}</td>
                                    <td>
                                        <a class="btn btn-sm btn-primary"
                                           href="/add-batch-form?product_id={{ $product->id }}">Add batch</a>
                                        <a class="btn btn-sm btn-warning"
                                           href="/deduct-inventory-form?product_id={{$product->id}}">Update Qty</a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection