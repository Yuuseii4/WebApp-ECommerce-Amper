<?php
include 'database.php';

if ($_SERVER["REQUEST_METHOD"] === "POST") {
$id = $_POST['id'];
$result = $conn->query("SELECT * FROM items WHERE id=$id");

if ($result->num_rows == 1) {
    $row = $result->fetch_assoc();
    $name = $row['name'];
    $description = $row['description'];
    $price = $row['price'];
} else {
    echo "No record found with id $id";
}
}
?>
