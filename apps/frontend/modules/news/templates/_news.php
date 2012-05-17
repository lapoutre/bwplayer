<div id="article">
    <?php $date = str_replace(' ', ' &agrave; ', $article->getCreatedAt()); ?>
    <div class="h3"><?php echo link_to($article->getTitle(), "news_show", $article, array('style' => 'text-decoration: none;color: black;')) ?></div><div id="le-date-string"><?php echo '    le '.$date ?></div>
    <p>
    <div id="news-content">
        <?php echo $article->getBody(ESC_RAW) ?>
    </div>
    </p>
</div>