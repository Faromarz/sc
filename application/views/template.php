<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title><?= $title ?></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">
        
        <link rel="stylesheet" href="/media/css/blueprint.css"/>
        <link rel="stylesheet" href="/media/css/style.css">
        
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        <script src="/media/js/easing.js"></script>
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
                            <li><a href="#">Introductie</a></li>
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
    </body>
</html>