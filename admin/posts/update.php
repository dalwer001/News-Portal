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
$sql="SELECT 
posts.*,categories.title as categoryTitle
FROM posts
JOIN categories ON posts.category_id=categories.id
WHERE posts.id='$id'";


$result= mysqli_query($conn,$sql);
$data=mysqli_fetch_assoc($result);


$title         =$_POST['title'];
$description   =$_POST['description'];
$date          =$_POST['date'];
$category_id   =$_POST['category_id'];

$updatesql="UPDATE posts SET
title='$title',
 description='$description', 
 date='$date',category_id='$category_id'";

if(!empty($_FILES['image']['name']))

{
$rand=rand(11111,899999999999);
$image='uploads/'.$rand.$_FILES['image']['name'];
$upload='../uploads/'.$rand.$_FILES['image']['name'];
move_uploaded_file($_FILES['image']['tmp_name'],$upload);

$updatesql.=",image='$image'";

if(!empty($data['image'])&& file_exists('../'.$data['image']))
{
    unlink('../'.$data['image']);
}

}



  $updatesql.=" WHERE id=$id";

mysqli_query($conn,$updatesql);
header('location:index.php');

?>