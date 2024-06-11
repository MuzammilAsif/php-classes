<?php
$con = mysqli_connect('localhost','root', '', 'class_9php');

if (isset($_GET['submit'])){
    $name = $_GET['name'];
    $surname = $_GET['surname'];
    $salary = $_GET['salary'];
    $designation = $_GET['designation'];
    $department = $_GET['department'];

    $query = "INSERT INTO emp(NAME, SURNAME, SALARY, DESIGNATION, DEPARTMENT)  VALUES('$name', '$surname', '$salary','$designation','$department')";

    $run = mysqli_query($con, $query);
    if ($run){
        include_once('views.php');
    }else{
        echo mysqli_errno();
    }
}else{
    echo "connecion error";
}
?>