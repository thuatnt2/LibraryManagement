<script type="text/javascript" src="/js/jquery.bxslider.min.js"></script>
<link rel="stylesheet" href="/css/jquery.bxslider.css" type="text/css" />
<div id="slide-show">
    <h4 class="content-title">Hình ảnh hoạt động</h4>
    <ul id="bxslider">
        <li><img src="/images/slide/00.jpg" title="The long and winding road" /></li>
        <li><img src="/images/slide/01.jpg" title="The long and winding road" /></li>
        <li><img src="/images/slide/02.jpg" title="The long and winding road" /></li>
        <li><img src="/images/slide/03.jpg" title="Happy trees" /></li>
        <li><img src="/images/slide/04.jpg" title="Happy trees" /></li>
    </ul>
</div>
<div class="devider"> </div>
<script type="text/javascript">
    $('#bxslider').bxSlider({
        auto: true,
        mode: 'fade',
        maxSlides: 1,
        minSlides: 1,
//        captions: true,
    });
</script> 

<div id="news">
    <h4 class="content-title">Tin tức</h4>
    <div class="content">
        <p><strong><?php echo $article['Article']['title']; ?></strong></p>
        <i class="article-date-created">Ngày đăng: <?php echo $article['Article']['created'] ?></i>
        <div>
            <?php echo $this->Text->truncate($article['Article']['content'], 800); ?>   
            <?php
            echo $this->Html->link(
                    'Chi tiết >>', array(
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


