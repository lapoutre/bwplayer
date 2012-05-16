<div id="article">
    <h3><?php echo link_to($article->getTitle(), "news_show", $article, array('style' => 'text-decoration: none;color: black;')) ?></h3>
    <p>
    <div id="news-content">
        <?php echo $article->getBody(ESC_RAW) ?>
    </div>
</p>
</div>