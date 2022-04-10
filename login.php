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

                <div class="form-meter">
                    <label for="">Meter Id </label>
                    <input type="text" name="username" id="MeterId" required>
                </div>

                <div class="form-username">
                    <label for="">Username</label>
                    <input type="text" name="username" id="username" required>
                </div>

                <div class="form-password">
                    <label for="">Password</label>
                    <input type="password" name="password" id="password" required>
                </div>

                <button type="submit" name="submit">Login</button>

            </form>
        </div>

    </div>
</body>

</html>