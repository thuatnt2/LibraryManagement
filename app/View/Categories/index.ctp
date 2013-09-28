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
                    'Category.name' => 'Tên Danh mục',
                    'ParentCategory.name' => 'Danh mục cha',
                    'Category.user_created' => 'Người tạo',
                    'Category.created' => 'Ngày tạo',
                    'Category.is_active' => 'Trạng thái',
                );
                
                $options = array(
                );
                
                echo $this->Table->render($categories, $columns, $options);
                ?>
            </div>
        </div>
    </div>
    <div class="um_box_down"></div>
</div>
