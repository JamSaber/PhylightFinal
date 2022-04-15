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
    
    <title>Document</title>
</head>
<body>
    <div class="container">

            <div class="user-menu">
            <div class="user-button">
                    <button><a class="forgot"  href="contact.php">Contact Us</a></button>
            </div>

            <div class="user-button">
                    <button><a class="forgot"  href="electricchart.php">Electric Graph</a></button>
            </div>

            <div class="user-button">
                    <button><a class="forgot"  href="">Electric Bill</a></button>
            </div>

            <div class="user-button">
                    <button><a class="forgot" href="logout.php">logout</a></button>
            </div>

            </div>
        </div>

    </div>
    <script>

</script>
</body>
</html>