<div class="umtop">
	<?php echo $this->Session->flash(); ?>
	<?php //echo $this->element('reader_management'); ?>
    <div class="um_box_up"></div>
    <div class="um_box_mid">
        <div class="um_box_mid_content">
            <div class="um_box_mid_content_top">
                <span class="umstyle1">Thêm mới bạn đọc</span>
                <span class="umstyle2" style="float:right"><?php echo $this->Html->link(__("Home", true), "/") ?></span>
                <div style="clear:both"></div>
            </div>
            <div class="umhr"></div>
            <div class="um_box_mid_content_mid" id="register">
                <div class="um_box_mid_content_mid_left">
					<?php echo $this->Form->create('Reader'); ?>
                    <div>
                        <div class="umstyle3">Mã thẻ<font color='red'>*</font></div>
                        <div class="umstyle4" ><?php echo $this->Form->input("username", array('label' => false, 'div' => false, 'class' => "form-control")) ?></div>
                        <div style="clear:both"></div>
                    </div>
                    <div>
                        <div class="umstyle3">Họ tên<font color='red'>*</font></div>
                        <div class="umstyle4" ><?php echo $this->Form->input("fullname", array('label' => false, 'div' => false, 'class' => "form-control")) ?></div>
                        <div style="clear:both"></div>
                    </div>
					<div>
                        <div class="umstyle3">Chức vụ<font color='red'>*</font></div>
                        <div class="umstyle4" ><?php echo $this->Form->input("is_teacher", array('type' => 'select', 'options' => $reader_type, 'label' => false, 'div' => false, 'class' => "form-control")) ?></div>
                        <div style="clear:both"></div>
                    </div>

					<div>
                        <div class="umstyle3">Khoa<font color='red'>*</font></div>
                        <div class="umstyle4" ><?php echo $this->Form->input("faculty_id", array('label' => false, 'div' => false, 'class' => "form-control")) ?></div>
                        <div style="clear:both"></div>
                    </div>
					
					<div>
                        <div class="umstyle3">Lớp<font color='red'>*</font></div>
                        <div class="umstyle4" ><?php echo $this->Form->input("department_id", array('label' => false, 'div' => false, 'class' => "form-control")) ?></div>
                        <div style="clear:both"></div>
                    </div>
                    <div>
                        <div class="umstyle3"></div>
                        <div class="umstyle4"> <?php echo $this->Form->Submit('Thêm mới bạn đọc', array('class' => 'btn btn-primary')); ?></div>
                        <div style="clear:both"></div>
                    </div>
					<?php echo $this->Form->end(); ?>
                </div>
                <div class="um_box_mid_content_mid_right" align="right"></div>
                <div style="clear:both"></div>
            </div>
        </div>
    </div>
    <div class="um_box_down"></div>
</div>

