<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    include('connection.php');
    $query = "SELECT * FROM uploaded";
    $run = mysql_query($query,$con);
    ?>
    <table>
        <tr>
            <th>Title</th>
            <th>Description</th>
            <th>Image name</th>
        </tr>

    <?php while($rows = mysqli_fetch_array($run)) { ?>
        <tr>
            <td><?php echo $rows['title']; ?></td>
            <td><?php echo $rows['description']; ?></td>
            <td><?php echo $rows['image']; ?></td>
            <td><a href="update.php?id=<?php echo $rows['ID'];?>">Update Data</a></td>
            <td><a href="delete.php?id=<?php echo $rows['ID'];?>">Delete</a></td>
        </tr>
    <?php } ?>

    </table>
</body>
</html>