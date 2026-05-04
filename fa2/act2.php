<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Activity 2</title>
    <style>
        table {
            border-collapse: collapse;
            width: 50%;
            margin-top: 20px;
            margin-left: auto;
            margin-right: auto;
        }
        th, td {
            border: 1px solid #000;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <header>
        <center><h1>Activity 2 - The Use of Conditional Statements</h1></center>
    </header>
    
    <!--grades-->
    <?php
        $name = "John D. Smith";
        $grade = 59;

        if($grade >= 93 && $grade <= 100){
            $rank = "A";
            $pic = "<center><img src='https://bluemoji.io/cdn-proxy/646218c67da47160c64a84d5/66b3e594607b5d1305d4f5b7_90.png' width='100' height= 'auto'></center>";
        }
        elseif($grade >= 90 && $grade <= 92){
            $rank = "A-";
            $pic = "<center><img src='https://bluemoji.io/cdn-proxy/646218c67da47160c64a84d5/66b3eb5b33090c8030cddfdb_25.png' width='100' height= 'auto'></center>";
        }
        elseif($grade >= 87 && $grade <= 89){
            $rank = "B+";
            $pic = "<center><img src='https://bluemoji.io/cdn-proxy/646218c67da47160c64a84d5/66b3ea5489be478613512121_43.png' width='100' height= 'auto'></center>";
        }
        elseif($grade >= 83 && $grade <= 86){
            $rank = "B";
            $pic = "<center><img src='https://bluemoji.io/cdn-proxy/646218c67da47160c64a84d5/66b3ebb4e15ae36942b44682_17.png' width='100' height= 'auto'></center>";

            
        }
        elseif($grade >= 80 && $grade <= 82){
            $rank = "B-";
            $pic = "<center><img src='https://bluemoji.io/cdn-proxy/646218c67da47160c64a84d5/66b3eb8b62002e43c3fa2eea_01.png' width='100' height= 'auto'></center>";
        }
        elseif($grade >= 77 && $grade <= 79){
            $rank = "C+";
            $pic = "<center><img src='https://bluemoji.io/cdn-proxy/646218c67da47160c64a84d5/66b3e9c4ccde70cabd69cb17_56.png' width='100' height= 'auto'></center>";
        }
        elseif($grade >= 73 && $grade <= 76){
            $rank = "C";
            $pic = "<center><img src='https://bluemoji.io/cdn-proxy/646218c67da47160c64a84d5/66b3ec359922e31368c2c58e_03.png' width='100' height= 'auto'></center>";
        }
        elseif($grade >= 70 && $grade <= 72){
            $rank = "C-";
            $pic = "<center><img src='https://bluemoji.io/cdn-proxy/646218c67da47160c64a84d5/66b3ec0c88ed608381463cc5_10.png' width='100' height= 'auto'></center>";
        }
        elseif($grade >= 67 && $grade <= 69){
            $rank = "D+";
            $pic = "<center><img src='https://bluemoji.io/cdn-proxy/646218c67da47160c64a84d5/66b3e615337065d6841614aa_78.png' width='100' height= 'auto'></center>";
        }
        elseif($grade >= 63 && $grade <= 66){
            $rank = "D";
            $pic = "<center><img src='https://bluemoji.io/cdn-proxy/646218c67da47160c64a84d5/66b3eba284d9bc814570814d_18.png' width='100' height= 'auto'></center>";
        }
        elseif($grade >= 60 && $grade <= 62){
            $rank = "D-";
            $pic = "<center><img src='https://bluemoji.io/cdn-proxy/646218c67da47160c64a84d5/66b3e5760608f3f68cb0b04b_93.png' width='100' height= 'auto'></center>";
        }
        else{
            $rank = "F";
            $pic = "<center><img src='https://bluemoji.io/cdn-proxy/646218c67da47160c64a84d5/671ff18d174384ea7bb16670_96.png' width='100' height= 'auto'></center>";
        }
    ?>

    <!--table format-->
    <table>
        <tr>
            <th colspan="3"><center><?php echo "Name: " . $name; ?></center></th>
        </tr>
        <tr>
            <td><?php echo "Rank: " . $rank; ?></td>
            <td><?php echo "Grade: " . $grade; ?></td>
            <td><?php echo $pic; ?></td>
        </tr>
    </table>
    <br>
    <br>
    <button onclick="window.location.href='index.php'">Back to Main Menu</button>
</body>
</html>