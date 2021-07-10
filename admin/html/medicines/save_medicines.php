<?php 

    include "connection.php";



    if(isset($_FILES['FileToUpload'])){

        $errors = array();

        $file_name =$_FILES['FileToUpload']['name'];
        $file_size =$_FILES['FileToUpload']['size'];
        $file_tmp =$_FILES['FileToUpload']['tmp_name'];
        $file_type =$_FILES['FileToUpload']['type'];
        $file_ext = strtolower(end(explode('.',$file_name)));
        $temp = explode('.', $file_name);

        $file_ext =end($temp);
    
     
        // $file_ext = array_key_last($fileext);
    
        $extensions = array("jpeg","jpg","png","JPG","PNG","webp");
    

        if(in_array($file_ext,$extensions)===false){
            $errors="This file extension is not allowed, try jpg,png,jpeg Only";
        }
        if($file_size>10486260){
            $errors[] = "File size lower than 10mb ";
        }

        if(empty($errors) == true){
            move_uploaded_file($file_tmp,"../../assets/disease/".$file_name);
            
        }else{
            print_r($errors);
            die();
        }

    }


    $disease_name = mysqli_real_escape_string($con, $_POST['diesease_name']);
    $disease_desc = mysqli_real_escape_string($con, $_POST['textarea']);
    $disease_symptoms = mysqli_real_escape_string($con, $_POST['disease_symptoms']);
    $disease_diagnosis = mysqli_real_escape_string($con, $_POST['disease_diagnosis']);
    $disease_Trrigers = mysqli_real_escape_string($con, $_POST['disease_Trrigers']);
    $desease_Prevention = mysqli_real_escape_string($con, $_POST['desease_Prevention']);
    $disease_treatment = mysqli_real_escape_string($con, $_POST['disease_treatment']);
    $disease_medicine = mysqli_real_escape_string($con, $_POST['disease_medicine']);
    $extra_title = mysqli_real_escape_string($con, $_POST['extra_title']);
    $extra_description = mysqli_real_escape_string($con, $_POST['extra_description']);
    $author_name = mysqli_real_escape_string($con, $_POST['author_name']);
    
    $date = date("d M, D");
  

$sql ="INSERT INTO disease(disease_name,description,symptoms,diagnosis,triggers,
prevention,tratment,medicines,extra_title,extra_description,image_name,post_date,author_name) 
VALUES ('{$disease_name}','{$disease_desc}','{$disease_symptoms}','{$disease_diagnosis}',
'{$disease_Trrigers}','{$desease_Prevention}','{$disease_treatment}','{$disease_medicine}',
'{$extra_title}','{$extra_description}','{$file_name}','{$date}','{$author_name}')";

$result=mysqli_query($con,$sql)or die("query failed");


if($result){
    header('location:diesease.php');
}
?>