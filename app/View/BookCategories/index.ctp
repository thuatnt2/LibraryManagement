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
                    'BookCategory.name' => 'Tên Danh mục sách',
                    'BookCategory.user_created' => 'Người tạo',
					'BookCategory.is_active' => 'Trạng thái',
                    'BookCategory.created' => 'Ngày tạo',
                );
                
                $options = array(
					'actions_column' =>true,
					'paging' => true,
					//'link_to_view' => 'name',
                );
                
                echo $this->Table->render($bookCategories, $columns, $options);
                ?>
            </div>
        </div>
    </div>
    <div class="um_box_down"></div>
</div>
