<div id="news">
    <h4 class="content-title">Tin tức</h4>
    <div class="content">
        <p><strong><?php echo $article['Article']['title']; ?></strong></p>
        <div>
            <?php echo $this->Text->truncate($article['Article']['content'], 800); ?>   
            <?php
            echo $this->Html->link(
                    '>> Đọc thêm', array(
                'controller' => 'articles',
                'action' => 'userView',
                'id' => $article['Article']['id'],
                'slug' => $this->Common->vnit_change_string(Inflector::slug($article['Article']['title']))
            ));
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
            <li>
                <div class="product">
                    <a href="#" class="info">
                        <span class="holder">
                            <?php echo $this->Html->image('/images/image01.jpg') ?>
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
                            <?php echo $this->Html->image('/images/image04.jpg') ?>
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


