<?php
include 'db.php';

$id = $_GET['id'];

$data = mysqli_query($conn, "SELECT * FROM students WHERE id=$id");

$row = mysqli_fetch_assoc($data);

if(isset($_POST['update'])) {

    $name = $_POST['name'];
    $email = $_POST['email'];
    $department = $_POST['department'];

    mysqli_query($conn,
    "UPDATE students
     SET name='$name',
         email='$email',
         department='$department'
     WHERE id=$id");

    echo "Student Updated Successfully";
}
?>

<form method="POST">

Name:
<input type="text" name="name"
value="<?php echo $row['name']; ?>">

<br><br>

Email:
<input type="text" name="email"
value="<?php echo $row['email']; ?>">

<br><br>

Department:
<input type="text" name="department"
value="<?php echo $row['department']; ?>">

<br><br>

<button name="update">Update</button>

</form>