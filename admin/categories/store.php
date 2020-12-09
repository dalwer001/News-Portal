
<?php

if(isset($_POST['submit'])){

    $title=$_POST['title'];
    include('../include/connect.php');
    $conn= connectdb();
    $sql="INSERT INTO categories VALUES (NULL,'$title')";
    $result= mysqli_query($conn,$sql);

    header('location:index.php');
}




?>