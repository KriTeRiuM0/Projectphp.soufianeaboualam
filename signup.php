<?php
include("connection.php");
include("user.php");

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $name =$_POST['name'];
    $password =$_POST['password'];
    $email =$_POST['email'];
    $phonenumber =$_POST['phonenumber'];
    

    $user=new user($name,$password,$email, $phonenumber);
    $user->insertdata($conn);
    echo user::$msgerror;

}
?>
<html>
<head>
    <title>Singup</title>
<link rel="stylesheet" href="sign up.css">
</head> 
<body>
<div id="form">
<form id = "form"  method="POST">
<h1>Sign Up</h1>
<table>
<tr></tr>
   <th> <label for="name">Name</label></th>
   <td> <input type="text" name="name" placeholder="enter your name"required></td>
</tr>
<tr>
<th> <label for="password">Password</label></th>
<td> <input type="text" name="password" placeholder="enter your password"required></td>

    </tr>
    <tr>

    <th>  <label for="email" >Email</label></th>
    <td> <input type="email" name="email" placeholder="enter your email"required></td>

    </tr>
    <tr>

    <th>   <label for="phonenumber">PhoneNumber</label></th>
    <td> <input type="number" name="phonenumber" placeholder="enter your phone number"required></td>

    </tr>
    </table>
    <button type='submit' >SignUp</button>


</form>

</div>
<a href="AFFI.PHP">AFFICHAGE</a>
</body>



</html>