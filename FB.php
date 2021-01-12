<?php include('templates/head.php') ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <!-- site metas -->
    <title>lighten</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- bootstrap css -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- style css -->
    <link rel="stylesheet" href="css/style.css">
    <!-- Responsive-->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- fevicon -->
    <link rel="icon" href="images/fevicon.png" type="image/gif" />
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
    <!-- Tweaks for older IEs-->
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
</head>
<!-- body -->

<body class="main-layout">
    <!-- loader  -->
    <div class="loader_bg">
        <div class="loader"><img src="images/loading.gif" alt="#" /></div>
    </div>
    <!-- end loader -->
    <!-- header -->
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
                                <div class="logo"> <a href="home.php"><img src="images/Empul.gif" alt="Empul" width="80" /></a> </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-7 col-lg-7 col-md-9 col-sm-9">
                        <div class="menu-area">
                            <div class="limit-box">
                                <nav class="main-menu">
                                    <ul class="menu-area-main">
                                        <li> <a href="home.php">Home</a> </li>
                                        <li> <a href="about.php">About</a> </li>
                                        <li > <a href="info.php"> Trash Info</a> </li>
                                        <li> <a href="tc.php">Trash Collect</a> </li>
                                        <li class="active"> <a href="FB.php">FeedBack </a> </li>

                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end header inner -->
    </header>

    <?php require 'func.php';
    $result = mysqli_query($conn, "SELECT * FROM fb");

    if (isset($_POST["submit"])) {
        if (fb($_POST) > 0) {
            echo "<script>
  alert('Terima kasih telah memberi Feedback 😊😊');
  </script>";
        } else {
            echo mysqli_error($conn);
        }
    }
    ?>
    <div class="brand_color">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="titlepage">
                        <h2>FeedBack Us</h2>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- contact -->
    <div class="contact">
        <div class="container">
            <div class="row">
                <div class="col-md-12">

                    <form action="" method="post" class="main_form">
                        <div class="row">
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                                <input class="form-control" placeholder="Nama Anda" type="text" id="nama" name="nama" required > 
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                                <input class="form-control" placeholder="Email Anda" type="text" id="email" name="email" required  >
                            </div>
                            <div class=" col-md-12">
                                <input class="form-control" placeholder="No.Phone Anda" type="number" id="hp" name="hp" required > 
                            </div>
                            <div class="col-md-12">
                                <input class="textarea" placeholder=" Max 2600 Kata" type="text" name="txt" id="txt" required ></input>
                            </div>
                            <div class=" col-md-12">
                                <button type="submit" name="submit" class="send">Send</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- end contact -->



    <?php include('templates/foter.php') ?>