<?php
include('connection.php');

if( $_SERVER['REQUEST_METHOD'] == 'POST' ){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];
    $gender = $_POST['gender'];
    $pic = $_FILES['pic']['name'];
    $targetDir = 'upload/';
    $targetFile = $targetDir.basename($pic);

    if ($confirm_password != $password){
        echo "password does not match";
    }
    if(!move_uploaded_file($_FILES['pic']['tmp_name'], $targetFile)){
        echo "file not uploaded";
    }
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);
    $sql = "INSERT INTO user(name,email,password,gender,pic) VALUES('$name','$email','$hashed_password','$gender','$pic')";
    if($con->query($sql) === TRUE){
        include('login.php');
    }else{
        echo "Error: ". $sql. "<br>". $con->error;
    }

    $con->close();
}
?>