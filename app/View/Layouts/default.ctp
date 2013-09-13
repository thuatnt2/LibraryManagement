<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $title_for_layout; ?>
	</title>
	<?php
		echo $this->Html->meta('icon');

		echo $this->Html->css(array(
                    'styles/jcarousel.skin1','styles/jcarousel.skin2','styles/jcarousel.skin3','styles/jcarousel.skin4','styles/menutop','styles/libol','styles/left.css',
                    'styles/jquery-ui-1.8.1.custom','presentationCycle',
                    ));
                echo $this->Html->script(array(
                    'vendor/jquery-1.8.2.min','vendor/jquery-1.9.1.min','script/jquery-ui-1.8.custom.min','vendor/bootstrap','vendor/bootstrap.min',
                    'script/thickbox','script/jquery.jcarousel.min','script/jquery.marquee','presentationCycle','jquery.cycle.all.min'
                ));
		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
</head>
 <body>

        <style type="text/css">
            /* class popup */

            .box_popup_login
            {
                float: left;
                width: 300px;
            }
            .title_popup
            {
                float: left;
                width: 305px;
                height: 20px;
                vertical-align: top;
                margin: 2px 2px 2px 2px;
                padding: 2px 2px 2px 2px; /*background:url(../images/title_popup.png) no-repeat top left;*/
            }
            .title_popup_login
            {
                float: left;
                width: 305px;
                height: 20px;
                margin: 2px 2px 2px 2px;
                padding: 2px 2px 2px 2px;
                vertical-align: top; /*background:url(../images/title_popup.png) no-repeat top left;*/
            }
            .text_title_popup
            {
                float: left;
                font: bold 11px Arial, Tahoma, Verdana, Helvetica, sans-serif;
                color: #066bb9;
                padding: 2px 2px 2px 2px;
                text-transform: uppercase;
                text-align: left;
                height: 10px;
                vertical-align: text-top;
            }

            .icon_title_popup
            {
                float: right;
                font: bold 11px Arial, Tahoma, Verdana, Helvetica, sans-serif;
                color: #ea3214;
                padding: 2px 2px 2px 2px;
                text-transform: uppercase;
                text-align: left;
                vertical-align: top;
                height: 10px;
                width: 17px;
            }

            .mid_popup_login
            {
                /*background:url(../images/mid_popup.png) top left repeat-y;		*/
                text-align: center;
                width: 320px;
                height: 50px;
            }
            .mid_popup
            {
                /*background:url(../images/mid_popup.png) top left repeat-y;		*/
                height: 120px;
            }
            .bottom_popup
            {
                /*background:url(../images/bottom_popup.png);		*/
                height: 20px;
                text-align: center;
            }
            .icon_mid_popup
            {
                font: normal 12px Arial, Tahoma, Verdana, Helvetica, sans-serif;
                color: #3f3f3f;
                padding: 10px 5px 5px 0px;
                width: 30%;
                text-align: right;
                float: left;
            }
            .text_mid_popup
            {
                font: normal 12px Arial, Tahoma, Verdana, Helvetica, sans-serif;
                text-transform: none;
                color: #3f3f3f;
                padding: 10px 5px 5px 0px;
                width: 65%;
                float: left;
                text-align: center;
            }

            .text_label_popup
            {
                font: normal 12px Arial, Tahoma, Verdana, Helvetica, sans-serif;
                color: #3f3f3f;
                padding: 5px 5px 5px 0px;
                width: 20%;
                text-align: center;
                float: left;
            }
            .text_input_popup
            {
                font: normal 12px Arial, Tahoma, Verdana, Helvetica, sans-serif;
                color: #3f3f3f;
                padding: 5px 5px 5px 0px;
                width: 75%;
                text-align: left;
                vertical-align: middle;
                float: left;
            }
            .clearboth
            {
                clear: both;
                height: 5px;
            }

        </style>
        <script type="text/javascript">
            //show alert dang mac dinh
            function Alertbox(strTex) {
                $(function() {
                    $('div#alerttitile').text("");
                    $('<div>' + strTex + '</div>').appendTo("div#alerttitile");
                    $('#btnShowAlert').click();
                    $('[name=btnAcept]').focus();
                    $('[name=btnAcept]').click(function() {
                        self.parent.tb_remove();
                    });
                });
            }
            //show alert dang nhay trang 
            function AlertboxRedirect(strTex, strUrl) {
                $(function() {
                    $('div#alerttitile').text("");
                    $('<div>' + strTex + '</div>').appendTo("div#alerttitile");
                    $('#btnShowAlert').click();
                    $('[name=btnAcept]').focus();
                    $('[name=btnAcept]').click(function() {
                        if (strUrl !== '') {
                            self.parent.location = strUrl;
                        } else {
                            self.parent.tb_remove();
                        }
                    });
                });
            }
            function AlertboxAutoClose(strTex) {
                $(function() {
                    $('div#alerttitile').text("");
                    $('<div>' + strTex + '</div>').appendTo("div#alerttitile");
                    $('#btnShowAlert').click();
                    $('[name=btnAcept]').focus();
                    $('[name=btnAcept]').click(function() {
                        self.parent.tb_remove();
                    });
                    setTimeout(function() {
                        self.parent.tb_remove();
                    }, 1500);
                });
            }
            //show alert dang mo rong kich thuoc
            function AlertboxResize(strTex, strUrl, intHeight) {
                $(function() {
                    $('div#alerttitile').text("");
                    $('<div>' + strTex + '</div>').appendTo("div#alerttitile");
                    var strAlt = $('#btnAlerResize').attr("alt");
                    strAlt = strAlt.replace("height=120", "height=" + parseInt(intHeight));
                    $('#btnAlerResize').attr("alt", strAlt);
                    $('#btnAlerResize').click();
                    $('[name=btnAcept]').focus();
                    $('[name=btnAcept]').click(function() {
                        if (strUrl !== '') {
                            self.parent.location = strUrl;
                        } else {
                            self.parent.tb_remove();
                        }
                    });
                });
            }
            //show alert dang mo rong kich thuoc va redirect
            function AlertboxResize(strTex, intHeight) {
                $(function() {
                    $('div#alerttitile').text("");
                    $('<div>' + strTex + '</div>').appendTo("div#alerttitile");
                    var strAlt = $('#btnAlerResize').attr("alt");
                    strAlt = strAlt.replace("height=120", "height=" + parseInt(intHeight));
                    $('#btnAlerResize').attr("alt", strAlt);
                    $('#btnAlerResize').click();
                    $('[name=btnAcept]').focus();
                    $('[name=btnAcept]').click(function() {

                        self.parent.tb_remove();

                    });
                });
            }
            //show confirm dang mac dinh
            var _btnClickRef;
            var intID;
            var intType;
            function Confirmbox(strTex, value, btnClick, id, type) {
                $(document).ready(function() {
                    _btnClickRef = btnClick;
                    intID = id;
                    intType = type;
                    $('div#comfirmtitile').text("");
                    $('<div>' + strTex + '</div>').appendTo("div#comfirmtitile");
                    $('#btnShow').click();
                    $('[name=btnCancel]').focus();
                });
            }
            function Accept() {
                $('div#comfirmtitile div').remove();
                self.parent.tb_remove();
                setTimeout('window.parent.ComfirmDialog("", 1, _btnClickRef, intID, intType)', 200);
            }
            function CloseComfirm() {
                self.parent.tb_remove();
            }
        </script>
        <script type="text/javascript">
            //<![CDATA[
          //  Sys.WebForms.PageRequestManager._initialize('ctl00$ScriptManager1', 'ctl00', ['tctl00$MainContent$uc1', 'MainContent_uc1', 'tctl00$MainContent$ctl01$pnl', 'MainContent_ctl01_pnl', 'tctl00$MainContent$ctl07$UpdatePanel1', 'MainContent_ctl07_UpdatePanel1'], [], [], 90, 'ctl00');
            //]]>
        </script>

        <div class="headBg">
            <div class="headWidth">
                <div>
                    <div class="logo"> </div>
                </div>
                <div  class="menu_subpage">
                    <!--Control menu hiển thị-->
                    <div>
                        <ul id="menu_zmenu">
                            <li class="menu_mainmenu"><a id="ucMenu_hplMain" class="menu_menu_Link9" href="/">
                                    <span><b>Trang chủ</b></span></a> 
                            </li> 
                            <li class="menu_mainmenu">
                                <a id="ucMenu_rptMenu_hplMenu2_0" class="menu_menu_Link9" href="#">
                                    <span><b>GIỚI THIỆU
                                        </b></span></a>         
                                <div style="clear: both">
                                </div>
                                <div class="menu_smenu menu_nodisplay menu_menuItem1 menu_smenu_1">                
                                    <div class="menu_wsub">
                                        <div class="menu_rows9">
                                            <a  href="#">Sứ mệnh, chức năng và nhiệm vụ</a>
                                            <a  href="#">Cơ cấu tổ chức</a>
                                            <a  href="#">Mô tả công việc theo chức danh</a>
                                            <a  href="#">Tài nguyên và cơ sở vật chất</a>
                                            <a  href="#">Nội quy</a>
                                        </div>
                                    </div>
                                </div>
                            </li>

                            <li class="menu_mainmenu">
                                <a id="ucMenu_rptMenu_hplMenu2_1" class="menu_menu_Link9" href="#">
                                    <span><b>TIN TỨC
                                        </b></span></a>         
                                <div style="clear: both">
                                </div>
                                <div class="menu_smenu menu_nodisplay menu_menuItem2 menu_smenu_2">                
                                    <div class="menu_wsub">
                                        <div class="menu_rows9">
                                            <a  href="/view-artcile">Tin tức</a>
                                            <a  href="/view-artcile/announcement">Thông báo</a>
                                        </div>
                                    </div>
                                </div>
                            </li>

                            <li class="menu_mainmenu">
                                <a class="menu_menu_Link9" href="#">
                                    <span><b>HÌNH ẢNH HOẠT ĐỘNG
                                        </b></span></a>         
                                <div style="clear: both">
                                </div>
                                <div class="menu_smenu menu_nodisplay menu_menuItem3 menu_smenu_3">                
                                    <div class="menu_wsub">
                                        <div class="menu_rows9">
                                            <a href="#">Thư viện truyền thống</a>
                                            <a href="#">Thư viện điện tử</a>
                                            <a href="#">Tham quan, hướng dẫn, sinh hoạt học thuật,...</a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="menu_mainmenu">
                                <a id="ucMenu_rptMenu_hplMenu2_3" class="menu_menu_Link9">
                                    <span><b>HƯỚNG DẪN SỬ DỤNG
                                        </b></span></a>         
                                <div style="clear: both">
                                </div>
                                <div class="menu_smenu menu_nodisplay menu_menuItem4 menu_smenu_4">                
                                    <div class="menu_wsub">
                                        <div class="menu_rows9">
                                            <a href="#">Thư viện điện tử</a>
                                            <a href="#">Thư viện truyền thống</a>
                                        </div>
                                    </div>
                                </div>
                            </li>

                            <li class="menu_mainmenu">
                                <a class="menu_menu_Link9" href="/search-book">
                                    <span><b>TÌM KIẾM
                                        </b></span></a>         
                                <div style="clear: both">
                                </div>
                                <div class="menu_smenu menu_nodisplay menu_menuItem4 menu_smenu_5">                
                                </div>
                            </li>
                            <li class="menu_mainmenu">
                                <a id="ucMenu_rptMenu_hplMenu2_5" class="menu_menu_Link9">
                                    <span><b>SẢN PHẨM
                                        </b></span></a>         
                                <div style="clear: both">
                                </div>
                                <div class="menu_smenu menu_nodisplay menu_menuItem4 menu_smenu_5">                
                                    <div class="menu_wsub">
<!--                                        <div class="menu_rows7">
                                            <a  href="#">Danh mục đề cương môn học</a>
                                            <a  href="#">Danh mục bài giảng</a>
                                            <a href="#">Danh mục tài liệu mới</a>
                                            <a href="#">Danh mục tài liệu điện tử</a>
                                        </div>-->
                                    </div>
                                </div>
                            </li>

                            <li class="menu_mainmenu">
                                <a id="ucMenu_rptMenu_hplMenu2_6" class="menu_menu_Link9">
                                    <span><b>DỊCH VỤ
                                        </b></span></a>         
                                <div style="clear: both">
                                </div>
                                <div class="menu_smenu menu_nodisplay menu_menuItem4 menu_smenu_5">                
                                    <div class="menu_wsub">
<!--                                        <div class="menu_rows8">
                                            <a href="#">Giới thiệu dịch vụ</a>
                                            <a href="#">Phí dịch vụ</a>
                                        </div>-->
                                    </div>
                                </div>
                            </li>
                            <li class="menu_mainmenu">
                                <a id="ucMenu_rptMenu_hplMenu2_7" class="menu_menu_Link9">
                                    <span><b style="padding-right: 25px">LIÊN HỆ
                                        </b></span></a>         
                                <div style="clear: both">
                                </div>
<!--                                <div class="menu_smenu menu_nodisplay menu_menuItem4 menu_smenu_5">                
                                    <div class="menu_wsub">
                                        <div class="menu_rows9">
                                            <a  href="#">Bộ phận Điện toán</a>
                                            <a  href="#">Bộ phận Thư viện</a>
                                        </div>
                                    </div>
                                </div>-->
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="page_container">
            <div class="bar_tinvan">

                <script type="text/javascript">
                    function googleTranslateElementInit() {
                        new google.translate.TranslateElement({pageLanguage: 'vi', includedLanguages: 'en,es,fr,ja,ko,vi,zh-CN,de,ru', layout: google.translate.TranslateElement.InlineLayout.SIMPLE, autoDisplay: false}, 'divGoogleTranslate');
                    }
                </script><script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
                <br/>
                <div class="tinvan_content">
                    <div class="tinvan_left"><b>Danh ngôn: &nbsp;</b>
                        <div id="ControlBar1_divContent"><ul id="marquee6" class="marquee"><li><a href="#">Niềm tin vào chính mình có sức mạnh xua tan bất kì sự hoài nghi nào của người khác.</a></li><li><a href="#">Bản chất giản dị là kết quả tự nhiên của tư tưởng sâu sắc. (Hazlitt)</a></li><li><a href="#">Bí quyết của sự thành công nếu có - đó là khả năng tự đặt mình vào địa vị người khác và xem xét sự vật vừa theo quan điểm của họ vừa theo quan điểm của mình. (Henry Ford)</a></li><li><a href="#">Cái gì hấp dẫn và đẹp đẽ chẳng phải luôn luôn là tốt, nhưng cái gì tốt thì luôn luôn đẹp. (Ninon De Lenenles)</a></li><li><a href="#">Cái nguy hiểm của thời đại chúng ta không phải là thấy máy móc suy nghĩ như con người mà thấy con người suy nghĩ như một cái máy. (P.D.)</a></li><li><a href="#">Căn bệnh nặng nhất của tâm hồn là sự lãnh đạm. (D.Tôkenvin)</a></li><li><a href="#">Cần lạc quan khi khởi đầu công việc và đầy hoài nghi khi kết thúc công việc.(Ghéc-xen)</a></li><li><a href="#">Càng học thật cao càng thấy mình ngu dốt. (Einstein)</a></li><li><a href="#">Cha đẻ của vinh quang và hạnh phúc là lao động. (Euripied)</a></li><li><a href="#">Chẳng phải công việc khó khăn mà không dám liều, chính vì ta không dám liều nên nó trở thành khó khăn. (Sénèque)</a></li><li><a href="#">Chẳng trách ai mà trách mình là cách cần thiết để tu thân. Hãy tha thứ cho người là phương pháp để nuôi độ lượng. (Lã Khôn)</a></li></ul></div>
                    </div>
                    <div class="tinvan_right">
                        <!--<div id="divGoogleTranslate"></div>--> 
                    </div>
                </div>
            </div>
            <div class="mainContent">

                <!--<div id="MainContent_uc1">-->
                    <link href="/css/presentationCycle.css" media="screen" rel="stylesheet" type="text/css"><script type="text/javascript" src="/js/presentationCycle.js"></script>
<script type="text/javascript" src="/js/jquery.cycle.all.min.js"></script>
<!--Noi dung o cot ben trai-->
<div id="MainContent_ContentLeft" class="contentLeft">
    <div id="MainContent_ctl01_pnl">
                    <div class="boxLeft">
                <div id="MainContent_ctl01_divLogIn">
                    <div class="boxLeftTop">
                        <h1>ĐĂNG NHẬP</h1>
                    </div>
                    <div class="boxLeftMiddle">
                        <form action="authenticate" method="POST" name="form_login" id="form_login">                        <div class="loginBox">
                            <table cellpadding="0" cellspacing="0">
                                <tr>
                                    <td class="txtLabelSearch">Mã thẻ:</td>
                                    <td>
                                        <input type="text" name="userName" required="required" placeholder="Tên đăng nhập" id="username" class="textboxLogin" value="">                                    </td>
                                </tr>
                                <tr>
                                    <td class="txtLabelSearch">Mật khẩu:</td>
                                    <td>
                                        <input type="password" name="password" required="required" id="password" class="textboxLogin" value="">                                    </td>
                                </tr>
                            </table>
                            <span class="button"> 
                                <input type="submit" name="submit" class="btnLogin" value="Đăng nhập">                            </span>
                            <a id="MainContent_ctl01_hplquenmatkhau" class="forgetPasswordLink">Quên mật khẩu?</a>
                        </div>
                        </form>                    </div>
                </div>
                <div class="boxLeftBottom">

                </div>
            </div>
                <div class="boxLeft">
            <div class="boxLeftTop">
                <h1>TRA CỨU</h1>
            </div>
            <div class="boxLeftMiddle">
                <ul class="linkCategoriesLeft">
                    <li>
                        <a href="/search-book">Tra cứu CSDL</a>
                    </li>
                    <li>
                        <a  href="#">Tài liệu số hó</a>
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
                <h1>Liên KẾT</h1>
            </div>
            <div class="boxLeftMiddle">
                <ul class="linkCategoriesLeft">
                    <li>
                        <a  href="#">Website hữu ích</a>
                        <div class="subLinkCategories">
                        </div>
                    </li>
                    <li>
                        <a  href="http://www.cesti.gov.vn/m-c-l-c/2.html" target="_blank">TẠP CHÍ STINFO</a>
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

<!--Noi dung o giua-->
<div id="MainContent_ContentMiddle" class="contentCenter">
    <div class="container">       
        <div id="presentation_container" class="pc_container">
            <div class="pc_item">
                <img src="images/slide/slide1.jpg" alt="slide1" />
            </div>
            <div class="pc_item">
                <img src="images/slide/slide2.jpg" alt="slide2" />
            </div>
            <div class="pc_item">
                <img src="images/slide/slide3.jpg" alt="slide3" />
            </div>
            <div class="pc_item">
                <img src="images/slide/slide4.jpg" alt="slide4" />
            </div>
            <div class="pc_item">
                <img src="images/slide/slide5.jpg" alt="slide5" />
            </div>
            <div class="pc_item">
                <img src="images/slide/slide6.jpg" alt="slide6" />
            </div>
        </div>        
        <script type="text/javascript">
            presentationCycle.init();
        </script>
    </div>
    <div class="portletCenter">
        <div class="labelWelcome">
            <h1>Chào mừng bạn đọc tới thư viện!</h1>
        </div>
        <div class="descriptionWelcome">
            <p id="MainContent_ctl06_pContent"><p>Để sử dụng t&#224;i liệu của thư viện c&#225;c bạn phải c&#243; một t&#224;i khoản để đăng nhập. <br />
                Nếu c&#225;c bạn đ&#227; c&#243; t&#224;i khoản th&#236; h&#227;y đăng nhập bằng c&#225;ch điền "M&#227; t&#224;i khoản" v&#224; "Mật khẩu" v&#224;o &#244; b&#234;n cạnh. Sau đ&#243; nhấn n&#250;t "<a href="#">Đăng nhập</a>". <br />
                Nếu chưa c&#243; thẻ thư viện vui l&#242;ng li&#234;n hệ với thủ thư để được hướng dẫn. </p>
            <p>
                Để sử dụng thư viện hiệu quả, vui l&#242;ng xem kỹ c&#225;c file hướng dẫn tại mục "Hướng dẫn sử dụng"
            </p>
            <p><em><u>*Lưu &#253;</u></em>: + Để t&#236;m kiếm được t&#224;i liệu tiếng Việt c&#243; trong thư viện, bạn đọc vui l&#242;ng g&#245; tiếng Việt c&#243; dấu đầy đủ. V&#237; dụ: Muốn t&#236;m t&#224;i liệu <em>Khoa hoc moi truong</em> phải g&#245;: <em>Khoa học m&#244;i trường</em></p>
            <p>+ Để t&#236;m to&#224;n bộ t&#224;i liệu c&#243; trong thư viện, tại mục "T&#236;m kiếm tổng qu&#225;t" chỉ cần nhấn n&#250;t "T&#236;m kiếm". Với c&#225;c CSDL nội sinh, để t&#236;m to&#224;n bộ t&#224;i liệu trong từng CSDL, c&#225;ch t&#236;m tương tự (chỉ cần nhấn n&#250;t "T&#236;m kiếm").<br />
            </p>
            </p>
        </div>
    </div>
    <script type="text/javascript">

        function ajaxJQSearchHomeAuto() {
            $(function() {
                //find(":not(:visible)").val()
                $("input[type=text][id*=txtGiaTriGoiY]").click(function() {
                    // alert($(this).parent().find(":nth-child(4)").val());
                    $("#MainContent_ctl07_hidTableID").val($(this).parent().find(":nth-child(4)").val());

                });
                $("input[type=text][id*=txtGiaTriGoiY]").autocomplete({
                    source: function(request, response) {
                        $.ajax({
                            url: '/wsAutoComplete.asmx/AutoCompleteDemo',
                            data: "{ 'strAutocomplete': '" + request.term + "','strId': '" + $("#MainContent_ctl07_hidTableID").val() + "'}",
                            dataType: "json",
                            type: "POST",
                            contentType: "application/json; charset=utf-8",
                            dataFilter: function(data) {
                                return data;
                            },
                            success: function(data) {
                                response($.map(data.d, function(item) {
                                    return {
                                        value: item
                                    };
                                }));
                            },
                            error: function(XMLHttpRequest, textStatus, errorThrown) {
                                //alert();
                            }
                        });
                    },
                    minLength: 1
                });

                $("input[type=text][id*=txtTuNgay]").datepicker();
                $("input[type=text][id*=txtDenNgay]").datepicker();
            });
            $('.textboxStyle').keypress(function(event) {
                if (event.which === 13) {

                    if ($("#MainContent_ctl07_hidActiveView").val() === "0") {
                        $("#MainContent_ctl07_btnFind").click();
                    }
                    if ($("#MainContent_ctl07_hidActiveView").val() === "2") {
                        $("#MainContent_ctl07_btnFindEdata").click();
                    }

                    event.preventDefault();
                }
            });
        }


    </script>
    <!--    <div class="portletCenter">
            <div class="titleCenter546">
                <h2>Những tài liệu được mượn nhiều nhất trong năm</h2>
            </div>
            <div class="shadow">
                <ul class="ul_link">
    
                    <li><a  href="Page/Detail.aspx?ID=10630">Bài tập và bài giải kế toán tài chính :  Đã sửa đổi bổ sung theo chế độ kế toán tài chính mới nhất : Tham khảo chính môn Kế toán tài chính A2, tham khảo môn Kế toán tài chính A3 / Phan Đức Dũng&nbsp; <font style="color:red">(76)</font></a></li>
    
                    <li><a  href="Page/Detail.aspx?ID=10315">Thanh toán Quốc tế :  Tài liệu tham khảo môn Thanh toán quốc tế / Trần Hoàng Ngân...[và những người khác]&nbsp; <font style="color:red">(62)</font></a></li>
    
                    <li><a  href="Page/Detail.aspx?ID=8911">450 tình huống kế toán tài chính :  Hướng dẫn thực hành bài tập kế toán : Tham khảo môn Kế toán tài chính A1 / Võ Văn Nhị chủ biên, Nguyễn Ngọc Dung, Nguyễn Xuân Hưng&nbsp; <font style="color:red">(62)</font></a></li>
    
                    <li><a  href="Page/Detail.aspx?ID=6104">Giáo trình tài chính quốc tế : Dành cho các trường đại học / Nguyễn Văn Tiến&nbsp; <font style="color:red">(57)</font></a></li>
    
                    <li><a  href="Page/Detail.aspx?ID=8762">Quản trị nguồn nhân lực =  Human resource management :  Giáo trình chính môn Quản trị nguồn nhân lực / Trần Kim Dung&nbsp; <font style="color:red">(50)</font></a></li>
    
                </ul>
    
            </div>
        </div>-->
    <!--    <div class="portletCenter">
            <div class="titleCenter546">
                <h2><a href="/Page/Menu.aspx?ID=41&c=6">Danh mục tài liệu mới trong tháng</a></h2>
            </div>
        </div>-->
    <script type="text/javascript">
        function GoUrl(surl) {
            window.location.href = surl;
        }
    </script>

    <div class="portletCenter">


        <div class="center_colLeft">
            <div class="titleCenter306">
                <h2>Tin tức</h2>
                <div class="iconNew"></div>
            </div>
            <div class="boxNewsLeft">
                                                            <a id="MainContent_ctl10_rptNews_hplTitle_0" href="/view-artcile/articleDetail/3">
                            <div class="imgStyle">
                                <img id="MainContent_ctl10_rptNews_imgNews_0" src="/img/gallery/thumnail/1370458497.jpg" align="left" />
                            </div>
                            <p>10 bí quyết học tập hiệu quả</p>
                        </a> 
                                            <a id="MainContent_ctl10_rptNews_hplTitle_0" href="/view-artcile/articleDetail/1">
                            <div class="imgStyle">
                                <img id="MainContent_ctl10_rptNews_imgNews_0" src="/img/gallery/thumnail/1370458304.jpg" align="left" />
                            </div>
                            <p>Đừng xé sách lịch sử nữa các bạn nhé!</p>
                        </a> 
                                            <a id="MainContent_ctl10_rptNews_hplTitle_0" href="/view-artcile/articleDetail/4">
                            <div class="imgStyle">
                                <img id="MainContent_ctl10_rptNews_imgNews_0" src="/img/gallery/thumnail/1371091949.jpg" align="left" />
                            </div>
                            <p>Nên nói gì khi nói về dịch thuật</p>
                        </a> 
                                                </div>
        </div>
                    <div class="center_colRight">
                <div class="titleCenter230">
                    <h2>
                        Thông báo</h2>
                    <div class="iconNew">
                    </div>
                </div>
                <div class="shadow-2">
                    <ul class="ul_link_thongbao">
                                                    <li>
                                <a href="/view-artcile/announcementDetail/6">Thông báo về địa điểm sinh viên học nhóm, thảo luận nhóm từ ngày 15/3/2013</a>
                            </li>
                                                    <li>
                                <a href="/view-artcile/announcementDetail/5">Thông báo về Kế hoạch tổ chức cuộc thi viết chủ đề &quot;Quyển sách làm tôi thay đổi&quot; (29/5/13)</a>
                            </li>
                                            </ul>
                </div>
            </div>
            </div>
</div>
                    <!--Noi dung cot ben phai-->
                    <div id="MainContent_contentRight" class="contentRight">
                        <div class="boxLeft">
                            <div class="boxLeftTop">
                                <h1>GIỚI THIỆU SÁCH HAY</h1>
                            </div>
                            <div class="boxLeftMiddle">
                                <div class="jcarousel-skin-tango-2 jcarouselStyle" id="mycarousel">
                                    <div class="jcarousel-container jcarousel-container-horizontal" style="position: relative; display: block;">
                                        <div class="jcarousel-clip jcarousel-clip-horizontal" style="position: relative;">
                                            <ul id="first-and-second-carousel" class="first-and-second-carousel jcarousel-list jcarousel-list-horizontal" style="overflow: hidden; position: relative; top: 0px; margin: 0px; padding: 0px; left: 0px; width: 955px;">

                                                <li class='jcarousel-item jcarousel-item-horizontal jcarousel-item-1 jcarousel-item-1-horizontal' style='float: left; list-style: none outside none;' jcarouselindex='1'> <a href='#' class='styleImgJcarousel_2'> <div> <img src="/images/65.2590210988461ky-nang-dam-phan.jpg"></div>        <div class="bookDescription"> Kỹ năng đàm phán<br />           Tác giả: Nic Peeling<br />      Nhà xb:Công an Nhân dân<br />           Năm xb: 2008             </div>  </a> </li>

                                                <li class='jcarousel-item jcarousel-item-horizontal jcarousel-item-1 jcarousel-item-1-horizontal' style='float: left; list-style: none outside none;' jcarouselindex='1'> <a href='/Page/BestSeller.aspx?Books_Id=18' class='styleImgJcarousel_2'> <div> <img src="/images/65.144307551972738-tro-choi-ky-nang-lam-viec-nhom.jpg"></div>        <div class="bookDescription"> 38 Trò chơi kỹ năng làm việc nhóm<br />           Tác giả: Nhiều tác giả<br />      Nhà xb:Trẻ<br />           Năm xb: 2010             </div>  </a> </li>

                                                <li class='jcarousel-item jcarousel-item-horizontal jcarousel-item-1 jcarousel-item-1-horizontal' style='float: left; list-style: none outside none;' jcarouselindex='1'> <a href='/Page/BestSeller.aspx?Books_Id=97' class='styleImgJcarousel_2'> <div> <img src="/images/65.2002067096532bien-dieu-khong-the-thanh-co-the.jpg"></div>        <div class="bookDescription"> Biến điều không thể thành có thể<br />           Tác giả: Dương Danh Dy<br />      Nhà xb:Công an Nhân Dân<br />           Năm xb: 2009             </div>  </a> </li>

                                                <li class='jcarousel-item jcarousel-item-horizontal jcarousel-item-1 jcarousel-item-1-horizontal' style='float: left; list-style: none outside none;' jcarouselindex='1'> <a href='/Page/BestSeller.aspx?Books_Id=98' class='styleImgJcarousel_2'> <div> <img src="/images/kham-pha-nang-luc-noi-tam.jpg"></div>        <div class="bookDescription"> Khám phá năng lực nội tâm<br />           Tác giả: Emmet Fox<br />      Nhà xb:Tổng hợp Thành phố Hồ Chí Minh<br />           Năm xb: 2008             </div>  </a> </li>

                                                <li class='jcarousel-item jcarousel-item-horizontal jcarousel-item-1 jcarousel-item-1-horizontal' style='float: left; list-style: none outside none;' jcarouselindex='1'> <a href='/Page/BestSeller.aspx?Books_Id=99' class='styleImgJcarousel_2'> <div> <img src="/images/triet-ly-nhan-sinh-trong-cuoc-song.jpg"></div>        <div class="bookDescription"> Triết lý nhân sinh trong cuộc sống<br />           Tác giả: Nguyễn Kim Dân<br />      Nhà xb:Thanh Hóa<br />           Năm xb: 2008             </div>  </a> </li>

                                            </ul>
                                        </div>
                                        <div class="spiral_notebook"></div>
                                        <div class="jcarousel-prev jcarousel-prev-horizontal jcarousel-prev-disabled jcarousel-prev-disabled-horizontal" style="display: block;" disabled="true"></div>
                                        <div class="jcarousel-next jcarousel-next-horizontal" style="display: block;" disabled="false"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="boxLeftBottom"></div>
                        </div>
                        <div class="boxLeft">
                            <div class="boxLeftTop">
                                <h1>CLIP GIỚI THIỆU THƯ VIỆN </h1>
                            </div>
                            <div class="boxLeftMiddle">
                                <div class="videoBoxRight" align="center">
                                    <!--<iframe width="217" height="140" src="http://www.youtube.com/embed/Mg7DjZG0Wy4" frameborder="0" allowfullscreen="true"></iframe>-->
                                </div>
                            </div>
                        </div>
                        <div class="boxLeft">
                            <div class="boxLeftTop">
                                <h1>BẠN ĐỌC NỔI BẬT </h1>
                            </div>
                            <div class="boxLeftMiddle">
                                <div class="jcarousel-skin-tango jcarouselStyle">
                                    <div class="jcarousel-container jcarousel-container-horizontal" style="position: relative; display: block;">
                                        <div class="jcarousel-clip jcarousel-clip-horizontal" style="position: relative;">
                                            <ul id="second-and-second-carousel" class="jcarousel-list jcarousel-list-horizontal"style="overflow: hidden; position: relative; top: 0px; margin: 0px; padding: 0px; left: 0px; width: 955px;">
                                                <li class="jcarousel-item jcarousel-item-horizontal jcarousel-item-1 jcarousel-item-1-horizontal" style="float: left; list-style: outside outside outside;" jcarouselindex="1">
                                                    <a id="MainContent_ctl14_rpt_hpl_0" class="styleImgJcarousel_1">
                                                        <div>  
                                                            <img id="MainContent_ctl14_rpt_imgPatron_0" title="Nguyễn Tấn Đạt (90902267)" src="/images/cleardot.png" style="height:100px;width:80px;background:url('/images/card/90902267.JPG') no-repeat center center;-webkit-background-size: cover;-moz-background-size: cover;-o-background-size: cover;background-size: cover; filter: progid:DXImageTransform.Microsoft.AlphaImageLoader(src='/images/card/90902267.JPG', sizingMethod='scale'); -ms-filter: 'progid:DXImageTransform.Microsoft.AlphaImageLoader(src='', sizingMethod='scale')';;" />
                                                        </div>
                                                    </a>
                                                    <a id="MainContent_ctl14_rpt_hpl_1" class="styleImgJcarousel_1">
                                                        <div>  
                                                            <img id="MainContent_ctl14_rpt_imgPatron_1" title="Lương Thị Hoài Thương (B1000169)" src="/images/cleardot.png" style="height:100px;width:80px;background:url('/images/card/B1200102.JPG') no-repeat center center;-webkit-background-size: cover;-moz-background-size: cover;-o-background-size: cover;background-size: cover; filter: progid:DXImageTransform.Microsoft.AlphaImageLoader(src='/images/card/B1200102.JPG', sizingMethod='scale'); -ms-filter: 'progid:DXImageTransform.Microsoft.AlphaImageLoader(src='', sizingMethod='scale')';;" /></div>
                                                    </a>
                                                    <a id="MainContent_ctl14_rpt_hpl_2" class="styleImgJcarousel_1">
                                                        <div>  
                                                            <img id="MainContent_ctl14_rpt_imgPatron_2" title="Trần Quốc Anh (51103005)" src="/images/cleardot.png" style="height:100px;width:80px;background:url('/images/card/91102037.JPG') no-repeat center center;-webkit-background-size: cover;-moz-background-size: cover;-o-background-size: cover;background-size: cover; filter: progid:DXImageTransform.Microsoft.AlphaImageLoader(src='/images/card/91102037.JPG', sizingMethod='scale'); -ms-filter: 'progid:DXImageTransform.Microsoft.AlphaImageLoader(src='', sizingMethod='scale')';;" /></div>
                                                    </a>




                                                    <a id="MainContent_ctl14_rpt_hpl_3" class="styleImgJcarousel_1">
                                                        <div>  
                                                            <img id="MainContent_ctl14_rpt_imgPatron_3" title="Nguyễn Mai Tường Oanh (61202275)" src="/images/cleardot.png" style="height:100px;width:80px;background:url('/images/card/41104107.JPG') no-repeat center center;-webkit-background-size: cover;-moz-background-size: cover;-o-background-size: cover;background-size: cover; filter: progid:DXImageTransform.Microsoft.AlphaImageLoader(src='/images/card/41104107.JPG', sizingMethod='scale'); -ms-filter: 'progid:DXImageTransform.Microsoft.AlphaImageLoader(src='/images/card/41104107.JPG', sizingMethod='scale')';;" /></div>
                                                    </a>



                                                <li class="jcarousel-item jcarousel-item-horizontal jcarousel-item-1 jcarousel-item-1-horizontal" style="float: left; list-style: outside outside outside;" jcarouselindex="1">
                                                    <a id="MainContent_ctl14_rpt_hpl_4" class="styleImgJcarousel_1">
                                                        <div>  
                                                            <img id="MainContent_ctl14_rpt_imgPatron_4" title="Phạm Thị Hường (21200038)" src="/images/cleardot.png" style="height:100px;width:80px;background:url('/images/card/41104174.JPG') no-repeat center center;-webkit-background-size: cover;-moz-background-size: cover;-o-background-size: cover;background-size: cover; filter: progid:DXImageTransform.Microsoft.AlphaImageLoader(src='/images/card/41104174.JPG', sizingMethod='scale'); -ms-filter: 'progid:DXImageTransform.Microsoft.AlphaImageLoader(src='/images/card/41104174.JPG', sizingMethod='scale')';;" />
                                                        </div>
                                                    </a>




                                                    <a id="MainContent_ctl14_rpt_hpl_5" class="styleImgJcarousel_1">
                                                        <div>  
                                                            <img id="MainContent_ctl14_rpt_imgPatron_5" title="Lê Công Bình (41104107)" src="/images/cleardot.png" style="height:100px;width:80px;background:url('/images/card/61003184.JPG') no-repeat center center;-webkit-background-size: cover;-moz-background-size: cover;-o-background-size: cover;background-size: cover; filter: progid:DXImageTransform.Microsoft.AlphaImageLoader(src='/images/card/61003184.JPG', sizingMethod='scale'); -ms-filter: 'progid:DXImageTransform.Microsoft.AlphaImageLoader(src='', sizingMethod='scale')';;" /></div>
                                                    </a>
                                                </li>



                                                <a id="MainContent_ctl14_rpt_hpl_6" class="styleImgJcarousel_1">
                                                    <div>  
                                                        <img id="MainContent_ctl14_rpt_imgPatron_6" title="Nguyễn Thị Mừng (71106124)" src="/images/cleardot.png" style="height:100px;width:80px;background:url('/images/card/71106124.JPG') no-repeat center center;-webkit-background-size: cover;-moz-background-size: cover;-o-background-size: cover;background-size: cover; filter: progid:DXImageTransform.Microsoft.AlphaImageLoader(src='/images/card/71106124.JPG', sizingMethod='scale'); -ms-filter: 'progid:DXImageTransform.Microsoft.AlphaImageLoader(src='', sizingMethod='scale')';;" /></div>
                                                </a>




                                                <a id="MainContent_ctl14_rpt_hpl_7" class="styleImgJcarousel_1">
                                                    <div>  
                                                        <img id="MainContent_ctl14_rpt_imgPatron_7" title="Trần Trúc Trinh (21102126)" src="/images/cleardot.png" style="height:100px;width:80px;background:url('/images/card/61203385.JPG') no-repeat center center;-webkit-background-size: cover;-moz-background-size: cover;-o-background-size: cover;background-size: cover; filter: progid:DXImageTransform.Microsoft.AlphaImageLoader(src='/images/card/61203385.JPG', sizingMethod='scale'); -ms-filter: 'progid:DXImageTransform.Microsoft.AlphaImageLoader(src='/images/card/61203385.JPG', sizingMethod='scale')';;" /></div>
                                                </a>



                                                <li class="jcarousel-item jcarousel-item-horizontal jcarousel-item-1 jcarousel-item-1-horizontal" style="float: left; list-style: outside outside outside;" jcarouselindex="1">
                                                    <a id="MainContent_ctl14_rpt_hpl_8" class="styleImgJcarousel_1">
                                                        <div>  
                                                            <img id="MainContent_ctl14_rpt_imgPatron_8" title="Phạm Thu Hằng (21000190)" src="/images/cleardot.png" style="height:100px;width:80px;background:url('/images/card/71105085.JPG') no-repeat center center;-webkit-background-size: cover;-moz-background-size: cover;-o-background-size: cover;background-size: cover; filter: progid:DXImageTransform.Microsoft.AlphaImageLoader(src='/images/card/71105085.JPG', sizingMethod='scale'); -ms-filter: 'progid:DXImageTransform.Microsoft.AlphaImageLoader(src='/images/card/71105085.JPG', sizingMethod='scale')';;" /></div>
                                                    </a>

                                                    <a id="MainContent_ctl14_rpt_hpl_9" class="styleImgJcarousel_1">
                                                        <div>  
                                                            <img id="MainContent_ctl14_rpt_imgPatron_9" title="Lê Thị Thanh Thảo (91003117)" src="/images/cleardot.png" style="height:100px;width:80px;background:url('/images/card/B1200102.JPG') no-repeat center center;-webkit-background-size: cover;-moz-background-size: cover;-o-background-size: cover;background-size: cover; filter: progid:DXImageTransform.Microsoft.AlphaImageLoader(src='/images/card/B1200102.JPG', sizingMethod='scale'); -ms-filter: 'progid:DXImageTransform.Microsoft.AlphaImageLoader(src='/images/card/B1200102.JPG', sizingMethod='scale')';;" /></div>
                                                    </a>
                                                </li>


                                            </ul>
                                        </div>
                                        <div class="jcarousel-prev jcarousel-prev-horizontal jcarousel-prev-disabled jcarousel-prev-disabled-horizontal" style="display: block;" disabled="true"></div>
                                        <div class="jcarousel-next jcarousel-next-horizontal" style="display: block;" disabled="false"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="boxLeftBottom"></div>
                        </div>
                    </div>
                <!--</div>-->


            </div>
        </div>
        <div class="fotter">

            <div id="ucFooter_divContent" class="fotterWidth"><h1><a href="#" target="_blank">TRƯỜNG ĐẠI HỌC ABC</a></h1>
                Designed by ThuatNT; Email: <a href="#">thuatnt2@gmail.com</a>
            </div>
        </div>


        <script type="text/javascript">
            //<![CDATA[
           // Sys.Application.add_load(function() {
          //      ajaxJQSearchHomeAuto();
          //  });//]]>
        </script>
    </body>
</html>
