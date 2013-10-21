<div id="sidebar">
    <div id="sidebar-wrapper"> <!-- Sidebar with logo and menu -->
        <div class="profile-user" style="display: block;">
            <div class="image">
                <?php echo $this->Html->image('users/alexey.jpg', array('class="img-polaroid"')) ?>
            </div>
            <ul class="control">                
                <!--<li><span class="icon-comment"></span> <a href="">Thông tin cá nhân</a></li>-->
                <li><?php echo $this->Html->link('<span class="icon-comment"></span>Thông tin cá nhân', array('plugin' => 'usermgmt','controller' => 'users', 'action' => 'myprofile'), array('escape' => false)) ?></li>
                <li><span class="icon-share-alt"></span> <a href="<?php echo $this->Html->url('/logout')?>">Đăng xuất</a></li>
            </ul>
<!--            <div class="info">
                <span>Welcom back! Your last visit: 24.10.2012</span>
            </div>        -->
        </div>
        <div style="clear:both"></div>
        <ul id="main-nav">  <!-- Accordion Menu -->

            <li>
                <a href="/dashboard" class="nav-top-item" id="nav-item-dashboard"> <!-- Add the class "no-submenu" to menu items with no sub menu -->
                    Hệ Thống
                </a> 
                <ul>
                     <li><?php echo $this->Html->link('Quản lý lớp',array('plugin' => 'usermgmt', 'controller' => 'departments', 'action' => 'index')) ?></li>
                     <li><?php echo $this->Html->link('Quản lý khoa', array('plugin' => 'usermgmt', 'controller' => 'faculties', 'action' => 'index')) ?></li>
                     <li><?php echo $this->Html->link('Quản lý người dùng', array('plugin' => 'usermgmt', 'controller' => 'users', 'action' => 'index')) ?></li>
                    <li><a href="#">Chính sách lưu thông</a></li>
                </ul>
            </li>

            <li> 
                <a href="" class="nav-top-item " id="nav-item-article-mgmt"> <!-- Add the class "current" to current menu item -->
                    Bài viết
                </a>
                <ul>
                      <li><?php echo $this->Html->link('Danh mục bài viết', array('plugin' => null,'controller' => 'articles', 'action' => 'index')) ?></li>
                      <li><?php echo $this->Html->link('Danh sách bài viết', array('plugin' => null,'controller' => 'articles', 'action' => 'index')) ?></li>
                      <li><?php echo $this->Html->link('Đăng bài viết mới', array('plugin' => null,'controller' => 'articles', 'action' => 'add')) ?></li>
                </ul>
            </li>

            <li>
                <a href="#" class="nav-top-item" id="nav-item-reader-mgmt">
                    Quản lý bạn đọc
                </a>
                <ul>
                    <li><?php echo $this->Html->link('Danh sách bạn đọc', array('plugin' => 'usermgmt', 'controller' => 'readers', 'action' => 'index')) ?></li>
                    <li><?php echo $this->Html->link('Đăng ký bạn đọc mới', array('plugin' => 'usermgmt', 'controller' => 'users', 'action' => 'addReader')) ?></li>
                    <li><?php echo $this->Html->link('Bạn đọc vi phạm', '#') ?></li>
                    <li><?php echo $this->Html->link('Bạn đọc ngừng lưu thông', '#') ?></li>
                </ul>
            </li>

            <li>
                <a href="#" class="nav-top-item" id="nav-item-ciculation-mgmt">
                    Quản lý lưu thông
                </a>
                <ul>
                    <li><?php echo $this->Html->link('Mượn trả tài liệu', array('plugin' => null,'controller' => 'ciculations', 'action' => 'bookBorrowed')) ?></li>
                    <li><?php echo $this->Html->link('Lịch sử lưu thông', array('plugin' => null,'controller' => 'admin', 'action' => 'logs')) ?></li>
                    <li><a href="#">Tài liệu đăng ký mượn</a></li>
                </ul>
            </li>
            <li>
                <a href="#" class="nav-top-item" id="nav-item-books-mgmt">
                    Quản lý tài liệu
                </a>
                <ul>
                     <li><?php echo $this->Html->link('Danh sách tài liệu', array('plugin' => null,'controller' => 'books', 'action' => 'index')) ?></li>
                     <li><?php echo $this->Html->link('Biên mục tài liệu', array('plugin' => null,'controller' => 'books', 'action' => 'add')) ?></li>
                     <li><?php echo $this->Html->link('Quản lý tác giả', array('plugin' => null,'controller' => 'authors', 'action' => 'index')) ?></li>
                     <li><?php echo $this->Html->link('Danh mục tài liệu', array('plugin' => null,'controller' => 'bookCategories', 'action' => 'index')) ?></li>
                     <li><?php echo $this->Html->link('Thể loại tài liệu', array('plugin' => null,'controller' => 'bookTypes', 'action' => 'index')) ?></li>
                    <li><?php echo $this->Html->link('Ngôn ngữ tài liệu', array('plugin' => null,'controller' => 'bookLanguages', 'action' => 'index')) ?></li>
                </ul>
            </li>

            <li>
                <a href="#" class="nav-top-item" id="nav-item-settings">
                    Thống kê
                </a>
                <ul>
                    <li><a href="#">Tài liệu đang mượn</a></li>
                    <li><a href="#">Tài liệu còn lại trong kho</a></li>
                    <li><a href="#">Tài liệu mượn quá hạn</a></li>
                </ul>
            </li>      
             <li>
                <a href="#" class="nav-top-item" id="nav-item-settings">
                    Trợ giúp
                </a>
            </li> 
        </ul> <!-- End #main-nav -->
    </div>
</div> <!-- End #sidebar -->