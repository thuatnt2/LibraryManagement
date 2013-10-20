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
    <?php // echo $this->element('dashboard'); ?>
    <div class="um_box_up">
        <!--        <div class="um_box_mid_content">
                    <div class="form-horizontal" style="margin-left: 250px">
                        <div class="span3">
                            <div class="control-group align-left">
                                <input type="radio" name="info" checked="checked" />
                            </div>
                            <label class="control-label">Thông tin cá nhân</label>
                        </div>
                        <div class="span3">
                            <div class="control-group align-left">
                                <input type="radio" name="info" />
                            </div>
                            <label class="control-label">Chỉnh sửa thông tin</label>
                        </div>
                        <div class="span3">
                            <div class="control-group align-left">
                                <input type="radio" name="info" />
                            </div>
                            <label class="control-label">Đổi mật khẩu</label>
                        </div>
                    </div>
                </div>-->
    </div>
    <div style="clear:both"></div>
    <div class="um_box_mid">
        <div class="um_box_mid_content">
            <!--            <div class="um_box_mid_content_top">
                            <span class="umstyle1"><?php echo __('Thông tin cá nhân'); ?></span>
                            <span class="umstyle2" style="float:right"><?php echo $this->Html->link(__("Home", true), "/") ?></span>
                            <div style="clear:both"></div>
                        </div>-->
            <div class="form-horizontal">
                <div class="span5 align-left" style="margin-left: 0px">
                    <span class="umstyle1">Thể loại tài liệu</span>
                </div>
                <div class="span2 align-right" align="right">
                    <?php echo $this->Html->link('Đổi mật khẩu', array('plugin' => 'usermgmt', 'controller' => 'users', 'action' => 'changePassword'), array('class' => 'btn btn-primary btn-lg btn-block', 'escape' => false)) ?>
                </div>
                 <div class="span2 align-right" align="right">
                    <?php echo $this->Html->link('Chỉnh sửa thông tin', '#', array('class' => 'btn btn-primary btn-lg btn-block', 'escape' => false)) ?>
                </div>
            </div>
            <div style="clear:both"></div>
            <div class="umhr"></div>
            <div class="um_box_mid_content_mid" id="index">
                <table cellspacing="0" cellpadding="0" width="100%" border="0" >
                    <tbody>
                        <?php if (!empty($user)) { ?>
                            <tr>
                                <td><strong><?php echo __('User Id'); ?></strong></td>
                                <td><?php echo $user['User']['id'] ?></td>
                            </tr>
                            <tr>
                                <td><strong><?php echo __('User Group'); ?></strong></td>
                                <td><?php echo h($user['UserGroup']['name']) ?></td>
                            </tr>
                            <tr>
                                <td><strong><?php echo __('Username'); ?></strong></td>
                                <td><?php echo h($user['User']['username']) ?></td>
                            </tr>
                            <tr>
                                <td><strong><?php echo __('Họ tên'); ?></strong></td>
                                <td><?php echo h($user['User']['fullname']) ?></td>
                            </tr>
                            <tr>
                                <td><strong><?php echo __('Email'); ?></strong></td>
                                <td><?php echo h($user['User']['email']) ?></td>
                            </tr>
                            <tr>
                                <td><strong><?php echo __('Email Verified'); ?></strong></td>
                                <td><?php
                                    if ($user['User']['email_verified']) {
                                        echo 'Yes';
                                    } else {
                                        echo 'No';
                                    }
                                    ?>
                                </td>
                            </tr>
                            <tr>
                                <td><strong><?php echo __('Status'); ?></strong></td>
                                <td><?php
                                    if ($user['User']['is_active']) {
                                        echo 'Active';
                                    } else {
                                        echo 'Inactive';
                                    }
                                    ?>
                                </td>
                            </tr>
                            <tr>
                                <td><strong><?php echo __('Created'); ?></strong></td>
                                <td><?php echo date('d-M-Y', strtotime($user['User']['created'])) ?></td>
                            </tr>
                            <?php
                        } else {
                            echo "<tr><td colspan=2><br/><br/>No Data</td></tr>";
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="um_box_down"></div>
</div>