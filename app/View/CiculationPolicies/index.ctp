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
                    'CiculationPolicy.name' => 'Tên quy chế',
                    'CiculationPolicy.amount' => 'Số lượng',
                    'CiculationPolicy.unit_of' => 'Đơn vị tính',
                );
                
                $options = array(
					'paging' => false,
					'actions_column' => false,
                );
                
                echo $this->Table->render($ciculationPolicies, $columns, $options);
                ?>
            </div>
        </div>
    </div>
    <div class="um_box_down"></div>
</div>
