<?php
include('admin/include/connect.php');

if(!$_GET['id']){
    header('location:index.php');
}
$id = $_GET['id'];

$conn=connectdb();

$sql="SELECT 
posts.*,categories.title as categoryTitle
FROM posts
JOIN categories ON posts.category_id=categories.id
WHERE posts.id='$id'";

$result=mysqli_query($conn,$sql);
$data=mysqli_fetch_assoc($result);



?>



<?php include('include/header.php');?>
<div id="main-content">
    <div class="container">
        <div class="clearfix"> <a class="mb-2 btn btn-info btn-md float-right" href="index.php">BACK</a> </div>
        <div class="row clearfix">
            <div class="col-md-8"></div>
            <div class="col-md-12">


           
                <div class="single-post text-center" style>
                    <h1><?=$data['title']?></h1>
                        <div class="row">
                            <div class="col-md-12 mb-3">
                                <img src="admin/<?= $data['image']?>" >
                            </div>
                             <div class="m-2 font-weight-bold">
                        <?php echo $data['categoryTitle'];?>-
                    </div>
                            <div class="col-md-12">
                              <?= $data['description']?>
                             </div>
                        </div>
                    </div>

          
            

            
                    </div>
                </div>
            </div>
     </div>

</div>
    <footer class="position-sticky">
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
<?php include('include/footer.php');?>