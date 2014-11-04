<?php
require_once('recaptchalib.php');
  $privatekey = "6LeMP_wSAAAAAKFqWehdR7vmmkvK1juLnR6eSHTY";
  $resp = recaptcha_check_answer ($privatekey,
                                $_SERVER["REMOTE_ADDR"],
                                $_POST["recaptcha_challenge_field"],
                                $_POST["recaptcha_response_field"]);

  if (!$resp->is_valid) {
    // What happens when the CAPTCHA was entered incorrectly
    die ("The reCAPTCHA wasn't entered correctly. Go back and try it again." .
         "(reCAPTCHA said: " . $resp->error . ")");
  } else {
        // check for form submission - if it doesn't exist then send back to contact form
    if (!isset($_POST['save']) || $_POST['save'] != 'contact') {
        header('Location: index.php'); exit;
    }

    // get the posted data
    $name = $_POST['contact_name'];
    $email_address = $_POST['contact_email'];
    $phone = $_POST['contact_phone'];
    $message = $_POST['contact_message'];

    if (preg_match("/http/i", "$name")) {header('Location: index.php'); exit();} 
    if (preg_match("/http/i", "$email_address")) {header('Location: index.php'); exit();} 
    if (preg_match("/http/i", "$message")) {header('Location: index.php'); exit();} 
    if (preg_match("/http/i", "$phone")) {header('Location: index.php'); exit();} 

    // check that a name was entered
    if (empty($name))
        $error = 'You must enter your name.';
    // check that an email address was entered
    elseif (empty($email_address)) 
        $error = 'You must enter your email address.';
    // check for a valid email address
    elseif (!preg_match('/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/', $email_address))
        $error = 'You must enter a valid email address.';
    // check that a phone number was entered
    if (empty($phone))
        $error = 'You must enter your phone number.';
    // check that a message was entered
    elseif (empty($message))
        $error = 'You must enter a message.';

    // check if an error was found - if there was, send the user back to the form
    if (isset($error)) {
        header('Location: index.php?s='.urlencode('<div class="contact-title">Oops!</div><div class="contact-content"><p> Did you misspell your e-mail? <a href="index.php"><button type="button" class="contentButton">close</button></a></p></div>')); exit;
    }

    $headers = 'From: andres@designerandres.com' . "\r\n" .
         'Reply-To: $email_address' . "\r\n";

    // write the email content
    $email_content = "Name: $name\n";
    $email_content .= "Email Address: $email_address\n";
    $email_content .= "Phone Number: $phone\n";
    $email_content .= "Message:\n\n$message";

    // send the email
    //ENTER YOUR INFORMATION BELOW FOR THE FORM TO WORK!
    mail('andres@designerandres.com', 'DesignerAndres - Contact Form Submission', $email_content, $headers);

    // send the user back to the form
    header('Location: index.php?s='.urlencode('<div class="contact-title">Thanks!</div><div class="contact-content"><p>Thank you for your message!<a href="index.php"><button type="button" class="contentButton">close</button></a></p></div>')); exit;

  }
?>