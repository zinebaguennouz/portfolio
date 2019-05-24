
<?php
if  ($_SERVER["REQUEST_METHOD"] == "POST"){
    $name = $_POST['name'];
    $subject = $_POST['subject'];
    $mail = $_POST['mail'];
    $message = $_POST['message'];


    $mailto = "zinebaguennouz@gmail.com";
    $headers = "from:" .$mail;
    $txt = "vous avez reçu un e-mail de " .$name.".\n\n".$message;


        mail($mailto, $subject, $txt, $headers) ;
         header("location: portfolio.php?mailsend");
    }
