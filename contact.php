<?php include "config/setup.php"; ?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title> Blueno Eats Website </title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="styles/main.css" rel="stylesheet" type="text/css">
    <link href="styles/navigation.css" rel="stylesheet" type="text/css">
    <link href="styles/info.css" rel="stylesheet" type="text/css">
    <link href="styles/form.css" rel="stylesheet" type="text/css">
</head>

<body>
    <?php include D_TEMPLATE . "navigation.php" ?>

    <h1 id="contact-title"> Contact Us </h1>
    <p id="contact-guide"> Get in touch via the form below, or by emailing
        <a href="mailto:bluenoeats@gmail.com" target="_blank">bluenoeats@gmail.com</a>!
    </p>
    <div class="contact-container user-form">
        <form>

            <label for="contact-name">Name</label>
            <input type="text" id="contact-name" name="contact-name" placeholder="Your name">

            <label for="contact-email">Email</label>
            <input type="text" id="contact-email" name="contact-email" placeholder="Your email">


            <label for="contact-message">Message</label>
            <textarea id="contact-message" name="contact-message" placeholder="Write something..." style="height:200px"></textarea>

            <input type="submit" value="Submit" onclick="openMail()">

        </form>
    </div>

    <script>
        function openMail() {
            var emailTo = 'bluenoeats@gmail.com';
            var emailSub = 'Message from ' + document.getElementById('contact-name').value;
            var emailBody = document.getElementById('contact-message').value;
            var emailCC = '';
            window.open('mailto:' + emailTo + '?cc=' + emailCC + '&subject=' + emailSub + '&body=' + emailBody, '_self');

        }
    </script>


    <?php include D_TEMPLATE . "footer.php"; ?>
</body>

</html>