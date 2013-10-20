<div class="umtop">
	<?php echo $this->Session->flash(); ?>
	<?php //echo $this->element('reader_management'); ?>
    <div class="um_box_up"></div>
    <div class="um_box_mid">
        <div class="um_box_mid_content">
            <div class="um_box_mid_content_top">
                <span class="umstyle1">Thêm mới bạn đọc</span>
                <span class="umstyle2" style="float:right"><?php echo $this->Html->link("Trang chủ", "/dashboard") ?></span>
                <div style="clear:both"></div>
            </div>
            <div class="umhr"></div>
            <div class="um_box_mid_content_mid" id="register">
                <div class="um_box_mid_content_mid_left">
					<?php echo $this->Form->create('User', array('class'=>'form-horizontal')); ?>
						<fieldset>
							<div class="control-group">
								<label for="focusedInput" class="control-label">Mã thẻ<font color='red'>*</font></label>
								<div class="controls">
									<?php echo $this->Form->input('User.username', array('label' => false, 'div' => false, 'class' => "input-xlarge focused")) ?>
								</div>
							</div>
							<div class="control-group">
								<label for="focusedInput" class="control-label">Họ tên<font color='red'>*</font></label>
								<div class="controls">
									<?php echo $this->Form->input('User.fullname', array('label' => false, 'div' => false, 'class' => "input-xlarge focused")) ?>
								</div>
							</div>
							<div class="control-group">
								<label for="focusedInput" class="control-label">Chức vụ<font color='red'>*</font></label>
								<div class="controls">
									<?php echo $this->Form->input('User.is_teacher', array('type' => 'select', 'options' => $reader_type, 'label' => false, 'div' => false, 'class' => 'input-xlarge focused')) ?>
								</div>
							</div>
							<div class="control-group">
								<label for="focusedInput" class="control-label">Khoa<font color='red'>*</font></label>
								<div class="controls">
									<?php echo $this->Form->input('User.faculty_id', array('type'=>'select','empty'=>'Chọn khoa',  'label' => false, 'div' => false, 'class' => 'input-xlarge focused')) ?>
								</div>
							</div>
							<div class="control-group">
								<label for="focusedInput" class="control-label">Lớp<font color='red'>*</font></label>
								<div class="controls">
									<?php echo $this->Form->input('User.department_id', array('label' => false, 'div' => false, 'class' => 'input-xlarge focused')) ?>
								</div>
							</div>
							<div class="control-group">
								<div class="controls">
									<?php echo $this->Form->Submit('Thêm mới bạn đọc', array('class' => 'btn btn-primary')); ?>
								</div>
							</div>
						</fieldset>
					<?php echo $this->Form->end(); ?>
                </div>
                <div class="um_box_mid_content_mid_right" align="right"></div>
                <div style="clear:both"></div>
            </div>
        </div>
    </div>
    <div class="um_box_down"></div>
</div>

