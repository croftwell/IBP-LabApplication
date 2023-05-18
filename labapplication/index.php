<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Lab Application</title>
</head>
<body>

    <form action="index.php" method="post">
        <label> First Name: </label><br>
        <input type="text" name="firstname" required><br>

        <label> Last Name: </label><br>
        <input type="text" name="lastname" required><br>

        <label> E-posta: </label><br>
        <input type="email" name="email" required ><br>


        <label> Gender: </label><br>
        <input type="radio" name="gender" value="male">
        <label> Male</label><br>
        <input type="radio" name="gender" value="female">
        <label> Female </label><br><br>

        <input type="submit" name="submit" value="Submit This Form">
    </form>

  
<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = 'labapplication';

// Create connection
    $conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
    if (!$conn) {
        die("Connection failed: " .mysqli_connect_error());
}
 

    if (isset($_POST["submit"])) { 
        $firstname = $_POST["firstname"];
        $lastname = $_POST["lastname"];
        $email = $_POST["email"];
        $gender = $_POST["gender"];

        
        $sql = "INSERT INTO studentslab (firstname, lastname, email, gender) VALUES ('$firstname', '$lastname', '$email', '$gender')";

        if (mysqli_query($conn, $sql)) {
            echo "Record inserted successfully.";
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
    }

    mysqli_close($conn); 
?>


</body>
</html>