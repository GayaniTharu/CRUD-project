<?php
require_once("user.php");
//create user object
$user=new User();

// call view_all_users() function to retrive information
$user_records = $user->view_all_users();
//print_r($user_records);


?>

<html>
    <head>
        <title>Users</title>
    </head>
    <body>
        <h1>All User's Details</h1>
        <a href="interface.php">Add New User</a>
        <a href="user_login.html">Login</a>
        <table border="2">
            <tr>
                <th>ID</th>               
                <th>Name</th>               
                <th>Address</th>
                <th>Email</th>
                <th>User Name</th>
                <!-- <th>Password</th>
                <th>Edit</th> -->
                <th>Delete</th>
            </tr>

            <?php foreach($user_records as $user) { ?>
                    
                 <tr>
                    <td><?= $user['id']?> </td>
                    <td><?= $user['name']?> </td>
                    <td><?= $user['address']?> </td>
                    <td><?= $user['email']?> </td>
                  
                    <td><a href="edit_user.php?id=<?=$user['id']?>"> Edit User</a></td>
                    <td><a href="user_processor.php?id=<?=$user['id']?>">Delete User</a></td>
                </tr> 
                <?php } ?>
            
        </table>

    </body>
</html>


