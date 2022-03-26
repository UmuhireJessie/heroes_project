<?php


include('../config/db_connect.php');

if(isset($_GET['id'])){
    $id=$_GET['id'];
    $sql="DELETE FROM heroes WHERE heroId=$id";
    $result=mysqli_query($conn, $sql);
    if($result){
        echo 'deleted';
    }else{
        die(mysqli_error($conn));
    }
}


?>