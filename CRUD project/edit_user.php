<?php

require_once('user.php');


//echo ("Edit page");
//echo ($_GET['id']);

// if the id is present, assign the value to a local variable
if(isset($_GET['id'])){
    $user = new User();
    $uid = $_GET['id'];

   $user_records= $user->get_user($uid);

}
?>
<body>
    <h1> Edit User</h1>
    <form action="user_processor.php" method="POST">

    <input name="id" id="id" value="<?=$user_records['id']?>" type="hidden">
    
        <label > Name </label>
        <input type="text" name="name" id="name" value="<?= $user_records['name']?>">
        <br><br>
        <label > Address </label>
        <input type="text" name="address" id="addres" value="<?= $user_records['address']?>">
        <br><br>
        <label > Email </label>
        <input type="text" name="email" id="email" value="<?= $user_records['email']?>">
        <br><br>
        <input type="submit" value="Update User Details">


    </form>
   
</body>
</html>