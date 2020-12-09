

<?php

include('admin/include/connect.php');

$conn=connectdb();

$sql="SELECT count(id) as total FROM posts";
$result=mysqli_query($conn,$sql);
$data=mysqli_fetch_assoc($result);


$skip=0;
$take=5;

$page='1';
if(isset($_GET['page'])){
    $page=$_GET['page'];
$skip=($page-1)*$take;
}

$totalpage=ceil($data['total']/$take);



$sql="SELECT * FROM posts

        ORDER BY id DESC
        LIMIT $skip,$take
        ";

$result=mysqli_query($conn,$sql);


?>



<?php include('include/header.php');?>
<div id="main-content">
    <div class="container back ">
       

        <div class="row clearfix">
          
            <div class="col-md-12">


            <?php while($row=mysqli_fetch_assoc($result)){?>
                <div class="single-post">
                    <h2>
                        <a class="text-decoration-none"href="<?php echo $url?>/onepage.php?id=<?php echo $row['id']; ?>" ><?=$row['title']; ?> </a></h2>
                        <div class="row">
                            <div class="col-md-3">
                                <img src="admin/<?= $row['image']?>" alt="picture">
                            </div>
                            <div class="col-md-9">
                              <?= substr($row['description'],0,800);?>....
                             </div>
                        </div>
                    </div>
                    <hr>
            <?php }?>
            

            <div class="row clearfix newspace">
                    <div class="col-md-3">
                        <?php if($page > 1) { ?>
                        <a href="<?=$url?>index.php?page=<?= $page - 1?>"> <button class="btn btn-primary">Previous</button></a>
                        <?php }?>
                    </div>
                    <div class="col-md-6">
                        <div class="text-center">
                        <?php for($i=1;$i<=$totalpage;$i++) {?>
                            <a href="<?php echo $url?>index.php?page=<?php echo $i?>" class="pagination">
                                <?php echo $i?></a>
                        <?php }?>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="text-right">

                        <?php if($totalpage>$page):?>
                            <a href="<?=$url?>index.php?page=<?= $page+1?>"><button class="btn btn-primary">Next</button></a>
                        <?php endif?>
                         
                    </div>
                        
                    </div>

                </div>
            </div>
            </div>
</div>
    <footer class="fixed-bottom">
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

