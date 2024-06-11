<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    


<?php
$con = mysqli_connect('localhost','root', '', 'class_9php');

if (!$con) {
    echo "Could not connect";
}else {
    if (isset($_GET['submit'])){
        $name = $_GET['name'];
        $surname = $_GET['surname'];
        $salary = $_GET['salary'];
        $designation = $_GET['designation'];
        $department = $_GET['department'];
    
        $query = "SELECT * FROM emp";
        $run = mysqli_query($con, $query);
        if(mysqli_num_rows($run) > 0){
            ?>
            <table>
                <tr>
                    <th>NAME</th>
                    <th>SURNAME</th>
                    <th>SALARY</th>
                    <th>DESIGNATION</th>
                    <th>DEPARTMENT</th>
                </tr>

            <?php
            echo "<tr>
                <td>".$rows['NAME']."</td>
                <td>".$rows['SURNAME']."</td>
                <td>".$rows['SALARY']."</td>
                <td>".$rows['DESIGNATION']."</td>
                <td>".$rows['DEPARTMENT']."</td>
            </tr>";

            while ($rows = mysqli_fetch_assoc($run)) {
                echo $rows['NAME']. " ". $rows['SURNAME']. " ". $rows['SALARY']. " ". $rows['DESIGNATION']. " ". $rows['DEPARTMENT']. "<br/>";
            }
        }
    }
}
?>
            </table>
</body>
</html>