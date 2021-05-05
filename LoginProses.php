<?php
    require_once 'koneksi.php';
    session_start();
    $akun  = $_POST['akun'];
    $password   = md5($_POST['password']);

    $sql    = "SELECT * FROM user WHERE email ='$akun' AND password= '$password' OR username = '$akun' AND password= '$password'";

                
    $query  = mysqli_query($db, $sql);

    if (mysqli_num_rows($query) > 0){
        $row = mysqli_fetch_assoc($query);
        $_SESSION['akun']      	= $row['id'];

        echo "<script> 
                    alert('Anda berhasil login');
                    document.location.href = 'index.php';
                    </script>";

    }else{
        echo "<script> 
                    alert('Username atau Password salah');
                    document.location.href = 'login.php';
                    </script>";
    }
?>