<?php
include_once 'header.php';
?>

    <div class="main_wrapper">
        <section class="login_form">
            <h2>Registreren</h2>
            <form action="includes/login_inc.php " method="post">
                <input type="text" name="name" placeholder="gebruikersnaam/e-mail">
                <input type="text" name="wachtwoord" placeholder="wachtwoord">
                <button type="submit" name="submit">Login</button>
            </form>
        </section>
    </div>

<?php

include_once 'footer.php';

?>