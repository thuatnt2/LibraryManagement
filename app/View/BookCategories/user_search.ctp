<div class="book-searching-messages">
    <?php $result_count = count($books) ?>
    <?php if ($result_count == 0) { ?>
        <i class="searching-no-result">Không tìm thấy kết quả nào. </i>
    <?php } else { ?>
        <i class="searching-have-result">Tìm thấy <?php echo count($books) ?> kết quả. </i>
    <?php } ?>
        <button id="clear-searching-result-btn" class="btn btn-small btn-xs">&hookleftarrow; Quay lại</button>
</div>
<div class="clear-both"> </div>
<?php echo $this->element('/bookcategories/books_in_category', array('books' => $books,'keyword' => $keyword)) ?>