
<div class="umtop">
    <?php //echo $this->element('nav_reader_management'); ?>
    <?php echo $this->Session->flash(); ?>
    <div class="um_box_up"></div>
    <div class="um_box_mid">
        <div class="um_box_mid_content">
            <div class="um_box_mid_content_top">
                <span class="umstyle1"><?php echo __($sub_title); ?></span>
                <div style="clear:both"></div>
            </div>
            <div class="umhr"></div>
            <div class="um_box_mid_content_mid" id="register">
                <div class="um_box_mid_content_mid_left">
                    <?php echo $this->Form->create('Category'); ?>
                    <div>
                        <div class="umstyle3"><?php echo 'Tên danh mục'; ?><font color='red'>*</font></div>
                        <div class="umstyle4" ><?php echo $this->Form->input("name", array('label' => false, 'div' => false, 'class' => "form-control")) ?></div>
                        <div style="clear:both"></div>
                    </div>
                    <div>
                        <div class="umstyle3"><?php echo 'Danh mục cha'; ?><font color='red'>*</font></div>
                        <div class="umstyle4" ><?php echo $this->Form->input("parent_id", array('label' => false, 'div' => false, 'class' => "form-control", 'empty' => 'Là danh mục cha', 'options' => $articles)) ?></div>
                        <div style="clear:both"></div>
                    </div>
                    <div>
                        <div class="umstyle3"><?php echo 'Thứ tự hiển thị'; ?><font color='red'>*</font></div>
                        <div class="umstyle4" ><?php echo $this->Form->input("order", array('label' => false, 'div' => false, 'class' => "form-control")) ?></div>
                        <div style="clear:both"></div>
                    </div>

                    <div>
                        <div class="umstyle3"><?php echo 'Xuất bản'; ?><font color='red'>*</font></div>
                        <div class="umstyle4" ><?php echo $this->Form->input("published", array('type' => 'checkbox', 'selected' => 'selected', 'label' => false, 'div' => false)) ?></div>
                        <div style="clear:both"></div>
                    </div>

                    <div>
                        <div class="umstyle3"><?php echo __('description'); ?><font color='red'>*</font></div>
                        <div class="umstyle4" ><?php echo $this->Form->input("description", array('type' => 'textarea', 'label' => false, 'div' => false, 'class' => "")) ?></div>
                        <div style="clear:both"></div>
                    </div>
                    <div>
                        <div class="umstyle3"></div>
                        <div class="umstyle4"> <?php echo $this->Form->Submit('Nhập', array('class' => 'btn btn-primary')); ?></div>
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
