<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Activity 3</title>
</head>
<body>
    <header>
        <center><h1>Activity 3 - The Use of Looping Statements</h1></center>
    </header>

    <?php
        $x = 0;
        while($x <= 99){
            printf ("%d, ", $x);
            $x++;
        }
    ?>
    <br>
    <br>
    <button onclick="window.location.href='index.php'">Back to Main Menu</button>
</body>
</html>