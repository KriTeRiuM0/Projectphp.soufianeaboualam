<?php
include("user.php");
include("connection.php");

$emailValue = "";
$nameValue = "";
$numberValue = "";

$errorMesage = "";
$successMesage = "";

if (isset($_GET['idUpdated'])) {
    $id = $_GET['idUpdated'];

    
$row=user::SelectById($conn,$id);

        $emailValue = $row["email"];
        $nameValue = $row["fullname"];
        $numberValue = $row["phonenumber"];
    }

if (isset($_POST["submit"])) {
    $emailValue = $_POST["email"];
    $nameValue = $_POST["fullname"];
    $numberValue = $_POST["phonenumber"];

    if (empty($emailValue) || empty($nameValue) || empty($numberValue)) {
        $errorMesage = "All fields must be filled out!";
    } else {
       user::UpdateWithId($conn,$id,$emailValue,$nameValue,$numberValue);
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>UPDATE</title>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<div class="container my-5 ">

<h2>Update</h2>

<?php

 if(!empty($errorMesage)){
echo "<div class='alert alert-warning alert-dismissible fade show' role='alert'>
<strong>$errorMesage</strong>
<button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'>
</button>
</div>";
}
 ?>

<br>
<form method="post" class="mx-auto">
<div class="row mb-3 mx-auto">
<label class="col-form-label col-sm-1" for="name">First Name:</label>
<div class="col-sm-6">
<input value="<?php echo $nameValue ?>" class="form-control" type="text" id="name" name="fullname">
</div>
</div>
<div class="row mb-3">
<label class="col-form-label col-sm-1" for="phonenumber">Phonenumber:</label>
<div class="col-sm-6">
<input value="<?php echo $numberValue ?>" class="form-control" type="number" id="phonenumber" name="phonenumber">
</div>
</div>
<div class="row mb-3 ">
<label class="col-form-label col-sm-1" for="email">Email:</label>
<div class="col-sm-6">
 <input value=" <?php echo $emailValue ?>" class="form-control" type="email" id="email" name="email">
</div>
</div>

<?php
if(!empty($successMesage)){
echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
<strong>$successMesage</strong>
<button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'>
</button>
</div>";
}
?> 


<div class="row mb-3">
<div class="offset-sm-1 col-sm-3 d-grid">
<button name="submit" type="submit" class=" btn btn-primary">Update</button>
</div>
<div class="col-sm-1 col-sm-3 d-grid">
<a class="btn btn-outline-primary" href="AFFI.php">Cancel</a>
</div>
</div>
</form>

</div>

</body>
</html>
