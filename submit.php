<?php
 $mail = "";
 $password = "";
 $cb = "";

    if(isset($_POST['mail']))
        $mail = $_POST['mail'];

    if(isset($_POST['password']))
        $password = $_POST['password'];

    if(isset($_POST['cb']))
        $cb = $_POST['cb'];


    echo $mail.":".$password.":".$cb
?>