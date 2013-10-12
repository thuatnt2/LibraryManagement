<div class="umtop">
    <?php //echo $this->element('nav_reader_management'); ?>
    <?php echo $this->Session->flash(); ?>
    <div class="um_box_up"></div>
    <div class="um_box_mid">
        <div class="um_box_mid_content">
            <div class="um_box_mid_content_top">
                <span class="umstyle1"><?php echo 'Thông tin tài liệu'; ?></span>
                <div style="clear:both"></div>
            </div>
            <div class="filter" style="width: 500px;float: right;margin-top: -30px">
                <?php echo $this->Form->create(array('action' => 'index', 'type' => 'GET')) ?>
                
         
                
                <table class="gsc-search-box" style="border-collapse: initial">
                    <tr style="margin: 0px;padding: 0px">
                        <td style="padding: 0px; background: #E5E8ED"> <?php echo $this->Form->input('key_search', array ( 'id'=>'book_key_search', 'div' => false,'style' => 'float:right', 'label' => false, 'type' => 'text', 'class' => 'form-control left', 'placeholder' => 'Tìm kiếm theo tên tài liệu')); ?></td>
                        <td style="padding: 0px; background: #E5E8ED"> <?php echo $this->Form->Submit('Tìm kiếm', array('div' => false,'class' => 'btn btn-primary','style' => 'float:right')); ?>
                    </tr>
                </table>
                <?php echo $this->Form->end(); ?>
            </div>
            <div class="umhr" style='padding: 10px;'></div>
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
