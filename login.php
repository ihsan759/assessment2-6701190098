<?php
  session_start();
  session_destroy();
?>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" />
    <meta name="generator" content="Jekyll v4.1.1">
    <title>Login</title>
    <link rel="canonical" href="">
    <!-- Bootstrap core CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
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
    <link href="styleLogin.css" rel="stylesheet">
</head>
<body class="text-center">
    <form class="form-signin" action="LoginProses.php" method="POST">
        <img class="mb-4" src="gambar.jpg" alt="" width="72" height="72">
        <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>
        <label for="inputEmail" class="sr-only">Email address / Username</label>
        <input type="text" id="inputEmail" class="form-control" placeholder="Email address / Username" required autofocus name="akun">
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" id="inputPassword" class="form-control" placeholder="Password" required name="password">
        <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
        <div class="form-footer mt-2">
          <p> Belum punya account? <a href="register.html">Register</a></p>
        </div>
        <p class="mt-5 mb-3 text-muted">© Muhamad Ichsan Dwi Farhana 2021</p>
    </form>
</body>
</html>