<form action="deduct-inventory" method="post">
    <label>Barcode</label>
    <input name="barcode" type="number" required>
    <label>Quantity</label>
    <input name="quantity" type="number" required>
    <br>
    <input type="submit" value="Done">
    @csrf
</form>

