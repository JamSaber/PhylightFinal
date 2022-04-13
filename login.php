<?php

require_once('storeclass.php');
$store->login();

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
    <div class="container">
        <div class="form-container">
            <form action="" method="post">

            <h1>Sign in</h1>

                <div class="form-meter" required>
                    <label for="">Meter Id </label>
                    <input type="text" name="meter_id" id="meter_id" required>
                </div>

                <div class="form-username" required>
                    <label for="">Username</label>
                    <input type="text" name="username" id="username" required>
                </div>

                <div class="form-password" required>
                    <label for="">Password</label>
                    <input type="password" name="password" id="password" required>
                </div>

                <button type="submit" name="submit">Login</button>
                <button type="submit" name="forgot"> <a href="#">Forgot Password</a></button>


            </form>
        </div>

    </div>
</body>

</html>