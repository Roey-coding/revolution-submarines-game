<?php
session_start();
if (isset($_POST['uname'], $_POST['psw'])) {
    $user = 'root';
    $pass = '';
    $db = 'users';
    $db= new mysqli('localhost', $user, $pass, $db) or die("unable to connect");

    $name =$_POST['uname'];
    $password = $_POST['psw'];

    $name = stripslashes($name);
    $password = stripslashes($password);
    $name = mysqli_real_escape_string($db, $name);
    $password = mysqli_real_escape_string($db, $password);

    $qurey = "SELECT * FROM `users` WHERE name = '$name' AND pass = '$password'";

    $response = mysqli_query($db,$qurey);
    $row = mysqli_fetch_array($response);

    if($row['name'] == $name && $row['pass'] == $password) {
        $_SESSION["user"] = $name;
        $state = $row['state'];
        $_SESSION["state"] = $state;
        $turn = $row['turn'];
        $_SESSION["turn"] = $turn;
        $enemy_state = $row['enemy_state'];
        $_SESSION["enemy_state"] = $enemy_state;
        $enemy = $row['enemy'];
        $_SESSION["enemy"] = $enemy;
        header('Location: /page.php');
    } else {
        header('Location: /index.php');
    }
}

?>
<script> alert("hello")</script>
