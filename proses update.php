<?php
    include 'koneksi.php';
    $stmt = $db->prepare("UPDATE ip SET IP = ? WHERE semester = ?");
    $stmt->bind_param("si", $_POST['ip'],$_POST['semester']);
    $stmt->execute();
    $stmt->close();
    echo "<script> 
          alert('IP berhasil di update.');
          document.location.href = 'index.php';
          </script>";
?>