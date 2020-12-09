<?php

session_start();

if (!isset($_SESSION['loggedin'])) {
    header('Location: ../index.php');
    exit;
}
?>


<?php include('../include/connect.php');
$id=$_GET['id'];
$conn= connectdb();
$sql="SELECT 
posts.*,categories.title as categoryTitle
FROM posts
JOIN categories ON posts.category_id=categories.id
WHERE posts.id='$id'";


$result= mysqli_query($conn,$sql);
$data=mysqli_fetch_assoc($result);
?>



<?php include('../include/header.php');?>

<a href="index.php" class="btn btn-success mb-3">Back</a>
<div id="content">
    <h1 class="text-center">Post Deatils</h1>

    <table class="table">
    
    <tr>
        <td>Title:</td>
        <td><?= $data['title']?></td>
        
    </tr>
    <tr>
        <td>Category:</td>
        <td><?= $data['categoryTitle']?></td>
        
    </tr>
    <tr>
        <td>Description:</td>
        <td><?= $data['description']?></td>
        
    </tr>
    <tr>
        <td>Image:</td>
        <td><img src="../<?= $data['image']?>" width="200" ></td>
        
    </tr>
    <tr>
        <td>Date:</td>
        <td><?= $data['date']?></td>
        
    </tr>
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