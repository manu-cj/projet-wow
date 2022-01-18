<?php
require __DIR__ . "/../public/partials/header.php";
require __DIR__ . "/../public/partials/footer.php";
require __DIR__ . "/../public/home.php";
?>


<form method="post" action="/form/login-inscription-form.php" id="form-register">
    <div>
        <label for="id-mail">mail :</label><br>
        <input type="email" name="mail" id="id-mail" required>
    </div>
    <div>
        <label for="id-password">password :</label><br>
        <input type="password" name="password" id="id-password" required>
    </div>
    <div>
        <label for="id-password-repeat">password repeat:</label><br>
        <input type="password" name="password-repeat" id="id-password-repeat" required>
    </div>
    <div>
        <input type="submit" value="Send" name="submit">
    </div>
</form>
