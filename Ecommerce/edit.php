<!DOCTYPE html>
<html>
<head>
    <title>Edit item</title>
</head>
<body>

<h1>Edit item</h1>

<?php
    if ($_SERVER["REQUEST_METHOD"] === "POST"){
        $id = htmlspecialchars($_POST["id"]);
    
        $sql = "SELECT * FROM items WHERE id = $id";
$results = $conn -> query($sql);
?>

<?php
foreach ($results as $result) { ?>
<form action="update.php" method="POST">
    <input style="display: none;" name="id" value="<?php echo $id?>">
    <div class="input-group mb-3">
        <span class="input-group-text" id="inputGroup-sizing-default">NAME</span>
        <input type="text" class="form-control" name="name" id="name" value="<?php echo $result["name"]; ?>">
    </div>
    <div class="input-group mb-3">
        <span class="input-group-text" id="inputGroup-sizing-default">DESCRIPTION</span>
        <input type="text" class="form-control" name="description" id="description" value="<?php echo $result["description"]; ?>">
    </div>
    <div class="input-group mb-3">
        <span class="input-group-text" id="inputGroup-sizing-default">PRICE</span>
        <input type="number" class="form-control" name="price" id="price" value="<?php echo $result["price"]; ?>">
    </div>
    
    <button class="btn btn-success" type="submit">SUBMIT</button>

</form>

<?php }
} ?>

