<?php foreach($articles as $article): ?>
        <?php  echo $this->element('articles/one_article',array('article' => $article)) ?>
<?php endforeach; ?>
