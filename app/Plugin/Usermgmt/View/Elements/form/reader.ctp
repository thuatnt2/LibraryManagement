<div class="readers form">
    <?php echo $this->Form->create('Reader'); ?>
    <fieldset>
        <legend><?php echo __('Add Reader'); ?></legend>
        <?php
        echo $this->Form->input('dateCreated');
        echo $this->Form->input('dateExpiry');
        echo $this->Form->input('yearLearn');
        echo $this->Form->input('isActive');
        echo $this->Form->input('totalBorrow');
        echo $this->Form->input('user_id');
        echo $this->Form->input('department_id');
        ?>
    </fieldset>
    <?php echo $this->Form->end(__('Submit')); ?>
</div>

<div class="umtop">
    <?php echo $this->Session->flash(); ?>
    <?php echo $this->element('reader_management'); ?>
    <div class="um_box_up"></div>
    <div class="um_box_mid">
        <div class="um_box_mid_content">
            <div class="um_box_mid_content_top">
                <span class="umstyle1"><?php echo __('Bạn đọc'); ?></span>
                <span class="umstyle2" style="float:right"><?php echo $this->Html->link(__("Home", true), "/") ?></span>
                <div style="clear:both"></div>
            </div>
            <div class="umhr"></div>
            <div class="um_box_mid_content_mid" id="register">
                <div class="um_box_mid_content_mid_left">
                    <?php echo $this->Form->create('User', array('action' => 'addUser')); ?>
                    <?php if (count($userGroups) > 2) { ?>
                        <div>
                            <div class="umstyle3"><?php echo __('Group'); ?><font color='red'>*</font></div>
                            <div class="umstyle4" ><?php echo $this->Form->input("user_group_id", array('type' => 'select', 'label' => false, 'div' => false, 'class' => "form-control")) ?></div>
                            <div style="clear:both"></div>
                        </div>
                    <?php } ?>
                    <div>
                        <div class="umstyle3"><?php echo __('Username'); ?><font color='red'>*</font></div>
                        <div class="umstyle4" ><?php echo $this->Form->input("username", array('label' => false, 'div' => false, 'class' => "form-control")) ?></div>
                        <div style="clear:both"></div>
                    </div>
                    <div>
                        <div class="umstyle3"><?php echo __('First Name'); ?><font color='red'>*</font></div>
                        <div class="umstyle4" ><?php echo $this->Form->input("first_name", array('label' => false, 'div' => false, 'class' => "form-control")) ?></div>
                        <div style="clear:both"></div>
                    </div>
                    <div>
                        <div class="umstyle3"><?php echo __('Last Name'); ?><font color='red'>*</font></div>
                        <div class="umstyle4" ><?php echo $this->Form->input("last_name", array('label' => false, 'div' => false, 'class' => "form-control")) ?></div>
                        <div style="clear:both"></div>
                    </div>
                    <div>
                        <div class="umstyle3"><?php echo __('Email'); ?><font color='red'>*</font></div>
                        <div class="umstyle4" ><?php echo $this->Form->input("email", array('label' => false, 'div' => false, 'class' => "form-control")) ?></div>
                        <div style="clear:both"></div>
                    </div>
                    <div>
                        <div class="umstyle3"><?php echo __('Password'); ?><font color='red'>*</font></div>
                        <div class="umstyle4"><?php echo $this->Form->input("password", array("type" => "password", 'label' => false, 'div' => false, 'class' => "form-control")) ?></div>
                        <div style="clear:both"></div>
                    </div>
                    <div>
                        <div class="umstyle3"><?php echo __('Confirm Password'); ?><font color='red'>*</font></div>
                        <div class="umstyle4"><?php echo $this->Form->input("cpassword", array("type" => "password", 'label' => false, 'div' => false, 'class' => "form-control")) ?></div>
                        <div style="clear:both"></div>
                    </div>
                    <div>
                        <div class="umstyle3"></div>
                        <div class="umstyle4"> <?php echo $this->Form->Submit(__('Add User'), array('class' => 'btn btn-primary')); ?></div>
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