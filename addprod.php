<?php 
include("connection.php");
include("prod.php");
if(isset($_POST["submit"])){
    $nameprod =$_POST['nameprod'];
    $prixprod =$_POST['prixprod'];
   $produit =$_POST['produit'];
    

    
    $file=$_FILES["image"]["name"];
    $path=$_FILES["image"]["tmp_name"];
    $folder='images_Upload/'.$file;
    $prod=new prod($nameprod,$prixprod,$file);
    $prod->insertdataprod($conn);
    echo prod::$msgerror;
    move_uploaded_file($path,$folder);

}
?>
<html>*
<head>
    <title>Add Produit</title>
<link rel="stylesheet" href="sign up.css">
</head> 
<body>
<div id="form">
<form id = "form"  method="post" enctype="multipart/form-data">
<h1>Add Produit</h1>
<table>
<tr></tr>
   <th> <label for="name">Name Produit</label></th>
   <td> <input type="text" name="nameprod" placeholder="enter Produit name"required></td>
</tr>
<tr>
<th> <label for="prixprod">Prix du Produit</label></th>
<td> <input type="number" name="prixprod" placeholder="enter le prix du produit"required></td>

    </tr>
    <tr>
<th> <label for="Produit">Produit</label></th>
<td> <input type="file" name="image" placeholder="enter produit"required></td>

    </tr>
    <tr>
    
    </table>
    <button type='submit' name='submit'>ADD Produit</button>


</form>

</div>
</body>



</html>