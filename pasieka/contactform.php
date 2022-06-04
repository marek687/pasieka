<?php 
    if(isset($_POST['submit']))
    {
        $name=$_POST['name'];
        $subject=$_POST['subject'];
        $mailFrom =$_POST['mail'];
        $message =$_POST['message'];

        $mailTo="marek687@interia.pl";
        $headers="From: ".$mailFrom;
        $txt ="Odpowiedz na wiadomość od ". $name. ".\n\n".$message;

        mail($mailTo, $subject, $txt, $headers);
        header("Location:index.php?mailsend");
    }
    https://www.youtube.com/watch?v=4q0gYjAVonI
?>