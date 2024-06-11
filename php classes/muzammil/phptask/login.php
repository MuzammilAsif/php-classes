<?php 
include('connection.php');

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $email = $_POST['email'];
    $password = $_POST['password'];
    $query = "SELECT * FROM user WHERE email='$email'";
    $result = $con->query($query);
    if($result->num_rows > 0){
        $user = $result->fetch_assoc();
        if(password_verify($password, $user['password'])){
         echo "login successful welcome " . $user['name'];
        } else{
            header("Location: loginform.php?status=failed");
        }
    } else{
        echo "no use foudn with this email";
    }
}
?>