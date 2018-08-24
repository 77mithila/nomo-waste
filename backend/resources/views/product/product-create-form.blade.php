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

<div class="row">
    <div class="col-lg-12">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <h5>Input new product information</h5>
            </div>
            <div class="ibox-content">
                <form action="/create-product" method="post" class="form-horizontal">
                    <div class="form-group"><label class="col-sm-2 control-label">Barcode No</label>
                        <div class="col-sm-10"><input type="number" name="barcode" class="form-control"></div>
                    </div>
                    <div class="hr-line-dashed"></div>

                    <div class="form-group"><label class="col-sm-2 control-label">Product Name</label>
                        <div class="col-sm-10"><input type="text" class="form-control" name="name">
                        </div>
                    </div>
                    <div class="hr-line-dashed"></div>

                    <div class="form-group"><label class="col-sm-2 control-label">Category</label>

                        <div class="col-sm-10"><select class="form-control m-b" name="categoryId">
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
                        </div>
                    </div>
                    <div class="hr-line-dashed"></div>
                    @csrf
                    <div class="form-group">
                        <div class="col-sm-4 col-sm-offset-2">
                            <a class="btn btn-warning" href="/">Cancel</a>
                            <button class="btn btn-primary" type="submit">Save Product</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection
