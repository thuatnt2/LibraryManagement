<h3 class="title-content">
    <?php echo $book['Book']['title'] ?>
</h3>
<div class="book-details"> 
    <div class="book-left">
           <ul style="list-style: none">
            <li><strong>Tác giả: </strong><?php echo empty($book['Book']['authors']) == false ? $book['Book']['authors'] : 'Không rõ' ?></li>
            <li><strong>Ngôn ngữ:</strong> <?php echo $book['Book']['language'] ?></li>
            <li><strong>Nhà xuất bản: </strong><?php echo $book['Book']['publisher'] ?></li>
            <li><strong>Tổng số trang: </strong><?php echo $book['Book']['number_of_pages'] ?></li>
            <li><strong>Ngày phát hành: </strong><?php echo $book['Book']['year_of_publish'] ?></li>
            <li><strong>Khổ:</strong> <?php echo $book['Book']['paper_size'] ?></li>
            <li><strong>Danh mục:</strong>
                      <?php
                echo $this->Html->link(
                        $book['BookCategory']['name'], array(
                    'controller' => 'bookCategories',
                    'action' => 'userView',
                    'id' => $book['Book']['book_category_id'],
                    'slug' => $this->Common->vnit_change_string(Inflector::slug($book['BookCategory']['name']))
                ));
                ?>
            <li><strong>Thể loại:</strong> <?php echo $book['BookType']['name'] ?></li>
        </ul>
    </div>
   
    <div class="book-right"> 
             <?php echo $this->Html->image('/images/image03.jpg') ?>
    </div>
    

</div>
 <div class="clear-both"> </div>
<div class="actions">
    <button class="btn btn-small btn-success">Mượn sách này</button>
    <button class="btn btn-small btn-warning">Thêm vào giỏ</button>
</div>
<div class="other-books prefer_books">
    <h4>Tài liệu cùng danh mục</h4>
          <ul>
            <?php foreach ($other_books as $book) { ?>
                <li>
                    <div class="product">
                        <a href="/tai-lieu/<?php echo $book['Book']['id'] ?>" class="info">
                            <span class="holder">
                                <?php echo $this->Html->image('/images/image-best04.jpg') ?>
                                <span class="book-name"><?php echo $book['Book']['title'] ?></span>
                                <span class="author"><strong><?php echo $book['Book']['authors'] ?></strong></span>
                            </span>
                        </a>
                    </div>
                </li>
            <?php } ?>
        </ul>
</div>

