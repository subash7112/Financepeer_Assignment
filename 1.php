 <!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <style>
        body{ font: 14px sans-serif; align-items: center; justify-content: center;}
        .wrapper{ width: 360px; padding: 20px;}
    </style>
</head>
<body>
    <div class="wrapper">
        <h2>Login</h2>
        <p>Please fill in your credentials to login.</p>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div>
                <label>Username</label>
                <input type="text" name="username">
            </div>    <br>
            <div>
                <label>Password</label>
                <input type="password" name="password">
            </div>
            <p>Forget Password? <a href="">click here</a>.</p>
            <div class="form-group"><input type="submit" value="Login"></div>
            <p>Don't have an account? <a href="">Sign up now</a>.</p>
        </form>
    </div>
</body>
</html>