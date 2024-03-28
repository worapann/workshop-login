<?php include('server.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>

    <link rel="stylesheet" href="style.css">
</head>
<body>
    
    <div class="header">
        <h2>Register</h2>
    </div>
    
    <from action="register_db.php">
        <div class="input-group">
            <label for="username">Username</label>
            <input type="text" name="Username">
        </div>
        <div class="input-group">
            <label for="email">Email</label>
            <input type="email" name="Email">
        </div>
        <div class="input-group">
            <label for="password_1">Password</label>
            <input type="password" name="Password_1">
        </div>
        <div class="input-group">
            <label for="password_2">Confirm Password</label>
            <input type="password" name="Password_2">
        </div>
        <div class="input-group">
            <button type="submit" name="reg_user" class="btn">Register</button>
        </div>
        <p>Already a member? <a href="login.php">Sign in</a></p>
    </from>
</body>
</html>