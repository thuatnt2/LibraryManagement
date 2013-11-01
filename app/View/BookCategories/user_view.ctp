<div class ="content-header">
    <div class="content-header-left"> 
        <h3 class="content-title"><?php echo $bookCategory['BookCategory']['name'] ?></h3>
        <i>(Số lượng: <?php echo count($bookCategory['Book']) ?>)</i> 
    </div>

    <span class="content-header-right">

        <form class="search-in-category-form">
            <img id="book-searching-loading-indicator" src="/images/circle-loading.gif" style="display:none;"/>
            <input type ="hidden" name="category_id" value="<?php echo $bookCategory['BookCategory']['id'] ?>" />
            <input type ='text' placeholder="Nhập tên sách ... " name="keyword" class="keyword"/>
            <button class="btn btn-small search-in-category-btn" type="submit" value="Tìm"><?php echo $this->Html->image('/images/search-ico-white.png') ?></button>
        </form> 
    </span>

</div>
<div class="clear-both"> </div>
<div class="tab-div">
    <div class="tab-content">
        <div id="books-in-category">
            <?php echo $this->element('/bookcategories/books_in_category', array('books' => $bookCategory['Book'])) ?>
        </div>
        <div class="paginator">
            <?php echo  $this->Paginator->first('Đầu')?>
            <?php echo  $this->Paginator->prev('Trước')?>
            <?php echo $this->Paginator->numbers(array('separator' => false, 'class' => 'paginatee'));?>
            <?php  echo $this->Paginator->next('Tiếp')?>
           
        </div> 
    </div>

</div>

<script type="text/javascript">
    $(function() {
        var oldListHtml = $('#books-in-category').html();
        function changeBooksList(html) {
            $('#books-in-category').fadeOut(300, function() {
                $(this).html(html).fadeIn(300);
                // Clear search result
                $('#clear-searching-result-btn').on('click', function() {
                    $('#books-in-category').fadeOut(300, function() {
                        $(this).html(oldListHtml).fadeIn(300);
                    });
                });
            });
        }
        $('.search-in-category-form').on('submit', function() {
            var key = $(this).children('.keyword').val().trim();
            // Check keyword is not blank
            if (key.length !== 0) {
                $('#book-searching-loading-indicator').show();
                $.ajax({
                    url: '/search-in-category',
                    type: 'GET',
                    data: $(this).serialize(),
                    success: function(response) {
                        $('#book-searching-loading-indicator').hide();
                        changeBooksList(response);
                    }
                });
            }
            return false;
        });
    });
</script> 