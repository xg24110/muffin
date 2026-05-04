<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Portfolio</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>
    <?php
        //general information
        $name = "XIARLOTTE JENELLE G. CAÑARES";
        $ocptn = "Student";
        $course = "BS Information Technology Specializing in Cybersecurity";
        
        //skills
        $skill1 = "Python";
        $skill2 = "Java";
        $skill3 = "Networking";
        $skill4 = "Database Management";
        $skill5 = "HTML";

        //education
        $hs = "University of Perpetual Help System DALTA";
        $college = "Far Eastern Univerisity - Institute of Technology";

        //certifications
        $cert1 = "IT Specialist - Databases";
        $cert2 = "IT Specialist - Python";

        //interest
        $int1 = "Reading";
        $int2 = "Problem Solving";
        $int3 = "Research";

        //contacts
        $email = "exemail@gmail.com";
        $no = "09123456789";
    ?>

    <header>
        <h1><?php echo "$name";?></h1>
        <p><?php echo "<center>$ocptn in $course</center>" ;?></p>
    </header>
    
    <section>
        <div class = "rectangle">
            <h2>SKILLS</h2>
        </div>
        <ul>
            <li><?php echo $skill1; ?></li>
            <li><?php echo $skill2; ?></li>
            <li><?php echo $skill3; ?></li>
            <li><?php echo $skill4; ?></li>
            <li><?php echo $skill5; ?></li>
        </ul>
    </section>

    <section>
        <div class = "rectangle">
            <h2>CERTIFICATIONS</h2>
        </div>
        <ul>
            <li><?php echo $cert1; ?></li>
            <li><?php echo $cert2; ?></li>
        </ul>
    </section>

    <section>
        <div class = "rectangle">
            <h2>EDUCATION</h2>
        </div>
        <ul>
            <li><?php echo $hs; ?></li>
            <li><?php echo $college; ?></li>
        </ul>
    </section>

    <section>
        <div class = "rectangle">
            <h2>INTERESTS</h2>
        </div>
        <ul>
            <li><?php echo $int1; ?></li>
            <li><?php echo $int2; ?></li>
            <li><?php echo $int3; ?></li>
        </ul>
    </section>

    <footer>
        <p><?php echo "<center><strong>Email:</strong> $email | <strong>Contact No.:</strong> $no</center>"; ?></p>
    </footer>
</body>
</html>