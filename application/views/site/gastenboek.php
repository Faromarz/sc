<h1>Gastenboek</h1>
<?php if(isset($_POST['gb_name'])){ ?>
<script> $(function(){ alert('Dank voor de reactie. Uw bericht is geplaatst en zal spoedig zichtbaar worden! '); }); </script>
<?php }?>
<p class="intro">Geef in eigen bewoordingen weer hoe je de coaching of Re-Connective healing  consulten hebt ervaren, en wat dit voor je heeft betekend.</p>
<form method="POST">
    <div class="form-item">
        <label>Naam</label>
        <input type="text" id="gb_name" name="gb_name" placeholder="Naam" />
    </div>
    <div class="form-item">
        <label>Bericht</label>
        <textarea id="gb_text" maxlength="500" name="gb_text" style="height: 40px;"></textarea>
        <small style="display: inline-block; margin-left: 10px;"><i>Max. 500 tekens.</i></small>
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