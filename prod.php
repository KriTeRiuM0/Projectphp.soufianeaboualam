<?php
class prod{
    public  $id;
    public  $nameprod;
    public  $prixprod;
    public  $produit;

    static public  $msgerror;
    static public $msgsucces;

    public function __construct($nameprod,$prixprod,$produit){
        $this->nameprod=$nameprod;
        $this->prixprod=$prixprod;
        $this->produit=$produit;
       }

    public function insertdataprod($conn){
        $sql="INSERT INTO tableau2(namepro,Prixpro,produit) values('$this->nameprod','$this->prixprod','$this->produit')";
        $result=mysqli_query($conn, $sql);
        if($result){
            self::$msgsucces= "infos transfered";
            header("location:affiprod.php");
        }else{
            self::$msgerror=mysqli_error($conn);
        }
            }

        

        static Public function SelectByIdprod($conn,$id){
            $sql = "SELECT namepro,Prixpro,produit FROM test.tableau2 WHERE id='$id'";
            $result = mysqli_query($conn, $sql);
            if (mysqli_num_rows($result) > 0) {
                // output data of each row
                $row = mysqli_fetch_assoc($result);
        
                return $row;
            }
        }
        static public function UpdateWithIdprod($conn,$id,$nameValue,$prixValue){
            $sql = "SELECT * FROM tableau2 WHERE id='$id'";
            $result = mysqli_query($conn, $sql);
             $sql = "UPDATE tableau2 SET Prixpro='$prixValue',namepro='$nameValue' WHERE id='$id'";
                if (mysqli_query($conn, $sql)) {
                    $successMesage = "New record updated successfully";
        
                    header("Location: affiprod.php");
                    echo "Record updated successfully";
                    exit(); // Ensure to exit after a header redirect
                } else {
                    self::$msgerror= "Error updating record: " . mysqli_error($conn);
                }

    } 
    static public function DeleteWitheIdprod($conn,$id){
        $sql = "DELETE FROM tableau2 WHERE id=$id ";
    
    if (mysqli_query($conn, $sql)) {
    //echo "Record deleted successfully";
    header("location:affiprod.php");
    } else {
        self::$msgerror= "Error deleting record: " . mysqli_error($conn);
    }
    
    }
}
    ?>
   