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


$sql="SELECT*FROM categories";
$result= mysqli_query($conn,$sql);

?>



<?php include('../include/header.php');?>

<a href="index.php" class="btn btn-success mb-3">Back</a>
<div id="content">
    <h1 class="text-center">Update post</h1>

    <form action="update.php?id=<?=$id?>" enctype="multipart/form-data" method="post">
    <div class="form-group">
        <label for="title">Title</label>
        <input type="text" class="form-control" name="title" placeholder="Title" value="<?=$data['title']?>">
    </div>
    <div class="form-group">
        <label for="description">Description</label>
        <textarea type="text" class="form-control" name="description" rows="20"><?=$data['description']?></textarea>
    </div>
    <div class="form-group">
        <label for="image">Image</label>
        <input type="file" class="form-control" name="image">
        <img src="../<?=$data['image']?>"  width="100">
    </div>
    <div class="form-group">
        <label for="date">Date</label>
        <input type="date" class="form-control" name="date" placeholder="Date" value="<?= $data['date']?>">
    </div>
    <div class="form-group">
        <label for="category">Category</label>
        <select class="form-control" name="category_id">
            <option>Select Category</option>
            <?php while($row=mysqli_fetch_assoc($result)){?>

                <?php if($data['category_id'] == $row['id']){?>
                    <option value="<?=$row['id']?>"selected><?=$row['title']?></option>
                <?php } else{?>
                    <option value="<?=$row['id']?>"><?=$row['title']?></option>
                <?php } ?>

            
            <?php }?>

        </select>
    </div>
    
    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
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