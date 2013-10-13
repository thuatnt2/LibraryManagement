<div id="news">
    <h3 class="content-title">Tin tức</h3>
    <div class="content">
        <p><strong><?php echo $article['Article']['title']; ?></strong></p>
        <i>Ngày đăng: <?php echo $article['Article']['created'] ?></i>
        <div>
            <?php echo $this->Text->truncate($article['Article']['content'], 800); ?>   
            <?php
            echo $this->Html->link(
                    '>> Đọc thêm', array(
                'controller' => 'articles',
                'action' => 'userView',
                'id' => $article['Article']['id'],
                'slug' => $this->Common->vnit_change_string(Inflector::slug($article['Article']['title']))
                    ), array('class' => 'read-more-btn'));
            ?>
        </div>   
    </div>
</div>
<div class="devider"> </div>
<div class="clear-both"></div>
<div class="prefer_books">
    <h4 class="content-title">Giới thiệu sách</h4>
    <div class="content">
        <ul>
            <?php foreach ($books as $book) { ?>
                <li>
                    <div class="product">
                        <a href="/tai-lieu/<?php echo $book['Book']['id'] ?>" class="info">
                            <span class="holder">
                                <?php echo $this->Html->image('/images/image-best04.jpg') ?>
                                <span class="book-name"><?php echo $book['Book']['title'] ?></span>
                                <span class="author"><strong><?php echo $book['Book']['authors'] ?></strong></span>
                            </span>
                        </a>
                    </div>
                </li>
            <?php } ?>
        </ul>
    </div>
</div>


