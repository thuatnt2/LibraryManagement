<div class="umtop">
    <?php //echo $this->element('nav_reader_management'); ?>
    <?php echo $this->Session->flash(); ?>
    <div class="um_box_up"></div>
    <div class="um_box_mid">
        <div class="um_box_mid_content">
              <div class="form-horizontal">
                <div class="span5 align-left" style="margin-left: 0px">
                    <span class="umstyle1">Thể loại tài liệu</span>
                </div>
                <div class="span2 align-right" align="right">
                    <?php echo $this->Html->link('Thêm thể loại TL',array('plugin' => null, 'controller' => 'bookTypes', 'action' => 'add'),array('class' => 'btn btn-primary btn-lg', 'escape' => false)) ?>
                </div>
            </div>
            <div style="clear:both"></div>
            <div class="umhr"></div>
            <div class="um_box_mid_content_mid" id="index">

                <?php
                $columns = array(
                    'BookType.name' => 'Tên thể loại sách',
                    'BookType.user_created' => 'Người tạo',
                    'BookType.created' => 'Ngày tạo',
                );
                
                $options = array(
					'link_to_view' => 'name',
                );
                
                echo $this->Table->render($bookTypes, $columns, $options);
                ?>
            </div>
        </div>
    </div>
    <div class="um_box_down"></div>
</div>
