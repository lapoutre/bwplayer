<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
    <head>
        <?php include_http_metas() ?>
        <?php include_metas() ?>
        <?php include_title() ?>
        <link rel="shortcut icon" href="/favicon.ico" />
        <?php include_stylesheets() ?>
        <?php include_javascripts() ?>
    </head>
    <body>
        <div id = "wrapper">
            <div id = "header" >
                <img src="/images/logobw.png"  width = "250px">
                    <div id = "menu">
                        <ul id="ul_menu">
                            <li><?php echo link_to('NEWS', 'news') ?></li>
                            <li><?php echo link_to('FAMILY', 'family') ?></li>
                            <li><?php echo link_to('SHOP', 'shop') ?></li>
                            <li><?php echo link_to('CONTACT', 'contact') ?></li>
                        </ul>
                    </div>
            </div>
            <div id = "main-container">
                <?php echo $sf_content ?>
            </div>
            <div id = "footer">    
                copyright
            </div>
        </div>
    </body>
</html>
