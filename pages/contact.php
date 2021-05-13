<?php include "../pages/head.php"; ?>

<?php

$message_sent = false;
$invalid_class_name = "form-invalid";
$username = $_POST['name'];
$email_of_user = $_POST['email'];
$subject_of_message = $_POST['subject'];
$message_from_user = $_POST['message'];
$window_width = "<script type='text/javascript'>document.write(window.innerWidth);</script>";

$error = array();
$input_fields = ['name', 'email', 'subject', 'message'];
//Empty field(s) add an array
foreach ($input_fields as $field) {
    if (isset($_POST[$field]) && $_POST[$field] == '') {
        array_push($error, $field);
    }
}

if (
    !empty($_POST['name']) && !empty($_POST['email']) && /*Email validation*/ filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) &&
    !empty($_POST['subject']) && !empty($_POST['message'])) {
    //Submit the form
    $to = "attila_fanczi@attiliuswebdev.fejlessz.hu";

    $body = "";
    $body .= "From: " . $username . "\r\n";
    $body .= "Email: " . $email_of_user . "\r\n";
    $body .= "_____________________________________\r\n";
    $body .= "Message: " . $message_from_user . "\r\n";

    mail($to, $subject_of_message, $body);

    $message_sent = true;
}

?>

<div class="contact-content" id="contact-page">
<?php
if ($message_sent):
?>
        <div class="success-message">
        <h3 class="successful-sending">Your message has be sent!</h3>
        <button id="back-to-page">Back to page</button>
        </div>
<?php
else:
?>

    <div class="form-side">
<?php
//Empty field handling
$Msg = "";
if (!empty($error)) {
    $Msg = "Please fill all fields!";
    $message_sent = false;
    echo '<div class="error">' . $Msg . '</div>';
}
?>

        <form action="../pages/contact.php" method="post" id="form">
            <input type="text" name="name" id="contact-input" class="form-control 
<?= in_array('name', $error) ? 'form-invalid' : ''//Add error class ?>" placeholder="Your name" 
<?php if (!empty($_POST['name']) && !$message_sent) {echo 'value="' . $_POST['name'] . '"';} else {echo 'value=""';} 
//Keep correct content of field when have error ?>>
            <input type="email" name="email" id="contact-input" class="form-control 
<?= in_array('email', $error) ? 'form-invalid' : '' ?>" placeholder="Your email address" 
<?php if (!empty($_POST['email']) && !$message_sent) {echo 'value="' . $_POST['email'] . '"';} else {echo 'value=""';} ?>>
            <input type="text" name="subject" id="contact-input" class="form-control 
<?= in_array('subject', $error) ? 'form-invalid' : '' ?>" placeholder="Subject" 
<?php if (!empty($_POST['subject']) && !$message_sent) {echo 'value="' . $_POST['subject'] . '"';} else {echo 'value=""';} ?>>
            <textarea name="message" id="contact-input-message" cols="30" rows="10" class="form-control-message 
<?= in_array('message', $error) ? 'form-invalid' : '' ?>" placeholder="Message">
<?php if (!empty($_POST['message']) && !$message_sent) {echo $_POST['message'];} ?></textarea>
            <input type="submit" name="submit-btn" value="Send" id="submit-btn">

        </form>
    </div>

    <div class="social-side 
<?php if (!empty($error) && $window_width <= 476) {echo 'hide';} //Add form error view class ?>">
        <h1 id="contact-head">Contact<p id="contact-head" class="me" style="color:mediumseagreen">me</p>
        </h1>
        <h3 id="contact-text">If you would like to contact me, you can do so here on this page using the options below.</h3>
        <i class="far fa-envelope"> leo20@freemail.hu</i>
        <a href="https://github.com/Attilius" target="_blank" rel="noopener noreferrer"><i class="fab fa-icon fa-github-square"></i></a>
        <a href="https://www.linkedin.com/in/attila-f%C3%A1nczi-2217b01b4/" target="_blank" rel="noopener noreferrer"><i class="fab fa-icon fa-linkedin"></i></a>

    </div>
    <?php
endif;
?>
</div>

<?php include "../pages/foot.php"; ?>