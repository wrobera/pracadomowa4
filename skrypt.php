<?php
$imie=$_POST['imie'];
$mail=$_POST['mail'];
if(isset($_POST[submit])) {
    echo $_POST['imie'].'! Twoja wiadomość powinna zostać wysłana na adres: '.$_POST['mail'];
}
?>