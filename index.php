<?php

require_once('storeclass.php');
$users = $store->getUsers();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <title>PhyLight</title>

</head>

<body>

<div class="container">
<div class="topnav" id="myTopnav">
  <a href="index.php" class="active">Home</a>
  <a href="login.php">Sign In</a>
  <a href="#contact">Contact Us to Sign Up</a>
  <a href="#about">About</a>
  <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i>
  </a>
</div>

<div class="header">
  <h1 class="phylight">PhyL<img class="thunder" src="img/thunder.png" alt="">ght</h1>
  <p>Smart meters measure how much the electricity you're using via a remote connection to your energy supplier.<br>They come with an in-home display screen to help you see how much energy you're using and whether you can reduce your energy consumption..</p>
</div>

</div>


<script>
function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}
</script>



</body>

</html>