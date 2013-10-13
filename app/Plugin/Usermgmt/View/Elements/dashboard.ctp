<?php $user = $this->Session->read('UserAuth');
		?>
<div class="navbar navbar-default">
    <div class="container">
        <div class="navbar-header">
            <a class="navbar-brand" href="#">Quản lý người dùng</a>
        </div>
        <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo __('User') ?> <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <?php if ($this->UserAuth->isAdmin()) {
                            ?>
                            <li><?php echo $this->Html->link('Thêm mới người dùng', "/addUser") ?></li>
                            <li><?php echo $this->Html->link('Danh sách người dùng', "/allUsers") ?></li>

                        <?php } else {
                        }
                        ?>
                        <li><?php echo $this->Html->link('Đổi mật khẩu', '/changeUserPassword/'.$user['User']['id'] ) ?></li>
                    </ul>
                </li>
                <?php if ($this->UserAuth->isAdmin()) {
                    ?>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo __('Group') ?> <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><?php echo $this->Html->link("Thêm nhóm", "/addGroup") ?></li>
                            <li><?php echo $this->Html->link('Danh sách nhóm', "/allGroups") ?></li>
                            <li><?php echo $this->Html->link('Phân quyền', "/permissions") ?></li>
                        </ul>
                    </li>
                <?php }
                ?>
            </ul>
        </div><!--/.nav-collapse -->
    </div>
</div>