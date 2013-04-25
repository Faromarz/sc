<?php
$fields = array(
    'address' => 'Adres',
    'postalcode' => 'Postcode',
    'city' => 'Woonplaats',
    'phone' => 'Telefoon',
    'gender' => 'Geslacht',
    'age' => 'Leeftijd',
    'email' => 'Email',
    'persons' => 'Personen',
    'date' => 'Datum',
    'comments' => 'Opmerkingen'
)
?>

<p>Er is een nieuwe aanmelding voor de agenda.</p>
<p>
    Lezing: <?= $agendaitem->title ?><br/>
Lezing Datum: <?= $agendaitem->date ?>, <?= $agendaitem->time ?>
</p>
<p>
    
Naam: <?= $first_name ?> <?= $last_name ?><br/>
<?php foreach($fields as $id => $field){ ?>
    <?= $field ?>: <?= $$id ?><br/>
<?php } ?>
</p>


[Einde Automatisch Bericht]