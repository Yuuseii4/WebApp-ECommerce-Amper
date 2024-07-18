<?php
include 'database.php';

// Initialize variables
$name = "";
$description = "";
$price = "";
$update = false;
$id = 0;

// Handle edit
if (isset($_POST['edit'])) {
    $id = $_POST['edit'];
    $update = true;
    $result = $conn->query("UPDATE items SET name='$name', description='$description', price='$price' WHERE id=$id") ;
    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
        $name = $row['name'];
        $description = $row['description'];
        $price = $row['price'];
    }
}

// Handle form submission
if (isset($_POST['save'])) {
    $name = $_POST['name'];
    $description = $_POST['description'];
    $price = $_POST['price'];
    $conn->query("INSERT INTO items (name, description, price) VALUES ('$name', '$description', '$price')");
    header("Location: index.php");
} elseif (isset($_POST['update'])) {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $description = $_POST['description'];
    $price = $_POST['price'];
    $conn->query("UPDATE items SET name='$name', description='$description', price='$price' WHERE id=$id");
    header("Location: index.php");
}
?>



<!DOCTYPE html>
<html>
<head>
    <title>Items Form</title>
</head>
<body>

<h1><?php echo $update ? 'Edit' : 'Add'; ?> Items</h1>

<?php
include 'database.php';

// $sql = "SELECT 'id', 'name', 'description', 'price' FROM items";
// $result = $conn->query($sql);

// foreach ($result as $result) {
//     echo "<tr>";
//     echo "<td>" . $result['id'] . '</td>';
//     echo "<td>" . $result['name'] . '</td>';
//     echo "<td>" . $result['description'] . '</td>';
//     echo "<td>" . $result['price'] . '</td>';
//     echo '</tr>';
// }



// ?>



<form action="form.php" method="post">
    <input type="hidden" name="id" value="<?php echo $id; ?>">
    <div>
        <label>Name</label>
        <input type="text" name="name" value="<?php echo $name; ?>" required>
    </div>
    <div>
        <label>Description</label>
        <textarea name="description" required><?php echo $description; ?></textarea>
    </div>
    <div>
        <label>Price</label>
        <input type="number" name="price" value="<?php echo $price; ?>" required>
    </div>
    <div>
        <?php if ($update): ?>
            <button type="submit" name="update">Update</button>
        <?php else: ?>
            <button type="submit" name="save">Save</button>
        <?php endif; ?>
    </div>
</form>

</body>
</html>
