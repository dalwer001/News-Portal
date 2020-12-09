
<?php

session_start();

if (!isset($_SESSION['loggedin'])) {
    header('Location: ../index.php');
    exit;
}
?>

<?php include('include/header.php');?>
<p class="mb-3">
Hey future bloggers, Today in this post I am going to cover about blog description, Many of you not taking your blog description as serious,
But,You know that several of the articles are not ranking on google because they don’t have a perfect blog post description and don’t use any keyword in their description.</p>
<div>
	<img  style="width: 100%;height: auto" src="assets//img/news-paper-portal-development.jpg" alt="banner">
</div>

<div class="mydiv text-center text-white text-md-center"> IF YOU FEEL BOORING THEN CLICK <a href="posts/index.php" style="text-decoration: none;">START</a> TO ADD NEW POST.</div>


<?php include('include/footer.php');?>


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




