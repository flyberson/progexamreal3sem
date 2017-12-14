<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}?>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
<form method="post" id="formlogin">
    <p>Username</p>
    <input id="username" type="text" name="username">
    <p>Password</p>
    <input id="password" type="password" name="password">
    <p>Submit</p>
    <input type="submit">

    <?php
if (isset($_POST['username'])&&isset($_POST['password'])) {
    $startusername = $_POST['username'];
    $startpassword = $_POST['password'];
    include 'databaseconnection.php';

    $sql = "select * from admin where userName ='".$startusername."'"."AND password='".$startpassword."'";
    $result = $conn->query($sql);
    if ($result!= false) {
        $row = mysqli_fetch_assoc($result);

        $first = $row['userName'];
        $second = $row['password'];
    $_SESSION["user"]=$first;
    $_SESSION["password"]=$second;

      header("Location:http://localhost/PhpstormProjects/progexamreal3sem/index.php");
    }}
    ?>