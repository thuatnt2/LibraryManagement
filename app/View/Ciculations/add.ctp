<!--<div class="ciculations form">
<?php // echo $this->Form->create('Ciculation'); ?>
        <fieldset>
                <legend><?php echo __('Add Ciculation'); ?></legend>
<?php
echo $this->Form->input('date_return');
echo $this->Form->input('librarian_name');
echo $this->Form->input('extensions');
echo $this->Form->input('reader');
echo $this->Form->input('book_serial_id');
?>
        </fieldset>
<?php // echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
        <h3><?php echo __('Actions'); ?></h3>
        <ul>

                <li><?php echo $this->Html->link(__('List Ciculations'), array('action' => 'index')); ?></li>
                <li><?php echo $this->Html->link(__('List Book Serials'), array('controller' => 'book_serials', 'action' => 'index')); ?> </li>
                <li><?php echo $this->Html->link(__('New Book Serial'), array('controller' => 'book_serials', 'action' => 'add')); ?> </li>
                <li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
                <li><?php echo $this->Html->link(__('New Borrow'), array('controller' => 'users', 'action' => 'add')); ?> </li>
        </ul>
</div>-->

<div class="umtop">
    <?php //echo $this->element('nav_reader_management'); ?>
    <?php echo $this->Session->flash(); ?>
    <div class="um_box_up"></div>
    <div class="um_box_mid">
        <div class="um_box_mid_content">
            <div class="um_box_mid_content_top">
                <span class="umstyle1"><?php echo "Thông tin bạn đọc" ?></span>
                <div style="clear:both"></div>
            </div>
            <div class="umhr"></div>
            <div class="um_box_mid_content_mid" id="register">
                <div id="ciculation-img">
                    <img src="/images/no-images.jpg" alt="Smiley face">
                </div>

                <form name="" id=""  class="" action="">
                    <div class="left" style="float: left; margin-left: 55px">
                        <div>
                            <div class="umstyle3" style="width: 100px"><?php echo 'Mã bạn đoc:'; ?></div>
                              <div class="umstyle4" ><?php echo $this->Form->input("name", array('label' => false, 'div' => false, 'class' => 'form-control')) ?></div>
                              <div style="clear:both"></div>
                          </div>
                        <div>
                            <div class="umstyle3" style="width: 100px"><?php echo 'Tài khoản:'; ?></div>
                              <div class="umstyle4" ><?php echo $this->Form->input("name", array('label' => false, 'div' => false, 'class' => 'form-control','disabled' => 'disabled')) ?></div>
                              <div style="clear:both"></div>
                          </div>
                        <div>
                            <div class="umstyle3" style="width: 100px"><?php echo 'Tình trạng:'; ?></div>
                              <div class="umstyle4" ><?php echo $this->Form->input("name", array('label' => false, 'div' => false, 'class' => 'form-control','disabled' => 'disabled')) ?></div>
                              <div style="clear:both"></div>
                          </div>
                         <div>
                            <div class="umstyle3" style="width: 100px"><?php echo 'Nhóm:'; ?></div>
                              <div class="umstyle4" ><?php echo $this->Form->input("name", array('label' => false, 'div' => false, 'class' => 'form-control','disabled' => 'disabled')) ?></div>
                              <div style="clear:both"></div>
                          </div>
                     </div>
                     <div class="right" align="right"  style="float: right">
                         <div>
                              <div class="umstyle3" style="width: 100px"><?php echo 'Họ tên:'; ?></div>
                              <div class="umstyle4" ><?php echo $this->Form->input("name", array('label' => false, 'div' => false, 'class' => 'form-control','disabled' => 'disabled')) ?></div>
                              <div style="clear:both"></div>
                          </div>
                         <div>
                              <div class="umstyle3" style="width: 100px"><?php echo 'Đơn vị/ Bộ phận:'; ?></div>
                              <div class="umstyle4" ><?php echo $this->Form->input("name", array('label' => false, 'div' => false, 'class' => 'form-control','disabled' => 'disabled')) ?></div>
                              <div style="clear:both"></div>
                          </div>
                         <div>
                              <div class="umstyle3" style="width: 100px"><?php echo 'Trường:'; ?></div>
                              <div class="umstyle4" ><?php echo $this->Form->input("name", array('label' => false, 'div' => false, 'class' => 'form-control','disabled' => 'disabled')) ?></div>
                              <div style="clear:both"></div>
                          </div>
                         <div>
                              <div class="umstyle3" style="width: 100px"><?php echo 'Địa chỉ:'; ?></div>
                              <div class="umstyle4" ><?php echo $this->Form->input("name", array('label' => false, 'div' => false, 'class' => 'form-control','disabled' => 'disabled')) ?></div>
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
                              <div class="umstyle4" ><?php echo $this->Form->input("name", array('label' => false, 'div' => false, 'class' => 'form-control','disabled' => 'disabled')) ?></div>
                              <div style="clear:both"></div>
                          </div>
                        <div>
                            <div class="umstyle3" style="width: 100px"><?php echo 'Vị trí:'; ?></div>
                              <div class="umstyle4" ><?php echo $this->Form->input("name", array('label' => false, 'div' => false, 'class' => 'form-control','disabled' => 'disabled')) ?></div>
                              <div style="clear:both"></div>
                          </div>
                         <div>
                            <div class="umstyle3" style="width: 100px"><?php echo 'Mô tả:'; ?></div>
                              <div class="umstyle4" ><?php echo $this->Form->input("name", array('label' => false, 'div' => false, 'class' => 'form-control','disabled' => 'disabled')) ?></div>
                              <div style="clear:both"></div>
                          </div>
                     </div>
                     <div class="right" align="right"  style="float: right">
                         <div>
                              <div class="umstyle3" style="width: 100px"><?php echo 'Tình trạng:'; ?></div>
                              <div class="umstyle4" ><?php echo $this->Form->input("name", array('label' => false, 'div' => false, 'class' => 'form-control','disabled' => 'disabled')) ?></div>
                              <div style="clear:both"></div>
                          </div>
                         <div>
                              <div class="umstyle3" style="width: 100px"><?php echo 'Hạn trả:'; ?></div>
                              <div class="umstyle4" ><?php echo $this->Form->input("name", array('label' => false, 'div' => false, 'class' => 'form-control','disabled' => 'disabled')) ?></div>
                              <div style="clear:both"></div>
                          </div>
                         <div>
                              <div class="umstyle3" style="width: 100px"><?php echo 'Trường:'; ?></div>
                              <div class="umstyle4" ><?php echo $this->Form->input("name", array('label' => false, 'div' => false, 'class' => 'form-control','disabled' => 'disabled')) ?></div>
                              <div style="clear:both"></div>
                          </div>
                         <div>
                              <div class="umstyle3" style="width: 100px"><?php echo 'Địa chỉ:'; ?></div>
                              <div class="umstyle4" ><?php echo $this->Form->input("name", array('label' => false, 'div' => false, 'class' => 'form-control','disabled' => 'disabled')) ?></div>
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
    </div>
</div>
            