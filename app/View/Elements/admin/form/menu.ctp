
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
                    <?php echo $this->Form->create('Menu', array('class' => 'form-custom')); ?>
                    <div>
                        <div class="umstyle3">Tên Menu<font color='red'>*</font></div>
                        <div class="umstyle4" ><?php echo $this->Form->input("name", array('label' => false, 'div' => false, 'class' => "form-control")) ?></div>
                        <div style="clear:both"></div>
                        <div class="umstyle3">Chọn menu cha<font color='red'>*</font></div>
                        <div class="umstyle4" ><?php echo $this->Form->input("parent_id", array('label' => false, 'div' => false, 'class' => "form-control", 'empty' => 'Là danh mục cha', 'options' => $menus)) ?></div>
                        <div style="clear:both"></div>
                    </div>                    

                    <div>
                        <div class="umstyle3">Loại menu<font color='red'>*</font></div>
                        <div class="umstyle4" >
                            <?php echo $this->Form->input('view', array('label' => false, 'readonly' => true, 'class' => 'custom-260 form-control', 'style' => 'display:inline', 'div' => false)) ?> 
                            <select name="menuType" id="menu-type">
                                <?php
                                if ($this->request->data) {
                                    ?>
                                    <option value="select_article" <?php if ($this->request->data['Menu']['controller'] == 'article' && $this->request->data['Menu']['action'] == 'view') echo 'selected="selected"' ?> >Bài viết</option> 
                                    <option value="select_category" <?php if ($this->request->data['Menu']['controller'] == 'article' && $this->request->data['Menu']['action'] == 'blog') echo 'selected="selected"' ?> >Danh mục </option> 
                                    <?php
                                }
                                else {
                                    ?>
                                    <option value="select_article">Bài viết</option>
                                    <option value="select_category">Danh mục</option>
                                    <?php
                                }
                                ?>
                            </select>
                            <a href="#" class="addmenu" >Chọn menu</a>
                        </div>
                        <div style="clear:both"></div>
                    </div>


                    <div>
                        <div class="umstyle3">Thứ tự hiển thị<font color='red'>*</font></div>
                        <div class="umstyle4" ><?php echo $this->Form->input("order", array('label' => false, 'div' => false, 'class' => "form-control")) ?></div>
                        <div style="clear:both"></div>
                    </div>

                    <div>
                        <div class="umstyle3">Xuất bản<font color='red'>*</font></div>
                        <div class="umstyle4" ><?php echo $this->Form->input("published", array('type' => 'checkbox', 'selected' => 'selected', 'label' => false, 'div' => false)) ?></div>
                        <div style="clear:both"></div>
                    </div>

                    <div>
                        <div class="umstyle3">Mô tả<font color='red'>*</font></div>
                        <div class="umstyle4" ><?php echo $this->Form->input("description", array('type' => 'textarea', 'label' => false, 'div' => false, 'class' => "")) ?></div>
                        <div style="clear:both"></div>
                    </div>


                    <?php echo $this->Form->hidden('controller') ?>
                    <?php echo $this->Form->hidden('action') ?> 
                    <?php echo $this->Form->hidden('ext') ?>                
                    <?php echo $this->Form->hidden('link') ?>    

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
        </div>
    </div>
    <div class="um_box_down"></div>
</div>
