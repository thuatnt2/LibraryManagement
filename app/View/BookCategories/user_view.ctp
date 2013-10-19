<div class ="content-header">
    <div class="content-header-left"> 
        <h3 class="content-title"><?php echo $bookCategory['BookCategory']['name'] ?></h3>
        <i>(Số lượng: <?php echo count($bookCategory['Book']) ?>)</i> 
    </div>

    <span class="content-header-right">
        <form class="search-in-category-form">
            <input type ="hidden" name="category-id" value="<?php echo $bookCategory['BookCategory']['id'] ?>" />
            <input type ='text' placeholder="Nhập tên sách ... " name="keyword" class="keyword"/>
            <button class="btn btn-small search-in-category-btn" type="submit" value="Tìm"><?php echo $this->Html->image('/images/search-ico-white.png') ?></button>
        </form> 
    </span>

</div>
<div class="clear-both"> </div>
<div class="tab-div">
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
                            <span class="description"></span>
                        </div>
                    </div>
                    <div class="clear-both"> </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>

</div>

<script type="text/javascript">
    $('.search-in-category-form').on('submit', function() {
        var key = $(this).children('.keyword').val().trim();
        // Check keyword is not blank
        if (key.length !== 0) {
            $.ajax({
                url: '/search-in-category',
                type: 'GET',
                data: $(this).serialize(),
                success: function(response) {
                    console.log('success');
                }
            });
        }
        return false;
    });


</script> 