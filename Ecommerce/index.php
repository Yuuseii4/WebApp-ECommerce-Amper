<?php
include 'database.php';

// delete
if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    $conn->query("DELETE FROM items WHERE id=$id") or die($conn->error);
    header("Location: index.php");
}

// Fetch data
$result = $conn->query("SELECT * FROM items") or die($conn->error);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Item List</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

<h1>Item List</h1>
<a href="form.php">Add New Item</a>
<table border="1">
    <tr>
        <th>Name</th>
        <th>Description</th>
        <th>Price</th>
        <th>Actions</th>
    </tr>
    <?php while($row = $result->fetch_assoc()): ?>
    <tr>
        <td><?php echo $row['name']; ?></td>
        <td><?php echo $row['description']; ?></td>
        <td><?php echo $row['price']; ?></td>
        <td>
            <a href="edit.php?edit=<?php echo $row['id']; ?>">Edit</a>
            <a href="index.php?delete=<?php echo $row['id']; ?>" onclick="return confirm('Are you sure?')">Delete</a>
        </td>
    </tr>
    <?php endwhile; ?>
</table>

</body>
</html>
