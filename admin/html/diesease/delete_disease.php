<?php 

    include "connection.php";

    $post_id = $_GET['id'];

    $sql = "DELETE from disease where disease_id = {$post_id}";

    $query = mysqli_query($con,$sql)or die("Query Failed!!");

    if($query){
        header("location:diesease.php");

    }else{
        echo "Deletion Unsuccessful !!";
    }


?>