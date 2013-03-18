<h1>Bewerker</h1>
    <div class="form-item">
        <label style="display: inline-block;" for="editor_subject">Wat wil je bewerken?</label>
        <?= Form::select('editor_subject', $subjects, $subject_selected ? $subject_selected->id : NULL); ?>
    </div>

<hr/>

<?php if($subject_selected) { ?>
<form method="POST">
    <?php switch($subject_selected->type){ 
            case 'html': 
                ?>
    HTML editor
    <?php
                break;
    } ?>
</form>
<?php } ?>

<script>

$(function(){
    $('select[name="editor_subject"]').change(function(){
        var id = $(this).val();
        if(id){
            window.location = '/admin?id='+id;
        }
    });
});

</script>