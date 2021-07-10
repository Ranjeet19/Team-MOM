<?php 
    $con = mysqli_connect("localhost","root","","mom");

        $message_name = $_POST['fname'];
		$message_contact = $_POST['contact'];
		$message_email = $_POST['email'];
		$message_subject = $_POST['subject'];


       
		$sql_message = "INSERT INTO message(m_name,m_contact,m_email,m_message) 
			VALUES('{$message_name}','{$message_contact}','{$message_email}','{$message_subject}')";


		$result = mysqli_query($con, $sql_message) or die("query failed");

        if($result){
            header('location:index.php');
        }
?>