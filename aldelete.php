<?php
include ("../conn.php");


if(isset($_GET['id'])){
    $id=$_GET['id'];
    
    $q=mysqli_query($conn,"DELETE FROM `album` WHERE id= $id");
    
       if($q){
       header("location: showalb.php");
       }
   
}

?>