<?php
require __DIR__ . "/../public/partials/header.php";
require __DIR__ . "/../public/partials/footer.php";
require __DIR__ . "/../public/home.php";
?>
<form method="post" action="Verification.php">
    <div>
        <label for="id-mail">Adresse mail :</label>
        <input type="email" name="mail" id="id-mail">
    </div>
    <div>
        <label for="id-age">Your age :</label>
        <input type="number" name="age" id="id-age">
    </div>
    <div>
        <label for="id-password">Password :</label>
        <input type="password" name="password" id="id-password">
    </div>
    <div>
        <label for="id-password-repeat">Password repeat :</label>
        <input type="password" name="password-repeat" id="id-password-repeat">
    </div>
    <div>
        <input type="submit" value="Send" name="submit">
    </div>
</form>


<form method="post" action="Verification.php">
    <div>
        <label for="id-mail">Adresse mail :</label>
        <input type="email" name="mail" id="id-mail">
    </div>
    <div>
        <label for="id-password">Password :</label>
        <input type="password" name="password" id="id-password">
    </div>
    <div>
        <input type="submit" value="Send" name="submit">
    </div>
</form>
