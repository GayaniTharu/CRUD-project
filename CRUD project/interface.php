<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Interface</title>
</head>
<body>
    <h1> Add User</h1>
    <form action="user_processor.php" method="POST">
        
        <label > Name </label>
        <input type="text" name="name" id="name">
        <br><br>
        <label > Address </label>
        <input type="text" name="address" id="addres">
        <br><br>
        <label > Email </label>
        <input type="text" name="email" id="email">
        <br><br>
        <label > User Name</label>
        <input type="text" name="username" id="username">
        <br><br>
        <label > Password </label>
        <input type="text" name="password" id="password">
        <br><br>

        <input type="submit" value="Add User">


    </form>
   
</body>
</html>