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

            function cube($num1){
                return $num1*$num1*$num1;
            }

            function cuboid($num1, $num2, $num3){
                return $num1*$num2*$num3;
            }

            function cylinder($num1, $num2){
                return 3.14*$num1*$num1*$num2;
            }

            function cone($num1, $num2){
                return 3.14*$num1*$num1*($num2/3);
            }

            function sphere($num1){
                return (4/3)*3.14*$num1*$num1*$num1;
            }

        $cube = cube(3);
        $cuboid = cuboid(1,2,3);
        $cylinder = cylinder(4,5);
        $cone = cone(6,7);
        $sphere = sphere(8);
        ?>

        <tr>
            <th colspan = "4">Volume of Shapes</th>
        </tr>
        <tr>
            <th>Shapes</th>
            <th>Values</th>
            <th>Formula</th>
            <th>Answer</th>
        </tr>
        <tr>
            <td>Cube</td>
            <td>a = 3</td>
            <td>V=a<sup>3</sup></td>
            <td><?php echo $cube ?></td>
        </tr>
        <tr>
            <td>Right Rectangular Prism</td>
            <td>l = 1, w = 2, h = 3</td>
            <td>V=lwh</sup></td>
            <td><?php echo $cuboid?></td>
        </tr>
        <tr>
            <td>Cylinder</td>
            <td>r = 4, h = 5</td>
            <td>V=πr<sup>2</sup>h</td>
            <td><?php echo $cylinder?></td>
        </tr>
        <tr>
            <td>Cone</td>
            <td>r = 6, h = 7</td>
            <td>V=πr<sup>2</sup>h/3</td>
            <td><?php echo $cone?></td>
        </tr>
        <tr>
            <td>Sphere</td>
            <td>r = 8</td>
            <td>V=4/3πr<sup>3</sup></td>
            <td><?php echo $sphere?></td>
        </tr>
    </table>
</body>
</html>