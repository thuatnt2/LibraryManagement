
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
                <div class="um_box_mid_content_mid_left">
					<?php echo $this->Form->create('BookSerial'); ?>
                    <div>
                        <div class="umstyle3"><?php echo 'Mã sách'; ?><font color='red'>*</font></div>
                        <div class="umstyle4" ><?php echo $this->Form->input('barcode', array('type'=>'text', 'label' => false, 'div' => false, 'required'=>false, 'class' => 'form-control', 'autocomplete'=> 'off')) ?></div>
                        <div style="clear:both"></div>
                    </div>
                    <div>
                        <div class="umstyle3"></div>
                        <div class="umstyle4"> <?php echo $this->Form->Submit('Nhập', array('class' => 'btn btn-primary')); ?></div>
                        <div style="clear:both"></div>
                    </div>
					<?php echo $this->Form->end(); ?>
                </div>
                <div class="um_box_mid_content_mid_right" align="right"></div>
                <div style="clear:both"></div>
            </div>
			<div class="umhr"></div>
			<div class="um_box_mid_content_top">
                <span class="umstyle1">Thông tin sách</span>
                <div style="clear:both"></div>
            </div>
			<div class="um_box_mid_content_mid" id="register">
                <div class="um_box_mid_content_mid_left">
                    <div>
                        <div class="umstyle3"><?php echo 'Tên sách'; ?><font color='red'>*</font></div>
                        <div class="umstyle4" ><?php  echo $book['Book']['title']?></div>
                        <div style="clear:both"></div>
                    </div>
                    <div>
                        <div class="umstyle3"><?php echo 'Số lượng'; ?><font color='red'>*</font></div>
                        <div class="umstyle4" ><?php  echo $book['Book']['total']?></div>
                        <div style="clear:both"></div>
                    </div>
                </div>
                <div class="um_box_mid_content_mid_right" align="right"></div>
                <div style="clear:both"></div>
				<table class="index-table">
                    <thead>
                        <tr>
                            <th><?php echo 'Thứ tự' ?></th>
                            <th><?php echo 'Mã sách' ?></th>
                            <th><?php echo 'Trạng thái' ?></th>
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
                                echo "<td>" .$row['status'] . "</td>";
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
    <div class="um_box_down"></div>
</div>
