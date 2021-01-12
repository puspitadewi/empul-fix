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
    <title>Empul</title>
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
<!-- body -->

<body class="main-layout">
    <!-- loader  -->

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
                                        <li> <a href="info.php"> Trash Info</a> </li>
                                        <li class="active"> <a href="tc.php">Trash Collect</a> </li>
                                        <li> <a href="FB.php">FeedBack</a></li>

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
    $id = $_GET["id"];
    $edit = query("SELECT * FROM barang WHERE id = $id")[0];

    if (isset($_POST["submit"])) {
        if (ubah($_POST) > 0) {
            echo "<script>
  alert('data telah diubah');
  document.location.href = 'tc.php';
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
                        <h2>Trash Collect</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <div class="row">
                <div class="col-sm">
                    <div class="container h-100 pt-5">
                        <div class="row align-itemes-center h-100 align-middle">
                            <div class="col-8 mx-auto">

                                <center>
                                    <h3>Ayook Kumpul Sampah </h3>
                                </center>
                                <form action="" method="post">
                                    <input type="hidden" name="id" value="<?= $edit["id"];  ?>">
                                    <div class="form-group">
                                        <label for="">Lokasi baru</label>
                                        <input autocomplete="off" autofocus="on" type="text" name="lokasi" id="lokasi" class="form-control" value="<?= $edit["lokasi"];  ?>" placeholder="Masukkan Lokasi Anda">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Bobot</label>
                                        <input autocomplete="off" autofocus="on" type="number" name="bobot" id="bobot" class="form-control" value="<?= $edit["bobot"];  ?>" placeholder="Masukkan Bobot MIN 0,5 Kg">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Tanggal</label>
                                        <input autocomplete="off" autofocus="on" type="date" name="tanggal" id="tanggal" class="form-control" value="<?= $edit["tanggal"];  ?>" placeholder="Masukkan Y-M-D saat ini">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Jenis Sampah</label>
                                        <select autocomplete="off" autofocus="on" class="form-control custom-select " id="jenis" name="jenis">
                                            <option selected disabled> Pilih salah satu </option>
                                            <option value="1">Kain Sisa</option>
                                            <option value="2">Kertas</option>
                                            <option value="3">Kerdus/kotak</option>
                                            <option value="4">Plastik</option>
                                            <option value="5">Kaleng/Logam</option>
                                            <option value="6">Pakaian Bekas</option>
                                        </select>
                                    </div>
                                    <button type="submit" name="submit" class="btn btn-warning btn-block">Ubah</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
    <?php include('templates/foter.php') ?>