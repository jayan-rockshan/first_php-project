<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>signin system</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class= 'header'><h2>register</h2></div>



<form  method='post' action="registration.php">


    <div class="input-group">
        <label>Username</label>
        <input type="text" name='username'>
    </div>
    <div class="input-group">
        <label>Email</label>
        <input type="email" name='email'>
    </div>
    <div class="input-group">
        <label>Password</label>
        <input type="password" name='password'>
    </div>
    
    <div class="input-group">
        <input type="submit" name='signup' class='btn'>
    </div>
    <p>Already a member? <a href="signin.php">Sign in</a></p>
</form>
    


</body>
</html>