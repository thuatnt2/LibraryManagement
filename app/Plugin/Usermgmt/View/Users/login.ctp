<div id="login_wrapper">
    <!-- Begin content -->
    <?php echo $this->Form->create('User', array('action' => 'login', 'id' => 'form_login')); ?>
    <table>
        <tbody>
            <tr>
                <td>
                    <label><strong>Tài khoản: &nbsp</strong></label></td>
                <td>
                    <?php echo $this->Form->input("username", array('type' => 'text', 'label' => false, 'div' => false, 'style' => 'width:285px', 'required' => true)) ?>
                </td>
            </tr>
            <tr>
                <td>
                    <label><strong>Mật khẩu: &nbsp</strong></label>
                </td><td>
                    <?php echo $this->Form->input("password", array("type" => "password", 'label' => false, 'div' => false, 'style' => 'width:285px', 'required' => true)) ?>
                </td>
            </tr>

        </tbody>
    </table>
    <div style="text-align:center"> <input type="submit" id="submit" name="submit" value="Đăng nhập" class="btn btn-small btn-success" style="margin-right:5px"/>
        <?php echo $this->Form->input("remember", array("type" => "checkbox", 'label' => false, 'div' => false, 'id' => 'remember')) ?>
        Ghi nhớ
        <br />
        <a href="#"> Quên mật khẩu </a>
    </div>

</form>
</div>