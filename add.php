<?php
include_once('connection.php');

if(isset($_POST['register']))
{
    $name=$_POST['name'];
    $username=$_POST['username'];
    // $pass=md5($_POST['password']);
    $pass = $_POST['password'];
    //md5 = fungsi hash

    $sql   ="INSERT INTO `signed-user`(`name`, `username`, `password`) VALUES ('$name','$username','$pass')";
    $result=mysqli_query($conn,$sql);
    if($result){ 
    header('location:index.php');
    echo"<script>alert('New User Register Success');</script>";   
    }else{
        die(mysqli_error($conn)) ;
    }
}

else if(isset($_POST['submit']))
{
    $name=$_POST['name'];
    $email=$_POST['email'];
    $message=$_POST['message'];

    $sql   ="INSERT INTO `contact-us`(`name`, `email`, `message`) VALUES ('$name','$email','$message')";
    $result=mysqli_query($conn,$sql);
    if($result){ 
    header('location:home.php');
    echo"alert('Thank you for your suggestion!');";   
    }else{
        die(mysqli_error($conn)) ;
    }
}

else if(isset($_POST['submit-policy']))
{
    $name=$_POST['name'];
    $email=$_POST['email'];
    $message=$_POST['message'];

    $sql   ="INSERT INTO `contact-us`(`name`, `email`, `message`) VALUES ('$name','$email','$message')";
    $result=mysqli_query($conn,$sql);
    if($result){ 
    header('location:add-on/privacy-policy.php');
    echo"alert('Thank you for your suggestion!');";   
    }else{
        die(mysqli_error($conn)) ;
    }
}

else if(isset($_POST['destinasi']))
{
    $destinasi=$_POST['destinationName'];
    $provinsi=$_POST['provinsi'];
    $kota=$_POST['kota'];
    $description=$_POST['description'];
    $destinationLink=$_POST['destinationLink'];
    $photoUpload=$_POST['photoUpload'];
    $tourGuideName=$_POST['tourGuideName'];
    $tourGuideDescription=$_POST['tourGuideDescription'];
    // $email=$_POST['email'];
    // $message=$_POST['message'];

    $sql = "INSERT INTO `destination`(`destinationName`, `provinsi`, `kota`, `description`, `destinationLink`, `photoUpload`) VALUES ('$destinasi','$provinsi','$kota','$description','$destinationLink','$photoUpload')";
    $result=mysqli_query($conn,$sql);
    if($result){ 
    header('location:upload-destinasi.php');
    echo"alert('Successfully added the destination!');";   
    }else{
        die(mysqli_error($conn)) ;
    }
}
