<?php
class user{
    public  $id;
    public  $fullname;
    public  $password1;
    public  $email;
    public  $phonenumber;

    static public  $msgerror;
    static public $msgsucces;


    public function __construct($fullname,$password1,$email,$phonenumber){
        $this->fullname=$fullname;
        $this->password1=$password1;
        $this->email=$email;
        $this->phonenumber=$phonenumber;

    }

    public function insertdata($conn){
        $sql="INSERT INTO tableau1(fullname,password1,email,phonenumber)
       values('$this->fullname','$this->password1','$this->email','$this->phonenumber')";

if(mysqli_query($conn, $sql)){
    self::$msgsucces= "infos transfered";
    header("location:login.php");
}else{
    self::$msgerror="not transfered";
}
    }

static  public function SelectWithEmail($conn,$email,$password){
    $sql="SELECT * FROM tableau1 WHERE email='$email'";
    $result=mysqli_query($conn,$sql);
    if(mysqli_num_rows($result)>0){

    $row=mysqli_fetch_assoc($result);
    if($row["password1"]==$password){
    self::$msgsucces="validee";
    header("location: affiprod.php");
}else{
    self::$msgerror="password not correct";
}
    
}else{
    self::$msgerror="email not founded";
}
}

static public function DeleteWitheId($conn,$id){
    $sql = "DELETE FROM tableau1 WHERE id=$id ";

if (mysqli_query($conn, $sql)) {
//echo "Record deleted successfully";
header("location:AFFI.php");
} else {
    self::$msgerror= "Error deleting record: " . mysqli_error($conn);
}

}
static public function UpdateWithId($conn,$id,$emailValue,$nameValue,$numberValue){
    $sql = "SELECT * FROM tableau1 WHERE id='$id'";
    $result = mysqli_query($conn, $sql);
     $sql = "UPDATE tableau1 SET phonenumber='$numberValue',fullname='$nameValue',email='$emailValue' WHERE id='$id'";
        if (mysqli_query($conn, $sql)) {
            $successMesage = "New record updated successfully";

            header("Location: AFFI.php");
            echo "Record updated successfully";
            exit(); // Ensure to exit after a header redirect
        } else {
            self::$msgerror= "Error updating record: " . mysqli_error($conn);
        }
    
}
static public function SelectById($conn,$id){
    $sql = "SELECT fullname,email,phonenumber FROM test.tableau1 WHERE id='$id'";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
        // output data of each row
        $row = mysqli_fetch_assoc($result);

        return $row;
    }
}
static  public function SelectWithEmail1($conn,$email,$password){
    $sql="SELECT * FROM tableau1 WHERE email='$email'";
    $result=mysqli_query($conn,$sql);
    if(mysqli_num_rows($result)>0){

    $row=mysqli_fetch_assoc($result);
    if($row["password1"]==$password){
    self::$msgsucces="validee";
    header("location: main.php");
}else{
    self::$msgerror="password not correct";
}
    
}else{
    self::$msgerror="email not founded";
}
}

}
?>