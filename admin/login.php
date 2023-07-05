<?php
include('conn.php');
session_start();

if(isset($_POST['submit'])){
	//extract($_POST);
	$ad_email=mysqli_real_escape_string($con,$_POST['ad_email']);
    $ad_pass=mysqli_real_escape_string($con,$_POST['ad_pass']);
	$check=mysqli_query($con,"select * from admin where ad_email='$ad_email' and ad_password='$ad_pass'");
	$check_fetch=mysqli_fetch_array($check);
	
	if($check_fetch['ad_id']!=''){
		$_SESSION['ad_id']=$check_fetch['ad_id'];
		
		
		header('location:index.php');
		}
	
	}

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="robots" content="noindex" />
    <title>Log in</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>
<style>
    .card {
        margin: 0 auto; /* Added */
        float: none; /* Added */
        margin-bottom: 10px; /* Added */
        width: 40rem;
    }
    .heading{
        text-align: center;
    }
    .heading a{
        text-decoration: none;
    }
</style>
<body>
    <div>
        <div class="heading">
            <a href="/"><b>Admin </b>Login</a>
        </div>
        <!-- /.login-logo -->
        <div class="card">
            <div class="card-body login-card-body">
            <p class="login-box-msg">Sign in to start your session</p>

            <form method="post">
                <div class="input-group mb-3">
                    <input type="email" name="ad_email" class="form-control" placeholder="Email">
                </div>
                <div class="input-group mb-3">
                    <input type="password" name="ad_pass" class="form-control" placeholder="Password">
                </div>
                <div class="row">
                <div class="col-12">
                    <button type="submit" name="submit" class="btn btn-primary btn-block">Sign In</button>
                </div>
                </div>
                <div class="row pt-1">
                
            </form>
            </div>
            
        </div>
    </div>
    

</body>
</html>