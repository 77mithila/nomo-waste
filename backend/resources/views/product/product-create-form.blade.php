<form action="/create-product" method="post">

    <label>Barcode No</label>
    <input name="barcode" type="text">
    <br>
    <label>Product Name</label>
    <input name="name" type="text">
    <br>
    <label>Category</label>
    <select name="categoryId">
        <option value="0">Select</option>
        <option value="1">Beverages</option>
        <option value="2">Bread / Bakery</option>
        <option value="2">Canned / Jarred</option>
        <option value="2">Dairy</option>
        <option value="2">Dray / Baking</option>
        <option value="2">Frozen</option>
        <option value="2">Fresh Meat</option>
        <option value="2">Produce</option>
        <option value="2">Cleaners</option>
        <option value="2">Paper Goods</option>
        <option value="2">Personal Care</option>
        <option value="2">Other</option>
    </select>
    <br>
    @csrf
    <input type="submit">

</form>