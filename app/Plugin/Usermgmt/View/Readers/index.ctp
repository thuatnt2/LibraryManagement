<div class="umtop">
	<?php echo $this->element('nav_reader_management'); ?>
	<?php echo $this->Session->flash(); ?>
    <div class="um_box_up"></div>
    <div class="um_box_mid">
        <div class="um_box_mid_content">
            <div class="um_box_mid_content_top">
                <span class="umstyle1"><?php echo 'Danh sách bạn đọc'; ?></span>
                <div style="clear:both"></div>
            </div>
            <div class="umhr"></div>
            <div class="um_box_mid_content_mid" id="index">
                <table class="index-table">
                    <thead>
                        <tr>
                            <th><?php echo 'Mã thẻ' ?></th>
                            <th><?php echo 'Họ tên' ?></th>
                            <th><?php echo 'Đơn vị' ?></th>
                            <th><?php echo 'Ngày cấp' ?></th>
                            <th><?php echo 'Ngày hết hạn' ?></th>
                            <th><?php echo 'Tình trạng' ?></th>
                            <th><?php echo 'Thao tác' ?></th>
                        </tr>
                    </thead>
                    <tbody>
						<?php
						if (!empty($readers)) {
							$page = $this->request->params['paging']['Reader']['page'];
							foreach ($readers as $row) {
								echo "<tr>";
								echo "<td>" . h($row['User']['username']) . "</td>";
								echo "<td>" . h($row['User']['fullname']) . "</td>";
								echo "<td>" . h($row['Department']['name']) . "</td>";
								echo "<td>" . date('d/m/Y', strtotime($row['Reader']['created'])) . "</td>";
								if (strtotime($row['Reader']['date_expiry']) <= time()) {
									echo "<td style=" . 'color:red' . ">" . date('d/m/Y', strtotime($row['Reader']['date_expiry'])) . " (hết hạn)" . "</td>";
								} else {
									//var_dump(strtotime(date('d/m/y',time())));
									echo "<td>" . date('d/m/Y', strtotime($row['Reader']['date_expiry'])) . "</td>";
								}
								//echo "<td>" . date('d/m/Y', strtotime($row['Reader']['date_expiry'])) . "</td>";
								echo "<td>";
								if ($row['User']['is_active'] == 1) {
									echo "<span class='icon'><a href='" . $this->Html->url('/usermgmt/users/actived/' . $row['User']['id'] . '/0/' . $page) . "'><img src='" . SITE_URL . "usermgmt/img/approve.png' border='0'></a></span>";
								} else {
									echo "<span class='icon'><a href='" . $this->Html->url('/usermgmt/users/actived/' . $row['User']['id'] . '/1/' . $page) . "'><img src='" . SITE_URL . "usermgmt/img/dis-approve.png' border='0'></a></span>";
								}
								echo "</td>";

								echo "<td>";
								echo "<span class='icon'><a href='" . $this->Html->url('/editReader/' . $row['User']['id']) . "'><img src='" . SITE_URL . "usermgmt/img/edit.png' border='0' alt='Edit' title='Edit'></a></span>";

								echo $this->Form->postLink(
										$this->Html->image('/images/delete.png'), array('controller' => 'users', 'action' => 'deleteReader', $row['User']['id']), array('title' => 'Xóa bạn đọc', 'escape' => false), 'Bạn có chắc chắn muốn xóa bạn đọc này ?'
								);

								echo "</td>";
								echo "</tr>";
							}
						} else {
							echo "<tr><td colspan=6><br/><br/>Không có dữ liệu</td></tr>";
						}

						?>
                    </tbody>
                </table>
                <div class="pagination">
					<?php
					echo $this->Paginator->first('<<Trang đầu');
					echo $this->Paginator->prev('Trước');
					echo $this->Paginator->numbers(array('separator' => false, 'class' => 'number'));
					echo $this->Paginator->next('Tiếp');
					echo $this->Paginator->last('Trang cuối>>');

					?>
                </div>
            </div>

        </div>
    </div>
</div>
