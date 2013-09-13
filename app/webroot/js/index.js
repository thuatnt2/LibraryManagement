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