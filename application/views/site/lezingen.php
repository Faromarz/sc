<h1>Lezingen / Workshops / Agenda</h1>
<p class="intro">Er kunnen lezingen en workshops over diverse onderwerpen voor u in groeps verband  als op locatie  in huis Landfort te Megchelen worden verzorgd. Hierover kunt u met mij contact opnemen.</p>

<?php foreach($items as $item){ 
    list($y, $m, $d) = explode('-', $item->date);
    $date = new DateTime();
    $date->setDate($y, $m, $d);
    ?>
<h2><?= strftime('%A %e %B %Y', $date->getTimestamp()) ?></h2>
<i><?= $item->time ?></i>
<p>
    <strong><?= $item->title ?></strong><br/>
    <?= $item->info ?>
</p>
<p>
    <a href="#" data-agendaitem="<?= $item->title ?>" class="agenda-signup">Aanmelden</a>
</p>
<hr/>
<?php } ?>
