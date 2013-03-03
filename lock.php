<?php
if(!isset($_COOKIE['unlocked']) && !isset($_POST['pass'])){
    
    if(!isset($_GET['enter'])){
        ?>
<h1>Soul-coaching komt binnenkort online.</h1>
<p>Als je een preview-pass hebt kun je een kijkje nemen tijdens de ontwikkeling: <a href="?enter=1">toegangscode invoeren</a></p>
<?php
    } else {
        ?>
<form method="post" action="/">
    <input type="text" name="pass" placeholder="Toegangscode" /> <input type="submit" value="OK" />
</form>
<?php
    }
    
    die();
}

if(isset($_POST['pass'])){
    if($_POST['pass'] == 'development'){
        setcookie('unlocked', 1, 3600*24*31);
    } else {
        die('Dit is niet de correcte toegangscode.');
    }
}