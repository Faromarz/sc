<h1>Aanmelden</h1>

<?php if($error){ ?>
<div class="error">
    Deze combinatie van inloggegevens is onjuist.
</div>
<?php } ?>

<form method="POST">
    <div class="form-item">
        <label for="username">Gebruikersnaam</label>
        <input type="text" id="username" placeholder="Gebruikersnaam" name="username" />
    </div>
    <div class="form-item">
        <label for="password">Wachtwoord</label>
        <input type="password" id="password" placeholder="Wachtwoord" name="password" />
    </div>
    <div class="form-item">
        <input type="submit" class="btn btn-primary" id="submit_login_form" value="Inloggen" />
    </div>
</form>