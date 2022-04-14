<?php

require_once('storeclass.php');

$userdetails = $store->get_userdata();

if(isset($userdetails)){

    if($userdetails['access'] != "user"){
        header("location: login.php");
        }
}else{
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
    <link rel="stylesheet" href="https://docs.google.com/spreadsheets/d/1OsXKLZHf1Qo426_72dAdDNEcXcAHnhR65lwcI9Mz5B8/edit?usp=sharing">
    <title>Chart</title>
</head>
<body>
    <div class="container">
        <div class="graph">
            <div class="button-line">
    <div class="user-button">
                    <button><a class="forgot" href="user.php">Back</a></button>
            </div>
        <div class="user-button">
                    <button><a class="forgot" href="logout.php">Logout</a></button>
            </div>
            </div>
        <div class="googlesheet">
        <iframe src="https://docs.google.com/spreadsheets/d/e/2PACX-1vQxeTRhu4kHY0dquc5M0WJeXsLKh3y9NPM0V7N8owGo1buoVMg16UZ4cF1geIX_XVXV0BrTQs8MkL_J/pubhtml?widget=true&amp;headers=false"></iframe>
            <a style="color:white" class="forgot" href="https://docs.google.com/spreadsheets/d/1OsXKLZHf1Qo426_72dAdDNEcXcAHnhR65lwcI9Mz5B8/edit?usp=sharing">View in GoogleSheet</a>
        </div>
        </div>
    </div>
</body>
</html>