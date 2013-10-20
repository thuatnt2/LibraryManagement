<div class="umtop">
    <?php //echo $this->element('nav_reader_management'); ?>
    <?php echo $this->Session->flash(); ?>
    <div class="um_box_up"></div>
    <div class="um_box_mid">
        <div class="um_box_mid_content">
             <div class="form-horizontal">
                <div class="span5 align-left" style="margin-left: 0px">
                    <span class="umstyle1">Danh sách tác giả</span>
                </div>
                <div class="span2 align-right" align="right">
                    <?php echo $this->Html->link('Thêm tác giả',array('plugin' => null, 'controller' => 'authors', 'action' => 'add'),array('class' => 'btn btn-primary btn-lg', 'escape' => false)) ?>
                </div>
            </div>
            <div style="clear:both"></div>
            <div class="umhr"></div>
            <div class="um_box_mid_content_mid" id="index">

                <?php
                $columns = array(
                    'Author.name' => 'Tên tác gải',
                    'Author.created' => 'Ngày tạo',
                    'Author.modified' => 'Ngày sửa',
                );
                
                $options = array(
					'link_to_view' => 'name',
                );
                
                echo $this->Table->render($authors, $columns, $options);
                ?>
            </div>
        </div>
    </div>
    <div class="um_box_down"></div>
</div>
