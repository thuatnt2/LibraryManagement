<div id="content">
    <div id="news">
        <h4  class="title">Tin tức</h4>

        <h4><?php echo $article['Article']['title']; ?></h4>
        <div>
            <?php echo $this->Text->truncate($article['Article']['content'], 800); ?>   
            <a class="read-more-link">>> Đọc thêm</a>
        </div>
    </div>
    <div class="cl">&nbsp;</div>
    <div class="prefer_books">
        <h4  class="title">Giới thiệu sách hay</h4>
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
<div class="cl">&nbsp;</div>

