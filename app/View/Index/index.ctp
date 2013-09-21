<?php 
    echo $this->element('frontend/left');
?>

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
                <?php // if (isset($newArtcile) && $newArtcile != null): ?>
                    <?php // foreach ($newArtcile as $row): ?>
                        <a id="MainContent_ctl10_rptNews_hplTitle_0" href="<?php // echo $this->url('view-article/process', array('action' => 'articleDetail', 'id' => $row->articleID)) ?>">
                            <div class="imgStyle">
                                <img id="MainContent_ctl10_rptNews_imgNews_0" src="<?php // echo $this->basePath() . $row->pictureThumnail; ?>" align="left" />
                            </div>
                            <p><?php // echo $row->title; ?></p>
                        </a> 
                    <?php // endforeach; ?>
                <?php // endif; ?>
            </div>
        </div>
        <?php // if (isset($announcement) && $announcement != NULL): ?>
            <div class="center_colRight">
                <div class="titleCenter230">
                    <h2>
                        Thông báo</h2>
                    <div class="iconNew">
                    </div>
                </div>
                <div class="shadow-2">
                    <ul class="ul_link_thongbao">
                        <?php // foreach ($announcement as $row): ?>
                            <li>
                                <a href="<?php // echo $this->url('view-article/process', array('action' => 'announcementDetail', 'id' => $row->articleID)) ?>"><?php // echo $this->escapeHtml($row->title); ?></a>
                            </li>
                        <?php // endforeach; ?>
                    </ul>
                </div>
            </div>
        <?php // endif; ?>
    </div>
</div>
<?php
    echo $this->element('frontend/right');
?>