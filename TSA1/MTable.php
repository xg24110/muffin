<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multiplication Table</title>
    <link rel="stylesheet" href="MTable.css">
</head>
<body>
    <h1><center>🎀 MULTIPLICATION TABLE 🎀</center></h1>
    <div class = "container">
        <?php
            for ($i = 0; $i <= 10; $i++) {
                for ($j = 0; $j <= 10; $j++) {
                    $val = ($i * $j);
                    $color = ($i + $j) % 2 == 0 ? 'dark' : 'light';
                    echo "<div class='cell $color'>$val</div>";
                } 
            }
            
        ?>
    </div>
</body>
</html>