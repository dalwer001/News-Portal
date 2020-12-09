<?php
$url ='http://localhost/project-1/';
?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"/>
    <link rel="stylesheet" href="<?php echo $url;?>admin/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo $url;?>admin/assets/css/style.css">
    <title>Simple POST</title>
  </head>
  <body class="indexbody">
  
  <nav class="navbar navbar-expand-lg navbar-light bg-warning">
  <div class="container"> 
      <a class="navbar-brand" href="#">News Portal</a>
     <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
        <li class="nav-item active">
          <a class="nav-link" href="http://localhost/project-1/admin/adminindex.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="./index.php">Menu</a>
        </li>
        <li class="nav-item">
          <a class="nav-link btn btn-md btn-info text-white" href="../logout.php">Logout</a>
        </li>
      </ul>
     </div>
    </div>
 </nav>
<!--navbar end-->