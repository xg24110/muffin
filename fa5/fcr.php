<?php
    $color = [];
    if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['colors'])) {
        $color = $_GET['colors'];
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ACT 3: Results</title>
    <link rel="stylesheet" href="fc.css">
</head>
<body>

<h1>YOUR FAVORITE COLORS ARE:</h1>

<li style="color: <?php echo $color[0]; ?>">Color <b><?php echo strtoupper($color[0]); ?></b></li>
<li style="color: <?php echo $color[1]; ?>">Color <b><?php echo strtoupper($color[1]); ?></b></li>
<li style="color: <?php echo $color[2]; ?>">Color <b><?php echo strtoupper($color[2]); ?></b></li>
<li style="color: <?php echo $color[3]; ?>">Color <b><?php echo strtoupper($color[3]); ?></b></li>
<li style="color: <?php echo $color[4]; ?>">Color <b><?php echo strtoupper($color[4]); ?></b></li>
</body>
</html>