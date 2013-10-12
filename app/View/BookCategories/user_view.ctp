<div class="tab-div">
    <div class="tab-name">
        <img class="tab-icon" src="/images/news-icon.png"></img>
        <a  href="javascript:void(0);"><h4><?php echo $bookCategory['BookCategory']['name']; ?></h4></a>
        <img class="tab-ender" src="/images/tab-background-right.jpg"></img>
    </div>

    <div class="tab-content">
        <div class="category-statistics"> 
            <ul>
                <li>Số lượng: <?php echo count($bookCategory['Book']) ?></li>
            </ul>
        </div>
        <div class="books-in-category">
            <div class="books-list prefer_books">
                <ul>
                    <?php foreach ($bookCategory['Book'] as $book): ?> 
                        <li>
                            <div class="product">
                                <a href="/tai-lieu/<?php echo $book['id'] ?>" class="info">
                                    <span class="holder">
                                        <img src="/images/image06.jpg" alt="">
                                        <span class="book-name"><?php echo $book['title'] ?></span>
                                        <span class="author"><?php echo $book['authors'] ?></span>
                                        <span class="description">Maecenas vehicula ante eu enim pharetra<br>scelerisque dignissim <br>sollicitudin nisi</span>
                                    </span>
                                </a>
                            </div>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>
    </div>


</div>