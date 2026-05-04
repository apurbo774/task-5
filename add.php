<?php
include 'db.php';

if(isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $reg = $_POST['registration_no'];
    $dept = $_POST['department'];
    $query = "INSERT INTO students(name,email,registration_no,department)
              VALUES('$name','$email','$reg','$dept')";

    mysqli_query($conn, $query);
    echo "Student added successfully";
}
?>

<h2>Add Student</h2>
<form method="POST">

    Name:
    <input type="text" name="name"><br><br>
    Email:
    <input type="text" name="email"><br><br>

    Registration No:
    <input type="text" name="registration_no"><br><br>
    Department:
    <input type="text" name="department"><br><br>
    <button name="submit">Add Student</button>
   

</form>