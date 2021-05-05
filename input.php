<?php
    require_once "koneksi.php";
    $ip = mysqli_query($db, "SELECT semester FROM ip where semester =".$_POST['semester']);
    foreach($ip as $ip){
        $semester = $ip['semester'];
    }
    if(isset($semester)){
        echo "<script> 
          alert('Semester tidak boleh sama.');
          document.location.href = 'index.php';
          </script>";
    }else{
        $stmt = $db->prepare("INSERT INTO ip (semester, IP) VALUES (?, ?)");
        $stmt->bind_param("is", $_POST['semester'] , $_POST['ip']);
        $stmt->execute();
        $stmt->close();

        echo "<script> 
            alert('IP berhasil di input.');
            document.location.href = 'index.php';
            </script>";
    }
?>