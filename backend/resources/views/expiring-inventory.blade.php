
<table style="width:100%;">
@foreach ($inventory as $batch)
    <tr>
        <td>{{ $batch->product->name }}</td>
        <td>{{ $batch->barcode() }}</td>
        <td>{{ $batch->product->categoryName() }}</td>
        <td>{{ $batch->quantity }}</td>
        <td>Expires: {{ $batch->expirationDate()->format('d-m-Y') }}</td>
        <td><a href="/create-offer-form?batch_id={{ $batch->id }}">Create offer</a></td>
    </tr>
@endforeach
</table>
