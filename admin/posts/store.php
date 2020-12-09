<?php

include('../include/connect.php');
$conn=connectdb();


$rand=rand(11111,899999999999);
$title= $_POST['title'];
$description= $_POST['description'];
$date=$_POST['date'];
$category_id=$_POST['category_id'];

$image='uploads/'.$rand.$_FILES['image']['name'];
$upload='../uploads/'.$rand.$_FILES['image']['name'];
move_uploaded_file($_FILES['image']['tmp_name'],$upload);



$sql ="INSERT INTO posts VALUES (NULL,'$category_id','$title','$description','$image','$date')";
mysqli_query($conn,$sql);

header('location:index.php');
?>