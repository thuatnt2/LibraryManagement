<h3>
    <?php echo $book['Book']['title'] ?>
</h3>
<div class="book-details"> 
    <div class="book-left">
        <?php echo $this->Html->image('/images/image02.jpg') ?>
    </div>
    <div class="book-right"> 
        <ul>
            <li>Tác giả: <?php echo $book['Book']['authors'] ?></li>
            <li>Ngôn ngữ: <?php echo $book['BookLanguage']['name'] ?></li>
            <li>Nhà xuất bản: <?php echo $book['Book']['publisher'] ?></li>
            <li>Tổng số trang: <?php echo $book['Book']['number_of_pages'] ?></li>
            <li>Ngày phát hành: <?php echo $book['Book']['year_of_publish'] ?></li>
            <li>Khổ: <?php echo $book['Book']['paper_size'] ?></li>
            <li>
                
          Danh mục:      <?php
                        echo $this->Html->link(
                                $book['BookCategory']['name'], array(
                            'controller' => 'bookCategories',
                            'action' => 'userView',
                            'id' => $book['Book']['book_category_id'],
                            'slug' => $this->Common->vnit_change_string(Inflector::slug($book['BookCategory']['name']))
                        ));
                        ?>
              
              
            <li>Thể loại: <?php echo $book['BookType']['name'] ?></li>
        </ul>
    </div>


</div>

