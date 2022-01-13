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
      <?php include D_TEMPLATE."navigation.php" ?>

    <h1 id="contact-title"> Contact Us </h1>
    <p id="contact-guide"> Get in touch via the form below, or by emailing
        <a href="mailto:bluenoeats@gmail.com" target="_blank">bluenoeats@gmail.com</a>!</p>
    <div class="contact-container user-form">
        <form action="action_page.php">

            <label for="name">Name</label>
            <input type="text" id="name" name="name" placeholder="Your name">

            <label for="email">Email</label>
            <input type="text" id="email" name="email" placeholder="Your email">


            <label for="message">Message</label>
            <textarea id="message" name="message" placeholder="Write something..." style="height:200px"></textarea>

            <input type="submit" value="Submit">

        </form>
        </div>



    <?php include D_TEMPLATE."footer.php"; ?>
  </body>

</html>
