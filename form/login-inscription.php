<?php
require __DIR__ . "/../public/partials/header.php";
require __DIR__ . "/../public/partials/footer.php";
require __DIR__ . "/../public/home.php";
?>


<form method="post" action="/form/login-inscription-form.php">
    <div>
        <label for="id-mail">mail</label>
        <input type="email" name="mail" id="id-mail">
    </div>
    <div>
        <label for="id-password">message</label>
        <input type="password" name="message" id="id-password">
    </div>
    <div>
        <input type="submit" value="Send" name="submit">
    </div>
</form>
