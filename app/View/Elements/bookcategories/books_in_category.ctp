<?php foreach ($books as $book): ?> 
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
            <span class="description"></span>
        </div>
    </div>
    <div class="clear-both"> </div>
<?php endforeach; ?>