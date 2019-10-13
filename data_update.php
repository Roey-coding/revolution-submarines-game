<?php
session_start();
    if(isset($_POST["turn"], $_POST["enemy_state"], $_POST["found"])){
        $user = 'root';
        $pass = '';
        $db = 'users';
        $db= new mysqli('localhost', $user, $pass, $db) or die("unable to connect");

        $username = $_SESSION["user"];
        $enemy = $_SESSION["enemy"];
        $enemy_state = $_POST["enemy_state"];
        $found = $_POST["found"];

        $query = "UPDATE `users` SET turn = '0' where name = '$username'";
        $query1 = "UPDATE `users` SET turn = '1' where name = '$enemy'";
        $query2 = "SELECT * FROM `users` WHERE name = '$username'";
        $query3 = "UPDATE `users` SET found = '$found' where name = '$username'";
        $query4 =  "UPDATE `users` SET state = '$enemy_state' where name = '$enemy'";
        $query5 =  "UPDATE `users` SET enemy_state = '$enemy_state' where name = '$username'";

        $response = mysqli_query($db,$query);
        $response1 = mysqli_query($db,$query1);
        $response2 = mysqli_query($db,$query2);
        $response3 = mysqli_query($db,$query3);
        $response4 = mysqli_query($db,$query4);
        $response5 = mysqli_query($db,$query5);

        $row = mysqli_fetch_array($response2);

        echo json_encode($row);
        
    }
?>