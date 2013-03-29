<script>
    $(function(){
        $('#delete-item').click(function(){
            if(confirm('Wilt u dit item verwijderen?')){
                window.location = '/admin/lezingen/'+$('#item-id').attr('value')+'?delete=1'
            }
        })
        
        $('#save-item').click(function(){
            $('form').submit();
        })
    })
</script>

<h1>Lezing wijzigen</h1>
<input type='hidden' id='item-id' value='<?= $item->id ?>' />
<form method='post'>
    <div class="form-item">
        <label>Titel</label>
        <input type="text" id="agendaitem-title" name='title' placeholder="Titel" value='<?= $item->title ?>'>
    </div>
    <div class="form-item">
        <label>Datum</label>
        <input type="text" id="agendaitem-date" name='date' placeholder="Datum" value='<?= $item->date ?>'> <i>Let op! Formaat: jjjj-mm-dd, bijv: 2014-01-14</i>
    </div>
    <div class="form-item">
        <label>Tijd</label>
        <input type="text" id="agendaitem-time" name='time' placeholder="Tijd" value='<?= $item->time ?>'>
    </div>
    <div class="form-item">
        <label>Informatie</label>
        <textarea id='agendaitem-info' name='info' style='height: 100px;'><?= $item->info ?></textarea>
    </div>
    <div class="form-item">
        <a href="#" class="btn btn-primary" id="save-item">Opslaan</a>
        <?php if($item->id) { ?> <a href="#" class="btn" id="delete-item">Verwijderen</a><?php }?>
    </div>
</form>