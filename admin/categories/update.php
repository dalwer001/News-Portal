<?php

session_start();

if (!isset($_SESSION['loggedin'])) {
    header('Location: ../index.php');
    exit;
}
?>
<?php

if(isset($_POST['submit'])){

    $id=$_GET['id'];
    $title=$_POST['title'];
    include('../include/connect.php');
    $conn= connectdb();
    $sql="UPDATE categories SET title='$title' WHERE id='$id'";
    $result= mysqli_query($conn,$sql);

    header('location:index.php');
}




?>