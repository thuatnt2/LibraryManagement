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
        <strong><?php echo $this->LinkGenerator->link_for_article($articles[0]); ?></strong>
        <br />
         <?php $date = new DateTime($articles[0]['Article']['created']); ?>
        - <i class="article-date-created">Ngày đăng: <?php echo $date->format('d/m/Y') ?></i> -
        <div class="article-short-content">
            <?php echo $this->Text->truncate($articles[0]['Article']['content'], 800); ?>   
            <br />
            <?php
//            echo $this->LinkGenerator->link_for_article($articles[0], "<i> Chi tiết >> </i>", 'read-more-btn');
            ?>
        </div>
        <div class="clear-both"></div>
        <div class="other-articles">
            <div class="other-articles-list"> 
                <ul>
                    <?php for ($i = 1; $i < count($articles); $i++): ?>
                        <li> 
                            <?php
                            echo $this->LinkGenerator->link_for_article($articles[$i], null, 'other-articles-link');
                            ?>
                            (<i class="article-date-created">
                                <?php $date = new DateTime($articles[$i]['Article']['created']); ?>
                                <?php
                                echo $date->format('d/m/Y')
                                ?>
                            </i>)
                        </li>
                    <?php endfor; ?>
                </ul>
            </div>

        </div>
    </div>
</div>

<div class="devider"> </div>
<div class="clear-both"></div>
<div class="prefer_books">
    <h4 class="content-title">Giới thiệu sách</h4>
    <div class="content">
        <ul>
            <!--FIXME, this's only sample data-->
            <?php $i = 0; ?>
            <?php foreach ($books as $book) { ?>
                <li>
                    <div class="product">
                        <a href="/tai-lieu/<?php echo $book['Book']['id'] ?>" class="info">
                            <span class="holder">
                                <?php echo $this->Html->image('/images/book' . $i . '.jpg') ?>
                                <span class="book-name"><?php echo $book['Book']['title'] ?></span>
                                <span class="author"><strong><?php echo $book['Book']['authors'] ?></strong></span>
                            </span>
                        </a>
                    </div>
                </li>
                <?php $i++;
            }
            ?>
        </ul>
    </div>
</div>


