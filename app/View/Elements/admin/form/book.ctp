
<div class="umtop">
	<?php //echo $this->element('nav_reader_management'); ?>
	<?php echo $this->Session->flash(); ?>
    <div class="um_box_up"></div>
    <div class="um_box_mid">
        <div class="um_box_mid_content">
            <div class="um_box_mid_content_top">
                <span class="umstyle1"><?php echo __($sub_title);    ?></span>
                <div style="clear:both"></div>
            </div>
            <div class="umhr"></div>
            <div class="um_box_mid_content_mid" id="register">
                 <?php echo $this->Form->create('Book'); ?>
                    <div class="um_box_mid_content_mid_left">
                            <div>
                                <div class="umstyle3"><?php echo 'Tên đầu sách'; ?><font color='red'>*</font></div>
                                <div class="umstyle4" ><?php echo $this->Form->input("name", array('label' => false, 'div' => false, 'class' => 'form-control')) ?></div>
                                <div style="clear:both"></div>
                            </div>
                            <div class="ui-widget">
                                <div class="umstyle3"><?php echo 'Tác giả' ?></div>
                                <div class="umstyle4" ><?php echo $this->Form->input("authors", array('type' => 'text', 'label' => false, 'div' => false, 'class' => 'form-control')) ?></div>
                                <div style="clear:both"></div>
                            </div>

                            <div>
                                <div class="umstyle3"><?php echo 'Thể loại sách'; ?><font color='red'>*</font></div>
                                <div class="umstyle4" ><?php echo $this->Form->input("book_type_id", array('label' => false, 'div' => false, 'class' => 'form-control')) ?></div>
                                <div style="clear:both"></div>
                            </div>
                            <div>
                                <div class="umstyle3"><?php echo 'Danh mục sách'; ?><font color='red'>*</font></div>
                                <div class="umstyle4" ><?php echo $this->Form->input("book_category_id", array('label' => false, 'div' => false, 'class' => 'form-control')) ?></div>
                                <div style="clear:both"></div>
                            </div>
                            <div>
                                <div class="umstyle3"><?php echo 'Nhà xuất bản'; ?><font color='red'>*</font></div>
                                <div class="umstyle4" ><?php echo $this->Form->input("publisher", array('type' => 'text', 'label' => false, 'div' => false, 'class' => 'form-control')) ?></div>
                                <div style="clear:both"></div>
                            </div>
                            <div>
                                <div class="umstyle3"><?php echo 'Ngôn ngữ sách'; ?><font color='red'>*</font></div>
                                <div class="umstyle4" ><?php echo $this->Form->input("book_language_id", array('label' => false, 'div' => false, 'class' => 'form-control')) ?></div>
                                <div style="clear:both"></div>
                            </div>
                            <div>
                                <div class="umstyle3"><?php echo 'Năm xuất bản'; ?><font color='red'>*</font></div>
                                <div class="umstyle4" ><?php echo $this->Form->input("year_of_publish", array('type' => 'number', 'label' => false, 'div' => false, 'class' => 'form-control')) ?></div>
                                <div style="clear:both"></div>
                            </div>
                            <div>
                                <div class="umstyle3"><?php echo 'Số trang'; ?><font color='red'>*</font></div>
                                <div class="umstyle4" ><?php echo $this->Form->input("number_of_pages", array('type' => 'number', 'label' => false, 'div' => false, 'class' => 'form-control')) ?></div>
                                <div style="clear:both"></div>
                            </div>
                           
                        </div>
                        <div class="um_box_mid_content_mid_right" align="right">
                                <div>
                                   <div class="umstyle3"><?php echo 'Kích thước'; ?><font color='red'>*</font></div>
                                   <div class="umstyle4" ><?php echo $this->Form->input("page_size", array('type' => 'text', 'label' => false, 'div' => false, 'class' => 'form-control')) ?></div>
                                   <div style="clear:both"></div>
                               </div>
                               <div>
                                   <div class="umstyle3"><?php echo 'Giá'; ?><font color='red'>*</font></div>
                                   <div class="umstyle4" ><?php echo $this->Form->input("price", array('type' => 'number', 'label' => false, 'div' => false, 'class' => 'form-control')) ?></div>
                                   <div style="clear:both"></div>
                               </div>
                                <div>
                                    <div class="umstyle3"><?php echo 'Vị trí đặt sách'; ?><font color='red'>*</font></div>
                                    <div class="umstyle4" ><?php echo $this->Form->input("location", array('type' => 'number', 'label' => false, 'div' => false, 'class' => 'form-control')) ?></div>
                                    <div style="clear:both"></div>
                                </div>
                                                    <div>
                                    <div class="umstyle3"><?php echo 'Hình thức sử dụng'; ?><font color='red'>*</font></div>
                                    <div class="umstyle4" ><?php echo $this->Form->input("location", array('type' => 'select', 'options'=>$borrow_type, 'label' => false, 'div' => false, 'class' => 'form-control')) ?></div>
                                    <div style="clear:both"></div>
                                </div>
                                                    <div>
                                    <div class="umstyle3"><?php echo 'Phạm vi mượn'; ?><font color='red'>*</font></div>
                                    <div class="umstyle4" ><?php echo $this->Form->input("location", array('type' => 'select', 'options'=>$teacher_only, 'label' => false, 'div' => false, 'class' => 'form-control')) ?></div>
                                    <div style="clear:both"></div>
                                </div>

                                                    <div>
                                    <div class="umstyle3"><?php echo 'Mô tả' ?></div>
                                    <div class="umstyle4" ><?php echo $this->Form->input("description", array('type' => 'textarea', 'label' => false, 'div' => false, 'class' => "")) ?></div>
                                    <div style="clear:both"></div>
                                </div>
                                <!--<div>-->
                                    <div class="umstyle3"></div>
                                    <div class="umstyle4">
                                         <?php echo $this->Form->Submit('Nhập', array('class' => 'btn btn-primary')); ?>
                                    </div>
                                    <div style="clear:both"></div>
                                </div>

                    </div>
                <?php echo $this->Form->end(); ?>
                <div style="clear:both"></div>
            </div>
        </div>
    </div>
    <!--<div class="um_box_down"></div>-->
</div>
<?php
//debug($publishers);
echo $this->Html->script('vendor/jquery-ui/jquery.ui.core', array('block' => 'scriptBottom'));
echo $this->Html->script('vendor/jquery-ui/jquery.ui.widget', array('block' => 'scriptBottom'));
echo $this->Html->script('vendor/jquery-ui/jquery.ui.menu', array('block' => 'scriptBottom'));
echo $this->Html->script('vendor/jquery-ui/jquery.ui.position.js', array('block' => 'scriptBottom'));
echo $this->Html->script('vendor/jquery-ui/jquery.ui.autocomplete', array('block' => 'scriptBottom'));
echo $this->Autocomplete->multiple($authors, 'BookAuthors');
echo $this->Autocomplete->single($publishers, 'BookPublisher');

?>
