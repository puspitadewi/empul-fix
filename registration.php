<?php include('templates/header.php') ?>
<?php include('templates/head.php') ?>
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
                              <li class="active"> <a href="registration.php">signup</a> </li>
                            
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
      -webkit-user-select: none;
      s -moz-user-select: none;
      -ms-user-select: none;
      user-select: none;
    }

    @media (min-width: 768px) {
      .bd-placeholder-img-lg {
        font-size: 3.5rem;
      }
    }
  </style>
  <!-- Custom styles for this template -->
  <link href="css/floating-labels.css" rel="stylesheet">
</head>

<?php
require 'func.php';

if (isset($_POST["register"])) 
{
  if (registrasi($_POST) > 0) 
  {
     echo "<script>alert(' Selamat Anda berhasil membuat akun'); document.location.href='login.php';</script>";
  } 
  else 
  {
    echo mysqli_error($conn);
  }
}

?>
<title>Sign Up!</title>
</head>

<body>


  <div class="container h-100 pt-5">
    <div class="row align-itemes-center h-100 align-middle">
      <div class="col-6 mx-auto">
        <div class="jumbotron">
          <center>
            <h3>Sign Up</h3>
            <p>Ayo Daftar Empul Disini !</p>
          </center>
          <form action="" method="post">
            <div class="form-group">
              <label for="">First Name</label>
              <input autocomplete="off" autofocus="on" type="text" name="first_name" id="first_name" class="form-control"  placeholder="Masukkan First Name Anda" required autofocus>
            </div>
            <div class="form-group">
              <label for="">Last Name</label>
              <input autocomplete="off" autofocus="on" type="text" name="last_name" id="last_name" class="form-control" placeholder="Masukkan Last Name Anda"required>
            </div>
            <div class="form-group">
              <label for="">Email</label>
              <input autocomplete="off" autofocus="on" type="text" name="email" id="email" class="form-control" placeholder="Masukkan Email Anda" required>
            </div>
            <div class="form-group">
              <label for="">Password</label>
              <input autocomplete="off" autofocus="on" type="password" name="password1" id="password1" class="form-control" placeholder="Masukkan Password Anda" required>
            </div>
            <div class="form-group">
              <label for="">Retype Password</label>
              <input autocomplete="off" autofocus="on" type="password" name="password2" id="password2" class="form-control" placeholder="Masukkan RePassword Anda"required>
            </div>
            <div class="form-group">
              <label for="">alamat</label>
              <input autocomplete="off" autofocus="on" type="text" name="alamat" id="alamat" class="form-control"placeholder="Masukkan Alamat Anda"required>
            </div>
            <div class="form-group">
              <label for="">No.HP</label>
              <input autocomplete="off" autofocus="on" type="number" name="hp" id="hp" class="form-control"placeholder="Masukkan No.Hp Anda" required>
            </div>

            <div class="form-group">
              <label for="">Jenis Kelamin</label>
              <select  class="form-control custom-select " name="gender" id="gender" class="form-control" required>
              <option selected disabled> Jenis Kelamin </option>
                        <option value="1">Laki-Laki</option>
                        <option value="2">Perempuan</option>
             </select>
            </div>
            <button type="submit" name="register" class="btn btn-warning btn-block">Sign Up</button>
          </form>
        </div>
      </div>
    </div>
  </div>
  </div>

</html>
<?php include('templates/footer.php') ?>
<?php include('templates/foter.php') ?>