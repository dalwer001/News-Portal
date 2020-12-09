<?php

session_start();

if (!isset($_SESSION['loggedin'])) {
    header('Location: ../index.php');
    exit;
}
?>

<?php include('../include/connect.php');

$conn= connectdb();
$sql="SELECT*FROM categories";
$result= mysqli_query($conn,$sql);

?>



<?php include('../include/header.php');?>

<a href="index.php" class="btn btn-success mb-3">Back</a>
<div id="content">
    <h1 class="text-center">Add new post</h1>

    <form  action="store.php" enctype="multipart/form-data" method="post">
    <div class="form-group">
        <label for="title">Title</label>
        <input type="text" class="form-control" name="title" placeholder="Title">
    </div>
    <div class="form-group">
        <label for="description">Description</label>
        <textarea type="text" class="form-control" name="description" rows="20"></textarea>
    </div>
    <div class="form-group">
        <label for="image">Image</label>
        <input type="file" class="form-control" name="image">
    </div>
    <div class="form-group">
        <label for="date">Date</label>
        <input type="date" class="form-control" name="date" placeholder="Date">
    </div>
    <div class="form-group">
        <label for="category_id">Category</label>
        <select class="form-control" name="category_id">
            <option>Select Category</option>
            <?php while($row=mysqli_fetch_assoc($result)){?>
            <option value="<?=$row['id']?>"><?=$row['title']?></option>
            <?php }?>

        </select>
    </div>
    <div class="clearfix">
        <button type="submit" name="submit" value="submit" class="btn btn-primary float-right">Submit</button>
    </div>
    
    </form>
  
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