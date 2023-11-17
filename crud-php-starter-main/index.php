<?php
// Display record here...
require("connect.php");

//this is viewwing of records inside myql db

$result = mysqli_query($connection, 'SELECT * FROM user');


// these are record inside MYSQL
?>

<html>

<head>
    <title>User Accounts</title>
</head>

<body>
    <!-- this is the destination for inserting record -->
    <p><a href="add_user.php">Insert New Record</a></p>
    <h1>Registered Users</h1>

    <table border="3">
        <!-- this is the title of the records -->
        <thead>
            <tr>
                <td>ID No.</td>
                <td>Name</td>
                <td>Email</td>
                <td>Password</td>
                <td>Change</td>
            </tr>
        </thead>

        
        <?php
            // these are record inside MYSQL

            while($row = mysqli_fetch_array($result) ) 
            {

        ?>

        <tr>
            <td><?php echo $row['user_id']; ?>
            <td><?php echo $row['user_name']; ?>
            <td><?php echo $row['user_email']; ?>
            <td><?php echo $row['user_password']; ?>
            <td><a href="edit.php?user_id=<?php echo $row ["user_id"]; ?>">EDIT</a></td>
            <td><a href="delete.php?user_id=<?php echo $row ["user_id"]; ?>">Delete</a></td>
        </tr>
        <?php } ?>

    </table>
</body>

</html>