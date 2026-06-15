<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ACT 1.1: GET</title>
</head>
<body>

<form action="form1.php" method="get">
First Name: <input type="text" name="fname" required><br><br>
Middle Name: <input type="text" name="mname" required><br><br>
Last Name: <input type="text" name="lname" required><br><br>
Date of Birth: <input type="text" name="date" required><br><br>
Address: <input type="text" name="address" required><br><br>

<input type="submit"><br><br>

<?php
$fname = $_GET["fname"];
if(!preg_match("/^[a-zA-Z\s\.]+$/", $fname)){
    echo "Name should only contain letters and spaces.";
    echo "<br>";
}
else {
    echo "First Name: " . $fname . "<br>";
}

$mname = $_GET["mname"];
if(!preg_match("/^[a-zA-Z\s\.]+$/", $mname)){
    echo "Name should only contain letters and spaces.";
    echo "<br>";
}
else {
    echo "Middle Name: " . $mname . "<br>";
}

$lname = $_GET["lname"];
if(!preg_match("/^[a-zA-Z\s\.]+$/", $lname)){
    echo "Name should only contain letters and spaces.";
    echo "<br>";
}
else {
    echo "Last Name: " . $lname . "<br>";
}

$date = $_GET["date"];
if(!preg_match("/[a-zA-Z\s\.\/\,][0-9]/", $date)){
    echo "date should only contain letters, spaces, and numbers.";
    echo "<br>";
}
else {
    echo "Date of Birth: " . $date . "<br>";
}

$address = $_GET["address"];
if(!preg_match("/^[a-zA-Z\s\.\,\#]+$/", $address)){
    echo "Address should only contain letters, spaces, numbers, period, comma, and hash symbol.";
    echo "<br>";
}
else {
    echo "Address: " . $address . "<br>";
}
?>

<?php
if(empty ($fname) || empty($mname) || empty($lname) || empty($date) || empty($address)) {
    echo "Please fill in the fields.";
}

?>

</form>
</body>
</html>