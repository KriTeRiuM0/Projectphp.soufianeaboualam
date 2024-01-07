<?php
include("connection.php");
include("user.php");



if($_SERVER['REQUEST_METHOD']=='GET'){


$id=$_GET['idDeleted'];
user::DeleteWitheId($conn,$id);



}
?>
