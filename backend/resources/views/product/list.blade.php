
@foreach ($products as $product)
    <div>
        {{ $product->name }} ({{ $product->category_id }})
        <a href="/add-batch-form?product_id={{ $product->id }}">Add batch</a>
    </div>
@endforeach
