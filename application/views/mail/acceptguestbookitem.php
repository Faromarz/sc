Er is een reactie in het gastenboek geplaatst.

Naam: <?= $gbi->name ?> 

Tekst: <?= $gbi->text ?> 


Klik op deze link om het gastenboek te accepteren:
<?= $config['website_url'] ?>/acceptguestbookitem?id=<?= $gbi->id ?>&key=<?= App::generate_guestbook_key($gbi->id); ?>

[Einde Automatisch Bericht]