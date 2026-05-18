<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ACT 2</title>
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
            $sum = 0;
            $diff = 0;
            $pro = 1;
            $quo = 1;

            $list = array (1,2,3,4,5,6,7,8,9,10);
            foreach ($list as $num){
                $sum += $num;
                $diff -= $num;
                $pro *= $num;
                $quo /= $num;
            }
        ?>

        <tr>
            <th colspan = "2"> Array List: 1, 2, 3, 4, 5, 6, 7, 8, 9, 10</th>
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