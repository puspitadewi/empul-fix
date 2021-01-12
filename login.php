<?php include('templates/header.php') ?>
<?php include('templates/head.php') ?>
<?php ob_start(); ?>
 <!-- Custom styles for this template -->
 <header>
         <!-- header inner -->
         <div class="header">
            <div class="head_top">
               <div class="container">
                  <div class="row">
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                       <div class="top-box">
                        <ul class="sociel_link">
                        <li class="box-social"> <a href="https://twitter.com/"><i class="fa fa-twitter"></i></a></li>
                         <li class="box-social"> <a href="https://www.instagram.com/"><i class="fa fa-instagram"></i></a></li>
                         <li class="box-social"> <a href="https://www.linkedin.com/"><i class="fa fa-linkedin"></i></a></li>
                     </ul>
                    </div>
                  </div>
                  <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                       <div class="top-box">
                       <p>Website Pengepul Sampah <br>By Sri Puspita Dewi</p>
                    </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="container">
            <div class="row">
               <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col logo_section">
                  <div class="full">
                     <div class="center-desk">
                        <a class="navbar-brand"> Empul</a>
                        <div class="logo">  <a href="index.php"><img src="images/Empul.gif" alt="Empul" width="80" /></a> </div>
                     </div>
                  </div>
               </div>
               <div class="col-xl-7 col-lg-7 col-md-9 col-sm-9">
                  <div class="menu-area">
                     <div class="limit-box">
                        <nav class="main-menu">
                           <ul class="menu-area-main">
                              <li class="mean-last"> <a href="index.php">Home</a> </li>
                              <li class="meang-last"> <a href="registration.php">signup</a> </li>
                               
                           </ul>
                        </nav>
                     </div>
                  </div>
               </div>
               <div class="col-xl-2 col-lg-2 col-md-2 col-sm-2">
                  <li><a class="buy" href="login.php">Login</a></li>
               </div>
            </div>
         </div>
         </div>
         <!-- end header inner --> 
      </header>
      <!-- end header -->

<?php
require 'func.php';
if (isset($_POST["login"])) {
   $email = $_POST["email"];
   $password1 = $_POST["password1"];

   $result = mysqli_query($conn, "SELECT * FROM user WHERE email = '$email'");

   if (mysqli_num_rows($result) == 1) {
      $row = mysqli_fetch_assoc($result);
      if ( password_verify($password1, $row["password"])) 
      {
         echo "<script>window.alert('Selamat, Anda berhasil Log In!!');window.location.href='home.php';</script>";
         /*header("Location: index.php");*/
        ob_end_flush();
         exit;
      }
      
   }

   else 
   {
      echo "<script>window.alert('Gagal Sign In!!');window.location.href='login.php';</script>";
   }
   $error = true;
}
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="generator" content="Jekyll v4.1.1">
    <title>Log In Empul</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/floating-labels/">

    <!-- Bootstrap core CSS -->
<link href="css/bootstrap.min.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;s
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
        
         <link href="css/floating-labels.css" rel="stylesheet">
         </head>
  <body>
    <div class="container h-100 pt-5">
      <div class="row align-itemes-center h-100 align-middle">
         <div class="col-6 mx-auto">
            <div class="jumbotron">
               <center>
         <div class="text-center mb-4">
         <img class="mb-4" src="images/Empul.gif" alt="" width="90" >
         <h1 class="h3 mb-3 font-weight-normal">Log In</h1>
         <p>Masukkan Email dan Password anda dengan Benar !</p>
        </div>
               </center>
               <?php if (isset($error)) : ?>
                  <p style="color: red">incorrect username/password</p>
               <?php endif; ?>

               <form action="" method="post">
                  <div class="form-group">
                     <label for="">Email</label>
                     <input autocomplete="off" autofocus="on" type="text" name="email" id="email" class="form-control" placeholder="Masukkan Email Anda" required autofocus>
                  </div>
                  <div class="form-group">
                     <label for="">Password</label>
                     <input autocomplete="off" autofocus="on" type="password" name="password1" id="password1" class="form-control"  placeholder="Masukkan Password Anda" required>
                  </div>
                  <button type="submit" name="login" class="btn btn-primary btn-block">log In</button>
                  <button class="btn btn-primary btn-block"><a class="text-light " href="registration.php">Sign up</a></button> 

               </form>
            </div>
         </div>
      </div>
   </div>


</html>

<?php include('templates/foter.php') ?>
<?php include('templates/footer.php') ?>