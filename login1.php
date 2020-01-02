<?php 

ob_start();
session_start();
error_reporting();

$connect = new mysqli ("localhost","root","","web");
if(isset($_POST['id'])) { 
  $username = $_POST['username'];
  $password = $_POST['pass'];

  header("location:index.php");
}else{
 ?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<style>
body {
  	  background: url(img/11.jpg) no-repeat center center fixed;
	  -webkit-background-size: cover;
	  -moz-background-size: cover;
	  -o-background-size: cover;
	
}
</style>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Halaman Log in</title>
	<!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
   <link rel="stylesheet" type="text/css" href="styles.css">


</head>
<body>
    <div class="container">
        <div class="row text-center ">
            <div class="col-md-12">
                <br /><br />
            <h1 class="display-4"><span class="font-weight-bold" text="d"></span> </h1>
            <br/>
            </div>
        </div>
         <div class="row ">
                  <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                      <center><h3> <strong>LOG IN COFFEE MONITORING</strong> </h3>  </center> 
                            </div>
                            <div class="panel-body">
                                <form role="form" method="POST">
                                       <br />
                                     <div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-tag"  ></i></span>
                                            <input type="text" class="form-control" name="username" placeholder="Your Username " />
                                        </div>
                                            <div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-lock"  ></i></span>
                                            <input type="password" class="form-control" name="pass"  placeholder="Your Password" />
                                        </div>
                                        <center><input type="submit" name="login" value="Login" class="btn btn-primary"></center>   

                                    </form>
                            </div>
                           
                        </div>
                    </div>
                
                
        </div>
    </div>


     <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>
   
</body>
</html>

<?php

 if (isset($_POST['login'])){
  $username = $_POST['username'];
  $pass = $_POST['pass'];

  $sql = $connect->query("select * from user where username='$username' AND password='$pass' ");
  $data = $sql->fetch_assoc();

  $bener = $sql->num_rows;

  if ($bener >=1) {
    
    if ($data['level']=="Admin") {
      $_SESSION['admin'] = $data['id'];
      header("location:index.php");

    }elseif ($data['level']=="User") {
      $_SESSION['user'] = $data['id'];
      header("location:index.php");
    }
 
  }else{
    ?>

    <script type="text/javascript">
      alert("Log in Gagal! Username & Password Salah!")
    </script>

    <?php
  }
  }
 }

?>
