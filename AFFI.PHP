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
</head>
<body>


    <div class="container my-5 ">



    <h2>All Users</h2>

<br>
<br>
        <table class="table"  id="table">
            <thead>
             <tr>
                  <th>ID</th>
                  <th>Name</th>
                  <th>Password</th>
                 <th>Email</th>
                 <th>Phone Number</th>
                 <th>Action</th>
             </tr>
             </thead>
             <tbody>
    <?php
    $sql= "SELECT * from tableau1";
    $result=mysqli_query($conn,$sql);
     if($result){
        while($row=mysqli_fetch_assoc($result)){
        $id =$row["id"];
        $name =$row["fullname"];
        $password =$row["password1"];
        $email =$row["email"];
        $phonenumber =$row["phonenumber"];

        echo "
        <tbody>
    <tr>
      <th scope='row'>$id</th>
      <td>$name</td>
      <td>$password</td>
      <td>$email</td>
      <td>$phonenumber</td>
      <td><a href='update.php?idUpdated=$id' class='btn btn-primary btn-sm'>Update</a></td>
      <td><button type='submit' class='btn btn-danger  btn-sm'><a href='delete.php?idDeleted=$id'class='text-light'>Delete</a></button></td>
    </tr>";
    
        
       
     
    }}

     
     ?>
    

    
    

  </tbody>
  <button type='submit' class='btn btn-primary btn-sm'><a href='signup.php'class='text-light'>Add User</a></button>

</table>

</form>
</div>
</body>
</html>