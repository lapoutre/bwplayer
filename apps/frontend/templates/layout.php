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
        <?php
        $route = sfContext::getInstance()->getRouting()->getCurrentInternalUri();
        ?>
        <div id = "wrapper">
            <div id = "header" >
                <img src="/images/logobw.png"  width = "360px"/>
                <div id = "menu">
                    <ul id="ul_menu">
                        <li id="li-news" style="border-left: 2px solid black;border-right: 2px solid black;" <?php if (preg_match("/news/", $route)) echo 'class="current"' ?>><?php echo link_to('NEWS', 'news', array() ,array('class' => 'root')) ?></li>
                        <li id="li-family" <?php if (preg_match("/family/", $route)) echo 'class="current"' ?>><a href="#" class="root">FAMILY</a>
                            <ul id="ssli-family">
                                <li class="family"><?php echo link_to('Artistes', 'family_artist', array(),array('class' => 'ssroot')) ?></li>
                                <li class="family"><?php echo link_to('Photographes', 'family_photo', array(),array('class' => 'ssroot')) ?></li>
                                <li class="family"><?php echo link_to('Graphistes', 'family_graph', array() ,array('class' => 'ssroot')) ?></li> 
                            </ul>
                        </li>
                        <li id="li-shop" <?php if (preg_match("/shop/", $route)) echo 'class="current"' ?> ><a href="#" class="root" style="border-left: 2px solid black;">SHOP</a>
                            <ul id="ssli-shop">
                                <li class="shop"><?php echo link_to('Release', 'shop_release', array() , array('class' => 'ssroot')) ?></li>
                                <li class="shop"><?php echo link_to('Merchandising', 'shop_merch', array() , array('class' => 'ssroot')) ?></li>
                            </ul>
                        </li>
                        <li id="li-contact" <?php if (preg_match("/contact/", $route)) echo 'class="current"' ?> id="even" style="border-right: 2px solid black;border-left: 2px solid black;"><?php echo link_to('CONTACT', 'contact', array(), array('class' => 'root')) ?></li>
                    </ul>
                </div>
            </div>
            <div id = "main-container">
                <div id="sf-content">
                    <?php echo $sf_content ?>
                </div>
            </div>
            <div id = "footer">
                <img id="this-is-a-footer-border"src="/images/border-footer.png"  width="409px" height="50px"/> 
                <p>
                    copyright
                </p>
            </div>
        </div>
    </body>
</html>
