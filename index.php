<?php
    require_once 'koneksi.php';
    session_start();
    if(!isset($_SESSION['akun'])){
        echo "<script> 
                    alert('Silahkan login terlebih dahulu');
                    document.location.href = 'login.php';
                    </script>";
    }
    $ip = mysqli_query($db, 'SELECT * FROM ip');
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Assesment 2 - 6701190098</title>
        <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.15.3/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Saira+Extra+Condensed:500,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Muli:400,400i,800,800i" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top" id="sideNav">
            <a class="navbar-brand js-scroll-trigger" href="#page-top">
                <span class="d-block d-lg-none">Muhamad Ichsan Dwi Farhana</span>
                <span class="d-none d-lg-block"><img class="img-fluid img-profile rounded-circle mx-auto mb-2" src="assets/img/photo.jpeg" alt="..." /></span>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#about">About</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#experience">IP</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="login.php">Logout</a></li>
                </ul>
            </div>
        </nav>
        <!-- Page Content-->
        <div class="container-fluid p-0">
            <!-- About-->
            <section class="resume-section" id="about">
                <div class="resume-section-content">
                    <h2 class="mb-0">
                        Muhamad Ichsan
                        <span class="text-primary">Dwi Farhana</span>
                    </h2>
                    <div class="subheading mb-5">
                        6701190098
                        <br>
                        D3SI-43-03
                        <br>
                        <a href="mailto:mihsandf759@gmail.com">mihsandf759@gmail.com</a>
                    </div>
                    <p class="lead mb-5">Assesment 2 Pengembangan Aplikasi Berbasis Web.</p>
                </div>
            </section>
            <hr class="m-0" />
            <!-- Experience-->
            <section class="resume-section" id="experience">
                <div class="resume-section-content">
                    <h2 class="mb-5">IP</h2>
                    <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
                        <div class="flex-grow-1">
                            <?php
                                if(mysqli_num_rows($ip)<3){
                                    echo "<h3 class='mb-0'><button type='button' class='btn btn-primary' data-bs-toggle='modal' data-bs-target='#exampleModal'>
                                    Input IP
                                    </button></h3>
                                    <p>";
                                }
                            ?>
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">Semester</th>
                                        <th scope="col">IP</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        foreach($ip as $row){
                                            echo "<tr>
                                                    <td>".$row['semester']."</td>
                                                    <td>".$row['IP']."</td>
                                                    <td><a class='btn btn-primary' href='delete.php?semester=".$row['semester']."'>Delete</a>|
                                                    <a class='btn btn-primary' href='update.php?semester=".$row['semester']."&ip=".$row['IP']."'>Edit</a></td>
                                                  </tr>";
                                        }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>        
                </div>
            </section>
        </div>
        <!-- Bootstrap core JS-->
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Third party plugin JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/3.2.1/anime.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        <!-- Modal -->
        <form action="input.php" method="post">
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Input IP</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="mb-3 row">
                                <label for="inputIP" class="col-sm-2 col-form-label">Semester</label>
                                <div class="col-sm-10">
                                    <select class="form-control" aria-label="Default select example" name="semester">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                    </select>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="inputIP" class="col-sm-2 col-form-label">IP</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="inputIP" name = "ip">
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Input</button>
                            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </body>
</html>
