<?php


include "connection.php";

if (empty($_FILES['FileToUpdate']['name'])) {
    $file_name = $_POST['old_image'];
} else {
    $errors = array();

    $file_name = $_FILES['FileToUpdate']['name'];
    $file_size = $_FILES['FileToUpdate']['size'];
    $file_tmp = $_FILES['FileToUpdate']['tmp_name'];
    $file_type = $_FILES['FileToUpdate']['type'];
    // $file_ext = strtolower(end(explode('.', $file_name)));
    $temp = explode('.', $file_name);

    $file_ext = end($temp);


    // $file_ext = array_key_last($fileext);

    $extensions = array("jpeg", "jpg", "png", "JPG", "PNG", "webp");


    if (in_array($file_ext, $extensions) === false) {
        $errors = "This file extension is not allowed, try jpg,png,jpeg Only";
    }
    if ($file_size > 10486260) {
        $errors[] = "File size lower than 10mb ";
    }

    if (empty($errors) == true) {
        move_uploaded_file($file_tmp, "../../assets/disease/" . $file_name);
    } else {
        print_r($errors);
        die();
    }
}




$disease_name = mysqli_real_escape_string($con, $_POST['diesease_name']);
$disease_desc = mysqli_real_escape_string($con, $_POST['textarea']);
$disease_symptoms = mysqli_real_escape_string($con, $_POST['disease_symptoms']);
$disease_diagnosis = mysqli_real_escape_string($con, $_POST['disease_diagnosis']);
$disease_Trrigers = mysqli_real_escape_string($con, $_POST['disease_trrigers']);
$desease_Prevention = mysqli_real_escape_string($con, $_POST['desease_Prevention']);
$disease_treatment = mysqli_real_escape_string($con, $_POST['disease_treatment']);
$disease_medicine = mysqli_real_escape_string($con, $_POST['disease_medicine']);
$extra_title = mysqli_real_escape_string($con, $_POST['extra_title']);
$extra_description = mysqli_real_escape_string($con, $_POST['extra_description']);
$author_name = mysqli_real_escape_string($con, $_POST['author_name']);

 $sql = " UPDATE disease SET disease_name='{$disease_name}',description='{$disease_desc}',
symptoms='{$disease_symptoms}',diagnosis='{$disease_diagnosis}', triggers='{$disease_Trrigers}',
prevention='{$desease_Prevention}',tratment='{$disease_treatment}',medicines='{$disease_medicine}'
,extra_title='{$extra_title}',extra_description='{$extra_description}',image_name='{$file_name}',
author_name='{$author_name}' WHERE disease_id = '{$_POST['id']}' ";


$result = mysqli_query($con, $sql) or die("Query Failed!!");

if ($result) {
    header("location:diesease.php");
} else {
    echo "Failed To Update";
}
