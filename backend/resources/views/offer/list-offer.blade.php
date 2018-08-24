@extends('layout')

@section('content')

@include('partials.breadcrumb', [
'title' => 'List of Available Offers',
'linkOne' => true,
'linkOneName' => 'Offer',
'linkOneUrl' => '#',
'linkTwo' => true,
'linkTwoName' => 'Offer List',
'linkTwoUrl' => '#',
])

<div class="wrapper wrapper-content animated fadeInRight">
    <div class="row">
        <div class="col-lg-12">
            <div class="ibox float-e-margins">
                <div class="ibox-content">
                    <table class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th>Product Name</th>
                            <th>Barcode</th>
                            <th>Retail Price</th>
                            <th>Discount Price</th>
                            <th>End Date</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($offers as $offer)
                        <tr>
                            <td>{{ $offer->name }}</td>
                            <td>{{ $offer->barcode }}</td>
                            <td>{{ $offer->retail_price}}</td>
                            <td>{{ (100-$offer->discount_percentage)/100*$offer->retail_price }}</td>
                            <td>{{ $offer->end_date }}</td>
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
