<?php
include "config.php";

$sql = "SELECT *from users";

$result =  $conn->query($sql);
?>


<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <title>View Page</title>
</head>

<body>
    <div class="container">
        <h2>users<h2>
                <table class="table">

                    <head>
                        <tr>
                            <th>ID
                            <th>
                            <th>First Name
                            <th>
                            <th>Last Name
                            <th>
                            <th>Email
                            <th>
                            <th>Gender
                            <th>
                            <th>Action
                            <th>
                        <tr>
                            <thread>
                                </tbody>
                                <?php
                                if ($result->num_rows > 0) {
                                    while ($row = $resultfetch->assoc()) {


                                ?>

                        <tr>
                            <td> <?php echo $row['id']; ?> </td>
                            <td> <?php echo $row['firstname']; ?> </td>
                            <td> <?php echo $row['lastname']; ?> </td>
                            <td> <?php echo $row['email']; ?> </td>
                            <td> <?php echo $row['gender']; ?> </td>
                            <td> <a class="btn btn-info" href="update.php?id=<?php echo $row['id']; ?>">
                                    Edit </a> &nbsp; <a href="delete.php?id=<?php echo $row['id']; ?>">
                                    Delete</a> </td>

                        </tr>
                <?php   }
                                }
                ?>
                <tbody>
                </table>
    </div>
</body>

</html>