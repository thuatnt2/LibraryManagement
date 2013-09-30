<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="/css/index.css" />
        <?php echo $this->Html->charset(); ?>
        <title>
        <?php echo $title_for_layout ?>
        </title>
        <?php
        echo $this->Html->meta('icon');

        echo $this->Html->css(array(
            'styles/jcarousel.skin1', 'styles/jcarousel.skin2', 'styles/jcarousel.skin3', 'styles/jcarousel.skin4', 'styles/menutop', 'styles/libol', 'styles/left.css',
            'styles/jquery-ui-1.8.1.custom', 'presentationCycle',
        ));
        echo $this->Html->script(array(
            'vendor/jquery-1.8.2.min', 'vendor/jquery-1.9.1.min', 'script/jquery-ui-1.8.custom.min', 'vendor/bootstrap', 'vendor/bootstrap.min',
            'script/thickbox', 'script/jquery.jcarousel.min', 'script/jquery.marquee', 'presentationCycle', 'jquery.cycle.all.min', 'index.js'
        ));
        echo $this->fetch('meta');
        echo $this->fetch('css');
        echo $this->fetch('script');
        ?>
    </head>
    <body>

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
                                    <span><b>GIỚI THIỆUs
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
                                    </div>
                                </div>
                            </li>
                            <li class="menu_mainmenu">
                                <a id="ucMenu_rptMenu_hplMenu2_7" class="menu_menu_Link9">
                                    <span><b style="padding-right: 25px">LIÊN HỆ
                                        </b></span></a>         
                                <div style="clear: both">
                                </div>

                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!--End of Menu -->
        <div class="page_container">
            <?php echo $content_for_layout ?>
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
