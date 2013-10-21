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
            <?php if (isset($keyword)) { ?>
                <a href="/tai-lieu/<?php echo $book['id'] ?>" class="inforr"><h4><?php echo $this->Text->highlight($book['title'], $keyword, array('format' => '<span class="high-light">\1</span>')) ?></h4></a>
            <?php } else { ?>
                 <a href="/tai-lieu/<?php echo $book['id'] ?>" class="info"><h4><?php echo $book['title'] ?></h4></a>
            <?php } ?>
            <strong>Tác giả: </strong> <?php echo $book['authors'] ?> <br />
            <strong>Nhà xuất bản: </strong><?php echo $book['publisher'] ?><br />
            <strong>Ngôn ngữ: </strong><?php echo $book['language'] ?>
            <span class="description"></span>
        </div>
    </div>
    <div class="clear-both"> </div>
<?php endforeach; ?>