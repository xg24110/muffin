<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Activit 1</title>

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
            background-color: #ffff00;
            text-align: center;
        }
    </style>
</head>
<body>
    <div style="display: flex; align-items: center; width: 90%; margin: 20px auto;">
        <h1 style="text-align: left; color: #5f5fff; flex: 1; font-size: 50px;">MEASURE CONVERSION CHART - LENGTHS (UK)</h1> 
        <img src="https://bluemoji.io/cdn-proxy/646218c67da47160c64a84d5/66b3e7fc9f59c5196c44f24f_66.png" width="200" height="auto" style="display: block; margin-left: 10px;">
    </div>

    <?php
        //metric
        $cm_to_mm = 10;
        $dm_to_cm = 10;
        $m_to_cm = 100;
        $km_to_m = 1000;

        //imperial
        $ft_to_in = 12;
        $yd_to_ft = 3;
        $ch_to_yd = 22;
        $fur_to_yd = 220;
        $mi_to_yd = 1760;

        //metric to imperial
        $mm_to_in = 0.03937;
        $cm_to_in = 0.39370;
        $m_to_in = 39.37008;
        $m_to_ft = 3.28084;
        $m_to_yd = 1.0936133;
        $km_to_yd = 1093.6133;
        $km_to_mi = 0.621371;

        //imperial to metric
        $in_to_cm = 2.54;
        $ft_to_cm = 30.48;
        $yd_to_cm = 91.44;
        $yd_to_m = 0.9144;
        $mi_to_m = 1609.344;
        $mi_to_km = 1.609344;
    ?>

    <table>
        <tr>
            <th colspan="6">METRIC CONVERSIONS</th>
        </tr>
        <tr>
            <td>1 centimetre</td>
            <td>=</td>
            <td><?php echo $cm_to_mm; ?> millimetres</td>
            <td>1 cm</td>
            <td>=</td>
            <td> 10 mm </td>
        </tr>
        <tr>
            <td>1 decimetre</td>
            <td>=</td>
            <td><?php echo $dm_to_cm; ?> centimetres</td>
            <td>1 dm</td>
            <td>=</td>
            <td> 10 cm </td>
        </tr>
        <tr>
            <td>1 metre</td>
            <td>=</td>
            <td><?php echo $m_to_cm; ?> centimetres</td>
            <td>1 m</td>
            <td>=</td>
            <td> 100 cm </td>
        </tr>
        <tr>
            <td>1 kilometre</td>
            <td>=</td>
            <td><?php echo $km_to_m; ?> metres</td>
            <td>1 km</td>
            <td>=</td>
            <td> 1000 m </td>
        </tr>
    </table>

    <br>

    <table>
        <tr>
            <th colspan="6">IMPERIAL CONVERSIONS</th>
        </tr>
        <tr>
            <td>1 foot</td>
            <td>=</td>
            <td><?php echo $ft_to_in; ?> inches</td>
            <td>1 ft</td>
            <td>=</td>
            <td> 12 in </td>
        </tr>
        <tr>
            <td>1 yard</td>
            <td>=</td>
            <td><?php echo $yd_to_ft; ?> feet</td>
            <td>1 yd</td>
            <td>=</td>
            <td> 3 ft </td>
        </tr>
        <tr>
            <td>1 chain</td>
            <td>=</td>
            <td><?php echo $ch_to_yd; ?> yards</td>
            <td>1 ch</td>
            <td>=</td>
            <td> 22 yd </td>
        </tr>
        <tr>
            <td>1 furlong</td>
            <td>=</td>
            <td><?php echo $fur_to_yd; ?> yards (or 10 chains)</td>
            <td>1 fur</td>
            <td>=</td>
            <td> 220 yd (or 10 ch) </td>
        </tr>
        <tr>
            <td>1 mile</td>
            <td>=</td>
            <td><?php echo $mi_to_yd; ?> yards (or 8 furlongs)</td>
            <td>1 mi</td>
            <td>=</td>
            <td> 1760 yd (or 8 fur) </td>
        </tr>
    </table>

    <br>

    <table>
        <tr>
            <th colspan="6">METRIC -> IMPERIAL CONVERSIONS</th>
        </tr>
        <tr>
            <td>1 millimetre</td>
            <td>=</td>
            <td><?php echo $mm_to_in; ?> inches</td>
            <td>1 mm</td>
            <td>=</td>
            <td> 0.03937 in </td>
        </tr>
        <tr>
            <td>1 centimetre</td>
            <td>=</td>
            <td><?php echo $cm_to_in; ?> inches</td>
            <td>1 cm</td>
            <td>=</td>
            <td> 0.39370 in </td>
        </tr>
        <tr>
            <td>1 metre</td>
            <td>=</td>
            <td><?php echo $m_to_in; ?> inches</td>
            <td>1 m</td>
            <td>=</td>
            <td> 39.37008 in </td>
        </tr>
        <tr>
            <td>1 metre</td>
            <td>=</td>
            <td><?php echo $m_to_ft; ?> feet</td>
            <td>1 m</td>
            <td>=</td>
            <td> 3.28084 ft </td>
        </tr>
        <tr>
            <td>1 metre</td> 
            <td>=</td>
            <td><?php echo $m_to_yd; ?> yards</td>
            <td>1 m</td>
            <td>=</td>
            <td> 1.0936133 yd </td>
        </tr>
        <tr>
            <td>1 kilometre</td>
            <td>=</td>
            <td><?php echo $km_to_yd; ?> yards</td>
            <td>1 km</td>
            <td>=</td>
            <td> 1093.6133 yd </td>
        </tr>
        <tr>
            <td>1 kilometre</td>
            <td>=</td>
            <td><?php echo $km_to_mi; ?> miles</td>
            <td>1 km</td>
            <td>=</td>
            <td> 0.621371 mi </td>
        </tr>
    </table>

    <br>

    <table>
        <tr>
            <th colspan="6">IMPERIAL -> METRIC CONVERSIONS</th>
        </tr>
        <tr>
            <td>1 inch</td>
            <td>=</td>
            <td><?php echo $in_to_cm; ?> centimetres</td>
            <td>1 in</td>
            <td>=</td>
            <td> 2.54 cm </td>
        </tr>
        <tr>
            <td>1 foot</td>
            <td>=</td>
            <td><?php echo $ft_to_cm; ?> centimetres</td>
            <td>1 ft</td>
            <td>=</td>
            <td> 30.48 cm </td>
        </tr>
        <tr>
            <td>1 yard</td>
            <td>=</td>
            <td><?php echo $yd_to_cm; ?> centimetres</td>
            <td>1 yd</td>
            <td>=</td>
            <td> 91.44 cm </td>
        </tr>
        <tr>
            <td>1 yard</td> 
            <td>=</td>
            <td><?php echo $yd_to_m; ?> metres</td>
            <td>1 yd</td>
            <td>=</td>
            <td> 0.9144 m </td>
        </tr>
        <tr>
            <td>1 mile</td>
            <td>=</td>
            <td><?php echo $mi_to_m; ?> metres</td>
            <td>1 mi</td>
            <td>=</td>
            <td> 1609.344 m </td>
        </tr>
        <tr>
            <td>1 mile</td>
            <td>=</td>
            <td><?php echo $mi_to_km; ?> kilometres</td>
            <td>1 mi</td>
            <td>=</td>
            <td> 1.609344 km </td>
    </table>
    <br>
    <br>
    <button onclick="window.location.href='index.php'">Back to Main Menu</button>
    <div style="display: flex; align-items: center; width: 90%; margin: 20px auto;">
        <h1 style="text-align: left; flex: 1; font-size: 25px;">&copy; Xiarlotte Jenelle G. Cañares</h1> 
        <img src="https://bluemoji.io/cdn-proxy/646218c67da47160c64a84d5/66b3e5d0c2ab246786ca1d5e_86.png" width="60" height="auto" style="display: block; margin-left: 10px;">
    </div>
</body>
</html>