<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ACT 3</title>
    <style>
        table {
            border-collapse: collapse;
            width: 70%;
            margin: 20px auto;
        }
        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: center;
            align-items: center;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <table>
        <?php

            function calculate($num1, $num2, $num3){
                return [
                    'sum' => $num1 + $num2 + $num3,
                    'diff' => $num1 - $num2 - $num3,
                    'pro' => $num1*$num2*$num3,
                    'quo' => $num1/$num2/$num3,
                ];
            }
            $num1 = 25;
            $num2 = 13;
            $num3 = 6;

            $result = calculate($num1, $num2, $num3);

            $sum = $result ['sum'];
            $diff = $result ['diff'];
            $pro = $result ['pro'];
            $quo = $result ['quo'];
        ?>

        <tr>
            <th colspan = "2"> Array List: <?php echo $num1?>, <?php echo $num2?>, <?php echo $num3?></th>
        </tr>
        <tr>
            <td>Addition</td>
            <td><?php echo $sum ?></td>
        </tr>
        <tr>
            <td>Subtraction</td>
            <td><?php echo $diff ?></td>
        </tr>
        <tr>
            <td>Multiplication</td>
            <td><?php echo $pro ?></td>
        </tr>
        <tr>
            <td>Division</td>
            <td><?php echo $quo ?></td>
        </tr>
    </table>
</body>
</html>