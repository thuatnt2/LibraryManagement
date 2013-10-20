<div class="umtop">
    <?php //echo $this->element('nav_reader_management'); ?>
    <?php echo $this->Session->flash(); ?>
    <div class="um_box_up"></div>
    <div class="um_box_mid">
        <div class="um_box_mid_content">
            <div class="form-horizontal">
                 <div class="span5 align-left" style="margin-left: 0px">
                    <span class="umstyle1"><?php echo __('Thông tin tài liệu'); ?></span>
                </div>
                <div class="span2 align-right" align="left">
                    <?php echo $this->Form->create(array('action' => 'index', 'type' => 'GET')) ?>
                    <?php echo $this->Form->Submit('Tìm kiếm', array('div' => false,'class' => 'btn btn-primary')); ?>
                </div>
                 <div class="span3 align-right" align="right">
                      <?php echo $this->Form->input('key_search', array ( 'id'=>'book_key_search', 'div' => false,'label' => false, 'type' => 'text', 'class' => 'form-control left', 'placeholder' => 'Tìm kiếm theo tên tài liệu')); ?>
                    <?php echo $this->Form->end();?>
                </div>
            </div>
             <div style="clear:both"></div>
            <div class="umhr"></div>
            <div class="um_box_mid_content_mid_right" align="right"></div>
            <div style="clear:both"></div>
        </div>
        <div class="um_box_mid_content_mid" id="book_table">

            <?php
            $columns = array(
                'Book.barcode' => 'Mã sách',
                'Book.title' => 'Tên sách',
                'Book.publisher' => 'Nhà xuất bản',
                'Book.authors' => 'Tác giả',
                'BookLanguage.name' => 'Ngôn ngữ',
                'Book.created' => 'Ngày tạo',
            );

            $options = array(
                'link_to_view' => 'title',
            );

            echo $this->Table->render($books, $columns, $options);
            ?>
        </div>
    </div>
</div>
<!--<div class="um_box_down"></div>-->
</div>
