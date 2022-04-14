<?php

require_once('storeclass.php');
$store->login();

$userdetails = $store->get_userdata();
if(isset($userdetails)){

    if($userdetails['access'] == "user"){
    header("location: user.php");
    }

    else if($userdetails['access'] == "administrator"){
        header("location: admin.php");
        }
else{
    header("location: login.php");
}
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
    <title>Sing In</title>
</head>

<body>
    <div class="container">
        <div class="form-container">
        <h1>Sign in</h1>
            <form action="" method="post">

                <div class="form-login" required>
                    <label for="" >Meter Id <br></label>
                    <input type="text" name="meter_id" id="meter_id" required>
                </div>

                <div class="form-login" required>
                    <label for="">Username <br></label>
                    <input type="text" name="username" id="username" required>
                </div>

                <div class="form-login" required>
                    <label for="">Password<br></label>
                    <input type="password" name="password" id="password" required>
                </div>

                <button type="submit" name="submit">Login</button>
                <button type="submit" name="forgot"> <a  class="forgot" href="index.php">Back</a></button>
                <button type="submit" name="forgot"> <a  class="forgot" href="index.php">Forgot Password</a></button>
       


            </form>
        </div>

    </div>
</body>

</html>