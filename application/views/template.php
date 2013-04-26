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
                            <li><a href="/">Home</a></li>
                            <li class="submenu"><a href="#">Informatie</a>
                                <ul>
                                    <li><a href="/licht-en-informatie">Licht &amp; Informatie</a></li>
                                    <li><a href="/de-essentie">De Essentie</a></li>
                                </ul>
                            </li>
                            <li class="submenu"><a href="#">Consulten</a>
                                <ul>
                                    <li><a href="/coaching">Coaching</a></li>
                                    <li><a href="/reconnective-healing">Reconnective Healing</a></li>
                                    <li><a href="/kosmische-intelligentie">Kosmische Intelligentie</a></li>
                                </ul>
                            </li>
                            <li><a href="/agenda">Agenda</a></li>
                            <li><a href="/tarieven">Tarieven</a></li>
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
                <i style="display: block; float: left; margin: 8px 0;" id="agenda-signup-item" data-id=''></i>
            </div>
            <div class="form-item">
                <label>Voornaam</label>
                <input type="text" id="agenda-signup-first-name" placeholder="Voornaam" />
            </div>
            <div class="form-item">
                <label>Achternaam</label>
                <input type="text" id="agenda-signup-last-name" placeholder="Achternaam" />
            </div>
            <div class="form-item">
                <label>Adres</label>
                <input type="text" id="agenda-signup-adres" placeholder="Adres" />
            </div>
            <div class="form-item">
                <label>Postcode</label>
                <input type="text" id="agenda-signup-postalcode" placeholder="Postcode" />
            </div>
            <div class="form-item">
                <label>Woonplaats</label>
                <input type="text" id="agenda-signup-city" placeholder="Woonplaats" />
            </div>
            <div class="form-item">
                <label>Telefoon</label>
                <input type="text" id="agenda-signup-phone" placeholder="Telefoon" />
            </div>
            <div class="form-item">
                <label>Email</label>
                <input type="text" id="agenda-signup-email" placeholder="E-mail" />
            </div>
            <div class="form-item">
                <label>Leeftijd</label>
                <input type="text" id="agenda-signup-age" placeholder="Leeftijd" />
            </div>
            <div class="form-item radio">
                <label><input type="radio" name="gender" id="agenda-signup-gender-male" checked> Man</label>
                <label><input type="radio" name="gender" id="agenda-signup-gender-female"> Vrouw</label>
            </div>
            <div class="form-item">
                <label>Personen</label>
                <input type="text" id="agenda-signup-persons" placeholder="Personen" />
            </div>
            <div class="form-item">
                <label>Datum</label>
                <input type="text" id="agenda-signup-date" placeholder="Datum" />
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
        <script type="text/javascript">
        
          var _gaq = _gaq || [];
          _gaq.push(['_setAccount', 'UA-27893460-2']);
          _gaq.push(['_setDomainName', 'soul-coaching.nl']);
          _gaq.push(['_trackPageview']);
        
          (function() {
            var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
            ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
            var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
          })();
        
        </script>
    </body>
</html>
