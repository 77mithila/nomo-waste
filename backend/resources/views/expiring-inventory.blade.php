@extends('layout')

@section('content')

    @include('partials.breadcrumb', [
                                        'title' => 'Items Close to Expire',
                                        'linkOne' => true,
                                        'linkOneName' => 'Inventory',
                                        'linkOneUrl' => '#',
                                        'linkTwo' => true,
                                        'linkTwoName' => 'Expiring Items',
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
                                <th class="col-md-2">Product Name</th>
                                <th class="col-md-2">Barcode</th>
                                <th class="col-md-2">Category</th>
                                <th class="col-md-1">Batch Qty</th>
                                <th class="col-md-2">Expire Date</th>
                                <th class="col-md-4">Actions</th>
                            </tr>
                            </thead>
                            @foreach ($inventory as $batch)
                                <tr>
                                    <td>{{ $batch->product->name }}</td>
                                    <td>{{ $batch->barcode() }}</td>
                                    <td>{{ $batch->product->categoryName() }}</td>
                                    <td>{{ $batch->quantity  }}</td>
                                    <td>{{ $batch->expirationDate()->format('d-m-Y') }}</td>
                                    <td>
                                    @if($batch->offer)
                                        <div class="alert alert-success alert-sm col-sm-6">
                                            {{$batch->offer->discount_percentage}}% Discounted
                                        </div>
                                        <div class="col-sm-5">
                                            <a class="btn btn-sm btn-warning"
                                               href="/update-offer-form?batch_id={{ $batch->id }}">Update offer</a>
                                        </div>

                                    @else
                                        <a class="btn btn-sm btn-success"
                                           href="/create-offer-form?batch_id={{ $batch->id }}">Create offer</a>
                                    @endif
                                    </td>
                                </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <pre>
    </pre>
@endsection
