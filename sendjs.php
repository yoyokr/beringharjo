<?php
    $to      = 'you@example.com';
    $subject = 'the subject';
    $jcitems = $_POST['jcitems'];
    $headers = 'From: webmaster@example.com' . "\r\n" .
               'Reply-To: webmaster@example.com' . "\r\n" .
               'X-Mailer: PHP/' . phpversion();
    mail($to, $subject, $jcitems, $headers);
    Header('Location: thankyou.html');
?>