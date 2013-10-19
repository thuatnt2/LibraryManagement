function return_article(id, title) {
    parent.document.getElementById('MenuController').value = 'articles';
    parent.document.getElementById('MenuAction').value = 'view';
    parent.document.getElementById('MenuExt').value = id;
    parent.document.getElementById('MenuLink').value = 0;
    parent.document.getElementById('MenuView').value = title;

    parent.$.fancybox.close();
}

function return_category(id, title) {
    parent.document.getElementById('MenuController').value = 'articles';
    parent.document.getElementById('MenuAction').value = 'blog';
    parent.document.getElementById('MenuExt').value = id;
    parent.document.getElementById('MenuLink').value = 0;
    parent.document.getElementById('MenuView').value = title;
    parent.$.fancybox.close();
}

function close_box() {
    parent.$.fancybox.close();
}

$(document).ready(function() {
    $('.addmenu').click(function() {

        $.fancybox({
            'padding': 0,
            'titleShow': false,
            'autoScale': false,
            'width': 900,
            'height': 520,
            'transitionIn': 'elastic',
            'transitionOut': 'elastic',
            'hideOnOverlayClick': false,
            'hideOnContentClick': false,
            'overlayShow': true,
            'opacity': false,
            'type': 'ajax',
            'href': base_url + 'menus/' + $('#menu-type').val()
                    // 'href':'http://fancyapps.com/fancybox/',
        });
    });
    $('.nav-top-item').on('click', function(event) {
        $('.current').removeClass('current');
        $(this).addClass('current');
    })
});
$('.addmenu').click(function() {

    $.fancybox({
        'padding': 0,
        'titleShow': false,
        'autoScale': false,
        'width': 900,
        'height': 520,
        'transitionIn': 'elastic',
        'transitionOut': 'elastic',
        'hideOnOverlayClick': false,
        'hideOnContentClick': false,
        'overlayShow': true,
        'opacity': false,
        'type': 'ajax',
        'href': base_url + 'menus/' + $('#menu-type').val()
                // 'href':'http://fancyapps.com/fancybox/',
    });
});

//});
//for add ciculation
$("#reader-code").change(function() {
    var readerCode = $("#reader-code").val();
    if (readerCode != "") {
        jQuery.ajax({
            url: "getCiculation",
            type: "POST",
            data: {"readerCode": readerCode},
            dataType: 'json',
            beforeSend: function() {
                showIndicator();
            },
            complete: function() {
                hideIndicator();
            },
            success: function(result) {
                console.log(result);
                if (result.length !== 0) {
                    //var output = $('#reader-data-template').parseTemplate(result);
                    //$("#reader-data").html(output);
                    $("#reader-code").val(result.User.username);
                    $("#reader-status").val(result.Reader.status);
                    $("#reader-type").val(result.Reader.is_teacher);
                    $("#reader-fullname").val(result.User.fullname);
                    $("#reader-department").val(result.Department.name);
                    $("#reader-address").val(result.User.resident_address);
                    loadBookTable();
                }
                else {
                    showModal("Lỗi bạn đọc", "Không tìm thấy bạn đọc có mã " + readerCode + " ,vui lòng thử lại", true);
                    clearReader();
                    return false;
                }

            },
            error: function() {
                showModal("Lỗi hệ thống", "Hệ thống phát sinh lỗi, xin lỗi vì sự bất tiện này !", true);
                clearReader();
                return false;
            }
        });
    }


});

function loadBookTable() {
    var readerCode = $("#reader-code").val();
    jQuery.ajax({
        url: "booksCiculation",
        type: "POST",
        data: {"readerCode": readerCode},
        dataType: 'text',
        beforeSend: function() {
            showIndicator();
        },
        complete: function() {
            hideIndicator();
        },
        success: function(books) {
            console.log(books);
            $("#book-ciculation").html(books);
            $('tbody tr:even').addClass("alt-row");

        },
        error: function() {
            showModal("Lỗi hệ thống", "Hệ thống phát sinh lỗi, xin lỗi vì sự bất tiện này !", true);
            return false;
        }
    });
}

$("#book-code").change(function() {
    var bookCode = $("#book-code").val();
    var readerCode = $("#reader-code").val();
    if (bookCode != "") {
        jQuery.ajax({
            url: "getBook",
            type: "POST",
            data: {"bookCode": bookCode},
            dataType: 'json',
            beforeSend: function() {
                showIndicator();
            },
            complete: function() {
                hideIndicator();
            },
            success: function(book) {
                console.log(book);
                if (book.length !== 0) {
                    $("#book-code").val(book.BookSerial.barcode);
                    $("#book-name").val(book.Book.title);
                    $("#book-authors").val(book.Book.authors);
                    if (book.BookSerial.status == true) {
                        $("#book-status").val("Có Sẵn");
                    }
                    else {
                        $("#book-status").val("Đã được mượn");
                    }
                    $("#book-date-return").val(book.Ciculation.date_return);
                    $("#book-reader").val(book.Ciculation.reader);
                    $("#book-serial-id").val(book.BookSerial.id);

                    if (book.BookSerial.status && readerCode != "") {
                        $("#btn-book-borrow").removeClass("disabled");
                    }
                    else if (book.Ciculation.reader == readerCode) {
                        $("#btn-book-return").removeClass("disabled");
                    }
                    $("#book-code").val(book.BookSerial.barcode);
                    $("#book-name").val(book.Book.title);
                    $("#book-authors").val(book.Book.authors);
                    $("#book-reader").val(book.Ciculation.reader);

                } else {
                    showModal("Lỗi tài liệu", "Không tìm thấy tài liệu có mã " + $("#book-code").val() + ", vui lòng thử lại", true);
                    clearBook();
                    return false;
                }
            },
            error: function() {
                showModal("Lỗi hệ thống", "Hệ thống phát sinh lỗi, xin lỗi vì sự bất tiện này !", true);
                return false;
            }
        });
    }

});

//Borrow book

$("#btn-book-borrow").click(function() {
    var bookCode = $("#book-code").val();
    var readerCode = $("#reader-code").val();
    if (bookCode != "" && readerCode != "") {
        jQuery.ajax({
            url: "borrowBook",
            type: "POST",
            data: {"readerCode": readerCode, "bookCode": bookCode},
            dataType: 'json',
            beforeSend: function() {
                showIndicator();
            },
            complete: function() {
                hideIndicator();
            },
            success: function(result) {
                if (result.status == 0) {
                    showModal("Lỗi mượn sách", result.message, true);
                }
                else {
                    showModal("Thông báo", result.message, false);
                }
                clearBook();
                loadBookTable();

            },
            error: function() {
                showModal("Lỗi hệ thống", "Hệ thống phát sinh lỗi, xin lỗi vì sự bất tiện này !", true);
                clearBook();
                return false;
            }
        });
    }
});

$("#btn-book-return").click(function() {
    var bookCode = $("#book-code").val();
    var readerCode = $("#reader-code").val();
    if (bookCode != "" && readerCode != "") {
        jQuery.ajax({
            url: "returnBook",
            type: "POST",
            data: {"readerCode": readerCode, "bookCode": bookCode},
            dataType: 'json',
            beforeSend: function() {
                showIndicator();
            },
            complete: function() {
                hideIndicator();
            },
            success: function(result) {
                if (result.status == 0) {
                    showModal("Lỗi mượn sách", result.message, true);
                }
                else {
                    showModal("Thông báo", result.message, false);
                }
                clearBook();
                loadBookTable();
            },
            error: function() {
                showModal("Lỗi hệ thống", "Hệ thống phát sinh lỗi, xin lỗi vì sự bất tiện này !", true);
                clearBook();
            }
        });
    }
    else {
        showModal("Thông báo", "Vui lòng nhập mã thẻ của bạn đọc trước!", false);
    }
});


function clearBook() {
    $("#book-code").val("");
    $("#book-name").val("");
    $("#book-authors").val("");
    $("#book-status").val("");
    $("#book-date-return").val("");
    $("#book-reader").val("");
    $("#btn-book-return").addClass("disabled");
    $("#btn-book-borrow").addClass("disabled");
}


function clearReader() {
    $("#reader-code").val("");
    $("#reader-status").val("");
    $("#reader-type").val("");
    $("#reader-fullname").val("");
    $("#reader-department").val("");
    $("#reader-address").val("");
    clearBookTable();
}


function clearBookTable() {
    $("#book-ciculation tbody").html("");
}
//Renew Book

function renewBook(book_serial_id) {
    var readerCode = $("#reader-code").val();
    if (readerCode != "") {
        jQuery.ajax({
            url: "renewBook",
            type: "POST",
            data: {"readerCode": readerCode, "bookSerialId": book_serial_id},
            dataType: 'json',
            success: function(result) {
                clearBook();
                loadBookTable();
                if (result.status == 0) {
                    showModal("Lỗi gia hạn sách", result.message, true);
                }
                else {
                    showModal("Thông báo", result.message, false);
                }
            },
            error: function() {
                clearBook();
                showModal("Lỗi hệ thống", "Hệ thống phát sinh lỗi, xin lỗi vì sự bất tiện này !", true);
                return false;
            }
        });
    }
}
function showModal(title, content, error) {
    $("#title-of-modal").text(title);
    $("#content-of-modal").text(content);
    if (error === true) {
        $(".modal-title").css('color', 'red');
    }
    else {
        $(".modal-title").css('color', 'green');
    }
    $("#my-modal").modal('show');

}

function showIndicator() {
    //$("#indicator").modal('show');
    $("#indicator").show();
}
function hideIndicator() {
    //$("#indicator").modal('hide');
    $("#indicator").hide();
}
//close the modal that is showing
$("#x-close").click(function() {
    $("#my-modal").modal('hide');
});

/**
 * Log
 * */
//load when change log type
$("#log-type-select").on("change", function() {
	var logType = $("#log-type-select").val();
	var keyword = $("#log-keyword").val();
	keyword = $.trim(keyword);
	loadLogTable(logType, keyword);

});

//load when input keyword to search

$("#log-keyword").on('input', function() {
	var logType = $("#log-type-select").val();
	var keyword = $("#log-keyword").val();
	keyword = $.trim(keyword);
	loadLogTable(logType, keyword);
});

function loadLogTable(logType, logKeyword) {
	jQuery.ajax({
		url: "loadLogs",
		type: "POST",
		data: {"logType": logType, 'logKeywork': logKeyword},
		dataType: 'json',
		success: function(result) {
			$("#log-data-table").html("");
			//var length = result.logs.length;
			var logs = result.logs;
			for (var i = 0; i < logs.length; i++) {
				var tr = "";
				tr += "<tr>";
				tr += '<td><input type="checkbox" value="' + result.logs[i].Log.id + '"/></td>';
				//tr += "<td" + i + "</td>";
				tr += "<td>" + logs[i].Log.reader_code + "</td>";
				tr += "<td>" + logs[i].Log.reader_name + "</td>";
				tr += "<td>" + logs[i].Log.content + "</td>";
				tr += "<td>" + logs[i].Log.created + "</td>";
				tr += "</tr>";
				$("#log-data-table").append(tr);
			}
			$('tbody tr:even').addClass("alt-row");
			$("#log-offset").val(result.offset);
		},
		error: function() {
			clearBook();
			showModal("Lỗi hệ thống", "Hệ thống phát sinh lỗi, xin lỗi vì sự bất tiện này !", true);
			return false;
		}
	});
}

$("#log-check-all").on('click', function() {
	var status = this.checked;
	$('#log-table input[type=checkbox]').each(function() {
		this.checked = status;
	});
});

$("#btn-delete-logs").click(function() {
	var ids = '';
	var logType = $("#log-type-select").val();
	var keyword = $("#log-keyword").val();
	$('#log-data-table input[type=checkbox]').each(function() {
		if (this.checked)
			ids = ids + this.value + ',';
	});	
	if (ids != '') {
		jQuery.ajax({
			url: "deleteLogs",
			type: "POST",
			data: {'ids': ids},
			dataType: 'json',
			success: function(result) {
				showModal('Thông báo', result.message,false);
				loadLogTable(logType, keyword);
			},
			error: function() {
				clearBook();
				showModal("Lỗi hệ thống", "Hệ thống phát sinh lỗi, xin lỗi vì sự bất tiện này !", true);
				return false;
			}
		});
	}
	else {
		showModal('Lỗi', 'Bạn chưa chọn mục cần xóa', true);
	}
    var logType = $("#log-type-select").val();
    console.log('type change');
    jQuery.ajax({
        url: "loadLogs",
        type: "POST",
        data: {"logType": logType},
        dataType: 'json',
        success: function(result) {
            $("#log-data-table").html("");
            //var length = result.logs.length;
            var logs = result.logs;
            for (var i = 0; i < logs.length; i++) {
                var tr = "";
                tr += "<tr>";
                //tr += '<td><input type="checkbox" value="' + result.logs[i].Log.id + '"/></td>';
                tr += "<td" + i + "</td>";
                tr += "<td>" + logs[i].Log.reader_name + "</td>";
                tr += "<td>" + logs[i].Log.content + "</td>";
                tr += "<td>" + logs[i].Log.created + "</td>";
                tr += "</tr>";
                $("#log-data-table").append(tr);
            }
            $('tbody tr:even').addClass("alt-row");
            $("#log-offset").val(result.offset);
        },
        error: function() {
            clearBook();
            showModal("Lỗi hệ thống", "Hệ thống phát sinh lỗi, xin lỗi vì sự bất tiện này !", true);
            return false;
        }
    });
});

/**
 * delete book serial
 * */

function deleteBookSerial(book_id, book_serial_id) {
    var book_total = $('#book_total').text();
    if (confirm('Bạn có chăc chắn muốn xóa ?')) {
        jQuery.ajax({
            url: "/deleteBookSerial",
            type: "POST",
            data: {"bookSerialId": book_serial_id,"bookId": book_id},
            dataType: 'json',
            success: function(result) {
                if (result.status === 1) {
                    book_total = book_total - 1;
                    $('#book_total').html(book_total);
                    $('#book_serial_'+book_serial_id).parent().parent().remove();
                    showModal('Thông báo', result.messate, false);
                }
                else {
                    showModal('Lỗi xóa tài liệu', result.messate, true);
                }
            },
            error: function() {
                clearBook();
                showModal("Lỗi hệ thống", "Hệ thống phát sinh lỗi, xin lỗi vì sự bất tiện này !", true);
                return false;
            }
        });
    }

}

