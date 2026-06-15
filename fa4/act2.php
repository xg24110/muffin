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
            $list = array (
                    "Adrian", "Bianca", "Caleb", "Daniela", "Ethan", 
                    "Fiona", "Gabriel", "Hannah", "Ivan", "Jasmine",  
                    "Kevin", "Liza", "Marcus", "Nicole", "Oliver",  
                    "Paula", "Quentin", "Rachel", "Samuel", "Teresa"
                );

            $results = [];
            foreach ($list as $name){
                $results[] = [
                    "Name" => $name,
                    "Number of Characters" => $len = strlen($name),
                    "Uppercase First Character" => $up = ucfirst($name),
                    "Replace Vowels with @" => $vow =  str_ireplace(
                        ["a", "e", "i", "o", "u"], "@",  $name
                    ),
                    "Check Position of Character 'a'" => $pos = stripos(($name), "a"),
                    "Reverse Name" => $rev = strrev($name)
                ];
            }

            echo "<tr><th colspan = '6'> List of Names </th></tr>";

            echo "<tr>
                <th>Name</th>
                <th>Number of Characters</th>
                <th>Uppercase First Character</th>
                <th>Replace Vowels with @</th>
                <th>Check Position of Character 'a'</th>
                <th>Reverse Name</th>
            </tr>";
            
            foreach ($results as $data){
                echo "<tr>";
                echo "<td>" . $data["Name"] . "</td>";
                echo "<td>" . $data["Number of Characters"] . "</td>";
                echo "<td>"  . $data["Uppercase First Character"] . "</td>";
                echo "<td>" . $data["Replace Vowels with @"] . "</td>";
                echo "<td>" . $data["Check Position of Character 'a'"] . "</td>";
                echo "<td>" . $data["Reverse Name"] . "</td>";
                echo "</tr>";
            }
        ?>
    </table>
</body>
</html>