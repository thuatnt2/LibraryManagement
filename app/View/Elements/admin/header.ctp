<!-- Page Head -->
<!--<h2>Welcome-->
<?php // echo $this->Session->read('UserAuth.User.username'); ?>
<div id="shortcut">
    <ul class="shortcut-buttons-set">
        <li><?php echo $this->Html->link('<span class="png_bg">Biên mục tài liệu</span>', array('plugin' => null, 'controller' => 'books', 'action' => 'add'), array('class' => 'shortcut-button cataloging-document', 'escape' => false)) ?></li>
        <li><?php echo $this->Html->link($this->Html->tag('span', 'Mượn trả tài liệu', array('class' => 'png_bg')), array('plugin' => null, 'controller' => 'ciculations', 'action' => 'bookBorrowed'), array('class' => 'shortcut-button borrow-document', 'escape' => false)) ?></li>
        <li><?php echo $this->Html->link('<span class="png_bg">Đăng ký bạn đọc</span>', array('plugin' => 'usermgmt', 'controller' => 'users', 'action' => 'addReader'), array('class' => 'shortcut-button add-reader', 'escape' => false)) ?></li>
        <li><a class="shortcut-button statistics" href="#messages" rel="modal"><span class="png_bg">
                    Thống kê    
                </span></a></li>
        <li><a class="shortcut-button manage-user" href="#messages" rel="modal"><span class="png_bg">
                    Quản lý người dùng
                </span></a></li>
        <li><?php echo $this->Html->link('<span class="png_bg">Đăng bài viết</span>', array('plugin' => null, 'controller' => 'articles', 'action' => 'add'), array('class' => 'shortcut-button new-article', 'escape' => false)) ?></li>
    </ul>
</div>
<div class="clear"></div> <!-- End .clear -->
<noscript> <!-- Show a notification if the user has disabled javascript -->
<div class="notification error png_bg">
    <div>
        Javascript is disabled or is not supported by your browser. Please <a href="http://browsehappy.com/" title="Upgrade to a better browser">upgrade</a> your browser or <a href="http://www.google.com/support/bin/answer.py?answer=23852" title="Enable Javascript in your browser">enable</a> Javascript to navigate the interface properly.
    </div>
</div>
</noscript>