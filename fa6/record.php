<?php 
require ('db.php');

if(!$conn){
    echo"Unsuccessful connection";
}

$sql = "SELECT * FROM registration_records ORDER BY name";
$result = mysqli_query($conn, $sql); 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

    <title>Dog Records</title>
</head>
<body>
    <div style="margin: 20px;" align="center">
        <table style="border: 1px solid black; width: 100%">
            <th colspan="7"  style="font-weight: bold; color:#FFFFFF; background-color: #084732"><center>RECORDS<center></th>
            <tr align="center" style="border: 1px solid black">
                <th align="center" style="border: 1px solid black">NAME</th>
                <th align="center" style="border: 1px solid black">BREED</th>
                <th align="center" style="border: 1px solid black">AGE</th>
                <th align="center" style="border: 1px solid black">ADDRESS</th>
                <th align="center" style="border: 1px solid black">COLOR</th>
                <th align="center" style="border: 1px solid black">HEIGHT</th>
                <th align="center" style="border: 1px solid black">WEIGHT</th>
            </tr>
            <?php
                $counter = 1;
                while($row = mysqli_fetch_assoc($result)):
            ?>
            <tr>
                <td align="center"style="border: 1px solid black;"> <?= $row["name"] ?> </td>
                <td align="center" style="border: 1px solid black;"> <?= $row["breed"] ?> </td>
                <td align="center" style="border: 1px solid black;"> <?= $row["age"] ?> </td>
                <td align="center" style="border: 1px solid black;"> <?= $row["address"] ?> </td>
                <td align="center" style="border: 1px solid black;"> <?= $row["color"] ?> </td>
                <td align="center" style="border: 1px solid black;"> <?= $row["height"] ?> </td>
                <td align="center" style="border: 1px solid black;"> <?= $row["weight"] ?> </td>
            </tr>
            <?php 
                endwhile;
            ?>
    </div>

</body>
</html>