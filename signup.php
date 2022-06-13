<?php
include_once 'header.php';
?>
    <div class="main_wrapper">
        <section class="signup-form">
            <h2>Registreren</h2>
            <form action="includes/signup_inc.php" method="post">
                <input type="text" name="voornaam" placeholder="Volledige naam">
                <input type="text" name="e-mail" placeholder="e-mail">
                <input type="text" name="gebruikersnaam" placeholder="gebruikersnaam">
                <input type="text" name="wachtwoord" placeholder="wachtwoord">
                <input type="text" name="herhaal wachtwoord" placeholder="herhaal wachtoord">
                <button type="submit" name="submit">Registreren</button>
            </form>
        </section>
    </div>
<?php

include_once 'footer.php';