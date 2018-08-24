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
                                <th>Product Name</th>
                                <th>Barcode</th>
                                <th>Category</th>
                                <th>Batch Qty</th>
                                <th>Expire Date</th>
                                <th>Actions</th>
                            </tr>
                            </thead>
                            @foreach ($inventory as $batch)
                                <tr>
                                    <td>{{ $batch->product->name }}</td>
                                    <td>{{ $batch->barcode() }}</td>
                                    <td>{{ $batch->product->categoryName() }}</td>
                                    <td>{{ $batch->quantity  }}</td>
                                    <td>{{ $batch->expirationDate()->format('d-m-Y') }}</td>
                                    <td><a class="btn btn-sm btn-success"
                                           href="/create-offer-form?batch_id={{ $batch->id }}">Create offer</a></td>
                                </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
