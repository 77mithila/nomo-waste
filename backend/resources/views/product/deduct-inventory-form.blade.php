@extends('layout')

@section('content')

@include('partials.breadcrumb', [
'title' => 'Deduct Inventory from System',
'linkOne' => true,
'linkOneName' => 'Inventory',
'linkOneUrl' => '#',
'linkTwo' => true,
'linkTwoName' => 'Deduct Inventory',
'linkTwoUrl' => '#',
])

<div class="row">
    <div class="col-lg-12">
        <div class="ibox-title">
            <h5>Input deduct information</h5>
        </div>
        <div class="ibox-content">
            <form action="deduct-inventory" method="post" class="form-horizontal">
                <div class="form-group">
                    <label class="col-sm-2 control-label">Barcode</label>
                    <div class="col-sm-10">
                        <input name="barcode" type="number" required>
                    </div>
                </div>
                <div class="hr-line-dashed"></div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">Quantity</label>
                    <div class="col-sm-10">
                        <input name="quantity" type="number" required>
                    </div>
                </div>
                <div class="hr-line-dashed"></div>
                @csrf
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

