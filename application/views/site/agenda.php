<h1>Agenda</h1>
<div>
    <?= App::get_content('lezingen') ?>
</div>
<hr/>

<h3>Agenda</h3>
<?php foreach($items as $item){ 
    list($y, $m, $d) = explode('-', $item->date);
    $date = new DateTime();
    $date->setDate($y, $m, $d);
    ?>
<h2><?= $item->title ?></h2>
<i><?= date('j-n-Y', $date->getTimestamp()) ?>, <?= $item->time ?></i>
<p>
    <?= $item->info ?>
</p>
<p>
    <a href="#" data-agendaitem="<?= $item->title ?>"  data-id="<?= $item->id ?>" class="agenda-signup">Aanmelden</a>
</p>
<hr/>
<?php } ?>
