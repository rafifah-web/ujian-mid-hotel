<?php
session_start();
if(isset($_SESSION["login"])){header("Location: pages/dashboard.php");exit;}
$error="";
if($_SERVER["REQUEST_METHOD"]==="POST"){
  if(($_POST["username"]??"")==="admin" && ($_POST["password"]??"")==="admin123"){
    $_SESSION["login"]=true; $_SESSION["username"]="Admin Hotel"; header("Location: pages/dashboard.php"); exit;
  } $error="Username atau password salah.";
}
?><!doctype html><html lang="id"><head><meta charset="utf-8"><meta name="viewport" content="width=device-width,initial-scale=1"><title>Login • Hotel</title><link rel="stylesheet" href="assets/css/style.css"></head>
<body class="login-page"><div class="login-card"><div class="logo big"><span>🏨</span> Hotel</div><h1>Selamat datang kembali</h1><p>Masuk untuk mengelola sistem hotel.</p><?php if($error):?><div class="alert danger"><?=$error?></div><?php endif;?><form method="post"><label>Username<input name="username" placeholder="admin" required></label><label>Password<input type="password" name="password" placeholder="admin123" required></label><button class="btn primary full">Masuk</button></form><div class="demo">Demo: admin / admin123</div></div></body></html>