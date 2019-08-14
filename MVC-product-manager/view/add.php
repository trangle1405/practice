<h2>Add Product</h2>
<form method="post">
    <div class="form-group">
        <label>Name:</label>
        <input type="text" class="form-control" name="name" required >
    </div>
    <div class="form-group">
        <label>Price:</label>
        <input type="number" class="form-control" name="price" required >
    </div>
    <div class="form-group">
        <label>Quantity:</label>
        <input type="number" class="form-control" name="quantity" required>
    </div>
    <div class="form-group">
        <label >Description:</label>
        <textarea class="form-control" rows="3" id="comment" name="description" required></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
    <button type="submit" class="btn btn-danger" onclick="window.history.go(-1); return false;">Back</button>
</form>