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
        img{
            width: 200px;
            height: 200px;
        }
    </style>    
</head>
<body>
    <table>
        <tr>
            <th><img src="https://bluemoji.io/cdn-proxy/646218c67da47160c64a84d5/66b3e9c4ccde70cabd69cb17_56.png"></th>
            <th><?php require 'PI.php'?></th>
        </tr>
        <tr>
            <td colspan="2"><?php include 'CO.php'?></td>
        </tr>
        <tr>
            <td colspan="2"><?php require 'EA.php'?></td>
        </tr>
        <tr>
            <td colspan="2"><?php require 'SK.php'?></td>
        </tr>
        <tr>
            <td colspan="2"><?php include 'AF.php'?></td>
        </tr>
        <tr>
            <td colspan="2"><?php include 'WE.php'?></td>
        </tr>
    </table>
</body>
</html>