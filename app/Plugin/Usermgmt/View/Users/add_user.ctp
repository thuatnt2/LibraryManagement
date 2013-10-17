<?php
/*
  This file is part of UserMgmt.

  Author: Chetan Varshney (http://ektasoftwares.com)

  UserMgmt is free software: you can redistribute it and/or modify
  it under the terms of the GNU General Public License as published by
  the Free Software Foundation, either version 3 of the License, or
  (at your option) any later version.

  UserMgmt is distributed in the hope that it will be useful,
  but WITHOUT ANY WARRANTY; without even the implied warranty of
  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
  GNU General Public License for more details.

  You should have received a copy of the GNU General Public License
  along with Foobar.  If not, see <http://www.gnu.org/licenses/>.
 */

?>
<div class="umtop">
	<?php echo $this->Session->flash(); ?>
    <div class="um_box_up"></div>
    <div class="um_box_mid">
        <div class="um_box_mid_content">
            <div class="um_box_mid_content_top">
                <span class="umstyle1">Thêm người dùng</span>
                <span class="umstyle2" style="float:right"><?php echo $this->Html->link('Trang chủ', "/dashboard") ?></span>
                <div style="clear:both"></div>
            </div>
            <div class="umhr"></div>
            <div class="um_box_mid_content_mid" id="register">
                <div class="um_box_mid_content_mid_left">
					<?php echo $this->Form->create('User', array('action' => 'addUser', 'class' => 'form-horizontal')); ?>
                    <fieldset>
						<?php if (count($userGroups) > 2) { ?>
							<div class="control-group">
								<label class="control-label">Quyền<font color='red'>*</font></label>
								<div class="controls" ><?php echo $this->Form->input("user_group_id", array('type' => 'select', 'label' => false, 'div' => false, 'class' => 'input-xlarge')) ?></div>
							</div>
						<?php } ?>
						<div class="control-group">
							 <label class="control-label">Tên đăng nhập<font color='red'>*</font></label>
							<div class="controls"><?php echo $this->Form->input("username", array('label' => false, 'div' => false, 'class' => 'input-xlarge')) ?></div>
						</div>
						<div class="control-group">
							<label class="control-label">Họ tên<font color='red'>*</font></label>
							<div class="controls"><?php echo $this->Form->input("fullname", array('label' => false, 'div' => false, 'class' => 'input-xlarge')) ?></div>
						</div>
						<div class="control-group">
							<label class="control-label">Địa chỉ email<font color='red'>*</font></label>
							<div class="controls"><?php echo $this->Form->input("email", array('label' => false, 'div' => false, 'class' => 'input-xlarge')) ?></div>
						</div>
						<div class="control-group">
							<label class="control-label">Mật khẩu<font color='red'>*</font></label>
							<div class="controls"><?php echo $this->Form->input("password", array("type" => "password", 'label' => false, 'div' => false, 'class' => 'input-xlarge')) ?></div>
						</div>
						<div class="control-group">
							<label class="control-label">Nhập lại mật khẩu<font color='red'>*</font></label>
							<div class="controls"><?php echo $this->Form->input("cpassword", array("type" => "password", 'label' => false, 'div' => false, 'class' => 'input-xlarge')) ?></div>
						</div>
						<div class="control-group">
							<div class="controls"><?php echo $this->Form->Submit('Thêm người dùng', array('class' => 'btn btn-primary')); ?></div>
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