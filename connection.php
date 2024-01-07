<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test"; 

$conn = new mysqli($servername, $username , $password, $dbname);
if($conn->connect_error){
    die("not connected".$conn->connect_error);
}else{
    echo "";
}

/*if($_SERVER["REQUEST_METHOD"] == "POST"){
$name =$_POST['name'];
$password =$_POST['password'];
$email =$_POST['email'];
$phonenumber =$_POST['phonenumber'];




  $sql="INSERT INTO tableau1(fullname,password1,email,phonenumber)
       values('$name','$password','$email','$phonenumber')";

       if($conn ->query($sql) === true){
        //echo "infos transfered";
       }
       else{
        echo"not transfered";
    }
}
//$sql = "CREATE DATABASE test";
//if (mysqli_query($conn, $sql)) {
//echo "Database created successfully";
//} else {
//echo "Error creating database: " . mysqli_error($conn);
//}

//$query = "
//CREATE TABLE test.tableau1 (
//id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
//fullname VARCHAR(30) NOT NULL,
//password1 VARCHAR(30) NOT NULL,
//email VARCHAR(50) UNIQUE,
//phonenumber VARCHAR(80),
//)
//";
//if (mysqli_query($conn, $query)) {
//echo "Table tableau1 created successfully";
//} else {
//echo "Error creating table: " . mysqli_error($conn);
//}*/
?>
