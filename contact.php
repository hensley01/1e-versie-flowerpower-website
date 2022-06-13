<?php

include_once 'header.php';

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact Form</title>
    <link rel="stylesheet" type="text/css" href="style_contact.css">
</head>
<body>
<div class="contact-title">
    <h2>We staan u altijd graag te woord.</h2>
</div>
<div class="contact-form">
    <form id="contact-form" method="post" action="contact-form-handler.php">
        <input name="name" type="text" class="form-control" placeholder="Volledige naam" required><br>
        <input name="email" type="email" class="form-control" placeholder="E-mail" required><br>

        <textarea name="message" class="form-control" placeholder="Bericht" row="4" required></textarea><br>

        <input type="submit" class="form-control submit" value="Verzenden">
    </form>
</div>

</body>
</html>

<?php

include_once 'footer.php';

?>