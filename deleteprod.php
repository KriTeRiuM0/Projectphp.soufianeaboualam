<?php
include("connection.php");
include("prod.php");



if($_SERVER['REQUEST_METHOD']=='GET'){


$id=$_GET['idDeletedprod'];
prod::DeleteWitheIdprod($conn,$id);



}
?>