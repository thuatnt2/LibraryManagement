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
                <a href="/dashboard" class="nav-top-item no-submenu" id="nav-item-dashboard"> <!-- Add the class "no-submenu" to menu items with no sub menu -->
                    Quản lý hệ thống
                </a>       
            </li>

            <li> 
                <a href="" class="nav-top-item " id="nav-item-article-mgmt"> <!-- Add the class "current" to current menu item -->
                    Quản lý bài viết
                </a>
                <ul>
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
                </ul>
            </li>

            <li>
                <a href="#" class="nav-top-item" id="nav-item-ciculation-mgmt">
                    Quản lý lưu thông
                </a>
                <ul>
                    <li><a href="#">Tài liệu đang mượn</a></li>
                    <li><a href="#">Tài liệu mượn quá hạn</a></li>
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
                </ul>
            </li>

            <li>
                <a href="#" class="nav-top-item" id="nav-item-settings">
                    Cấu hình
                </a>
                <ul>
                    <li><a href="#">Chính sách lưu thông</a></li>
                </ul>
            </li>      

        </ul> <!-- End #main-nav -->

        <div id="messages" style="display: none"> <!-- Messages are shown when a link with these attributes are clicked: href="#messages" rel="modal"  -->

            <h3>3 Messages</h3>

            <p>
                <strong>17th May 2009</strong> by Admin<br />
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus magna. Cras in mi at felis aliquet congue.
                <small><a href="#" class="remove-link" title="Remove message">Remove</a></small>
            </p>

            <p>
                <strong>2nd May 2009</strong> by Jane Doe<br />
                Ut a est eget ligula molestie gravida. Curabitur massa. Donec eleifend, libero at sagittis mollis, tellus est malesuada tellus, at luctus turpis elit sit amet quam. Vivamus pretium ornare est.
                <small><a href="#" class="remove-link" title="Remove message">Remove</a></small>
            </p>

            <p>
                <strong>25th April 2009</strong> by Admin<br />
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus magna. Cras in mi at felis aliquet congue.
                <small><a href="#" class="remove-link" title="Remove message">Remove</a></small>
            </p>
            <form action="" method="post">
                <h4>New Message</h4>
                <fieldset>
                    <textarea class="textarea" name="textfield" cols="79" rows="5"></textarea>
                </fieldset>
                <fieldset>
                    <select name="dropdown" class="small-input">
                        <option value="option1">Send to...</option>
                        <option value="option2">Everyone</option>
                        <option value="option3">Admin</option>
                        <option value="option4">Jane Doe</option>
                    </select>
                    <input class="button" type="submit" value="Send" />
                </fieldset>
            </form>
        </div> <!-- End #messages -->
    </div>
</div> <!-- End #sidebar -->