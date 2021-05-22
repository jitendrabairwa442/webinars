<?php
if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $division=$_POST['division'];
    $msg=$_POST['msg'];

    $to='jitandersingh51@gmail.com';
    $subject='Form submission';
    $message="Name: ".$name."\n"."division: ".$division."\n"."wrote the following : "."\n\n".$msg;
    $headers="From: ".$email;
    
    if(mail($to, $subject , $message , $headers)){
        echo "<h1>Sent successfully! thank you"." ".$name.",we will contact you shortly!</h1>";
    }
    else{
        echo"something went wrong!";
    }
}
?>