
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <title>Contact Us</title>
</head>
<body>
<style>
input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

input[type=submit] {
    background-color: #fbdb07;
  color: black;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
</style>

<div style="overflow-y: scroll;" class="conta">


<div class="container">
<h1 style="color:#fbdb07">Contact Form</h1>

  <form style="color: white;">
    <label >First Name</label>
    <input type="text"  placeholder="Your name..">

    <label >Last Name</label>
    <input type="text"  placeholder="Your last name..">

    <label >Brgy</label>
    <input type="text"  placeholder="Datu Saber">
    

    <label>Subject</label>
    <textarea placeholder="Write something.." style="height:200px"></textarea>

   <button><a style="text-decoration: none; color:black;" href="login.php">Submit</a></button>
   <button><a style="text-decoration: none; color:black;" href="login.php">Back</a></button>
  </form>
  </div>
</div>
</body>
</html>