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

                <div id="reader-data">

                    <div class="row-fluid">
                        <form name="" id=""  class="form-horizontal" action="">
                            <div class="span2">
                                <?php echo $this->Html->image('/images/no-image.jpg', array('alt' => 'Ảnh đại diện')) ?>
                            </div>
                            <div class="span5" align="right">
                                <div class="control-group">
                                    <label class="control-label" >Mã bạn đọc :</label>
                                    <div class="controls">
                                        <input type="text" name="readerCode" id="reader-code" value="" placeholder="Mã bạn đọc" class="input-large span12"/>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label">Tình trạng:</label>
                                    <div class="controls">
                                        <input type="text" value="" disabled="disabled" name="reader-status" id="reader-status" class="input-large span12"/>
                                    </div>
                                    <div style="clear:both"></div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" >Chức vụ:</label>
                                    <div class="controls">
                                        <input type="text"  value="" disabled="disabled" name="reader-type" id="reader-type" class="input-large span12"/>
                                    </div>
                                    <div style="clear:both"></div>
                                </div>
                            </div>
                            <div class="span5"  align="right">
                                <div class="control-group">
                                    <label class="control-label">Họ tên:</label>
                                    <div class="controls">
                                        <input type="text" value="" disabled="disabled" id="reader-fullname" class="input-large span12"/>
                                    </div>
                                    <div style="clear:both"></div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label">Đơn vị/ Bộ phận:</label>
                                    <div class="controls">
                                        <input type="text" value="" disabled="" id="reader-department" class="input-large span12" />
                                    </div>
                                    <div style="clear:both"></div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label">Tài khoản:</label>
                                    <div class="controls">
                                        <input type="text" value="" disabled="disabled" id="" class="input-large span12"/>
                                    </div>
                                    <div style="clear:both"></div>
                                </div>

                            </div>
                            <div class="span10" align="right">
                                <div class="control-group">
                                    <label class="control-label">Địa chỉ:</label>
                                    <div class="controls">
                                        <input type="text" value="" disabled="disabled" id="reader-address" class="input-xxlarge span12"/>
                                    </div>
                                    <div style="clear:both"></div>
                                </div>
                            </div>
                        </form>
                    </div>

                </div>

            </div>
        </div>
        <div style="clear:both"></div>
        <div class="um_box_mid_content">
            <div class="um_box_mid_content_top" style=" margin-top: 20px;">
                <span class="umstyle1"><?php echo "Chi tiết tài liệu" ?></span>
                <div style="clear:both"></div>
            </div>
            <div class="umhr"></div>
            <div class="um_box_mid_content_mid" id="register">
                <div id="document-data">
                    <div class="row-fluid">
                        <form name="" id=""  class="form-horizontal" action="">
                            <div class="span2" style="height: 150px">
                            </div>
                            <div class="span5" align="right">
                                <div class="control-group">
                                    <label class="control-label" >Mã tài liệu:</label>
                                    <div class="controls" >
                                        <input type="text" value="" placeholder="Mã tài liệu" id="book-code" class="input-large span12"/>
                                    </div>
                                    <div style="clear:both"></div>
                                </div>
                               
                                <div class="control-group">
                                    <label class="control-label" >Vị trí:</label>
                                    <div class="controls" >
                                        <input type="text" value="" class="input-large span12" id="book-authors" disabled="disabled"/>
                                    </div>
                                    <div style="clear:both"></div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" >Loại tài liệu:</label>
                                    <div class="controls" >
                                        <input type="text" value="" class="input-large span12" id="book-authors" disabled="disabled"/>
                                    </div>
                                    <div style="clear:both"></div>
                                </div>
                            </div>
                            <div class="span5" align="right">
                                <div class="control-group">
                                    <label class="control-label" >Tình trạng:</label>
                                    <div class="controls" >
                                        <input type="text" value="" class="input-large span12" id="book-status" disabled="disabled"/>
                                    </div>
                                    <div style="clear:both"></div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" >Hạn trả:</label>
                                    <div class="controls" >
                                        <input type="text" value="" class="input-large span12" id="book-date-return" disabled="disabled"/>
                                    </div>
                                    <div style="clear:both"></div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" >Người mượn:</label>
                                    <div class="controls" >
                                        <input type="text" value="" class="input-large span12" id="book-reader" disabled="disabled" />
                                    </div>
                                    <div style="clear:both"></div>
                                </div>
                            </div>
                            <div class="span10" align="right">
                                 <div class="control-group">
                                    <label class="control-label" >Mô tả:</label>
                                    <div class="controls">
                                        <!--<input type="text" value=""  id="book-name" class="input-large" disabled="disabled"/>-->
                                        <textarea class="input-xxlarge span12" id="textarea" rows="4" disabled="disabled"></textarea>
                                    </div>
                                    <div style="clear:both"></div>
                                </div>
                            </div>
                            <div style="clear:both"></div>
                            <div class="button-container" style="text-align: center;margin-top: 10px;">
                                <input type="hidden" value="" id="book-serial-id"/>
                                <a href="javascript:void(0)" class="btn btn-primary disabled" id="btn-book-borrow">Mượn tài liệu</a>
                                <a href="javascript:void(0)" class="btn btn-primary disabled" id="btn-book-return">Trả tài liệu</a>

                            </div>
                        </form>
                    </div>
                </div>
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
                                <th style="width: 5%">STT</th>
                                <th style="width: 10%">Mã tài liệu</th>
                                <th style="width: 30%">Mô tả</th>
                                <th style="width: 13%">Ngày mượn</th>
                                <th style="width: 12%">Hạn trả</th>
                                <th style="width: 10%">Gia hạn</th>
                                <th style="width: 10%">Quá hạn</th>
                                <th style="width: 10%">Thao tác</th>
                            </tr>
                        </thead>
                        <tbody>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
