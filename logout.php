<?php ob_start(); ?>
<?php 
session_start();
session_destroy();
echo "<script>window.alert('Anda telah LogOut');window.close();window.location.href='index.php';</script>";

ob_end_flush();
exit;
?>