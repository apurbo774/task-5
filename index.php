<?php
include 'db.php';

$result = mysqli_query($conn, "SELECT * FROM students");
?>

<h2>Student List</h2>

<a href="add.php">Add Student</a>

<table border="1" cellpadding="10">
<tr>
    <th>Name</th>
    <th>Email</th>
    <th>Registration No</th>
    <th>Department</th>
    <th>Action</th>
</tr>

<?php while($row = mysqli_fetch_assoc($result)) { ?>

<tr>
    <td><?php echo $row['name']; ?></td>
    <td><?php echo $row['email']; ?></td>
    <td><?php echo $row['registration_no']; ?></td>
    <td><?php echo $row['department']; ?></td>
    <td>
        <a href="edit.php?id=<?php echo $row['id']; ?>">Edit</a>

        <a href="delete.php?id=<?php echo $row['id']; ?>">
            Delete
        </a>
    </td>
</tr>

<?php } ?>

</table>


