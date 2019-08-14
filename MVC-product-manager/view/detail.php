<h2>Show Product</h2>
<form method="post" action="./index.php?page=edit">
    <input type="hidden" name="id" value="<?php echo $product->id; ?>"/>
    <div class="form-group">
        <label>Name</label>
        <input type="text" class="form-control" name="name" value="<?php echo $product->name; ?>" required>
    </div>
    <div class="form-group">
        <label>Price</label>
        <input type="text" class="form-control" name="price" value="<?php echo $product->price; ?>"  required>
    </div>
    <div class="form-group">
        <label>Quantity</label>
        <input type="text" class="form-control" name="quantity" value="<?php echo $product->quantity; ?>" required>
    </div>
    <div class="form-group">
        <label>Description</label>
        <textarea type="text" class="form-control" name="description"  required> <?php echo $product->description; ?></textarea>
    </div>
    <button type="submit" class="btn btn-danger" onclick="window.history.go(-1); return false;">Back</button>
</form>
