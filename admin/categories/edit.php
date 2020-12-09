<?php

session_start();

if (!isset($_SESSION['loggedin'])) {
    header('Location: ../index.php');
    exit;
}
?>

<?php 


if(isset($_GET['id']))
{
include('../include/connect.php');
$id=$_GET['id'];
$conn= connectdb();
$sql="SELECT*FROM categories WHERE id='$id'";
$result= mysqli_query($conn,$sql);
$row = mysqli_fetch_assoc($result);
}




?>


<?php include('../include/header.php');?>

<a href="index.php" class="btn btn-success mb-3">Back</a>
<div id="content">
<h1 class="text-center">Edit category</h1>

    <form method="POST" action="update.php?id=<?php echo $row['id'];?>">
    <div class="form-group">
        <label for="Title">Title</label>
        <input type="text" class="form-control" id="title" name="title" value="<?php echo $row['title'];?>" placeholder="title">
    </div>    

    <button type="submit" class="btn btn-primary" name="submit">Submit</button>
    </form>

</div>

<?php include('../include/footer.php');?>

  <footer class="fixed-bottom mt-2">
            <div class="row">
                <div class="col-lg-6 text-center text-lg-left mb-3 mb-lg-0">
                    <p class="small mb-0 mt-1">&copy; Copyright Md. Dalwer Hossain</p>
                </div>
                <div class="col-lg-6 text-center text-lg-right">
                    <a href="#"><i class="fab fa-facebook"></i></a>
                    <a href="#"><i class="fab fa-youtube"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#">Home</a>
                </div>
            </div>
        </footer>
