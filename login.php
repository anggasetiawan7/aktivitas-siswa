<?php   
  include "config/koneksi.php";
  if(isset($_POST['submit'])){
    $sql = mysqli_query($con, "INSERT INTO tb_login(username,password) values ('$_POST[username]','$_POST[password]')");
    if ($sql) {
      echo "<script>alert('selamat datang');document.location.href='jadwal.php'</script>";
      
    }else{
      echo "<script>alert('Data gagal di simpan');</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title></title>

  <!-- Custom fonts for this template-->
  <style type="text/css">
@import "login.css";
</style>
  <!-- <link rel="stylesheet" type="text/css" href="login.css"> -->

 
</head>
<body class="bg-gradient-primary">
<div class="kotaklogin">
      <h1 align="center">selmat datang di aplikasi kegiatan peserta didik</h1>
     <div class="login">
      <div class="fromlogin"></div>
  <div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-xl-10 col-lg-12 col-md-9">

        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
              <div class="col-lg-6 d-none d-lg-block">
                <img src="image/foto2.jfif" style="display: block; margin: auto;">                
              </div>
              <div class="col-lg-6">
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4" align="center">Login </h1>
                  </div>
                  <form method="post" class="user" name="pendaftaran" action="" align="center">
                    <div class="form-group">
                      <input type="text" name="username" class="form-control form-control-user" placeholder="username">
                    </div>
                    <div class="form-group">
                      <input type="text" name="password" class="form-control form-control-user" placeholder="password">
                    </div>
                    <input type="submit" name="submit" value="Mulai" class="btn btn-primary btn-user btn-block">
                  </form>
     
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>

  </div>
  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

</body>

</html>