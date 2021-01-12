<?php
require 'func.php';
$id = $_GET["id"];

if (hapus($id) > 0) {
  echo "
    <script>
  alert('data berhasil dihapus');
  document.location.href = 'tc.php';
  </script>
  ";
} else {
  echo "<script>
  alert('data belum berhasil dihapus');
  document.location.href = 'tc.php';
  </script>";
}
