<?php
include("connection.php");
include("user.php");

if(isset($_POST['submit'])){
    $password =$_POST['password'];
    $email =$_POST['email'];
    echo $password;
    echo $email;

   user::SelectWithEmail($conn,$email,$password); 
}


?>
<html>
<head><link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous"></head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
<link rel="stylesheet" href="login.css">
</head>
<body>
    
<div1 class="card-container">
  <form  method="post">
    <div class="container">
        <div class="log-card">
    <p class="heading">Admin s log in</p>
    

    <div class="input-group">
        <p class="text">Email</p>
        <input class="input" type="email" placeholder="For Ex: Soufiane@gmail.com" name="email">
        <p class="text">Password</p>
        <input class="input" type="password" placeholder="Enter Password" name="password">
    </div>

    <div class="password-group">
        <div class="checkbox-group">
            <input type="checkbox">
            <label class="label">Remember Me</label>
        </div>
            <a href="" class="forget-password">Forget Password</a>
    </div>

    <button class="btn"  type="submit"  name="submit">Log In</button>

    <p class="no-account">Don't Have an Account ?Sign Up</p>
</div>
<span> <?php echo user::$msgerror; ?></span>
    </div>
</div1>
</form>
















</body>






</html>