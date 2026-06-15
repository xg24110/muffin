<?php
session_start();
    if ($_SERVER["REQUEST_METHOD"] == "POST") { 
        $fname = $_POST['fname'];  
        $lname = $_POST['lname'];
        $email = $_POST['email'];

        setcookie("fname", $fname, time()+10, "/");
        setcookie("lname", $lname, time()+20, "/");
        setcookie("email", $email, time()+30, "/");

        $_COOKIE['fname'] = $fname;
        $_COOKIE['lname'] = $lname;
        $_COOKIE['email'] = $email;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ACT 2: Cookies</title>
    <link rel="stylesheet" href="cookies.css">
</head>
<body>
    <h1><center>REGISTRATION FORM</center></h1>
    <form action="cookies.php" method="post">
        <label for="fname">First Name:</label><br>
        <input type="text" id="fname" name="fname" required>

        <br>
        <br>

        <label for="lname">Last Name:</label><br>
        <input type="text" id="lname" name="lname" required>

        <br>
        <br>

        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email" required>

        <br>
        <br>

        <input type="submit" value="Submit">
    </form>

    <h1><center>SUBMITTED REGISTRATION DETAILS</center></h1>

    <h3>First Name: <?php echo isset ($_COOKIE["fname"]) ? $_COOKIE["fname"] : "No existing first name in cookie."; ?></h3>
    <h3>Last Name: <?php echo isset ($_COOKIE["lname"]) ? $_COOKIE["lname"] : "No existing last name in cookie."; ?></h3>
    <h3>Email: <?php echo isset ($_COOKIE["email"]) ? $_COOKIE["email"] : "No existing email in cookie."; ?></h3>


</body>
</html>