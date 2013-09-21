<div id="MainContent_uc1">
    <!--Noi dung o cot ben trai-->
    <div id="MainContent_ContentLeft" class="contentLeft">
        <script type="text/javascript" src="../Scripts/jquery.nailthumb.1.0.js"></script>
        <link href="../Styles/jquery.nailthumb.1.0.css" type="text/css" rel="stylesheet" />
        <style type="text/css" media="screen">
            .square-thumb {
                width: 150px;
                height: 150px;
            }
        </style>
        <div class="boxLeft">
            <div id="MainContent_ctl01_divLogIn">
                <?php if(!$this->UserAuth->isLogged()):?>
                <div class="boxLeftTop">
                    <h1>ĐĂNG NHẬP</h1>
                </div>
                <div class="boxLeftMiddle">
                    <?php echo $this->Form->create('User',  array( 'url'=>array('plugin'=>'usermgmt', 'controller' => 'users', 'action' => 'login')))?>
                    <div class="loginBox">
                            <table cellpadding="0" cellspacing="0">
                                <tbody><tr>
                                        <td class="txtLabelSearch">Mã thẻ:</td>
                                        <td>
<!--                                            <input type="text" name="userName" required="required" placeholder="Tên đăng nhập" id="username" class="textboxLogin" value="">    -->
                                            <?php echo $this->Form->input('username', array('required'=>'required','div'=>false,'label'=>false, 'placeholder'=>'Tên đăng nhập','id'=>'username','class'=>'textboxLogin'))?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="txtLabelSearch">Mật khẩu:</td>
                                        <td>
<!--                                            <input type="password" name="password" required="required" id="password" class="textboxLogin" value="">                       -->
                                            <?php echo $this->Form->input('password', array('type'=>'password','div'=>false,'label'=>false, 'required'=>'required','id'=>'password','class'=>'textboxLogin'))?>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <span class="button"> 
                                <input type="submit" name="submit" class="btnLogin" value="Đăng nhập">               
                            </span>
                            <a id="MainContent_ctl01_hplquenmatkhau" class="forgetPasswordLink">Quên mật khẩu?</a>
                        </div>
                    <?php echo $this->Form->end();?>        
                </div>
            </div>
            <div class="boxLeftBottom">
            </div>
            
        </div>
        <!--</div>-->
        <?php  else: ?>
        <div class="boxLeft">
            <div class="boxLeftTop">
                <h1>HỒ SƠ CÁ NHÂN</h1>
            </div>
            <div class="boxLeftMiddle">
                <ul class="linkCategoriesLeft">
                    <li>
                        <a href="#">Đổi mật khẩu</a>
                    </li>
                    <li>
                        <a  href="#">Thông tin cá nhân</a>
                    </li>
                    <li>
                        <a href="#">DSTL Đang mượn</a>
                        <div class="subLinkCategories">

                        </div>
                    </li>
                    <li>
                        <a  href="#">Tài liệu ĐK mượn</a>
                    </li>
                    <li>
                        <a  href="#">Thoát hồ sơ cá nhân</a>
                    </li>
                </ul>
            </div>
            <div class="boxLeftBottom">
            </div>
        </div>
        <?php  endif; ?>
        <div class="boxLeft">
            <div class="boxLeftTop">
                <h1>TRA CỨU</h1>
            </div>
            <div class="boxLeftMiddle">
                <ul class="linkCategoriesLeft">
                    <li>
                        <a href="#">Tra cứu CSDL</a>
                    </li>
                    <li>
                        <a  href="#">Tài liệu số hóa</a>
                    </li>
                    <li>
                        <a href="#">Hồ sơ sự kiện</a>
                        <div class="subLinkCategories">

                        </div>
                    </li>
                </ul>
            </div>
            <div class="boxLeftBottom">
            </div>
        </div>

        <div class="boxLeft">
            <div class="boxLeftTop">
                <h1>LIÊN KẾT</h1>
            </div>
            <div class="boxLeftMiddle">
                <ul class="linkCategoriesLeft">
                    <li>
                        <a  href="#">Website hữu ích</a>
                        <div class="subLinkCategories">
                        </div>
                    </li>
                    <li>
                        <a  href="http://www.cesti.gov.vn/m-c-l-c/2.html" target="_blank">Tạp chí STINFO</a>
                        <div class="subLinkCategories">
                        </div>
                    </li>
                </ul>
            </div>
            <div class="boxLeftBottom">
            </div>
        </div>
        <div class="boxLeft">
            <div class="boxLeftTop">
                <h1>HỖ TRỢ TRỰC TUYẾN</h1>
            </div>
            <div class="boxLeftMiddle">
                <ul class="yahooBox">
                    <li>
                        <a  href="#"><img border='0' align='absmiddle' title='Yahoo chat!' src='http://mail.opi.yahoo.com/online?u=htrang105&amp;m=g&amp;t=5'> &nbsp;Bộ phận TV điện tử</a>
                    </li>

                    <li>
                        <a  href="#"><img border='0' align='absmiddle' title='Yahoo chat!' src='http://mail.opi.yahoo.com/online?u=hoai_ngoc08&amp;m=g&amp;t=5'> &nbsp;Bộ phận TV truyền thống</a>
                    </li>

                </ul>
            </div>
            <div class="boxLeftBottom"></div>
        </div>
        <div class="yeuCauTaiLieu_Box">
            <div class="title_yeuCauTaiLieu"><a href="#">Yêu cầu tài liệu</a></div>

        </div>
        <div class="sendQuestionBox">
            <div class="titleQuestion">
                <div class="divQuestion"> <a href="#">
                        GÓP Ý & HỎI ĐÁP</a> </div>
            </div>
        </div>
    </div>
</div>