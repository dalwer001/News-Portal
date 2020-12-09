<?php

session_start();

if (!isset($_SESSION['loggedin'])) {
    header('Location: ../index.php');
    exit;
}
?>
<?php

if(isset($_GET['id'])){

    $id=$_GET['id'];
    include('../include/connect.php');
    $conn= connectdb();
    $sql="DELETE FROM categories WHERE id='$id'";
    $result= mysqli_query($conn,$sql);

    header('location:index.php');
}




?>