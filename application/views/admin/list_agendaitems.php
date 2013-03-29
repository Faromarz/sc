<style>
    table tbody tr:hover td {
        background-color: rgb(229, 239, 255);
        cursor: pointer;
    }
</style>
<script>
    $(function(){
        $('tr').click(function(){
            window.location = '/admin/lezingen/'+$(this).attr('data-id');
        })
    });
</script>

<h1>Lezingen</h1>

<p><a href='/admin/lezingen/0' class='btn'>Toevoegen</a></p>
<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Titel</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($agendaitems as $agendaitem){ ?>
        <tr data-id="<?= $agendaitem->id ?>">
            <td><?= $agendaitem->id ?></td>
            <td><?= $agendaitem->title ?></td>
        </tr>
        <?php } ?>
    </tbody>
</table>
