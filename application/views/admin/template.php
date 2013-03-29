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
        <script>window.jQuery || document.write('<script src="/media/js/jquery-1.9.1.min.js"><\/script>')</script>
        <script src="/ckeditor/ckeditor.js"></script>
        
        <script src="/media/js/script.js"></script>
    </head>
    <body>
        <div class="body-wrapper">
            <div class="container">
                <div class="header">
                    <div class="logo">
                        <h1>Admin</h1>
                    </div>
                    <div class="menu">
                        <ul>
                            <?php if($logged_in){ ?>
                            <li><a href="/admin">Bewerker</a></li>
                            <li><a href="/admin/lezingen">Lezingen</a></li>
                            <li><a href="/admin/logout">Afmelden</a></li>
                            <?php } ?>
                        </ul>
                    </div>
                    <div class="clear"></div>
                </div>
                <div class="content">
                    <div class="content-inner">
                        <?php if(isset($_GET['success'])){ ?><div class='success'>De actie was succesvol.</div><?php }?>
                        <?= $content ?>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>