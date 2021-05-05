<?php
    include 'koneksi.php';
    $stmt = $db->prepare("DELETE FROM ip WHERE semester = ?");
    $stmt->bind_param("i", $_GET['semester']);
    $stmt->execute();
    echo "<script> 
          alert('File berhasil di hapus.');
          document.location.href = 'index.php';
          </script>";
?>