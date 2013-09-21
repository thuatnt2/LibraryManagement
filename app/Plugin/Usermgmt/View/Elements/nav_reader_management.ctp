<div class="navbar navbar-default">
    <div class="container">
        <div class="navbar-header">
            <a class="navbar-brand" href="#"><?php echo __('Reader Management') ?></a>
        </div>
        <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo 'Bạn đọc' ?> <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><?php echo $this->Html->link("Thêm bạn đọc", "/addReader") ?></li>
                        <li><?php echo $this->Html->link("Danh sách bạn đọc", "/readers") ?></li>
                    </ul>
                </li>

                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo __('Faculty') ?> <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><?php echo $this->Html->link(__("Add Faculty", true), "/addFaculty") ?></li>
                        <li><?php echo $this->Html->link(__("All Faculties", true), "/faculties") ?></li>
                    </ul>
                </li>

                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo __('Department') ?> <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><?php echo $this->Html->link(__("Add Department", true), "/addDepartment") ?></li>
                        <li><?php echo $this->Html->link(__("All Departments", true), "/departments") ?></li>
                    </ul>
                </li>

            </ul>
        </div><!--/.nav-collapse -->
    </div>
</div>