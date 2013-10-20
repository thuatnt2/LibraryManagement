
<div class="umtop">
	<?php //echo $this->element('nav_reader_management'); ?>
	<?php echo $this->Session->flash(); ?>
    <div class="um_box_up"></div>
    <div class="um_box_mid">
        <div class="um_box_mid_content">
            <div class="um_box_mid_content_top">
                <span class="umstyle1"><?php echo __($sub_title); ?></span>
                <div style="clear:both"></div>
            </div>
            <div class="umhr"></div>
            <div class="um_box_mid_content_mid" id="register">
                 <div class="row-fluid">
                    <?php echo $this->Form->create('BookSerial', array('class' => 'form-horizontal')); ?>
                     <div class="span2">
                         
                     </div>
                     <div class="span5">
                        <div class="control-group">
                             <label class="control-label" >Mã tài liệu:<font color='red'>*</font></label>
                             <div class="controls" ><?php echo $this->Form->input('barcode', array('type'=>'text', 'label' => false, 'div' => false, 'required'=>false, 'class' => 'form-control', 'autocomplete'=> 'off')) ?></div>
                        </div>
                    </div>
                    <div class="span1">
                        <div class="control-group">
                            <?php echo $this->Form->Submit('Nhập', array('label' => false, 'div' => false,'class' => 'btn btn-primary')); ?>
                        </div>
                    </div>
                    <?php echo $this->Form->end(); ?>
                </div>
                <div style="clear:both"></div>
            </div>
			
            <div class="um_box_mid_content_top">
                <span class="umstyle1">Thông tin tài liệu</span>
                <div style="clear:both"></div>
                
            </div>
            <div class="umhr"></div>
            <div class="um_box_mid_content_mid" id="register">
                <div class="row-fluid">
                    <div class="form-horizontal">
                     <div class="span6">
                            <div>
                                <div class="umstyle3"><?php echo 'Tiêu đề:'; ?></div>
                                <div class="umstyle4" ><?php echo $book['Book']['title'] ?></div>
                                <div style="clear:both"></div>
                            </div>
                             <div>
                                <div class="umstyle3"><?php echo 'Tác giả:'; ?></div>
                                <div class="umstyle4" ><?php echo $book['Book']['title'] ?></div>
                                <div style="clear:both"></div>
                            </div> 
                             <div>
                                <div class="umstyle3"><?php echo 'Số trang:'; ?></div>
                                <div class="umstyle4" ><?php echo $book['Book']['title'] ?></div>
                                <div style="clear:both"></div>
                            </div> 
                            <div>
                                <div class="umstyle3"><?php echo 'Nhà xuất bản:'; ?></div>
                                <div class="umstyle4" ><?php echo $book['Book']['title'] ?></div>
                                <div style="clear:both"></div>
                            </div> 
                            <div>
                                <div class="umstyle3"><?php echo 'Năm xuất bản:'; ?></div>
                                <div class="umstyle4" ><?php echo $book['Book']['title'] ?></div>
                                <div style="clear:both"></div>
                            </div> 
                        </div>
                        <div class="span6">
                            <div>
                                <div class="umstyle3"><?php echo 'Giá:'; ?></div>
                                <div class="umstyle4" ><?php echo $book['Book']['title'] ?></div>
                                <div style="clear:both"></div>
                            </div>
                            <div>
                                <div class="umstyle3"><?php echo 'Kích thước:'; ?></div>
                                <div class="umstyle4" ><?php echo $book['Book']['title'] ?></div>
                                <div style="clear:both"></div>
                            </div> <div>
                                <div class="umstyle3"><?php echo 'Tiêu đề:'; ?></div>
                                <div class="umstyle4" ><?php echo $book['Book']['title'] ?></div>
                                <div style="clear:both"></div>
                            </div>
                            <div>
                                <div class="umstyle3"><?php echo 'Số lượng:'; ?></div>
                                <div class="umstyle4" id="book_total" ><?php echo $book['Book']['total'] ?></div>
                                <div style="clear:both"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="um_box_mid_content_mid_right" align="right"></div>
                <div style="clear:both"></div>
				<table class="index-table">
                    <thead>
                        <tr>
                            <th><?php echo 'Thứ tự' ?></th>
                            <th><?php echo 'Mã tài liệu' ?></th>
                            <th><?php echo 'Trạng thái' ?></th>
                            <th><?php echo 'Người tạo' ?></th>
                            <th><?php echo 'Thao tác' ?></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
						$stt = 1;
						//debug($book);
                        if (!empty($book['BookSerial'])) {
                            foreach ($book['BookSerial'] as $row) {
                                echo "<tr>";
                                echo "<td>" .$stt++. "</td>";
                                echo "<td>" . $row['barcode'] . "</td>";
                                  echo "<td>" . $row['user_creater'] . "</td>";
                                if($row['status'])
                                    echo "<td> Sẵn có</td>";
                                else 
                                    echo "<td> Đang mượn</td>";
                                
                        ?>
                           <td>
                            <a href="javascript:void(0)" id="<?php echo 'book_serial_'.$row['id']?>" onclick="deleteBookSerial('<?php echo $book['Book']['id'] ?>','<?php echo $row['id']?>')"><img src="/images/delete.png" alt="delete.jpg" title="Xóa"/>
                            </a>
                        </td>
                        <?php
                         echo "</tr>";
                            }
                        } else {
                            echo "<tr><td colspan=6><br/><br/>Không có dữ liệu</td></tr>";
                        }
                        ?>
                     
                    </tbody>
                </table>
            </div>
			
        </div>
    </div>
    <!--<div class="um_box_down"></div>-->
</div>
