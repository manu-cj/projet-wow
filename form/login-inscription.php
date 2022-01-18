<?php
require __DIR__ . "/../public/partials/header.php";
require __DIR__ . "/../public/home.php";
?>


<form method="post" action="/form/login-inscription-form.php" id="form-register">
    <div>
        <label for="id-mail">Mail :</label><br>
        <input type="email" name="mail" id="id-mail" placeholder=" adresse mail" required>
    </div>
    <div>
        <label for="id-password">Password :</label><br>
        <input type="password" name="password" id="id-password" pattern="5" placeholder=" 5 caractère minimum" required>
    </div>
    <div>
        <label for="id-password-repeat">Password repeat:</label><br>
        <input type="password" name="password-repeat" id="id-password-repeat" placeholder=" répèter le mot de passe" required">
    </div>
    <div>
        <input type="submit" value="Send" name="submit">
    </div>
</form>
<?php

require __DIR__ . "/../public/partials/footer.php";