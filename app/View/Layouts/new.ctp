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
            'jquery-1.9.1.min', 'vendor/bootstrap.min'
        ));
        echo $this->fetch('meta');
        echo $this->fetch('css');
        echo $this->fetch('script');
        ?>
    </head>
    <body style="padding: 10px 0 10px 0;">
        <!-- Header -->
        <div id="header" class="shell">
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
            <div id="logo"><h1><a href="#">He</a></h1></div>
            <!-- Navigation -->
            <div id="navigation">
                <ul>
                    <li><a href="/"><img src="/images/home-ico.png"/> &nbsp;Trang chủ</a></li> 
                    <li><a href="/tin-tuc"><img src="/images/news-ico.png"/> &nbsp;Tin tức</a></li>
                    <li><a href="/tim-kiem"><img src="/images/search-ico.png"/> &nbsp;Tìm kiếm</a></li>
                    <li><a href="#"><img src="/images/photos-ico.png"/> &nbsp;Hình ảnh</a></li>
                    <li><a href="#"><img src="/images/about-ico.png"/> &nbsp;Giới thiệu</a></li>
                </ul>
            </div>
            <!-- End Navigation -->
            <div class="cl">&nbsp;</div>
            <!-- Login-details -->

            <!-- End Login-details -->
        </div>
        <div class="shell">
            <?php echo $this->Session->flash(); ?>
        </div>
        <!-- End Header -->
        <div id="main" class="shell">
            <!--sidbar-->
            <?php echo $this->element('frontend/sidebar') ?>
            <div id="content">
                <?php echo $this->fetch('content'); ?>
            </div>
            <div class="cl">&nbsp;</div>
            <?php
            echo $this->element('frontend/footer')
            ?>
        </div>
    </body>
</html>
