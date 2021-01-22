<?php

$email = $_POST['email'];
$adminemail = "ec1928063@edinburghcollege.ac.uk";

$headers = "From: " . $email . "\r\n";
$headers .= "Reply-To: " . $email . "\r\n";
$headers .= "MIME-Version: 1.0 \r\n";
$headers .= "Content-type: text/html; charset=iso-8859-1";

$subject = "Stan Bratuszewski Web Design";

$body = "<p>Thanks for gettig in touch!<br>";
$body .= "Your message has been delivered and it will be read soon.</p><br><br>";
$body .= "<a href='http://stanbratuszewski.org/index.html' target='_blank'>Visit my Web site!</a>";

$adminbody = "<strong>Name: </strong>" . $_POST['name'] . "<br>";
$adminbody .= "<strong>Email: </strong>" . $_POST['email'] . "<br>";
$adminbody .= "<strong>Subject: </strong>" . "Web design query" . "<br>";
$adminbody .= "<strong>Message: </strong>" . $_POST['message'] . "<br>";

mail($email, $subject, $body, $headers);
mail($adminemail, $subject, $adminbody, $headers);

header("refresh:0.1;url=thanks.php");
exit;
