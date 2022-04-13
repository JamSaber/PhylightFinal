<?php

require_once('storeclass.php');
$store->add_user();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Sing Up</h1>

    <div class="form-container">
        <form action="" method="post">

            <div class="form-meter">
                <label for="">Meter Id</label>
                <input type="text" name="meter_id" id="meter_id" required>
            </div>

            <div class="form-username">
                <label for="">Username</label>
                <input type="text" name="username" id="username" required>
            </div>


            <div class="form-password">
                <label for="">Password</label>
                <input type="password" name="password" id="password" required>
            </div>

            <div class="form-email">
                <label for="">Email</label>
                <input type="email" name="email" id="email" required>
            </div>


            <div class="form-fname">
                <label for="">First Name</label>
                <input type="text" name="fname" id="fname">
            </div>

            <div class="form-lname">
                <label for="">Last Name</label>
                <input type="text" name="lname" id="lname">
            </div>

            <div class="form-number">
                <label for="">Contact Number</label>
                <input type="text" name="mobile" id="mobile">
            </div>


            <div class="form-address">
                <label for="">Address</label>
                <input type="text" name="address" id="address">
            </div>


            <button type="submit" name="add">Submit</button>

        </form>
    </div>

</body>

</html>