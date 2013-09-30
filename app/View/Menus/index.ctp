<div class="umtop">
    <?php //echo $this->element('nav_reader_management'); ?>
    <?php echo $this->Session->flash(); ?>
    <div class="um_box_up"></div>
    <div class="um_box_mid">
        <div class="um_box_mid_content">
            <div class="um_box_mid_content_top">
                <span class="umstyle1"><?php echo 'Danh sách menu'; ?></span>
                <div style="clear:both"></div>
            </div>
            <div class="umhr"></div>
            <div class="um_box_mid_content_mid" id="index">
                <?php
                $columns = array(
                    'Menu.title' => 'Tên menu',
                    'ParentMenu.title' => 'Menu cha',
                    'Menu.user_created' => 'Người tạo',
                    'Menu.created' => 'Ngày tạo',               
                    'Menu.is_active' => 'Trạng thái',               
                    );
                
                echo $this->Table->render($menus, $columns);
                
                ?>
            </div>
        </div>
    </div>
    <div class="um_box_down"></div>
</div>
