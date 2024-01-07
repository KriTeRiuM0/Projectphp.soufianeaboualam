<?php
include("prod.php");
include("connection.php");

$nameValue = "";
$prixValue = "";
$poduitValue = "";

$errorMesage = "";
$successMesage = "";

if (isset($_GET['idUpdatedprod'])) {
    $id = $_GET['idUpdatedprod'];

    
$row=prod::SelectByIdprod($conn,$id);

        $produitValue = $row["produit"];
        $nameValue = $row["namepro"];
        $prixValue = $row["Prixpro"];

        $image="<img src='images_Upload/$produitValue' class='rounded mx-auto d-block' >";

}

if (isset($_POST["submit"])) {
   // $produitValue = $_POST["produit"];
    $nameValue = $_POST["namepro"];
    $prixValue = $_POST["Prixpro"];

    if (empty($nameValue) || empty($prixValue)) {
        $errorMesage = "All fields must be filled out!";
    } else {
       prod::UpdateWithIdprod($conn,$id,$nameValue,$prixValue);
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>UPDATE Produit</title>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<div class="container my-5 ">

<h2>Update Produit</h2>

<?php

 if(!empty($errorMesage)){
echo "<div class='alert alert-warning alert-dismissible fade show' role='alert'>
<strong>$errorMesage</strong>
<button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'>
</button>
</div>";
}
 ?>
<?php  echo $image ?>
<br>
<form method="post" class="mx-auto">
<div class="row mb-3 mx-auto">
<label class="col-form-label col-sm-1" for="name">NamePrdt:</label>
<div class="col-sm-6">
<input value="<?php echo $nameValue ?>" class="form-control" type="text" id="namepro" name="namepro">
</div>
</div>
<div class="row mb-3">
<label class="col-form-label col-sm-1" for="Prixpro">PrixPrdt:</label>
<div class="col-sm-6">
<input value="<?php echo $prixValue ?>" class="form-control" type="number" id="Prixpro" name="Prixpro">
</div>
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
<a class="btn btn-outline-primary" href="affiprod.php">Cancel</a>
</div>
</div>
</form>

</div>

</body>
</html>