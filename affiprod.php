<?php
include("connection.php");
include("prod.php")
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
</head>
<body>


    <div class="container my-5 ">



    <h2>Welcom to my ...</h2>

<br>
<br>
<button type='submit' class='btn btn-primary btn-sm'><a href='AFFI.PHP'class='text-light'>DATA USER</a></button>
<button type='submit' class='btn btn-primary btn-sm'><a href='addprod.php'class='text-light'>Add Product</a></button>
        <table class="table"  id="table">
            <thead>
             <tr>
                  <th>ID</th>
                  <th>Name Produit</th>
                  <th>Prix Produit</th>
                 <th>Produit</th>
                 <th>Action</th>
             </tr>
             </thead>
             <tbody>
    <?php
    $sql= "SELECT * from tableau2";
    $result=mysqli_query($conn,$sql);
     if($result){
        while($row=mysqli_fetch_assoc($result)){
        $id =$row["id"];
        $nameprod =$row["namepro"];
        $prixprod =$row["Prixpro"];
        $produit =$row["produit"];
        

        echo "
        <tbody>
    <tr>
      <th scope='row'>$id</th>
      <td>$nameprod</td>
      <td>$prixprod</td>
      <td>$produit</td>
      <td><a href='updateprdt.php?idUpdatedprod=$id' class='btn btn-primary btn-sm'>UpdatePrdt</a></td>
      <td><button type='submit' class='btn btn-danger  btn-sm'><a href='deleteprod.php?idDeletedprod=$id'class='text-light'>RemovePrdt</a></button></td>
    </tr>";
    
        
       
     
    }}

     
     ?>