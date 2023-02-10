<?php
//include("config.php");
// Start of Course registration
if(isset($_POST['submit']))
{
     $name=$_POST["name"];
     $email=$_POST["email"];
     $subject=$_POST["subject"]; 
     $message=$_POST["message"];
     
    $message="Thank You for showing Interest to contact with us, We will respond you soon.";
    require 'Mailcode/PHPMailerAutoload.php';
    $mail = new PHPMailer;
   // $mail->isSMTP();                            // Set mailer to use SMTP
    $mail->Host = 'smtp.gmail.com';             // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                     // Enable SMTP authentication
    $mail->Username = 'contact@qr-setup.com';          // SMTP username
    $mail->Password ='qrsetup*786';// SMTP password
    $mail->SMTPSecure = 'tls';                  // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 465;                          // TCP port to connect to
    $mail->setFrom('contact@qr-setup.com', 'QR Setup');
    $mail->addReplyTo('contact@qr-setup.com', 'QR Setup');
    $mail->addAddress($email);   // Add a recipient
    $mail->isHTML(true);  // Set email format to HTML
    $bodyContent = $message ;
    //$bodyContent = .. $password;
    $mail->Subject = $subject;
    $mail->Body = $bodyContent;

    if (!$mail->send())
    {
            echo 'Message could not be sent.';
            echo 'Mailer Error: ' . $mail->ErrorInfo;
    } 
    // Admin mail here
    
    $admin_email="umer.shahzad.softwareengineer@gmail.com";
    $messagee=" User:' .$name. ' have contacted from website QR Setup with Email :' .$email. ' " ;
    $mail = new PHPMailer;
   // $mail->isSMTP();                            // Set mailer to use SMTP
    $mail->Host = 'smtp.gmail.com';             // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                     // Enable SMTP authentication
    $mail->Username = 'contact@qr-setup.com';          // SMTP username
    $mail->Password ='qrsetup*786';// SMTP password
    $mail->SMTPSecure = 'tls';                  // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 587;                          // TCP port to connect to
    $mail->setFrom('contact@qr-setup.com', 'QR Setup');
    $mail->addReplyTo('contact@qr-setup.com', 'QR Setup');
    $mail->addAddress($admin_email);   // Add a recipient
    $mail->isHTML(true);  // Set email format to HTML
    $bodyContent = $messagee ;
    //$bodyContent = .. $password;
    $mail->Subject = $subject;
    $mail->Body = $bodyContent;
if (!$mail->send())
{
        echo 'Message could not be sent.';
        echo 'Mailer Error: ' . $mail->ErrorInfo;
} 
echo "Thank you ! we will respond you soon";
} 
?>