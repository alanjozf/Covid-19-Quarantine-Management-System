  
<?php
include('config.php');

$pid  = $_GET['dd'];
session_start();
$tmpid=$_SESSION['id'];


$sql = "DELETE FROM product WHERE P_id= $pid";
if(mysqli_query($con,$sql)){
    header("Location:../ViewProduct.php");
}
else{
    header("location:../../Home.php");

}

?>