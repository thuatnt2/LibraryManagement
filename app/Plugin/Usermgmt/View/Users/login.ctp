<div id="login_wrapper">

    <div id="login_top_window">
        <img src="images/blue/top_login_window.png" alt="top window"/>
    </div>
    
    <!-- Begin content -->
    <div id="login_body_window">
        <div class="inner">

            <img src="images/login_logo.png" alt="logo"/>
            <?php echo $this->Form->create('User', array('action' => 'login', 'id' => 'form_login')); ?>
            <p>
                <?php echo $this->Form->input("email", array('type' => 'text', 'label' => false, 'div' => false, 'style' => 'width:285px', 'placeholder' => __("Input username or email"))) ?>
            </p>
            <p>
                <?php echo $this->Form->input("password", array("type" => "password", 'label' => false, 'div' => false, 'style' => 'width:285px', 'placeholder' => 'Input password')) ?>

            </p>
            <p style="margin-top:50px">
                <input type="submit" id="submit" name="submit" value="Login" class="Login" style="margin-right:5px"/>
                <?php echo $this->Form->input("remember", array("type" => "checkbox", 'label' => false, 'div' => false, 'id' => 'remember')) ?>
                Remember my password
            </p>
            <?php echo ( $this->Session->flash()); ?>
            </form>
        </div>
    </div>
    <!-- End content -->

    <div id="login_footer_window">
        <img src="images/blue/footer_login_window.png" alt="footer window"/>
    </div>
    <div id="login_reflect">
        <img src="images/blue/reflect.png" alt="window reflect"/>
    </div>
</div>