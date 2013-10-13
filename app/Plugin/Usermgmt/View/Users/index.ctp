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
<?php echo $this->element('dashboard'); ?>
    <div class="um_box_up"></div>
    <div class="um_box_mid">
        <div class="um_box_mid_content">
            <div class="um_box_mid_content_top">
                <span class="umstyle1">Danh sách người dùng trong hệ thống</span>
                <span class="umstyle2" style="float:right"><?php echo $this->Html->link('Trang chủ', "/dashboard") ?></span>
                <div style="clear:both"></div>
            </div>
            <div class="umhr"></div>
            <div class="um_box_mid_content_mid" id="index">
                <table cellspacing="0" cellpadding="0" width="100%" border="0" >
                    <thead>
                        <tr>
                            <th>STT</th>
                            <th>Họ tên</th>
                            <th>Phân quyền</th>
                            <th>Thao tác</th>
                        </tr>
                    </thead>
                    <tbody>
						<?php
						if (!empty($users)) {
							$stt = 1;
							foreach ($users as $row) {

								?>
								<tr>
									<td><?php echo $stt++ ?></td>
									<td><?php echo $row['User']['fullname'] ?></td>
									<td><?php echo $row['UserGroup']['name'] ?></td>
									<td>
										<?php
										if($row['UserGroup']['id'] != ADMIN_GROUP_ID)
											echo $this->Form->postLink($this->Html->image(SITE_URL.'usermgmt/img/delete.png', array("alt" => 'Xóa người dùng', "title" =>'Xóa người dùng ')), array('action' => 'deleteUser', $row['User']['id']), array('escape' => false, 'confirm' => 'Bạn có chắc chắn muốn xóa ???'));
										?>
									</td>
								</tr>
									<?php
								}
							} else {
								echo "<tr><td colspan=10><br/><br/>No Data</td></tr>";
							}

							?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="um_box_down"></div>
</div>