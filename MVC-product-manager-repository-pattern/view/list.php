<h2>List Product</h2>
<a href="./index.php?page=add">Add Product</a>
<table class="table table-striped">
    <thead>
    <tr>
        <th>STT</th>
        <th>Name</th>
        <th>Price</th>
        <th>Quantity</th>
        <th>Desciption</th>
        <th>Edit</th>
        <th>Delete</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($products as $key => $product): ?>
    <tr>
        <td><?php echo ++$key ?></td>
        <td><a href="index.php?page=show&id=<?php echo $product->id ?>"><?php echo $product->name ?></a></td>
        <td><?php echo $product->price ?></td>
        <td><?php echo $product->quantity ?></td>
        <td><?php echo $product->description ?></td>
        <td><a href="./index.php?page=edit&id=<?php echo $product->id ?>">Edit</a></td>
        <td><a class="text-danger" href="./index.php?page=delete&id=<?php echo $product->id ?>">Delete</a></td>
    </tr>
    </tbody>
    <?php endforeach; ?>
</table>
