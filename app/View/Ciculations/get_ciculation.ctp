<div class="um_box_mid_content">
	<div class="um_box_mid_content_top">
		<span class="umstyle1"><?php echo "Thông tin bạn đọc" ?></span>
		<div style="clear:both"></div>
	</div>
	<div class="umhr"></div>
	<div class="um_box_mid_content_mid" id="register">
		<div id="ciculation-img">
			<?php echo $this->Html->image('/images/no-image.jpg', array('alt' => 'Ảnh đại diện')) ?>
		</div>
		<form name="" id=""  class="" action="">
			<div class="left" style="float: left; margin-left: 55px">
				<div>
					<div class="umstyle3" style="width: 100px"><?php echo 'Mã bạn đoc:'; ?></div>
					<div class="umstyle4" >
						<input type="text" name="readerCode" id="reader-code" value="<?php echo $reader['User']['username'] ?>" class="form-control "/>
					</div>
					<div style="clear:both"></div>
				</div>
				<div>
					<div class="umstyle3" style="width: 100px"><?php echo 'Tình trạng:'; ?></div>
					<div class="umstyle4" >
						<input type="text" value="<?php echo ($reader['Reader']['is_locked'] == 0 ? 'Ðược phép luu thông' : 'Ðang bị khóa') ?>" disabled="disabled" name="reader-status" class="form-control"/>
					</div>
					<div style="clear:both"></div>
				</div>
				<div>
					<div class="umstyle3" style="width: 100px"><?php echo 'Chức vụ:'; ?></div>
					<div class="umstyle4" >
						<input type="text"  value="<?php echo $reader_type[$reader['Reader']['is_teacher']]?>" disabled="disabled" name="reader-type" class="form-control"/>
					</div>
					<div style="clear:both"></div>
				</div>
			</div>
			<div class="right" align="right"  style="float: right">
				<div>
					<div class="umstyle3" style="width: 100px"><?php echo 'Họ tên:'; ?></div>
					<div class="umstyle4" >
						<input type="text" value="<?php echo $reader['User']['fullname']?>" disabled="disabled" id="reader-fullname" class="form-control"/>
					</div>
					<div style="clear:both"></div>
				</div>
				<div>
					<div class="umstyle3" style="width: 100px"><?php echo 'Đơn vị/ Bộ phận:'; ?></div>
					<div class="umstyle4" >
						<input type="text" value="<?php echo $reader['Department']['name']?>" disabled="" id="reader-department" class="form-control" />
					</div>
					<div style="clear:both"></div>
				</div>
				<div>
					<div class="umstyle3" style="width: 100px"><?php echo 'Địa chỉ:'; ?></div>
					<div class="umstyle4" >
						<input type="text" value="<?php echo (!empty($reader['User']['resident_address']) ? $reader['User']['resident_address'] : 'Chưa xác dinh')?>" disabled="disabled" id="reader-address" class="form-control"/>
					</div>
					<div style="clear:both"></div>
				</div>
			</div>
		</form>
	</div>
</div>
<div style="clear:both"></div>
<div class="um_box_mid_content">
	<div class="um_box_mid_content_top">
		<span class="umstyle1"><?php echo "Chi tiết tài liệu" ?></span>
		<div style="clear:both"></div>
	</div>
	<div class="umhr"></div>
	<div class="um_box_mid_content_mid" id="register">
		<form name="" id=""  class="" action="">
			<div class="left" style="float: left; margin-left: 198px">
				<div>
					<div class="umstyle3" style="width: 100px"><?php echo 'Mã tài liệu:'; ?></div>
					<div class="umstyle4" ><?php echo $this->Form->input("name", array('label' => false, 'div' => false, 'class' => 'form-control')) ?></div>
					<div style="clear:both"></div>
				</div>
				<div>
					<div class="umstyle3" style="width: 100px"><?php echo 'Loại tài liệu:'; ?></div>
					<div class="umstyle4" ><?php echo $this->Form->input("book_type", array('label' => false, 'div' => false, 'class' => 'form-control', 'disabled' => 'disabled')) ?></div>
					<div style="clear:both"></div>
				</div>
				<div>
					<div class="umstyle3" style="width: 100px"><?php echo 'Vị trí:'; ?></div>
					<div class="umstyle4" ><?php echo $this->Form->input("location", array('label' => false, 'div' => false, 'class' => 'form-control', 'disabled' => 'disabled')) ?></div>
					<div style="clear:both"></div>
				</div>
			</div>
			<div class="right" align="right"  style="float: right">
				<div>
					<div class="umstyle3" style="width: 100px"><?php echo 'Tình trạng:'; ?></div>
					<div class="umstyle4" ><?php echo $this->Form->input("status", array('label' => false, 'div' => false, 'class' => 'form-control', 'disabled' => 'disabled')) ?></div>
					<div style="clear:both"></div>
				</div>
				<div>
					<div class="umstyle3" style="width: 100px"><?php echo 'Hạn trả:'; ?></div>
					<div class="umstyle4" ><?php echo $this->Form->input("date_return", array('label' => false, 'div' => false, 'class' => 'form-control', 'disabled' => 'disabled')) ?></div>
					<div style="clear:both"></div>
				</div>
				<div>
					<div class="umstyle3" style="width: 100px"><?php echo 'Mô tả:'; ?></div>
					<div class="umstyle4" ><?php echo $this->Form->input("description", array('label' => false, 'div' => false, 'class' => 'form-control', 'disabled' => 'disabled')) ?></div>
					<div style="clear:both"></div>
				</div>
			</div>
		</form>
	</div>
</div>
<div style="clear:both"></div>
<div class="um_box_mid_content">
	<div class="um_box_mid_content_top">
		<span class="umstyle1"><?php echo "Danh sách tài liệu đang mượn" ?></span>
		<div style="clear:both"></div>
	</div>
	<div class="umhr"></div>
	<div class="um_box_mid_content_mid" id="book_table">
		<table>
			<thead>
				<tr>
					<th width="8%">Thứ tự</th>
					<th>Mã sách</th>
					<th>Tên sách</th>
					<th>Nhà xuất bản</th>
					<th>Tác giả</th>
					<th>Ngôn ngữ</th>
					<th>Ngày tạo</th>
					<th>Hành động</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td></td>
				</tr>
			</tbody>
		</table>
	</div>
</div>