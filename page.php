<?php
    session_start();
    if($_SESSION["user"] == "1") header('Location: /index.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="second_app.css">
</head>
<body>
    <h1>Welcome to the battle <?php echo $_SESSION["user"] ?>!</h1>
    <div class="wrapper">
        <div class="box box1"></div>
        <div class="box box2">
            <div class="corner">X</div>
            <div class="row_numbers" >1 2 3 4 5 6 7 8 9 10</div>
            <div class="vartical_numbers">1<br>2<br>3<br>4<br>5<br>6<br>7<br>8<br>9<br>10</div>
            <div class="squers"></div>
        </div>
        <div class="box box3">
                <div class="corner">X</div>
                <div class="row_numbers" >1 2 3 4 5 6 7 8 9 10</div>
                <div class="vartical_numbers">1<br>2<br>3<br>4<br>5<br>6<br>7<br>8<br>9<br>10</div>
                <div class="squers"></div>
        </div>
    </div>
    <script src = "create_dives.js"></script>
    <script src = "d_sub.js"></script>
    <h1>Footer</h1> 
</body>
</html>