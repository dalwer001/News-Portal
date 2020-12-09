



<?php
$url ='http://localhost/project-1/';
?>



<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Login</title>
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
		<link rel="stylesheet" href="<?php echo $url;?>admin/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo $url;?>admin/assets/css/style2.css">
	</head>
	<body id="loginbody">
    <div id="login">
        
        <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center">

                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12">
                    	
                        <form id="login-form" class="form" action="authentic.php" method="POST">
                            <h3 class="text-center text-info">Login</h3>

                            <div class="form-group">
                                <label for="username" class="text-info">Username:</label><br>
                                <input type="text" name="username" id="username" class="form-control" required>
                            </div>

                            <div class="form-group">
                                <label for="password" class="text-info">Password:</label><br>
                                <input type="password" name="password" id="password" class="form-control" required >                                
                            </div>

                            <div class="form-group clearfix">
                    		<a href="index.php" class=" btn btn-md btn-primary text-white">Back</a>
                    	
                                <input type="submit" name="submit" class="btn btn-info btn-md float-right" value="submit">
                            </div>
                          
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>

<?php include('include/footer.php');?>