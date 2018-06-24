<?php
if($_POST){
echo "<script type='text/javascript'>alert('Hi')</script>";
    $name = $_POST['form_name'];
    $email = "himaja.ala@gmail.com";
    $message = "kjshd";

//send email
    if(@mail("himaja.ala@gmail.com", "This is an email from:" .$email, $message)){
        echo 'sent';
    }
}
?>