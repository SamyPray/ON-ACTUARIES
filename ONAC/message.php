<?php 
$conn = mysqli_connect("localhost", "root", "", "ONAC");

$sender_name = $_POST['name_1'];
$sender_email= $_POST['email_'];
$sender_subject = $_POST['sub_'];
$sender_msg = $_POST['message'];

        if(!empty($sender_name) && !empty($sender_email) && !empty($sender_subject))
        {
            if (!preg_match("/^[a-zA-Z-' ]*$/",$sender_name)) {
                $sql = "INSERT INTO message(`sender_name`, `sender_email`, `sender_message`, `sender_subject`) VALUES ('$sender_name','$sender_email','$sender_msg', '$sender_subject');";

       if(mysqli_query($conn, $sql)) {
       header("location:http://localhost/ONAC/contact.html?message=sent");
                } 
            }
                

       
        }
        else {
                header("location:http://localhost/ONAC/contact.html?error");
         
                }


?>