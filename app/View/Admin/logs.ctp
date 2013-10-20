
<div class="umtop">
    <div class="um_box_up"></div>
    <div class="um_box_mid">
        <div class="um_box_mid_content">
            <div class="um_box_mid_content_top">
                <span class="umstyle1">Lịch sử lưu thông</span>
                <span class="umstyle2" style="float:right"><?php echo $this->Html->link('Trang chủ', "/dashboard") ?></span>
                <div style="clear:both"></div>
            </div>
            <div class="umhr"></div>
            <div class="um_box_mid_content_mid" id="logs-list">
				<div class="row">
					<div class="span2">
						<button class="btn" id="btn-delete-logs"><img src="<?php echo $this->Html->url('/images/delete.png')?>"/>Xóa tất cả</button>
					</div>
					<div class="span4">
						<div id="example_length" class="dataTables_length">
							<label>
								<select name="log_type" size="1" id="log-type-select">
									<option value="all" selected="selected">Tất cả</option>
									<option value="borrow">Muợn tài liệu</option>
									<option value="return">Trả tài liệu</option>
									<option value="renew">Gia hạn</option>
								</select>
							</label>
						</div>
					</div>
					<div class="span6">
						<div class="dataTables_filter" id="example_filter">
							<input type="text" id="log-keyword" class="input-xxlarge" placeholder="Nhập tên bạn đọc hoặc mã bạn đọc để tìm kiếm">
						</div>
					</div>
				</div>

				<table id="log-table">
					<thead>
						<tr>
							<th><input type="checkbox" id="log-check-all" title="Chọn tất cả"/></th>
							<th>Mã bạn đọc</th>
							<th>Tên bạn đọc</th>
							<th>Thao tác</th>
							<th>Thời gian</th>
						<tr>
					</thead>
					<tbody id="log-data-table">
						<?php foreach ($logs as $log): ?>
							<tr>
								<td><input type="checkbox" value="<?php echo $log['Log']['id'] ?>"/></td>
								<td>
									<?php echo $log['Log']['reader_code'] ?>
								</td>
								<td>
									<?php echo $log['Log']['reader_name'] ?>
								</td>
								<td>
									<?php echo $log['Log']['content'] ?>
								</td>
								<td>
									<?php echo date('d/m/Y', strtotime($log['Log']['created'])) ?>
								</td>
							</tr>
						<?php endforeach; ?>
					</tbody>
				</table>
				<div class="input-hidden">
					<input type="hidden" id="log-offset" value="0"/>
					<button class="btn" id="log-load-more">Tải thêm</button>
				</div>
            </div>
        </div>
    </div>
    <div class="um_box_down"></div>
</div>

