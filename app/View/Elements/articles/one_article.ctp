<div class="article">
    <div class="article-title">
        <h4><?php echo $article['Article']['title'] ?></h4>
        - <i class="article-date-created">Ngày đăng: <?php echo $article['Article']['created'] ?></i> -
    </div>
    <div class="article-content">
        <p>
            <?php echo $article['Article']['content'] ?>
        </p> 
    </div>
</div>