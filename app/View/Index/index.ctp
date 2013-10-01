<div id="content">
    <div id="best-sellers">
        <h3>News</h3>
        
        <h4><?php echo $article['Article']['title'] ;?></h4>
        <div>
         <?php echo $this->Text->truncate($article['Article']['content'],800) ;?>   
        </div>
        <button class="btn btn-small btn-success" style="float: right">More</button>
        
    </div>
    <div class="cl">&nbsp;</div>
    <div class="products">
        <h3>Interesting books</h3>
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
<div id="footer" class="shell">

    <div class="copy">
        <p>Copyright © <a href="#">example.com</a>. Design by me</a></p>
    </div>
