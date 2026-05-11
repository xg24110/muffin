<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Registration Form</title>
</head>
<body>
    <h1><center>STUDENT REGISTRATION FORM</center></h1>
    <div>
        <form action="regform.php" method="post">
            <h2>Personal Information</h2>
            <label for="fname">First Name:</label><br>
            <input type="text" id="fname" name="fname" required><br>

            <label for="mname">Middle Name:</label><br>
            <input type="text" id="mname" name="mname"><br>

            <label for="lname">Last Name:</label><br>
            <input type="text" id="lname" name="lname" required><br>
            <br>
            <label for="sex">Sex:</label><br>

            <label for="male">Male</label><br>
            <input type="" id="male" name="male" value="1" required>
            
            <label for="female">Female</label><br>
            <input type="radio" id="female" name="female" value="0" required>
            <br>
            <label for="age">Age:</label><br>
            <input type="number" id="age" name="age" required><br>

            <label for="birthday">Birthday:</label><br>
            <input type="date" id="birthday" name="birthday" required><br>
            <br>
            <label for="email">Email:</label><br>
            <input type="email" id="email" name="email" required><br>

            <label for="phone">Phone Number:</label><br>
            <input type="number" id="phone" name="phone" required><br>
            <br>

            <h2>Educational Background</h2>
            <p><i>Please provide the name of your recent senior high school and the year you graduated.</i></p>
            <label for="school">Senior High School Name:</label><br>
            <input type="text" id="school" name="school" required><br>
            <br>
            <label for="year">Year Graduated:</label><br>
            <input type="number" id="year" name="year" required><br>
            <br>
            <input type="submit" value="Submit">
        </form>
    </div>

    <?php
        $fname = $_POST['fname'];
        $mname = $_POST['mname'];   
        $lname = $_POST['lname'];
        $male = $_POST['male'];
        $female = $_POST['female'];
        $age = $_POST['age'];
        $birthday = $_POST['birthday'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $school = $_POST['school'];
        $year = $_POST['year'];


    ?>
</body>
</html>