<?php 
require ('db.php');

if(!$conn){
    echo"Unsuccessful connection";
}

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $dname = mysqli_real_escape_string($conn, $_POST["name"]);
    $dbreed = mysqli_real_escape_string($conn, $_POST["breed"]); 
    $dage = (int)mysqli_real_escape_string($conn, $_POST["age"]);
    $dadd = mysqli_real_escape_string($conn, $_POST["address"]);
    $dcol = mysqli_real_escape_string($conn, $_POST["color"]);
    $dh = (int)mysqli_real_escape_string($conn, $_POST["height"]);
    $dw = (int)mysqli_real_escape_string($conn, $_POST["weight"]);
}

$ins = "INSERT INTO registration_records (name, breed, age, address, color, height, weight)

VALUES ('$dname', '$dbreed', '$dage', '$dadd', '$dcol', '$dh', '$dw')";

mysqli_query($conn, $ins);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

    <title>Dog Registration</title>
</head>
<body>
    <div style="margin: 20px;" align="center">
        <h1 align="center" style="font-weight:bold">DOG REGISTRATION FORM</h1>
        <form align="center"action="record.php" method="POST">
            Name:<br><input type="text" name="name" required>
            <br>
            <br>
            Breed:<br><input type="text" name="breed" required> 
            <br>
            <br>
            Age: <br><input type="number" name="age" required> 
            <br>
            <br>
            Address: <br><input type="text" name="address" required> 
            <br>
            <br>
            Color: <br><input type="text" name="color" required> 
            <br>
            <br>
            Height (in ft): <br><input type="number" name="height" required> 
            <br>
            <br>
            Weight (in kg): <br><input type="number" name="weight" required> 
            <br>
            <br>
            <input type="submit" name="submit" value="Save Record">
        </form>
    </div>
</body>
</html>