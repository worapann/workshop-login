<?php include('server.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login page</title>

    <link rel="stylesheet" href="style.css">
</head>
<body>
    
    <div class="header">
        <h2>Login</h2>
    </div>
    
    <from action="register_db.php">
        <div class="input-group">
            <label for="username">Username</label>
            <input type="text" name="Username จ้าาาใส่ด้วย">
        </div>
        <div class="input-group">
            <label for="password">Confirm</label>
            <input type="password" name="Password">
        </div>
        <div class="input-group">
            <button type="submit" name="login_user" class="btn">Login</button>
        </div>
        <p>Not yet a member? <a href="register.php">Sign up</a></p>
    </from>
</body>
</html>