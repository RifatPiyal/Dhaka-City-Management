<?php

include "common.php";
if(isset($_GET['id'])){
    //echo $_GET['id'];
    $delete_id=$_GET['id'];
    
    $delete_sql= "DELETE FROM bills where id=$delete_id";
    if($conn->query( $delete_sql)){
        header("location:bills.php");
    }
    else{
        die($conn->error);
    }
}
else{
    header("location:bills.php");
}
?>