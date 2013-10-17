<div id="login_wrapper">
    <!-- Begin content -->
    <?php echo $this->Form->create('User', array('action' => 'login', 'id' => 'form_login')); ?>
    <table>
        <tbody>
            <tr>
                <td>
                    <label><strong>Tài khoản: </strong></label></td>
                <td>
                    <?php echo $this->Form->input("username", array('type' => 'text', 'label' => false, 'div' => false, 'style' => 'width:285px')) ?>
                </td>
            </tr>
            <tr>
                <td>
                    <label><strong>Mật khẩu: </strong></label>
                </td><td>
                    <?php echo $this->Form->input("password", array("type" => "password", 'label' => false, 'div' => false, 'style' => 'width:285px')) ?>
                </td>
            </tr>

        </tbody>
    </table>
    <input type="submit" id="submit" name="submit" value="Đăng nhập" class="btn btn-success" style="margin-right:5px"/>
    <?php echo $this->Form->input("remember", array("type" => "checkbox", 'label' => false, 'div' => false, 'id' => 'remember')) ?>
    <strong>Nhớ tôi</strong>
</form>
</div>