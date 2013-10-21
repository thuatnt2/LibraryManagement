
<div class="umtop">
    <?php //echo $this->element('nav_reader_management'); ?>
    <?php echo $this->Session->flash(); ?>
    <div class="um_box_up"></div>
    <div class="um_box_mid">
        <div class="um_box_mid_content">
            <div class="um_box_mid_content_top">
                <span class="umstyle1"><?php echo isset($sub_title) ? $sub_title : 'Biên mục tài liệu' ?></span>
                <div style="clear:both"></div>
            </div>
            <div class="umhr"></div>
            <div class="um_box_mid_content_mid" id="register">    
                <div class="row-fluid">
                    <?php echo $this->Form->create('Book', array('class' => 'form-horizontal')); ?>
                    <?php echo $this->Form->input('id', array('hidden' => true)) ?>
                    <div class="span6"  align="right" style="margin-left: 0px">
                        <div class="control-group">
                            <label class="control-label" >Tên tài liệu:<font color='red'>*</font></label>
                            <div class="controls" ><?php echo $this->Form->input("title", array('label' => false, 'div' => false, 'class' => 'form-control span12')) ?></div>
                            <div style="clear:both"></div>
                        </div>
                        <div class="control-group">
                            <label class="control-label" >Tác giả:</label>
                            <div class="controls" ><?php echo $this->Form->input("authors", array('type' => 'text', 'label' => false, 'div' => false, 'class' => 'form-control span12')) ?></div>
                            <div style="clear:both"></div>
                        </div>

                        <div class="control-group">
                            <label class="control-label" >Thể loại:<font color='red'>*</font></label>
                            <div class="controls" ><?php echo $this->Form->input("book_type_id", array('label' => false, 'div' => false, 'class' => 'form-control span12')) ?></div>
                            <div style="clear:both"></div>
                        </div>
                        <div class="control-group">
                            <label class="control-label" >Danh mục:<font color='red'>*</font></label>
                            <div class="controls" ><?php echo $this->Form->input("book_category_id", array('label' => false, 'div' => false, 'class' => 'form-control span12')) ?></div>
                            <div style="clear:both"></div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">Nhà xuất bản:<font color='red'>*</font></label>
                            <div class="controls" ><?php echo $this->Form->input("publisher", array('type' => 'text', 'label' => false, 'div' => false, 'class' => 'form-control span12')) ?></div>
                            <div style="clear:both"></div>
                        </div>
                        <div class="control-group">
                            <label class="control-label" >Ngôn ngữ:<font color='red'>*</font></label>
                            <div class="controls" ><?php echo $this->Form->input("language", array('type' => 'text', 'id' => 'BookLanguage', 'label' => false, 'div' => false, 'class' => 'form-control span12')) ?></div>
                            <div style="clear:both"></div>
                        </div>
                        <div class="control-group">
                            <label class="control-label" >Năm xuất bản:<font color='red'>*</font></label>
                            <div class="controls" ><?php echo $this->Form->input("year_of_publish", array('type' => 'text', 'label' => false, 'div' => false, 'class' => 'form-control span12')) ?></div>
                            <div style="clear:both"></div>
                        </div>
                        <div  class="control-group">
                            <label class="control-label" >Số trang:<font color='red'>*</font></label>
                            <div class="controls" ><?php echo $this->Form->input("number_of_pages", array('type' => 'number', 'label' => false, 'div' => false, 'class' => 'form-control span12')) ?></div>
                            <div style="clear:both"></div>
                        </div>

                    </div>
                    <div class="span6"  align="right">
                        <div  class="control-group">
                              <label class="control-label" >Kích thước:<font color='red'>*</font></label>
                            <div class="controls" ><?php echo $this->Form->input("page_size", array('type' => 'text', 'label' => false, 'div' => false, 'class' => 'form-control span12')) ?></div>
                            <div style="clear:both"></div>
                        </div>
                        <div  class="control-group">
                              <label class="control-label" >Giá:<font color='red'>*</font></label>
                            <div class="controls" ><?php echo $this->Form->input("price", array('type' => 'number', 'label' => false, 'div' => false, 'class' => 'form-control span12')) ?></div>
                            <div style="clear:both"></div>
                        </div>
                        <div  class="control-group">
                              <label class="control-label" >Vị trí:<font color='red'>*</font></label>
                            <div class="controls" ><?php echo $this->Form->input("location", array('type' => 'number', 'label' => false, 'div' => false, 'class' => 'form-control span12')) ?></div>
                            <div style="clear:both"></div>
                        </div>
                        <div  class="control-group">
                              <label class="control-label" >Hình thức sử dụng:<font color='red'>*</font></label>
                            <div class="controls" ><?php echo $this->Form->input("borrow_type", array('type' => 'select', 'options' => $borrow_type, 'label' => false, 'div' => false, 'class' => 'form-control span12')) ?></div>
                            <div style="clear:both"></div>
                        </div>
                        <div  class="control-group">
                            <label class="control-label" >Phạm vi mượn:<font color='red'>*</font></label>
                            <div class="controls" ><?php echo $this->Form->input("teacher_only", array('type' => 'select', 'options' => $teacher_only, 'label' => false, 'div' => false, 'class' => 'form-control span12')) ?></div>
                            <div style="clear:both"></div>
                        </div>
                        <div  class="control-group">
                              <label class="control-label" >Mô tả:</label>
                            <div class="controls" ><?php echo $this->Form->input("description", array('type' => 'textarea', 'label' => false, 'div' => false, 'class' => "form-control span12")) ?></div>
                            <div style="clear:both"></div>
                        </div>
                        <!--<div>-->
                        <div  class="control-group">
                            <div class="controls">
                                <?php echo $this->Form->Submit('Nhập', array('class' => 'btn btn-primary')); ?>
                            </div>
                            <div style="clear:both"></div>
                        </div>
                    </div>

                </div>
                <?php echo $this->Form->end(); ?>
            </div>
            <div style="clear:both"></div>
        </div>
    </div>
</div>
<!--<div class="um_box_down"></div>-->
<?php
//debug($publishers);
echo $this->Html->script('vendor/jquery-ui/jquery.ui.core', array('block' => 'scriptBottom'));
echo $this->Html->script('vendor/jquery-ui/jquery.ui.widget', array('block' => 'scriptBottom'));
echo $this->Html->script('vendor/jquery-ui/jquery.ui.menu', array('block' => 'scriptBottom'));
echo $this->Html->script('vendor/jquery-ui/jquery.ui.position.js', array('block' => 'scriptBottom'));
echo $this->Html->script('vendor/jquery-ui/jquery.ui.autocomplete', array('block' => 'scriptBottom'));
echo $this->Autocomplete->multiple($authors, 'BookAuthors');
echo $this->Autocomplete->single($publishers, 'BookPublisher');
echo $this->Autocomplete->single($languages, 'BookLanguage');
?>
