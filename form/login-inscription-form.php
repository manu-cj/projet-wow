<?php
require __DIR__ . "/../helpers/verif.php";

    if(isset($_POST['submit'])) {
        // Getting secured form data.
        $mail = getSecuredStringPostData('mail');
        $message = getSecuredStringPostData('message');
    if ($mail === "sdqdq@gmail.com" and $message === "azerty") {
        echo "Vous êtes connecté";
    }?>
<table>
    <tr>
        <td>mail : <?= $mail ?></td>
        <td>password : <?= $message?></td>


    </tr>
</table>

    <?php
}
