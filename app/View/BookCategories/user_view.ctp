<div class="tab-div">
    <div class="tab-name">
        <img class="tab-icon" src="/images/news-icon.png"></img>
        <a  href="javascript:void(0);"><h4><?php echo $bookCategory['BookCategory']['name']; ?></h4></a>
        <img class="tab-ender" src="/images/tab-background-right.jpg"></img>
    </div>

    <div class="tab-content">

        <div class="books-in-category">
            <div class="books-list ">
                <?php foreach ($bookCategory['Book'] as $book): ?> 
                    <div class="book-short-view">
                        <div class="book-short-view-left">
                            <a href="/tai-lieu/<?php echo $book['id'] ?>" class="info">
                                <span class="holder">
                                    <img src="/images/image06.jpg" alt="">
                                </span>
                            </a>
                        </div>
                        <div class="book-short-view-right">
                             <a href="/tai-lieu/<?php echo $book['id'] ?>" class="info"><h4><?php echo $book['title'] ?></h4></a>
                            <label> <strong>Tác giả:</strong> <?php echo $book['authors'] ?></label>
                            <label> <strong>Nhà xuất bản:</strong> <?php echo $book['publisher'] ?></label>
                            <span class="description">Maecenas vehicula ante eu enim pharetra scelerisque dignissim sollicitudin nisi</span>
                        </div>
                    </div>
                    <div class="clear-both"> </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>


</div>