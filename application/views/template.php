<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title><?= $title ?></title>
        <meta name="description" content="<?= App::get_content('site_description') ?>">
        <meta name="viewport" content="width=device-width">
        
        <link rel="stylesheet" href="/media/css/blueprint.css"/>
        <link rel="stylesheet" href="/media/css/style.css">
        
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="/media/js/jquery-1.9.1.min.js"><\/script>')</script>
        <script src="/media/js/script.js"></script>
    </head>
    <body>
        <div class="body-wrapper">
            <div class="container">
                <div class="header">
                    <div class="logo">
                        <h1>Soul-Coaching</h1>
                    </div>
                    <div class="menu">
                        <ul>
                            <li><a href="/">De Essentie</a></li>
                            <li class="submenu"><a href="#">Hoe het werkt</a>
                                <ul>
                                    <li><a href="/kosmische-intelligentie">Kosmische Intelligentie</a></li>
                                    <li><a href="/licht-en-informatie">Licht &amp; Informatie</a></li>
                                </ul>
                            </li>
                            <li><a href="/waar-kun-je-aan-werken">Waar kun je aan werken</a></li>
                            <li><a href="/lezingen">Lezingen</a></li>
                            <li><a href="/contact">Contact</a></li>
                        </ul>
                    </div>
                    <div class="clear"></div>
                </div>
                <div class="content">
                    <div class="c-left">
                        <div class="c-left-inner">
                            <?= $content?>
                        </div>
                    </div>
                    <div class="c-right" id="c-right">
                        <?= $content_right ?>
                    </div>
                    <div class="clear"></div>
                </div>
            </div>
        </div>
        
        <div id="agenda-backdrop"></div>
        <div id="agenda-signup">
            <h1>Aanmelden voor een agenda item</h1>
            <div class="form-item">
                <label>Agendapunt</label>
                <i id="agenda-signup-item" data-id=''></i>
            </div>
            <div class="form-item">
                <label>Naam</label>
                <input type="text" id="agenda-signup-name" placeholder="Naam" />
            </div>
            <div class="form-item">
                <label>Email</label>
                <input type="text" id="agenda-signup-email" placeholder="E-mail" />
            </div>
            <div class="form-item">
                <label>Personen</label>
                <input type="text" id="agenda-signup-persons" placeholder="Personen" />
            </div>
            <div class="form-item">
                <label>Opmerkingen</label>
                <input type="text" id="agenda-signup-comments" placeholder="Opmerkingen" />
            </div>
            <div class="form-item">
                <a href="#" class="btn btn-primary" id="agenda-signup-submit">Aanmelden</a>
                <a href="#" class="btn" id="agenda-signup-cancel">Annuleren</a>
            </div>
        </div>
        
    </body>
</html>