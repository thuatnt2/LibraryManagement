<a href="javascript:;" id="show_menu">&raquo;</a>
<div id="left_menu">
    <a href="javascript:;" id="hide_menu">&laquo;</a>
    <ul id="main_menu">
        <li><a href="login_green.html"><img src="images/icon_home.png" alt="Home"/>Home</a></li>
        <li>
            <a id="menu_pages" href=""><img src="images/icon_pages.png" alt="Pages"/>Pages</a>
            <ul>
                <li><a href="">Add new Pages</a></li>
                <li><a href="">Edit Pages</a></li>
            </ul>
        </li>
        <li>
            <a href=""><img src="images/icon_posts.png" alt="Posts"/>Posts</a>
            <ul>
                <li><a href="">Add new Post</a></li>
                <li><a href="">Edit Post</a></li>
                <li><a href="">Delete Post</a></li>
            </ul>	
        </li>
        <li>
            <a href=""><img src="images/icon_media.png" alt="Media"/>Media</a>
            <ul>
                <li><a href="">Add new Media</a></li>
                <li><a href="">Edit Media</a></li>
                <li><a href="">Delete Media</a></li>
            </ul>
        </li>
        <li>
            <a href=""><img src="images/icon_users.png" alt="Users"/>Users</a>
            <ul>
                <?php

                if ($this->UserAuth->isAdmin()) {
                ?>
                <li><?php echo $this->Html->link(__("Add User", true), '/addUser') ?></li>
                <li><?php echo $this->Html->link(__("All Users", true), '/allUsers') ?></li>
                <li><?php echo $this->Html->link(__("Add Group", true), '/addGroup') ?></li>
                <li><?php echo $this->Html->link(__("All Groups", true), '/allGroups') ?></li>
                <li><?php echo $this->Html->link(__("Permissions", true), '/permissions') ?></li>
                <li><?php echo $this->Html->link(__("Profile", true), '/viewUser') ?></li>
                <li><?php echo $this->Html->link(__("Edit Profile", true), '/editUser/' . $this->UserAuth->getUserId()) ?></li>                        
                <?php
                } else {
                    ?>
                    <li><?php echo $this->Html->link(__("Profile", true), '/myprofile/') ?></li>                        
                    <?php
                }
                ?>
                <li><?php echo $this->Html->link(__("Change Password",true), '/changePassword') ?></li>
                <li><?php echo $this->Html->link(__("Sign Out",true), '/logout') ?></li>
            </ul>	
        </li>
    </ul>
    <br class="clear"/>

    <!-- Begin left panel calendar -->
    <div id="calendar"></div>
    <!-- End left panel calendar -->

</div>