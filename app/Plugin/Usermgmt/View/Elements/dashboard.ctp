<div class="navbar navbar-default">
    <div class="container">
        <div class="navbar-header">
            <a class="navbar-brand" href="#"><?php echo __('User Management') ?></a>
        </div>
        <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo __('User') ?> <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <?php if ($this->UserAuth->isAdmin()) {
                            ?>
                            <li><?php echo $this->Html->link(__("Add User", true), "/addUser") ?></li>
                            <li><?php echo $this->Html->link(__("All Users", true), "/allUsers") ?></li>
                            <li><?php echo $this->Html->link(__("All Users", true), "/allUsers") ?></li>
                            <li><?php echo $this->Html->link(__("Profile", true), "/viewUser/" . $this->UserAuth->getUserId()) ?></li>
                            <li><?php echo $this->Html->link(__("Edit Profile", true), "/editUser/" . $this->UserAuth->getUserId()) ?></li>

                        <?php } else {
                            ?>
                            <li><?php echo $this->Html->link(__("Profile", true), "/myprofile") ?></li>
                            <?php
                        }
                        ?>
                        <li><?php echo $this->Html->link(__("Change Password", true), "/changePassword") ?></li>
                    </ul>
                </li>
                <?php if ($this->UserAuth->isAdmin()) {
                    ?>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo __('Group') ?> <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><?php echo $this->Html->link(__("Add Group", true), "/addGroup") ?></li>
                            <li><?php echo $this->Html->link(__("All Groups", true), "/allGroups") ?></li>
                            <li><?php echo $this->Html->link(__("Permissions", true), "/permissions") ?></li>
                        </ul>
                    </li>
                <?php }
                ?>
            </ul>
        </div><!--/.nav-collapse -->
    </div>
</div>