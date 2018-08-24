@extends('layout')

@section('content')

@include('partials.breadcrumb', [
'title' => 'Add a batch to product',
'linkOne' => true,
'linkOneName' => 'Inventory',
'linkOneUrl' => '#',
'linkTwo' => true,
'linkTwoName' => 'Add Batch',
'linkTwoUrl' => '#',
])

<div class="row">
    <div class="col-lg-12">
        <div class="ibox-title">
            <h4>Input batch - {{$product->name}} <small>(Barcode: {{$product->barcode}})</small></h4>
        </div>
        <div class="ibox-content">
            <form action="/add-batch" method="post" class="form-horizontal">
                <div class="form-group">
                    <label class="col-sm-2 control-label">Quantity</label>
                    <div class="col-sm-10">
                        <input name="quantity" type="number" required="required">
                    </div>
                </div>
                <div class="hr-line-dashed"></div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">Expiration Date</label>
                    <div class="col-sm-10">
                        <input name="expiration_date" type="text" pattern="[0-9]{4}-[0-9]{2}-[0-9]{2}" required="required">
                    </div>
                </div>
                <div class="hr-line-dashed"></div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">Retail Price</label>
                    <div class="col-sm-10">
                        <input name="retail_price" type="number" required="required">
                    </div>
                </div>
                <div class="hr-line-dashed"></div>
                @csrf
                <input type="hidden" name="product_id" value="{{ $product->id }}" />
                <div class="form-group">
                    <div class="col-sm-4 col-sm-offset-2">
                        <a class="btn btn-warning" href="/">Cancel</a>
                        <button class="btn btn-primary" type="submit">Done</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection
