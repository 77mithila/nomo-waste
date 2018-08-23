<form action="/add-batch" method="post">
    <label>
        Quantity
        <input name="quantity" type="number" required="required" />
    </label>
    <br>

    <label>
        Expiration Date
        <input name="name" type="text" pattern="[0-9]{4}-[0-9]{2}-[0-9]{2}" required="required">
    </label>
    <br>
    <br>
    @csrf
    <input type="hidden" name="product_id" value="{{ $product_id }}" />

    <input type="submit" value="add">

</form>