 <!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <style>
        body{
height: 480px;
background-color:seashell;
display: flex;
align-items: center;
justify-content: center;
min-height: 100vh;
padding: 0 10px;
}
.wrapper{
background-color:aqua;
margin:10px;
border:2px solid black;
border-radius:10px;
padding:10px;
width:350px;
height:300px;
text-align: left;
}
.a{
    text-align: center;
}
    </style>
</head>
<body>
    <div class="wrapper">
        <h2 class="a">Login</h2>
        <p>Please fill in your credentials to login.</p>
        <form action="" method="post">
            <div>
                <label>Username</label>
                <input type="text" name="username">
            </div>    <br>
            <div>
                <label>Password</label>
                <input type="password" name="password">
            </div>
            <p>Forget Password? <a href="">click here</a>.</p>
            <div class="a"><input type="submit" value="Submit"></div>
            <p>Don't have an account? <a href="">Sign up now</a>.</p>
        </form>
    </div>
</body>
</html>