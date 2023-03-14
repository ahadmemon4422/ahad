<?php
include ("../conn.php");


if(isset($_GET['id'])){
    $id=$_GET['id'];
    
    $q=mysqli_query($conn,"DELETE FROM `audio` WHERE id= $id");
    
       if($q){
       header("location: showsong.php");
       }
   
}

?>