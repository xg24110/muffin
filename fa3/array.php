<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ACT 1</title>
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
        <tr>
            <th>No.</th>
            <th>Name</th>
            <th>Image</th>
            <th>Age</th>
            <th>Birthday</th>
            <th>Contact Number</th>
        </tr>
    <?php
        $clist[] = array(
            "No." => "0051",
            "Name" => "Kim Dokja",
            "Image" => "https://bluemoji.io/cdn-proxy/646218c67da47160c64a84d5/66b3eb826bc6e984281381bc_20.png",
            "Age" => "28",
            "Birthday" => "February 15",
            "Contact Number" => "09123456789"
        );
        $clist[] = array(
            "No." => "1864",
            "Name" => "Yoo Joonghyuk",
            "Image" => "https://bluemoji.io/cdn-proxy/646218c67da47160c64a84d5/66b3eb826bc6e984281381bc_20.png",
            "Age" => "28",
            "Birthday" => "August 3",
            "Contact Number" => "09012345678"
        );
        $clist[] = array(
            "No." => "0002",
            "Name" => "Cale Henituse",
            "Image" => "https://bluemoji.io/cdn-proxy/646218c67da47160c64a84d5/66b3eb826bc6e984281381bc_20.png",
            "Age" => "36",
            "Birthday" => "n/a",
            "Contact Number" => "09011234567"
        );
        $clist[] = array(
            "No." => "3355",
            "Name" => "Khaslana 'Phainon'",
            "Image" => "https://bluemoji.io/cdn-proxy/646218c67da47160c64a84d5/66b3eb826bc6e984281381bc_20.png",
            "Age" => "25",
            "Birthday" => "n/a",
            "Contact Number" => "09012123456"
        );
        $clist[] = array(
            "No." => "0001",
            "Name" => "Stelle",
            "Image" => "https://bluemoji.io/cdn-proxy/646218c67da47160c64a84d5/66b3eb826bc6e984281381bc_20.png",
            "Age" => "n/a",
            "Birthday" => "n/a",
            "Contact Number" => "09012312345"
        );
        $clist[] = array(
            "No." => "1000",
            "Name" => "Frieren",
            "Image" => "https://bluemoji.io/cdn-proxy/646218c67da47160c64a84d5/66b3eb826bc6e984281381bc_20.png",
            "Age" => "n/a",
            "Birthday" => "n/a",
            "Contact Number" => "09012341234"
        );
        $clist[] = array(
            "No." => "0050",
            "Name" => "Himmel",
            "Image" => "https://bluemoji.io/cdn-proxy/646218c67da47160c64a84d5/66b3eb826bc6e984281381bc_20.png",
            "Age" => "24",
            "Birthday" => "n/a",
            "Contact Number" => "09012345123"
        );
        $clist[] = array(
            "No." => "0010",
            "Name" => "Hinata Shouo",
            "Image" => "https://bluemoji.io/cdn-proxy/646218c67da47160c64a84d5/66b3eb826bc6e984281381bc_20.png",
            "Age" => "16",
            "Birthday" => "June 21, 1996",
            "Contact Number" => "09012345612"
        );
        $clist[] = array(
            "No." => "0009",
            "Name" => "Kageyama Tobio",
            "Image" => "https://bluemoji.io/cdn-proxy/646218c67da47160c64a84d5/66b3eb826bc6e984281381bc_20.png",
            "Age" => "15",
            "Birthday" => "December 22, 1996",
            "Contact Number" => "09012345671"
        );
        $clist[] = array(
            "No." => "0000",
            "Name" => "Ichi",
            "Image" => "https://bluemoji.io/cdn-proxy/646218c67da47160c64a84d5/66b3eb826bc6e984281381bc_20.png",
            "Age" => "n/a",
            "Birthday" => "n/a",
            "Contact Number" => "09012345678"
        );

        usort($clist, function($a, $b) {
            return strcmp($a['Name'], $b['Name']);
        });

        foreach ($clist as $client) {
            echo "<tr>";
            echo "<td>" . $client['No.'] . "</td>";
            echo "<td>" . $client['Name'] . "</td>";
            echo "<td><img src='" . $client['Image'] . "' alt='" . $client['Name'] . "' width='50'></td>";
            echo "<td>" . $client['Age'] . "</td>";
            echo "<td>" . $client['Birthday'] . "</td>";
            echo "<td>" . $client['Contact Number'] . "</td>";
            echo "</tr>";
        }

    ?>
    </table>
</body>
</html>