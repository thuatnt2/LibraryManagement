<div class="umtop">
	<?php
	//echo $this->element('nav_reader_management'); 
	//debug($reader);

	?>
	<?php echo $this->Session->flash(); ?>
    <div class="um_box_up"></div>

    <div class="um_box_mid" id="ciculation-data">
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
				<div id="reader-data">
					<div id="myModal" class="modal">
						<div class="modal-header">
							<button data-dismiss="modal" class="close" type="button">&times;</button>
							<h3>Modal header</h3>
						</div>
						<div class="modal-body">
							<p>Modal Example Body</p>
						</div>
					</div>
					<form name="" id=""  class="" action="">
						<div class="left" style="float: left; margin-left: 55px">
							<div>
								<div class="umstyle3" style="width: 100px">Mã bạn đọc :</div>
								<div class="umstyle4" >
									<input type="text" name="readerCode" id="reader-code" value="" class="form-control "/>
								</div>
								<div style="clear:both"></div>
							</div>
							<div>
								<div class="umstyle3" style="width: 100px">Tình trạng:</div>
								<div class="umstyle4" >
									<input type="text" value="" disabled="disabled" name="reader-status" class="form-control"/>
								</div>
								<div style="clear:both"></div>
							</div>
							<div>
								<div class="umstyle3" style="width: 100px">Chức vụ:</div>
								<div class="umstyle4" >
									<input type="text"  value="" disabled="disabled" name="reader-type" class="form-control"/>
								</div>
								<div style="clear:both"></div>
							</div>
						</div>
						<div class="right" align="right"  style="float: right">
							<div>
								<div class="umstyle3" style="width: 100px">Họ tên:</div>
								<div class="umstyle4" >
									<input type="text" value="" disabled="disabled" id="reader-fullname" class="form-control"/>
								</div>
								<div style="clear:both"></div>
							</div>
							<div>
								<div class="umstyle3" style="width: 100px">Đơn vị/ Bộ phận:</div>
								<div class="umstyle4" >
									<input type="text" value="" disabled="" id="reader-department" class="form-control" />
								</div>
								<div style="clear:both"></div>
							</div>
							<div>
								<div class="umstyle3" style="width: 100px">Địa chỉ:</div>
								<div class="umstyle4" >
									<input type="text" value="" disabled="disabled" id="reader-address" class="form-control"/>
								</div>
								<div style="clear:both"></div>
							</div>
						</div>
					</form>

				</div>

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
        <div id="list-book-ciculation">

			<div class="um_box_mid_content">
				<div class="um_box_mid_content_top">
					<span class="umstyle1"><?php echo "Danh sách tài liệu đang mượn" ?></span>
					<div style="clear:both"></div>
				</div>
				<div class="umhr"></div>
				<div class="um_box_mid_content_mid" id="book-ciculation">
					<table>
						<thead>
							<tr>
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
								<td>Ma sach</td>
								<td>Ten sach</td>
								<td>Nha xuat ban</td>
								<td>tac gia</td>
								<td>Ngon ngu</td>
								<td>Ngay muon</td>
								<td>hanh dong</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>
    </div>
</scrip>
</div>

<script id="reader-data-template" type="text/html">
	<form name="" id=""  class="" action="">
	<div class="left" style="float: left; margin-left: 55px">
	<div>
	<div class="umstyle3" style="width: 100px">Mã bạn đọc :</div>
	<div class="umstyle4" >
	<input type="text" name="readerCode" id="reader-code" value="<#= User.username #>" class="form-control "/>
	</div>
	<div style="clear:both"></div>
	</div>
	<div>
	<div class="umstyle3" style="width: 100px">Tình trạng:</div>
	<div class="umstyle4" >
	<input type="text" value="<#= Reader.status #>" disabled="disabled" name="reader-status" class="form-control"/>
	</div>
	<div style="clear:both"></div>
	</div>
	<div>
	<div class="umstyle3" style="width: 100px">Chức vụ:</div>
	<div class="umstyle4" >
	<input type="text"  value="<#= Reader.is_teacher #>" disabled="disabled" name="reader-type" class="form-control"/>
	</div>
	<div style="clear:both"></div>
	</div>
	</div>
	<div class="right" align="right"  style="float: right">
	<div>
	<div class="umstyle3" style="width: 100px">Họ tên:</div>
	<div class="umstyle4" >
	<input type="text" value="<#= User.fullname #>" disabled="disabled" id="reader-fullname" class="form-control"/>
	</div>
	<div style="clear:both"></div>
	</div>
	<div>
	<div class="umstyle3" style="width: 100px">Đơn vị/ Bộ phận:</div>
	<div class="umstyle4" >
	<input type="text" value="<#= Department.name #>" disabled="" id="reader-department" class="form-control" />
	</div>
	<div style="clear:both"></div>
	</div>
	<div>
	<div class="umstyle3" style="width: 100px">Địa chỉ:</div>
	<div class="umstyle4" >
	<input type="text" value="<#= User.resident_address #>" disabled="disabled" id="reader-address" class="form-control"/>
	</div>
	<div style="clear:both"></div>
	</div>
	</div>
	</form>
</script>
