<?php 
    session_start();
    error_reporting();

    include "koneksi.php";

$url=$_SERVER['REQUEST_URI'];
header("Refresh: 5; URL=$url");  // Refresh the webpage every 5 seconds
$connect = new mysqli ("localhost","root","","web");
if(isset($_SESSION['admin']) ||isset($_SESSION['user'])) {

?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
     integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
     <link rel="stylesheet" type="text/css" href="admin.css">
     <link rel="stylesheet" type="text/css" href="fonta/css/all.min.css">
     <link rel="stylesheet" type="text/css" href="assets/js/gritter/css/jquery.gritter.css" />
     <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="style.css">
  </head>
  <body>
  <body id="page-top">
  <nav class="navbar navbar-expand-lg navbar-light bg-success">
  <a class="navbar-brand">COFFEE MONITORING</a>
    <form class="form-inline my-2 my-lg-0 ml-auto">
    </form>

    <div class="icon ml-6">
    <a href="logot.php" class="btn btn-danger square-btn-adjust">Logout <a>
      </h5>
    </div>
  </div>
</nav>
<div class="row no-gutters mt-0">
  <div class="col-md-2 bg-dark mt-0 pr-3 pt-3">
  <ul class="nav flex-column ml-3 mb-5">
  <li class="nav-item">
    <a class="nav-link active text-white" href="http://localhost/kopi/admin.php"><i class="far fa-address-book mr-2"></i>Coffee Admin</a><hr class="bg-secondary">
  </li>
  <li class="nav-item">
    <a class="nav-link active text-white" href="http://localhost/kopi/kopi.php"><i class="fas fa-mug-hot mr-2"></i>Coffee  Type</a><hr class="bg-secondary">
  </li>
  <li class="nav-item">
    <a class="nav-link text-white" href="http://localhost/kopi/datakopi.php"> <i class="fas fa-th-list mr-2"></i>Coffee Drink</a><hr class="bg-secondary">
  </li>
  </ul>
  </div>
  <div class="col-md-10 p-3 pt-2"> <h3><center><i class="fas fa-mug-hot mr-2"></i>COFFEE ADMIN</center></h3><hr>
  <table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">USERNAME</th>
      <th scope="col">PASSWORD</th>
      <th scope="col">NAME</th>
      <th scope="col">ACTION</th>
    </tr>
  </thead>
<?php  
if (isset($_GET['aksi']) =='hapus' ){
  $SQL=$connect  ->query("DELETE FROM ngopi WHERE id=".$_GET['id']);
  if($SQL){
      
  }else
  echo "gagal";
}
?>

  <?php
  $query = mysqli_query ($connect, "SELECT * FROM user");
  while($data = mysqli_fetch_array($query)){
  ?>
  <tbody>
    <tr> 
      <td><?php echo $data['id']; ?></td>
      <td><?php echo $data['username']; ?></td>
      <td><?php echo $data['password']; ?></td>
      <td><?php echo $data['nama']; ?></td>
      <td>
      <a onclick="return confirm('Apakah Anda Yakin Ingin Menghapus Ini ?')" href="?page=kopi&aksi=hapus&id=<?php echo $data['id']?>" class="btn btn-success"><i class="fa fa-trash"></i>Delete</a>
     </td>
    </tr>
    <?php } ?>
    </tbody>
</table>
    
  </thead>
  </tbody>
  
  <script src="https://code.highcharts.com/highcharts.js"></script>
  <script src="https://code.highcharts.com/highcharts.js"></script>
  <script src="https://code.highcharts.com/modules/exporting.js"></script>
  <script src="https://code.highcharts.com/modules/export-data.js"></script>

<div id="container" style="min-width: 310px; height: 500px; margin: 0 auto"></div>
</table>
  <div class="row"></div>
</div>
</div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script type="text/javascript" src="admin.js"></script>
  </body>
</html>

<?php

}else{
    header("location:login1.php");
} 

 ?>