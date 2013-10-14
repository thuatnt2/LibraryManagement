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
						<div class="two-column" id="ciculations-left">
							<div>
								<div class="umstyle3" style="width: 100px">Mã bạn đọc :</div>
								<div class="umstyle4" >
									<input type="text" name="readerCode" id="reader-code" value="" placeholder="Mã bạn đọc" class="form-control "/>
								</div>
								<div style="clear:both"></div>
							</div>
							<div>
								<div class="umstyle3" style="width: 100px">Tình trạng:</div>
								<div class="umstyle4" >
									<input type="text" value="" disabled="disabled" name="reader-status" id="reader-status" class="form-control"/>
								</div>
								<div style="clear:both"></div>
							</div>
							<div>
								<div class="umstyle3" style="width: 100px">Chức vụ:</div>
								<div class="umstyle4" >
									<input type="text"  value="" disabled="disabled" name="reader-type" id="reader-type" class="form-control"/>
								</div>
								<div style="clear:both"></div>
							</div>
						</div>
						<div class="two-column" id="ciculations-right" align="right">
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
            <div class="um_box_mid_content_top" style=" margin-top: 25px;">
                <span class="umstyle1"><?php echo "Chi tiết tài liệu" ?></span>
                <div style="clear:both"></div>
            </div>
            <div class="umhr"></div>
            <div class="um_box_mid_content_mid" id="register">
                <form name="" id=""  class="" action="">
                    <div class="two-column" style="margin-left: 198px;">
                        <div>
                            <div class="umstyle3" style="width: 100px"><?php echo 'Mã tài liệu:'; ?></div>
							<div class="umstyle4" >
								<input type="text" value="" placeholder="Mã tài liệu" class="form-control" id="book-code"/>
							</div>
							<div style="clear:both"></div>
						</div>
                        <div>
                            <div class="umstyle3" style="width: 100px"><?php echo 'Tên tài liệu'; ?></div>
							<div class="umstyle4" >
								<input type="text" value="" class="form-control" id="book-name" disabled="disabled"/>
							</div>
							<div style="clear:both"></div>
						</div>
                        <div>
                            <div class="umstyle3" style="width: 100px"><?php echo 'Tác giả: '; ?></div>
							<div class="umstyle4" >
								<input type="text" value="" class="form-control" id="book-authors" disabled="disabled"/>
							</div>
							<div style="clear:both"></div>
						</div>
					</div>
					<div class="two-column" align="right">
						<div>
							<div class="umstyle3" style="width: 100px"><?php echo 'Tình trạng:'; ?></div>
							<div class="umstyle4" >
								<input type="text" value="" class="form-control" id="book-status" disabled="disabled"/>
							</div>
							<div style="clear:both"></div>
						</div>
						<div>
							<div class="umstyle3" style="width: 100px"><?php echo 'Hạn trả:'; ?></div>
							<div class="umstyle4" >
								<input type="" value="" class="form-control" id="book-date-return" disabled="disabled"/>
							</div>
							<div style="clear:both"></div>
						</div>
						<div>
                            <div class="umstyle3" style="width: 100px"><?php echo 'Người mượn :'; ?></div>
							<div class="umstyle4" >
								<input type="text" value="" class="form-control" id="book-reader" disabled="disabled" />
							</div>
							<div style="clear:both"></div>
						</div>
					</div>
                       <div style="clear:both"></div>
					<div class="button-container" style="text-align: center;margin-top: 20px;">
						<input type="hidden" value="" id="book-serial-id"/>
						<a href="#" class="btn btn-primary disabled" id="btn-book-borrow">Mượn tài liệu</a>
						<a href="#" class="btn btn-primary disabled" id="btn-book-return">Trả tài liệu</a>

					</div>
                </form>
            </div>
        </div>
        <div style="clear:both"></div>
        <div id="list-book-ciculation">

            <div class="um_box_mid_content" style="margin-top: 25px">
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
							
						</tbody>
					</table>
				</div>
			</div>
		</div>
    </div>
</scrip>
</div>
