<?php
  // setup send emails 
  require 'PHPMailer/src/PHPMailer.php';
  require 'PHPMailer/src/SMTP.php';

  $mail = new PHPMailer\PHPMailer\PHPMailer();
  $mail->CharSet = 'UTF-8';
  $mail->IsSMTP(); // enable SMTP
  $mail->SMTPDebug = 0; // debugging: 1 = errors and messages, 2 = messages only
  $mail->SMTPAuth = true; // authentication enabled
  $mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for Gmail
  $mail->Host = "smtp.gmail.com";
  $mail->Port = 465; // or 587
  $mail->IsHTML(true);
  $mail->Username = "ALMousallauqu@gmail.com";
  $mail->Password = "14191237soso";

  //  setup SQL connection  
  // $connect = mysqli_connect('localhost','root','05371433','almusalla');
  $connect = new mysqli("localhost", "root", "", "ALMousalla");
  if ($connect->connect_errno) {
    printf("Error: %s\n", $connect->connect_errno);
    echo "Failed to connect to MySQL: " . $connect -> connect_error;
    die("Error in connecting DataBase");
  }else{
    // echo "connect success";
  }



?>