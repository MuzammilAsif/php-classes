<?php
include('connection.php');

if(isset($_GET['submit'])){
    $title = $_GET['title'];
    $description = $_GET['description'];
    $image = $_FILES['image']['name'];
    move_uploaded_file($_FILES['image']['tmp_name'], "upload/" . $image);
    $query = "INSERT INTO uploaded(title, description,image) VALUES ('$title', '$description', '$image')";
    $run = mysql_query($query,$con);
    if($run){
        include('views.php');
    } else {
        echo "Data Not Inserted";
    }
}
?>