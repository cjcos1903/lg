<?php
echo "<h2>Testing Postfix...</h2>";
$to = 'to.address@gmail.com';
$subject = 'This is the subject!';
$body = 'This is the email body.';
$from = 'From: From Address <hantsdigitalwomen@gmail.com>' . "\r\n";
$option = "-fcjcostello92@gmail.com";
mail($to, $subject, $body, $from, $option);
?>