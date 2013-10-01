<!DOCTYPE html>
<html>
    <head>
        <?php echo $this->Html->charset(); ?>
        <title>
            <?php echo $title_for_layout ?>
        </title>
        <?php
        echo $this->Html->meta('icon');

        echo $this->Html->css(array(
            'new-style', 'custome', 'bootstrap'));
        echo $this->Html->script(array(
            'jquery-1.9.1.min'
        ));
        echo $this->fetch('meta');
        echo $this->fetch('css');
        echo $this->fetch('script');
        ?>
    </head>
    <body>
        <!-- Header -->
        <div id="header" class="shell">
            <div id="logo"><h1><a href="#">BestSeller</a></h1></div>
            <!-- Navigation -->
            <div id="navigation">
                <ul>
                    <li><a href="#" class="active">Home</a></li>
                    <li><a href="#">News</a></li>
                    <li><a href="#">Search</a></li>
                    <li><a href="#">Introduction</a></li>
                    <li><a href="#">About Us</a></li>
                    <li><a href="#">Contacts</a></li>
                </ul>
            </div>
            <!-- End Navigation -->
            <div class="cl">&nbsp;</div>
            <!-- Login-details -->
            <div id="login-details" style="height: 0px;">

                <?php if ($this->UserAuth->isLogged()): ?>
                    <p>Welcome, <a href="#" id="user"><?php echo $this->Session->read('UserAuth.User.username'); ?></a></p>
                    &nbsp|&nbsp
                    <a  href="<?php echo $this->Html->url('/logout') ?>">(Logout)</a>
                <?php else: ?>

                    <div class="loginBox">
                        <?php echo $this->Form->create('User', array('url' => array('plugin' => 'usermgmt', 'controller' => 'users', 'action' => 'login'))) ?>
                        <div class="loginBox">
                            <?php echo $this->Form->input('username', array('required' => 'required', 'div' => false, 'label' => false, 'placeholder' => 'Card code', 'id' => 'username', 'class' => 'textboxLogin')) ?>
                            <?php echo $this->Form->input('password', array('type' => 'password', 'div' => false, 'label' => false, 'required' => 'required', 'id' => 'password', 'class' => 'textboxLogin')) ?>
                            <span > 
                                <input type="submit" name="submit" class="btn btn-small" value="Login" style="margin-bottom: 10px;">               
                            </span>
                        </div>
                        <?php echo $this->Form->end(); ?>  

                    </div>
                <?php endif; ?>    

            </div>
            <!-- End Login-details -->
        </div>
        <div class="shell">
            <?php echo $this->Session->flash(); ?>
        </div>
        <!-- End Header -->
        <div id="main" class="shell">
            <div id="sidebar">
                <ul class="categories">
                    <li>
                        <h4>Categories</h4>
                        <ul>
                            <li><a href="#">Lorem ipsum dolor</a></li>
                            <li><a href="#">Morbi eget</a></li>
                            <li><a href="#">Nulla egestas</a></li>
                        </ul>
                    </li>
                    <li>
                        <h4>Authors</h4>
                        <ul>
                            <li><a href="#">Lorem ipsum dolor</a></li>
                            <li><a href="#">Morbi eget</a></li>
                            <li><a href="#">Nulla egestas</a></li>
                            <li><a href="#">Curabitur venenatis</a></li>
                            <li><a href="#">Ut dictum purus</a></li>
                        </ul>
                    </li>
                </ul>
                <ul class="categories">
                    <li>
                        <h4>Statistics</h4>
                        <ul>
                            <li><a href="#">Lorem ipsum dolor</a></li>
                            <li><a href="#">Morbi eget</a></li>
                            <li><a href="#">Nulla egestas</a></li>
                        </ul>
                    </li>
                    <li>
                        <h4>Support</h4>
                        <ul>
                            <li><a href="#">Lorem ipsum dolor</a></li>
                            <li><a href="#">Morbi eget</a></li>
                            <li><a href="#">Nulla egestas</a></li>
                            <li><a href="#">Curabitur venenatis</a></li>
                            <li><a href="#">Ut dictum purus</a></li>
                        </ul>
                    </li>
                </ul>

            </div>
            <?php echo $this->fetch('content'); ?>
        </div>
    </body>
</html>
