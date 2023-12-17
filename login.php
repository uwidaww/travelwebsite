
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
include "connection.php";

if (isset($_POST['login'])) {

    $name = $_POST['name'];
    // $password = md5($_POST['password']);
    $password = $_POST['password'];

    if (empty($_POST['name']) && empty($_POST['password'])) {
        echo "<script>alert('Please Fill Username and Password');</script>";
        header('location:index.php');
    } elseif (empty($_POST['password'])) {
        echo "<script>alert('Please Fill Password');</script>";
        header('location:index.php');
    } elseif (empty($_POST['name'])) {
        echo "<script>alert('Please Fill Username);</script>";
        header('location:index.php');
    } else {
        $sql = "SELECT * FROM `signed-user` WHERE `name`='$name' AND `password`='$password'";
        $result = $conn->query($sql);
        // var_dump($result->fetch_assoc());
        if (mysqli_num_rows($result) > 0) {
            $row = $result->fetch_assoc();
            $id = $row['id'];
            $name = $row['name'];
            $username = $row['username'];
            $password = $row['password'];


            if ($username == $username && $password == $password) {

                $_SESSION['id'] = $id;
                $_SESSION['name'] = $name;
                $_SESSION['username'] = $username;
                // $_SESSION['password'] = $password;
                header('location:home.php');
            }
        } else {
            echo "<script>alert('Invalid Username or Password');</script>";
            header('location:index.php');
        }

    }

}
?>
</body>
</html>
session_start();
include_once('connection.php');


