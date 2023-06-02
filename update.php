<?php
include "config.php";

if (isset($_POST['update'])) {
    $firstname = $_POST['firstname'];
    $user_id = $_POST['id'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];
    $password = $_POST['password'];

    $sql = "UPDATE 'user' SET 'firstname' = $firstname , 'lastname' = $lastname , 'email' = $email , 'password' = $password , 'gender' = $gender , WHERE 'id' = $user_id ,";

    $Result = $conn->query($sql);

    if ($result == True) {
        echo "Recored Updated Successfully";
    } else {
        echo "Error:" . $sql . "<br>" . $conn->error;
    }
}

if (isset($_GET['id'])) {
    $USER_ID = $_GET['id'];

    $SQL = "SELECT * FROM 'users' where 'id' = $user_id";

    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $first_name = $row['firstname'];
            $last_name = $row['lastname'];
            $email = $row['email'];
            $password = $row['password'];
            $gender = $row['gender'];
            $user_id = $row['id'];
        }
?>
        <h2>User Update Form</h2>
        <form action="" method="post"></form>
        <fieldset>
            <legend>Personal Information</legend>
            First Nmae:<br>
            <input type="text" name="firstname" value="<?php echo $first_name; ?>">
            <input type="hidden" name="user_ID" value="<?php echo $id; ?>">
            <br>
            Last Nmae:<br>
            <input type="text" name="Lastname" value="<?php echo $Last_name; ?>">
            <br>
            Email:<br>
            <input type="email" name="email" value="<?php echo $email; ?>">
            <br>
            Password:<br>
            <input type="password" name="password" value="<?php echo $password; ?>">
            <br>
            Gender:<br>
            <input type="radio" name="gender" value="Male" <?php if ($gender == 'Male') {
                                                                echo "cheched";
                                                            } ?>>Male
            <input type="radio" name="gender" value="Female" <?php if ($gender == 'Female') {
                                                                    echo "cheched";
                                                                } ?>>Female
            <br>
            <br>
            <input type="Submit" name="update" value="update">
        </fieldset>
        </form>
        </body>

        </html>

<?php
    } else {
        // if the "id" is not valid then rediret the user to back the view.php page
        header("location: view.php");
    }
}
