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
            $route = sfContext::getInstance()->getRouting()->getCurrentRouteName();
        ?>
        <div id = "wrapper">
            <div id = "header" >
                <img src="/images/logobw.png"  width = "360px"/>
                    <div id = "menu">
                        <ul id="ul_menu">
                            <li style="border-left: 2px solid black;border-right: 2px solid black;" <?php if($route == "news") echo 'class="current"' ?>><?php echo link_to('NEWS', 'news') ?></li>
                            <li <?php if($route == "family") echo 'class="current"' ?>><a href="#">FAMILY</a></li>
                            <li <?php if($route == "shop") echo 'class="current"' ?> style="border-left: 2px solid black;"><a href="#">SHOP</a></li>
                            <li <?php if($route == "contact") echo 'class="current"' ?> id="even" style="border-right: 2px solid black;border-left: 2px solid black;"><?php echo link_to('CONTACT', 'contact') ?></li>
                        </ul>
                      <div id="menu_family">
                        <div class="family" style="width: 196px;margin-left: 234px;border: solid 1px grey;font-size: 16px;font-weight: normal;"><?php echo link_to('Artistes','family/artist') ?></div>
                          <div class="family" style="width: 196px;margin-left: 234px;border: solid 1px grey;font-size: 16px;font-weight: normal;"><?php echo link_to('Photographes','family/photo') ?></div>
                          <div class="family" style="width: 196px;margin-left: 234px;border: solid 1px grey;font-size: 16px;font-weight: normal;"><?php echo link_to('Graphistes','family/graph') ?></div>
                      </div>
                      <div id="menu_shop">
                          <div class="shop" style="width: 192px;margin-right: 250px;margin-left: 434px;border: solid 1px grey;font-size: 16px;font-weight: normal;"><?php echo link_to('Release','shop/release') ?></div>
                          <div class="shop" style="width: 192px;margin-right: 250px;margin-left: 434px;border: solid 1px grey;font-size: 16px;font-weight: normal;"><?php echo link_to('Merchandising','shop/merch') ?></div>
                      </div>
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
