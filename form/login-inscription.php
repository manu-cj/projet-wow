<?php
require __DIR__ . "/../public/partials/header.php";
require __DIR__ . "/../public/home.php";
?>


<form method="post" action="/form/login-inscription-form.php" id="form-register">
    <div>
        <label for="id-username">Username :</label><br>
        <input type="text" name="username" id="id-username" placeholder="username" required>
    </div>
    <br>
    <div>
        <label for="id-mail">Mail :</label><br>
        <input type="email" name="mail" id="id-mail" placeholder=" adresse mail" required>
    </div>
    <br>
    <div>
        <label for="id-password">Password :</label><br>
        <input type="password" name="password" id="id-password" pattern="5" placeholder=" 5 caractère minimum" required>
    </div>
    <br>
    <div>
        <label for="id-password-repeat">Password repeat:</label><br>
        <input type="password" name="password-repeat" id="id-password-repeat" placeholder=" répèter le mot de passe" required">
    </div>
    <br>
    <div>
        <label for="id-age">Age :</label><br>
        <input type="number" name="age" id="id-age" min="0" max="120" placeholder="age" required>
    </div>
    <br>
    <p>Classe :</p>
    <select name="Classes">
        <option>Guerrier</option>
        <option>Paladin</option>
        <option>Mage</option>
        <option>Chasseur</option>
        <option>Voleur</option>
        <option>Moine</option>
        <option>Démoniste</option>
        <option>Chasseur de démon</option>
        <option>Prêtre</option>
        <option>Chaman</option>
        <option>Druide</option>

    </select>
    <br>
    <div>
        <input type="submit" value="Send" name="submit">
    </div>
</form>
<?php

require __DIR__ . "/../public/partials/footer.php";