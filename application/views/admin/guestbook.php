<style>
    tr td {
        border-bottom: 1px solid #CCC;
    }
</style>

<h1>Gastenboek items goed/afkeuren</h1>
<h2>Ongekeurde items</h2>
<table>
    <thead>
        <tr>
            <th>Naam</th>
            <th>Bericht</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($items as $item){ ?>
        <tr data-id="<?= $item->id ?>">
            <td><?= $item->name ?></td>
            <td><p><?= htmlentities($item->text) ?></p>
                <a href="/admin/guestbook/<?= $item->id ?>/accept">Accepteer</a>
                <a href="/admin/guestbook/<?= $item->id ?>/deny">Blokkeer</a>
            </td>
        </tr>
        <?php } ?>
    </tbody>
</table>
