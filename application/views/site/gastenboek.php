<h1>Gastenboek</h1>
<?php if(isset($success)){ ?>
<script> $(function(){ alert('Dank voor de reactie. Uw bericht is geplaatst en zal spoedig zichtbaar worden! '); }); </script>
<?php }?>
<?php if(isset($captcha_error)){ ?>
<script> $(function(){ alert('De tekens zijn niet correct overgenomen! '); }); </script>
<?php }?>
<?= App::get_content('gastenboek'); ?>
<form method="POST">
    <div class="form-item">
        <label>Naam</label>
        <input type="text" id="gb_name" name="gb_name" placeholder="Naam" value="<?= isset($captcha_error) ? $postdata['gb_name'] : '' ?>" />
    </div>
    <div class="form-item">
        <label>Bericht</label>
        <textarea id="gb_text" maxlength="500" name="gb_text" style="height: 40px;"><?= isset($captcha_error) ? $postdata['gb_text'] : '' ?></textarea>
        <small style="display: inline-block; margin-left: 10px;"><i>Max. 500 tekens.</i></small>
    </div>
    <div class="form-item">
        <label>Check!</label>
        <input type="text" id="gb_captcha" name="gb_captcha" placeholder="Typ de tekens over" /><br/>
        <div style="text-align: center;"><?= $captcha ?></div>
    </div>
    <div class="form-item">
        <a href="#" class="btn btn-primary" id="guestbook-submit">Versturen</a>
    </div>
</form>
<hr/>
<div class="messages">
    <?php foreach($items as $item){ ?>
    <p>
        <strong>Op <?= $item->timestamp ?> zei <?= $item->name ?>:</strong><br/>
        <?= $item->text ?>
    </p>
    <?php }?>
</div>