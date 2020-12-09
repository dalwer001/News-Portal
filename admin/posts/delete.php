<?php

session_start();

if (!isset($_SESSION['loggedin'])) {
    header('Location: ../index.php');
    exit;
}
?>

<?php
$id=$_GET['id'];
include('../include/connect.php');
$conn= connectdb();


$sql="SELECT*FROM posts WHERE id='$id'";
$result=mysqli_query($conn,$sql);
$data= mysqli_fetch_assoc($result);
$image_location='../'.$data['image'];
if(file_exists($image_location))
{
   unlink($image_location);
}

    
    $sql="DELETE FROM posts WHERE id='$id'";
    $result= mysqli_query($conn,$sql);

    header('location:index.php');





?>