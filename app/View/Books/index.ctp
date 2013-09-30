<div class="umtop">
    <?php //echo $this->element('nav_reader_management'); ?>
    <?php echo $this->Session->flash(); ?>
    <div class="um_box_up"></div>
    <div class="um_box_mid">
        <div class="um_box_mid_content">
            <div class="um_box_mid_content_top">
                <span class="umstyle1"><?php echo 'Danh mục bài viết'; ?></span>
                <div style="clear:both"></div>
            </div>
            <div class="umhr"></div>
            <div class="um_box_mid_content_mid" id="index">

                <?php
                $columns = array(
                    'Book.id' => 'Mã sách',
                    'Book.title' => 'Tên sách',
                    'Book.publisher' => 'Nhà xuất bản',
                    'Book.created' => 'Ngày tạo',
                );
                
                $options = array(
                );
                
                echo $this->Table->render($books, $columns, $options);
                ?>
            </div>
        </div>
    </div>
    <div class="um_box_down"></div>
</div>
