<?php
require __DIR__ . "/verif.php";

    if(isset($_POST['submit'])) {
        $mail = getSecuredStringPostData('mail');
        $message = getSecuredStringPostData('password');
    if ($mail === "sdqdq@gmail.com" and $message === "azerty") {
        echo "Vous êtes connecté";
    }?>
<table>
    <tr>
        <td>mail</td>
        <td>password</td>
        <td><?=$mail?></td>
        <td><?=$message?></td>


    </tr>
</table>

    <?php
}
    else {
        header('Location: ./form/login-inscription.php');
    }
