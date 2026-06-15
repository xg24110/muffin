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
        img{
            width: 100px;
            height: 100px;
        }
    </style>
</head>
<body>
        <table>
        <tr>
            <th>Image</th>
            <th>Name</th>
            <th>Description</th>
            <th>Facts</th>
        </tr>
    <?php
        $flist = [];
        $flist[] = array(
            "Image" => "https://farmtodoorstep.co/wp-content/uploads/2021/06/apple.jpg",
            "Name" => "Apple",
            "Description" => "Color Red",
            "Facts" => "Can float in water because it has air pockets."
        );
        $flist[] = array(
            "Image" => "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ74Q5EMCELbniCM4veNdkgedcS8w7h2hwNdw&s",
            "Name" => "Banana",
            "Description" => "Color yellow",
            "Facts" => "Rich in potassium."
        );
        $flist[] = array(
            "Image" => "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTE7vXaTa7pUUjJ-1GkQ-q0Yz7YO9HE8SFrCg&s",
            "Name" => "Orange",
            "Description" => "Color orange",
            "Facts" => "Good with vitamin C."
        );
        $flist[] = array(
            "Image" => "https://static.wikia.nocookie.net/fruit/images/a/a1/Download_%286%29.jpg/revision/latest?cb=20250214145209",
            "Name" => "Grapes",
            "Description" => "Color purple",
            "Facts" => "Grows on vines."
        );
        $flist[] = array(
            "Image" => "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQcnjysIOEXJutt8w44X1hEkb99JfCcLrfgdA&s",
            "Name" => "Watermelon",
            "Description" => "Color green on the outside and red on teh inside",
            "Facts" => "Mostly made out of water."
        );
        $flist[] = array(
            "Image" => "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRiQ4xdYdgcpgYLxjNFDhrkwatXMDbnLv5f0w&s",
            "Name" => "Strawberry",
            "Description" => "Color red and small",
            "Facts" => "Have seeds on the outside."
        );
        $flist[] = array(
            "Image" => "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTwvB8-k0qCnXvO6DpypsnEspImRvWeGcojnA&s",
            "Name" => "Lemon",
            "Description" => "Color yellow and round",
            "Facts" => "Taste sour."
        );
        $flist[] = array(
            "Image" => "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQYiMYxeU7_4TfKncPshh0pH_BmsMCsF3-Cfw&s",
            "Name" => "Mango",
            "Description" => "Color orange",
            "Facts" => "Called as the 'king of fruits' in some places."
        );
        $flist[] = array(
            "Image" => "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTvXTKwBZi9OUtzZzLrcA4s51BO3L08hpaHNQ&s",
            "Name" => "Pineapple",
            "Description" => "Color brown with a spiky outside",
            "Facts" => "Takes a long time to grow."
        );
        $flist[] = array(
            "Image" => "https://cdn.britannica.com/45/126445-050-4C0FA9F6/Kiwi-fruit.jpg",
            "Name" => "Kiwi",
            "Description" => "Color brown",
            "Facts" => "Has a fuzzy skin and the inside is green."
        );

        usort($flist, function($a, $b) {
            return strcmp($a['Name'], $b['Name']);
        });

        foreach ($flist as $fruits) {
            echo "<tr>";
            echo "<td><img src='".$fruits['Image']."'</td>";
            echo "<td>" . $fruits['Name'] . "</td>";
            echo "<td>" . $fruits['Description'] . "</td>";
            echo "<td>" . $fruits['Facts'] . "</td>";
            echo "</tr>";
        }

    ?>
    </table>
</body>
</html>