<?php
include("connection.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Client</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="page22.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel='stylesheet' href='https://unicons.iconscout.com/release/v4.0.8/css/line.css'>

</head>
<style>
.card{
    box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
    transition: .5s;
}
.card:hover{
    box-shadow: rgba(0, 0, 0, 0.25) 0px 54px 55px, rgba(0, 0, 0, 0.12) 0px -12px 30px, rgba(0, 0, 0, 0.12) 0px 4px 6px, rgba(0, 0, 0, 0.17) 0px 12px 13px, rgba(0, 0, 0, 0.09) 0px -3px 5px;
    transition: .5s;

}

</style>
<body>


    <div class="container my-5 ">



    <h2>Welcom to my Store</h2>

<br>
<br>

      
    <?php
    $sql= "SELECT * from tableau2";
    $result=mysqli_query($conn,$sql);
     if($result){
        echo "<div class='row row-cols-1 row-cols-md-4 g-4 mx-5'>";
        while($row=mysqli_fetch_assoc($result)){
        $id =$row["id"];
        $nameprod =$row["namepro"];
        $prixprod =$row["Prixpro"];
        $produit =$row["produit"];
        

        echo "
        <div class='col'>
        <div class='card'>
          <img src='images_Upload/$produit' class='card-img-top' alt='...' height='250px'>
          <div class='card-body'>
            <h1 class='card-title'>$nameprod</h1>
            <h5 class='card-text'>Price: $prixprod $</h5>
            <div class='d-grid gap-2 col-6 mx-auto'>
                <a type='button' class='btn btn-outline-dark fw-semibold' href='https://www.zara.com/ma/?idUpdatedprod=$id'><i class='uil uil-shopping-cart-alt'></i> Buy</a>
            </div>
          </div>
        </div>

";
echo "</div>";

    }}

     
    ?>