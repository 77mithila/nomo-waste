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


@foreach ($products as $product)
    <div>
        {{ $product->name }} ({{ $product->categoryName() }})
        <a href="/add-batch-form?product_id={{ $product->id }}">Add batch</a>
    </div>
@endforeach

@endsection