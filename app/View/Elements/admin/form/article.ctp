<script type="text/javascript">
    function openKCFinder_singleFile(div) {
       //alert('click');return false;
        window.KCFinder = {
            callBack: function(url) {
                window.KCFinder = null;
                div.innerHTML = '<div style="margin:5px">Đang tải ảnh...</div>';
                var img = new Image();
                img.src = url;
                img.onload = function() {
                    div.innerHTML = '<img id="img" src="' + url + '" />';
                    base_url_str = url.replace(base_url + 'app/webroot/', '');
                    $("#image_path").val(base_url_str);
                    var img = document.getElementById('img');
                    var o_w = img.offsetWidth;
                    var o_h = img.offsetHeight;
                    var f_w = div.offsetWidth;
                    var f_h = div.offsetHeight;
                    if ((o_w > f_w) || (o_h > f_h)) {
                        if ((f_w / f_h) > (o_w / o_h))
                            f_w = parseInt((o_w * f_h) / o_h);
                        else if ((f_w / f_h) < (o_w / o_h))
                            f_h = parseInt((o_h * f_w) / o_w);
                        //img.style.width = f_w + "px";
                        //img.style.height = f_h + "px";
                    } else {
                        // f_w = o_w;
                        // f_h = o_h;
                    }
                    //img.style.marginLeft = parseInt((div.offsetWidth - f_w) / 2) + 'px';
                    //img.style.marginTop = parseInt((div.offsetHeight - f_h) / 2) + 'px';
                    img.style.visibility = "visible";
                }
            }
        };
        window.open(base_url + 'app/webroot/js/ckeditor/kcfinder/browse.php?type=images&dir=images',
                'kcfinder_image', 'status=0, toolbar=0, location=0, menubar=0, ' +
                'directories=0, resizable=1, scrollbars=0, width=800, height=600'
                );
    }
</script>


<div class="umtop">
    <?php //echo $this->element('nav_reader_management'); ?>
    <?php echo $this->Session->flash(); ?>
    <div class="um_box_up"></div>
    <div class="um_box_mid">
        <div>
            <div class="um_box_mid_content_top">
                <span class="umstyle1"><?php echo __($sub_title); ?></span>
                <div style="clear:both"></div>
            </div>
            <div class="umhr"></div>
            <div class="form-custom">
                <?php echo $this->Form->create('Article'); ?>
                <label><?php echo 'Tên bài viết'; ?><font color='red'>*</font></label>
                <?php echo $this->Form->input("name", array('label' => false, 'div' => false, 'class' => "form-control")) ?>

                <label><?php echo 'Danh mục'; ?><font color='red'>*</font></label>
                <?php echo $this->Form->input("category_id", array('label' => false, 'div' => false, 'class' => "form-control custom-260", 'options' => $categories)) ?>

                <label>Ảnh</label>
                <?php echo $this->Html->tag('div', 'Click để chọn hình.', array('class' => 'img_news', 'onclick' => 'openKCFinder_singleFile(this)'));?>
                <label><?php echo 'Tóm tắt'; ?><font color='red'>*</font></label>
                <?php echo $this->Form->input("sumary", array('type' => 'textarea', 'selected' => 'selected', 'label' => false, 'div' => false)) ?>
                <input name="data[Article][thumbnail]" type="hidden" id="image_path" value=""/>


                <label><?php echo 'Nội dung'; ?><font color='red'>*</font></label>
                <?php echo $this->Form->input("content", array('type' => 'textarea', 'label' => false, 'div' => false, 'id' => "full-text")) ?>
                <?php echo $this->TvFck->create('full-text',array('toolbar'=>'extra'),'full-text');?>
                <label></label>
                <?php echo $this->Form->Submit('Nhập', array('class' => 'btn btn-primary')); ?>

                <?php echo $this->Form->end(); ?>
            </div>
            <div class="um_box_mid_content_mid_right" align="right"></div>
            <div style="clear:both"></div>
        </div>
    </div>
    <div class="um_box_down"></div>
</div>

