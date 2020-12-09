<?php

session_start();

if (!isset($_SESSION['loggedin'])) {
    header('Location: ../index.php');
    exit;
}
?>

<?php include('../include/connect.php');?>

<?php
$conn= connectdb();

$sql="SELECT*FROM posts ORDER BY id ASC";
$result= mysqli_query($conn,$sql);

?>



<?php include('../include/header.php');?>



<a href="create.php" class="btn btn-success mb-3">+ Add Post</a>
<div id="content">
    
<h1 class="text-center">Post list</h1>

<table class="table table-bordered table-striped bg-info text-white">
    <thead class="text-dark">
        <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Image</th>
            <th>Date</th>
            <th>Action</th>
        </tr>
    </thead>
<?php

while($row=mysqli_fetch_assoc($result))
{?>

<tr>
    <td><?= $row['id'];?></td>
    <td><?= $row['title'];?></td>
    <td><img src="../<?=$row['image'];?>" width='100'></td>
    <td><?= $row['date'];?></td>
    <td>
    <a class="btn btn-success btn-sm m-2" href="view.php?id=<?=$row['id']?>"> View</a>
    <a class="btn btn-success btn-sm m-2" href="edit.php?id=<?=$row['id']?>">Edit</a>
    <a class="btn btn-danger btn-sm m-2" href="delete.php?id=<?php echo $row['id'];?>" onclick="return confirm('Are you Sure?')">Delete</a>
    
    </td>
</tr>
   
<?php } ?>
</table>

</div>

<?php include('../include/footer.php');?>
  <footer class="position-sticky mt-2">
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