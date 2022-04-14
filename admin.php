<?php

require_once('storeclass.php');
$store->add_user();
$userdetails = $store->get_userdata();

if (isset($userdetails)) {
    if($userdetails['access'] != "administrator"){
        header("location: login.php");
        }
} else {
    header("location: login.php");
}
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
    <title>Document</title>
</head>

<body>
    <div class="container">
        <div class="sidenav" id="mySidenav">
            <a href="admin.php" class="active">Admin</a>
            <a href="adduser.php">Add User</a>
            <a href="#contact">User List</a>
            <a href="logout.php">Logout</a>
        </div>

    </div>
</body>

</html>