<div id="sidebar">
    <div id="sidebar-wrapper"> <!-- Sidebar with logo and menu -->
        <div class="profile-user" style="display: block;">
            <div class="image">
                <?php echo $this->Html->image('users/alexey.jpg', array('class="img-polaroid"')) ?>
            </div>
            <ul class="control">                
                <li><span class="icon-comment"></span> <a href="#">Thông tin cá nhân</a></li>
                <li><span class="icon-share-alt"></span> <a href="<?php echo $this->Html->url('/logout')?>">Đăng xuất</a></li>
            </ul>
            <div class="info">
                <span>Welcom back! Your last visit: 24.10.2012</span>
            </div>        
        </div>
        <div style="clear:both"></div>
        <ul id="main-nav">  <!-- Accordion Menu -->

            <li>
                <a href="/dashboard" class="nav-top-item" id="nav-item-dashboard"> <!-- Add the class "no-submenu" to menu items with no sub menu -->
                    Hệ Thống
                </a> 
                <ul>
                    <li><a href="#">Quản lý lớp</a></li>
                    <li><a href="/articles" >Quản lý khoa</a></li>
                    <li><a href="#">Quản lý người dùng</a></li>
                    <li><a href="#">Chính sách lưu thông</a></li>
                </ul>
            </li>

            <li> 
                <a href="" class="nav-top-item " id="nav-item-article-mgmt"> <!-- Add the class "current" to current menu item -->
                    Bài viết
                </a>
                <ul>
                     <li><a class="current" href="/articles" >Danh mục bài viết</a></li>
                    <li><a class="current" href="/articles" >Danh sách bài viết</a></li>
                    <li><a href="#">Đăng bài viết mới</a></li> <!-- Add class "current" to sub menu items also -->
                </ul>
            </li>

            <li>
                <a href="#" class="nav-top-item" id="nav-item-reader-mgmt">
                    Quản lý bạn đọc
                </a>
                <ul>
                    <li><a href="#">Danh sách bạn đọc</a></li>
                    <li><a href="#">Đăng ký bạn đọc mới</a></li>
                    <li><a href="#">Bạn đọc vi phạm</a></li>
                    <li><a href="#">Bạn đọc ngừng lưu thông</a></li>
                </ul>
            </li>

            <li>
                <a href="#" class="nav-top-item" id="nav-item-ciculation-mgmt">
                    Quản lý lưu thông
                </a>
                <ul>
                    <!--<li><a href="#">Tài liệu đang mượn</a></li>-->
                    <!--<li><a href="#">Tài liệu mượn quá hạn</a></li>-->
                    <li><a href="#">Mượn trả tài liệu</a></li>
                    <li><a href="#">Lịch sử lưu thông</a></li>
                    <li><a href="#">Tài liệu đăng ký mượn online</a></li>
                </ul>
            </li>
            <li>
                <a href="#" class="nav-top-item" id="nav-item-books-mgmt">
                    Quản lý tài liệu
                </a>
                <ul>
                    <li><a href="#">Danh sách tài liệu</a></li>

                    <li><?php echo $this->Html->link('Biên mục tài liệu', array('controller' => 'books', 'action' => 'add')) ?></li>
                    <li><a href="#">Quản lý tác giả</a></li>
                    <li><a href="#">Danh mục tài liệu</a></li>
                    <li><a href="#">Thể loại tài liệu</a></li>
                    <li><a href="#">Ngôn ngữ</a></li>
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