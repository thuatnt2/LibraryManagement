
<div id="news">
    <div class="tab-name">
        <img class="tab-icon" src="/images/news-icon.png"></img>
        <a  href="javascript:void(0);"><h4>Tin tức</h4></a>
        <img class="tab-ender" src="/images/tab-background-right.jpg"></img>
    </div>

    <div class="tab-content">
        <h4><?php echo $article['Article']['title']; ?></h4>
        <div>
            <?php echo $this->Text->truncate($article['Article']['content'], 800); ?>   

            <?php
            echo $this->Html->link(
                    '>> Đọc thêm', 
                    '/tintuc/'.$article['Article']['id'],
                    array('class' => 'read-more-link')
            );
            ?>
        </div>   
    </div>


</div>

<div class="cl">&nbsp;</div>

<div class="prefer_books">
    <div class="tab-name">
        <img class="tab-icon" src="/images/prefer-book-icon.png"></img>
        <a href="javascript:void(0);"><h4>Giới thiệu sách</h4></a>
        <img class="tab-ender" src="/images/tab-background-right.jpg"></img>
    </div>
    <div class="tab-content">
        <ul>
            <li>
                <div class="product">
                    <a href="#" class="info">
                        <span class="holder">
                            <img src="/images/image01.jpg" alt="" />
                            <span class="book-name">Book Name</span>
                            <span class="author">by John Smith</span>
                            <span class="description">Maecenas vehicula ante eu enim pharetra<br />scelerisque dignissim <br />sollicitudin nisi</span>
                        </span>
                    </a>
                </div>
            </li>
            <li>
                <div class="product">
                    <a href="#" class="info">
                        <span class="holder">
                            <img src="/images/image02.jpg" alt="" />
                            <span class="book-name">Book Name</span>
                            <span class="author">by John Smith</span>
                            <span class="description">Maecenas vehicula ante eu enim pharetra<br />scelerisque dignissim <br />sollicitudin nisi</span>
                        </span>
                    </a>
                </div>
            </li>
            <li>
                <div class="product">
                    <a href="#" class="info">
                        <span class="holder">
                            <img src="/images/image03.jpg" alt="" />
                            <span class="book-name">Book Name</span>
                            <span class="author">by John Smith</span>
                            <span class="description">Maecenas vehicula ante eu enim pharetra<br />scelerisque dignissim <br />sollicitudin nisi</span>
                        </span>
                    </a>
                </div>
            </li>
            <li>
                <div class="product">
                    <a href="#" class="info">
                        <span class="holder">
                            <img src="/images/image04.jpg" alt="" />
                            <span class="book-name">Book Name</span>
                            <span class="author">by John Smith</span>
                            <span class="description">Maecenas vehicula ante eu enim pharetra<br />scelerisque dignissim <br />sollicitudin nisi</span>
                        </span>
                    </a>
                </div>
            </li>
        </ul>
    </div>
</div>


