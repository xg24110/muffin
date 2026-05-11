<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Registration Form</title>
    <link rel="stylesheet" href="RegForm.css">
</head>
<body>
    <h1><center>COLLEGE STUDENT REGISTRATION FORM</center></h1>
    <div class="container">
        <form action="RegForm.php" method="post">
            <h2>Personal Information</h2>
            <label for="fname">First Name:</label><br>
            <input type="text" id="fname" name="fname" required>

            <br>
            <br>

            <label for="minitial">Middle Initial:</label><br>
            <input type="text" id="minitial" name="minitial" maxlength="1">

            <br>
            <br>

            <label for="lname">Last Name:</label><br>
            <input type="text" id="lname" name="lname" required>
 
            <br>
            <br>

            <label for="sex">Sex:</label><br>

            <input type="radio" id="male" name="sex" value="Male" required>
            <label for="male">Male</label><br>
            
            <input type="radio" id="female" name="sex" value="Female" required>
            <label for="female">Female</label>

            <br>
            <br>

            <label for="age">Age:</label><br>
            <input type="number" id="age" name="age" maxlength="2" required>

            <br>
            <br>

            <label for="birthday">Birthday:</label><br>
            <input type="date" id="birthday" name="birthday" required>

            <br>
            <br>

            <label for="email">Email:</label><br>
            <input type="email" id="email" name="email" required>

            <br>
            <br>

            <label for="phone">Phone Number:</label><br>
            <input type="number" id="phone" name="phone" maxlength="10" required>

            <br>

            <h2>Educational Background</h2>
            <label for="school">Senior High School:</label><br>
            <input type="text" id="school" name="school" required>

            <br>
            <br>

            <label for="year">Year Graduated:</label><br>
            <input type="text" id="year" name="year" maxlength="4" required>
            
            <br>
            <br>

            <label for="program">Chosen Program:</label><br>
            <input type="text" id="program" name="program" required>
            <br>
            <br>

            <input type="submit" value="Submit">
        </form>
    </div>

  
    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") { 
            echo '<div class="output">';

            $fname = $_POST['fname'];
            $minitial = $_POST['minitial'];   
            $lname = $_POST['lname'];
            $sex = $_POST['sex'];
            $age = $_POST['age'];
            $birthday = $_POST['birthday'];
            $email = $_POST['email'];
            $phone = $_POST['phone'];
            $school = $_POST['school'];
            $year = $_POST['year'];
            $program = $_POST['program'];

            echo '<h2><center>SUBMITTED REGISTRATION DETAILS</center></h2>';
            echo "<b>Status: </b>" . "Registered";
            echo "<br>";
            echo "<br>";
            echo "<b>Full Name: </b>" . $fname. " " . $minitial. ". " . $lname;
            echo "<br>";
            echo "<b>Sex: </b>" . $sex;
            echo "<br>";
            echo "<b>Age: </b>" . $age;
            echo "<br>";
            echo "<b>Birthday: </b>" . $birthday;
            echo "<br>";
            echo "<b>Email: </b>" . $email;
            echo "<br>";
            echo "<b>Phone Number: </b>" . $phone;
            echo "<br>";
            echo "<b>Senior High School: </b>" . $school;
            echo "<br>";
            echo "<b>Year Graduated: </b>" . $year;
            echo "<br>";
            echo "<b>Chosen Program: </b>" . $program;
            echo "<br>";
            echo "<br>";
            echo "Don't forget to check your email for more updates regarding your application!";
        }
    ?>
</body>

</body>
</html>