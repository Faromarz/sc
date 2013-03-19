<h1>Bewerker</h1>
    <div class="form-item">
        <label style="display: inline-block;" for="editor_subject">Wat wil je bewerken?</label>
        <?= Form::select('editor_subject', $subjects, $subject_selected ? $subject_selected->id : NULL); ?>
    </div>

<hr/>

<?php if($success){ ?>
<div class="success">Wijzigingen opgeslagen...</div>
<?php } ?>

<?php if($subject_selected) { ?>
<form method="POST">
<h2>Bewerk: <?= $subject_selected->description ?> <input type="submit" value="Opslaan" class="btn btn-primary" /></h2>

    <?php switch($subject_selected->type){ 
            case 'html': 
                ?>
    <textarea name="content" id="content"><?= $subject_selected->content ?></textarea>
    
    <script>
    $(function(){
        CKEDITOR.replace( 'content', {
            language: 'nl',
            uiColor: '#cdacce',
            width: 465
        });
    })
    </script>
    <?php
                break;
    } ?>
</form>
<?php } ?>

<script>

$(function(){
    $('select[name="editor_subject"]').change(function(){
        var id = $(this).val();
        if(parseInt(id)){
            window.location = '/admin?id='+id;
        }
    });
});

</script>