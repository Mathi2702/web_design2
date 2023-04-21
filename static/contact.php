<?php
if(isset($_POST['submit'])) {
    $to = "info@smallshovel.com"; // Enter your email address here
    $subject = $_POST['subject'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $headers = "From: ".$name." <".$email.">"."\r\n".
               "Reply-To: ".$email."\r\n".
               "X-Mailer: PHP/".phpversion();
    mail($to, $subject, $message, $headers);
    echo "<p>Thank you for contacting us, $name. We will get back to you soon.</p>";
} else {
    echo "<p>Sorry, there was an error with your submission. Please try again.</p>";
}
?>
