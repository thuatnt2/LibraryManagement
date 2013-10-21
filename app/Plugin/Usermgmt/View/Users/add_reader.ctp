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
                <div class="row-fluid">
                    <?php echo $this->Form->create('User', array('class' => 'form-horizontal')); ?>
                    <div class="span6"  align="right" style="margin-left: 0px">
                        <div class="control-group">
                            <label for="focusedInput" class="control-label">Mã thẻ<font color='red'>*</font></label>
                            <div class="controls">
                                <?php echo $this->Form->input('User.username', array('label' => false, 'div' => false, 'class' => "input-xlarge span12 focused")) ?>
                            </div>
                        </div>
                        <div class="control-group">
                            <label for="focusedInput" class="control-label">Họ tên<font color='red'>*</font></label>
                            <div class="controls">
                                <?php echo $this->Form->input('User.fullname', array('label' => false, 'div' => false, 'class' => "input-xlarge span12 focused")) ?>
                            </div>
                        </div>
                        <div class="control-group">
                            <label for="focusedInput" class="control-label">Chức vụ<font color='red'>*</font></label>
                            <div class="controls">
                                <?php echo $this->Form->input('User.is_teacher', array('type' => 'select', 'options' => $reader_type, 'label' => false, 'div' => false, 'class' => 'input-xlarge span12 focused')) ?>
                            </div>
                        </div>
                        <div class="control-group">
                            <label for="focusedInput" class="control-label">Khoa<font color='red'>*</font></label>
                            <div class="controls">
                                <?php echo $this->Form->input('User.faculty_id', array('type' => 'select', 'empty' => 'Chọn khoa', 'label' => false, 'div' => false, 'class' => 'input-xlarge span12 focused')) ?>
                            </div>
                        </div>
                        <div class="control-group">
                            <label for="focusedInput" class="control-label">Lớp<font color='red'>*</font></label>
                            <div class="controls">
                                <?php echo $this->Form->input('User.department_id', array('label' => false, 'div' => false, 'class' => 'input-xlarge span12 focused')) ?>
                            </div>
                        </div>
                        <div class="control-group">
                            <label for="focusedInput" class="control-label">Khóa học<font color='red'>*</font></label>
                            <div class="controls">
                                <?php echo $this->Form->input('User.year_learn', array('label' => false, 'div' => false, 'class' => 'input-xlarge span12 focused')) ?>
                            </div>
                        </div>
                        <div class="control-group">
                            <label for="focusedInput" class="control-label">Ảnh thẻ<font color='red'>*</font></label>
                            <div class="controls">
                                <input type="text" class="input-xlarge span12 focused" id="input-avatar">
                                <?php echo $this->Form->input('User.avata', array('type'=> 'file','label' => false, 'div' => false, 'class' => 'input-xlarge span12 focused','style'=>'width:0px;height:0px;display:block')) ?>
                            </div>
                        </div>
                    </div>
                    <div class="span6"  align="right">
                         <div class="control-group">
                            <label for="focusedInput" class="control-label">Quê quán<font color='red'>*</font></label>
                            <div class="controls">
                                <?php echo $this->Form->input('User.native_place', array('type' => 'text', 'empty' => 'Chọn khoa', 'label' => false, 'div' => false, 'class' => 'input-xlarge span12 focused')) ?>
                            </div>
                        </div>
                         <div class="control-group">
                            <label for="focusedInput" class="control-label">Thường trú<font color='red'>*</font></label>
                            <div class="controls">
                                <?php echo $this->Form->input('User.resident_address', array('type' => 'text','label' => false, 'div' => false, 'class' => 'input-xlarge span12 focused')) ?>
                            </div>
                        </div>
                         <div class="control-group">
                            <label for="focusedInput" class="control-label">Giới tính<font color='red'>*</font></label>
                            <div class="controls">
                                <?php echo $this->Form->input('User.sex', array('type' => 'select', 'options' => $sex,'label' => false, 'div' => false, 'class' => 'input-xlarge span12 focused')) ?>
                            </div>
                        </div>
                         <div class="control-group">
                            <label for="focusedInput" class="control-label">Năm sinh<font color='red'>*</font></label>
                            <div class="controls">
                                <?php echo $this->Form->input('User.birthday', array('type' => 'text','label' => false, 'div' => false, 'class' => 'input-xlarge span12 focused')) ?>
                            </div>
                        </div>
                         <div class="control-group">
                            <label for="focusedInput" class="control-label">Email<font color='red'>*</font></label>
                            <div class="controls">
                                <?php echo $this->Form->input('User.email', array('type' => 'email', 'label' => false, 'div' => false, 'class' => 'input-xlarge span12 focused')) ?>
                            </div>
                        </div>
                        <div class="control-group">
                            <label for="focusedInput" class="control-label">Số điện thoại<font color='red'>*</font></label>
                            <div class="controls">
                                <?php echo $this->Form->input('User.phone_number', array('type' => 'text', 'empty' => 'Chọn khoa', 'label' => false, 'div' => false, 'class' => 'input-xlarge span12 focused')) ?>
                            </div>
                        </div>
                        <div class="control-group">
                            <label for="focusedInput" class="control-label">Mô tả thêm<font color='red'>*</font></label>
                            <div class="controls">
                                <?php echo $this->Form->textarea('User.description', array('rows' => '5','label' => false, 'div' => false, 'class' => 'input-xlarge span12 focused')) ?>
                            </div>
                        </div>
                        <div class="control-group">
                            <div class="controls">
                                <?php echo $this->Form->Submit('Thêm mới bạn đọc', array('class' => 'btn btn-primary')); ?>
                            </div>
                        </div>
                    </div>
                    <?php echo $this->Form->end(); ?>
                </div>
                <!--<div class="um_box_mid_content_mid_right" align="right"></div>-->
                <div style="clear:both"></div>
            </div>
        </div>
    </div>
    <!--<div class="um_box_down"></div>-->
</div>

