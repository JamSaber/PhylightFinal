<?php

require_once('storeclass.php');
$store->add_user();
$userdetails = $store->get_userdata();

if(isset($userdetails)){

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
    <title>Sign Up</title>
</head>

<body>
    <div class="container">
    <div class="form-container">
    <h1>Sign Up</h1>
        <form action="" method="post">


            <div class="form-login">
                <input type="text" placeholder="Meter ID" name="meter_id" id="meter_id" required>
            </div>

            <div class="form-login">
                <input type="text" placeholder="Usernamer"  name="username" id="username">
            </div>


            <div class="form-login">
                <input type="password" placeholder="password" name="password" id="password">
            </div>

            <div class="form-login">
                <input type="email" placeholder="Email" name="email" id="email" >
            </div>


            <div class="form-login">
                <input type="text" placeholder="First Name"  name="fname" id="fname">
            </div>

            <div class="form-login">
                <input type="text" placeholder="Last Name" name="lname" id="lname">
            </div>

            <div class="form-login">
                <input type="text" placeholder="Contact Number" name="mobile" id="mobile">
            </div>


            <div class="form-login">
                <input type="text" placeholder="Address" name="address" id="address">
            </div>
            
            <div class="form-login">
                <input type="text" placeholder="Administrator or User" name="access" id="access">
            </div>


            <button type="submit" name="add">Submit</button>
            <button type="submit" name="add"><a class="forgot" href="admin.php">Back</a></button>

        </form>
    </div>
    </div>

</body>

</html>