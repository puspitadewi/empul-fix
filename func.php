<?php
$conn = mysqli_connect("localhost", "root", "", "empul2");
//$conn = mysqli_connect("127.0.0.1:3306", "u652632623_tata_db", "Tekfo-eclair02", "u652632623_tata_db");

function registrasi($data)
{

    global $conn;

    $firstname = stripslashes($data["first_name"]);
    $lastname = stripslashes($data["last_name"]);
    $email = $data["email"];
    $password1 = mysqli_real_escape_string($conn, $data["password1"]);
    $password2 = mysqli_real_escape_string($conn, $data["password2"]);
    $alamat = stripslashes($data["alamat"]);
    $hp = $data["hp"];
    $gender = $data["gender"];

   //$result = mysqli_query($conn, "INSERT INTO user VALUES('', '$firstname', '$lastname', '$email', '$password1', '$alamat', '$hp','$gender')");
    $result = mysqli_query($conn, "SELECT email FROM user WHERE email = '$email'");

    if (mysqli_fetch_assoc($result)) 
    {

        echo "<script>.alert(' Anda berhasil membuat akun'); document.location.href='login.php';</script>";
        return false;
    }



    if ($password1 !== $password2) {

      
        echo "<script>
        alert('password tidak sesuai');window.location.href='registration.php';
        </script>";
        return false;
    }

    $password1 = password_hash($password1, PASSWORD_DEFAULT);

    mysqli_query($conn, "INSERT INTO user VALUES('', '$firstname', '$lastname', '$email', '$password1', '$alamat', '$hp','$gender')");
    return mysqli_affected_rows($conn);
}

function query($query)
{
    global $conn;
    $result =  mysqli_query($conn, "SELECT email FROM user WHERE email = '$email'");
    //$result = mysqli_query($conn, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

function data($datad)
{

    global $conn;

    $lokasi = $datad["lokasi"];
    $bobot = $datad["bobot"];
    $tanggal = $datad["tanggal"];
    $jenis = $datad["jenis"];
    $hp = $datad["hp"];

    mysqli_query($conn, "INSERT INTO barang VALUES('', '$lokasi', '$bobot', '$tanggal', '$jenis','$hp')");
    return mysqli_affected_rows($conn);
  
}

function fb($datac)
{

    global $conn;

    $nama = $datac["nama"];
    $email = $datac["email"];
    $hp = $datac["hp"];
    $txt = $datac["txt"];

    mysqli_query($conn, "INSERT INTO fb VALUES('', '$nama', '$email', '$hp', '$txt')");
    return mysqli_affected_rows($conn);
}

function hapus($id)
{
    global $conn;
    mysqli_query($conn, "DELETE FROM barang WHERE id = $id");
    return mysqli_affected_rows($conn);
}

function ubah($datad)
{

    global $conn;

    $id = $datad["id"];
    $lokasi = $datad["lokasi"];
    $bobot = $datad["bobot"];
    $tanggal = $datad["tanggal"];
    $jenis = $datad["jenis"];


    $query = "UPDATE barang SET 
            lokasi = '$lokasi',
            bobot = '$bobot',
            tanggal = '$tanggal',
            jenis = '$jenis'
            WHERE id = $id
            ";
    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}

/*
function akun($data)
{

    global $conn;

    $firstname = stripslashes($data["first_name"]);
    $lastname = stripslashes($data["last_name"]);
    $email = $data["email"];
    $password1 = mysqli_real_escape_string($conn, $data["password1"]);
    $password2 = mysqli_real_escape_string($conn, $data["password2"]);
    $alamat = stripslashes($data["alamat"]);
    $hp = $data["hp"];
    $gender = $data["gender"];

    if ($password1 !== $password2) {

        echo "<script>
        alert('password tidak sesuai');
        </script>";
        return false;
    }

    $password1 = password_hash($password1, PASSWORD_DEFAULT);

    $query =     mysqli_query($conn, "SELECT email,password FROM user WHERE email = '$email' AND password = '$password1'");
    $num = mysqli_fetch_array($query);

    if($num > 0){


    $quee = "UPDATE user SET 
            first_name = '$firstname',
            last_name = '$lastname',
            email = '$email',
            password1 = '$password1',
            alamat = '$alamat',
            hp = '$hp',
            gender = '$gender'
            WHERE id = $id
            ";
    mysqli_query($conn, $quee);
    return mysqli_affected_rows($conn);
}} */