<?php
    use PHPMailer\PHPMailer\PHPMailer;

    if (isset($_POST['name']) && isset($_POST['email'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $subject = $_POST['subject'];
        $body = $_POST['body'];

        require_once "PHPMailer/PHPMailer.php";
        require_once "PHPMailer/SMTP.php";
        require_once "PHPMailer/Exception.php";

        $mail = new PHPMailer();

        //SMTP Settings
        $mail->isSMTP();
        $mail->Host = "smtp.gmail.com";
        $mail->SMTPAuth = true;
        $mail->Username = "dontreply899@gmail.com"; 
        $mail->Password = 'enburtxqcrmrusqu'; 
        $mail->Port = 465;
        $mail->SMTPSecure = "ssl";

        //Email Settings
        $mail->isHTML(true);
        $mail->setFrom($email, $name);
        $mail->addAddress("jjushwin@gmail.com"); 
        $mail->Subject = ("$email ($subject)");
        $mail->Body = ("$body" );

        if ($mail->send()) {
            $status = "success";
            $response = "Email is sent!";
        } else {
            $status = "failed";
            $response = "Something is wrong: <br><br>" . $mail->ErrorInfo;
        }
        // header("Location: ../pages/contactsent.php#myform");
        echo "Your message has been sent! ";
        setTimeout(function(){
            window.close();
        }, 3000);
        

 

        // exit(json_encode(array("Email successfully sent")));
    }
?>
