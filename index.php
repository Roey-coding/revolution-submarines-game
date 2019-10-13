<?php
    session_start();
    $_SESSION["user"] = "1";
?>
<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="app.css">
</head>
<body>
    <h1 align = "center">Welcome to revolution submarines game</h1>
    <img src = "submarine.webp" style="width:574px;height:360px;"> 


    <form action="/action_page.php" method="post" >

    <div class="container">
        <h2>Login Form</h2>
        <label for="uname"><b>Username</b></label>
        <input type="text" placeholder="Enter Username" name="uname" required>

        <label for="psw"><b>Password</b></label>
        <input type="password" placeholder="Enter Password" name="psw" required>
        <button type="submit">Login</button>
    </div>
    </form>
</body>
</html>