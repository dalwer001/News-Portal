<?php

session_start();

if (!isset($_SESSION['loggedin'])) {
	header('Location: ../index.html');
	exit;
}
$DATABASE_HOST = 'localhost';
$DATABASE_USER = 'root';
$DATABASE_PASS = '';
$DATABASE_NAME = 'blogpost';
$con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);
if (mysqli_connect_errno()) {
	exit('Failed to connect to MySQL: ' . mysqli_connect_error());
}

$stmt = $con->prepare('SELECT password, email FROM users WHERE id = ?');

$stmt->bind_param('i', $_SESSION['id']);
$stmt->execute();
$stmt->bind_result($password, $email);
$stmt->fetch();
$stmt->close();
?>

<?php include('include/header.php');?>
<div class="content bg-secondary text-white">
			<h2 class="text-danger">Profile</h2>
			<div>
				<p>Your account details are below:</p>
				<div>
					<hr>
				</div>
				
				
				<table>
					<tr>
						<td class="font-weight-bold">Username:</td>
						<td><?=$_SESSION['username']?></td>
					</tr>
					<tr>
						<td class="font-weight-bold">Password:</td>
						<td><?=$password?></td>
					</tr>
					<tr>
						<td class="font-weight-bold">Email:</td>
						<td><?=$email?></td>
					</tr>
				</table>
			</div>
		</div>

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