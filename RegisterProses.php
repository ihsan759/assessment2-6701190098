<?php
    require_once 'koneksi.php';
    session_start();
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $konfirmasi = $_POST['re-password'];
    $acak = md5($_POST['password']);
    if($konfirmasi != $password){
        echo "<script>alert('Password yang Anda Masukan Tidak Sama');history.go(-1)</script>";
    }else{
        $stmt = $db->prepare("INSERT INTO user (nama, email, username, password) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("ssss", $nama, $email, $username, $acak);
        $stmt->execute();
        $stmt->close();
        echo "<script> 
                    alert('Anda berhasil membuat akun, silahkan login');
                    document.location.href = 'login.php';
                    </script>";
    }            
?>