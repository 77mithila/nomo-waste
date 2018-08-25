@extends('layout')

@section('content')

@include('partials.breadcrumb', [
'title' => 'Add New Offer to System',
'linkOne' => true,
'linkOneName' => 'Offer',
'linkOneUrl' => '#',
'linkTwo' => true,
'linkTwoName' => 'Add Offer',
'linkTwoUrl' => '#',
])

<div class="row">
    <div class="col-lg-12">
        <div class="ibox-title">
            <h5>Input offer information | {{$batch->product->name}}</h5>
        </div>
        <div class="ibox-content">
            <form action="/create-offer" method="post" class="form-horizontal">
                <div class="form-group">
                    <label class="col-sm-2 control-label">Discount Percentage</label>
                    <div class="col-sm-10"><select class="form-control m-b" name="discount_percentage">
                            <option value="10">10%</option>
                            <option value="20">20%</option>
                            <option value="30">30%</option>
                            <option value="40">40%</option>
                            <option value="50">50%</option>
                            <option value="60">60%</option>
                            <option value="70">70%</option>
                        </select>
                    </div>
                </div>
                <div class="hr-line-dashed"></div>
                @csrf
                <input type="hidden" name="batch_id" value="{{ $batch->id }}" />
                <div class="form-group">
                    <div class="col-sm-4 col-sm-offset-2">
                        <a class="btn btn-warning" href="/">Cancel</a>
                        <button class="btn btn-primary" type="submit">Save Offer</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>


@endsection
