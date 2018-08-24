
@foreach ($products as $product)
    <div>
        {{ $product->name }} ({{ $product->categoryName() }})
        <a href="/add-batch-form?product_id={{ $product->id }}">Add batch</a>
    </div>
@endforeach
