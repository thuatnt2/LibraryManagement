<div class="umtop">
    <?php //echo $this->element('nav_reader_management'); ?>
    <?php echo $this->Session->flash(); ?>
    <div class="um_box_up"></div>
    <div class="um_box_mid">
        <div class="um_box_mid_content">
            <div class="form-horizontal">
                <div class="span5 align-left" style="margin-left: 0px">
                    <span class="umstyle1">Danh sách ngôn ngữ</span>
                </div>
                <div class="span2 align-right" align="right">
                    <?php echo $this->Html->link('Thêm ngôn ngữ',array('plugin' => null, 'controller' => 'bookLanguages', 'action' => 'add'),array('class' => 'btn btn-primary btn-lg', 'escape' => false)) ?>
                </div>
            </div>
            <div style="clear:both"></div>
            <div class="umhr"></div>
            <div class="um_box_mid_content_mid" id="index">

                <?php
                $columns = array(
                    'BookLanguage.name' => 'Tên ngôn ngữ',
                    'BookLanguage.user_created' => 'Người tạo',
                    'BookLanguage.created' => 'Ngày tạo',
                );
                
                $options = array(
                );
                
                echo $this->Table->render($bookLanguages, $columns, $options);
                ?>
            </div>
        </div>
    </div>
    <div class="um_box_down"></div>
</div>
