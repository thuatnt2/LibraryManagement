<?php
/**
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       Cake.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */
$cakeDescription = __d('cake_dev', 'CakePHP: the rapid development php framework');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <?php echo $this->Html->charset(); ?>
        <title>Library Management</title>
        <?php
        echo $this->Html->meta('icon');
        echo $this->Html->css(array(
            'frontend/jcarousel.skin1', 'frontend/jcarousel.skin2','frontend/menutop','frontend/libol','frontend/left', 'frontend/jquery-ui-1.8.1.custom', 
            'frontend/presentationCycle'
        ));
        echo $this->Html->script(array(
            'vendor/jquery-1.9.1.min', 'vendor/bootstrap.min','vendor/html5',
            'vendor/jquery.min','vendor/jquery-ui-1.8.custom.min','vendor/thickbox','vendor/jquery.jcarousel.min','vendor/jquery.marquee','vendor/presentationCycle','vendor/jquery.cycle.all.min'
        ));
        echo $this->fetch('meta');
        echo $this->fetch('css');
        echo $this->fetch('script');
        ?>
    </head>
    <script type="text/javascript">
        jQuery(document).ready(function() {
            jQuery('#first-and-second-carousel').jcarousel({
                auto: 2, //thoi gian scrool tinh bang giay
                wrap: 'last'
            });
            jQuery('#second-and-second-carousel').jcarousel({
                auto: 3, //thoi gian scrool tinh bang giay
                wrap: 'last'
            });
            jQuery('#ba-and-second-carousel').jcarousel({
                auto: 3, //thoi gian scrool tinh bang giay
                wrap: 'last'
            });
            //ba-and-second-carousel
        });

        function mycarousel_initCallback(carousel) {
            // Disable autoscrolling if the user clicks the prev or next button.
            carousel.buttonNext.bind('click', function() {
                carousel.startAuto(0);
            });

            carousel.buttonPrev.bind('click', function() {
                carousel.startAuto(0);
            });

            // Pause autoscrolling if the user moves with the cursor over the clip.
            carousel.clip.hover(function() {
                carousel.stopAuto();
            }, function() {
                carousel.startAuto();
            });
        }
        ;

    </script>
    <!--end jcarousel-->
    <!--Marquee-->
    <script type="text/javascript">
        <!--    //
        var use_debug = false;

        function debug() {
            if (use_debug && window.console && window.console.log)
                console.log(arguments);
        }

        // on DOM ready
        $(document).ready(function() {
            $(".marquee").marquee({
                loop: -1
                        // this callback runs when the marquee is initialized
                        , init: function($marquee, options) {
                    debug("init", arguments);

                    // shows how we can change the options at runtime
                    if ($marquee.is("#marquee2"))
                        options.yScroll = "bottom";
                }
                // this callback runs before a marquee is shown
                , beforeshow: function($marquee, $li) {
                    debug("beforeshow", arguments);

                    // check to see if we have an author in the message (used in #marquee6)
                    var $author = $li.find(".author");
                    // move author from the item marquee-author layer and then fade it in
                    if ($author.length) {
                        $("#marquee-author").html("<span style='display:none;'>" + $author.html() + "</span>").find("> span").fadeIn(850);
                    }
                }
                // this callback runs when a has fully scrolled into view (from either top or bottom)
                , show: function() {
                    debug("show", arguments);
                }
                // this callback runs when a after message has being shown
                , aftershow: function($marquee, $li) {
                    debug("aftershow", arguments);

                    // find the author
                    var $author = $li.find(".author");
                    // hide the author
                    if ($author.length)
                        $("#marquee-author").find("> span").fadeOut(250);
                }
            });
        });

        var iNewMessageCount = 0;

        function addMessage(selector) {
            // increase counter
            iNewMessageCount++;

            // append a new message to the marquee scrolling list
            var $ul = $(selector).append("<li>New message #" + iNewMessageCount + "</li>");
            // update the marquee
            $ul.marquee("update");
        }

        function pause(selector) {
            $(selector).marquee('pause');
        }

        function resume(selector) {
            $(selector).marquee('resume');
        }
        //-->
        // fix z-index ie7
        /* $(function () {
         var zIndexNumber = 1000;
         $('div').each(function () {
         $(this).css('zIndex', zIndexNumber);
         zIndexNumber -= 10;
         });
         });
         */
    </script>
    <!--end Marquee-->
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>TNT library</title>
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
        Sys.WebForms.PageRequestManager._initialize('ctl00$ScriptManager1', 'ctl00', ['tctl00$MainContent$uc1', 'MainContent_uc1', 'tctl00$MainContent$ctl01$pnl', 'MainContent_ctl01_pnl', 'tctl00$MainContent$ctl07$UpdatePanel1', 'MainContent_ctl07_UpdatePanel1'], [], [], 90, 'ctl00');
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
                        <li class="menu_mainmenu"><a id="ucMenu_hplMain" class="menu_menu_Link9" href="#">
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
                                        <a  href="#">Tin tức</a>
                                        <a  href="#">Thông báo</a>
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
                            <a class="menu_menu_Link9" href="#">
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
                    <div id="ControlBar1_divContent">
                        <ul id="marquee6" class="marquee">
                            <li><a href="#">Niềm tin vào chính mình có sức mạnh xua tan bất kì sự hoài nghi nào của người khác.</a></li>
                            <li><a href="#">Bản chất giản dị là kết quả tự nhiên của tư tưởng sâu sắc. (Hazlitt)</a></li>
                            <li><a href="#">Bí quyết của sự thành công nếu có - đó là khả năng tự đặt mình vào địa vị người khác và xem xét sự vật vừa theo quan điểm của họ vừa theo quan điểm của mình. (Henry Ford)</a></li><li><a href="#">Cái gì hấp dẫn và đẹp đẽ chẳng phải luôn luôn là tốt, nhưng cái gì tốt thì luôn luôn đẹp. (Ninon De Lenenles)</a></li><li><a href="#">Cái nguy hiểm của thời đại chúng ta không phải là thấy máy móc suy nghĩ như con người mà thấy con người suy nghĩ như một cái máy. (P.D.)</a></li><li><a href="#">Căn bệnh nặng nhất của tâm hồn là sự lãnh đạm. (D.Tôkenvin)</a></li><li><a href="#">Cần lạc quan khi khởi đầu công việc và đầy hoài nghi khi kết thúc công việc.(Ghéc-xen)</a></li><li><a href="#">Càng học thật cao càng thấy mình ngu dốt. (Einstein)</a></li><li><a href="#">Cha đẻ của vinh quang và hạnh phúc là lao động. (Euripied)</a></li><li><a href="#">Chẳng phải công việc khó khăn mà không dám liều, chính vì ta không dám liều nên nó trở thành khó khăn. (Sénèque)</a></li><li><a href="#">Chẳng trách ai mà trách mình là cách cần thiết để tu thân. Hãy tha thứ cho người là phương pháp để nuôi độ lượng. (Lã Khôn)</a></li>
                        </ul>
                    </div>
                </div>
                <div class="tinvan_right">
                    <!--<div id="divGoogleTranslate"></div>--> 
                </div>
            </div>
        </div>
        <div class="mainContent">
            <!--Noi dung cot ben trai-->
            <!--<div id="MainContent_uc1">-->
            <?php echo $this->Session->flash(); ?>

            <?php echo $this->fetch('content'); ?>
            <!--Noi dung cot ben phai-->
            <div id="MainContent_contentRight" class="contentRight">
            </div>
            <!--</div>-->


        </div>
    </div>
    <div class="fotter">

        <div id="ucFooter_divContent" class="fotterWidth"><h1><a href="#" target="_blank">TRƯỜNG TRUNG CẤP CẢNH SÁT GIAO THÔNG T52 - BỘ CÔNG AN</a></h1>
            Địa chỉ: Xã Bình Phục, Huyện Thăng Bình, Tỉnh Quảng Nam. Tel: 05103.667.986. Fax: 84.5103.667.985<br />
            Designed by ThuatNT; Email: <a href="#">thuatnt2@gmail.com</a>
        </div>
    </div>


    <script type="text/javascript">
        //<![CDATA[
        Sys.Application.add_load(function() {
            ajaxJQSearchHomeAuto();
        });//]]>
    </script>
</body>
</html>
