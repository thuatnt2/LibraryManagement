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
$("#reader-code").on("change", (function() {
	var readerCode = $("#reader-code").val();
	jQuery.ajax({
		url: "getCiculation",
		type: "POST",
		data: {"readerCode": readerCode},
		dataType: 'json',
		success: function(result) {
			console.log(result);
			if (result.length !== 0) {
				var output = $('#reader-data-template').parseTemplate(result);
				$("#reader-data").html(output);
				loadBookTable();
			}
			else {
				alert("Lỗi ! Không tìm thấy bạn đọc này");
				return false;
			}

		},
		error: function() {
			alert("Đã xảy ra lỗi hệ thống, vui lòng thử lại");
			return false;
		}
	});

}));

function loadBookTable() {
	var readerCode = $("#reader-code").val();
	jQuery.ajax({
		url: "booksCiculation",
		type: "POST",
		data: {"readerCode": readerCode},
		dataType: 'text',
		success: function(books) {
			console.log(books);
			$("#book-ciculation").html(books);

		},
		error: function() {
			alert("fail :(");
		}
	});
}

$("#book-code").change(function() {
	var bookCode = $("#book-code").val();
	var readerCode = $("#reader-code").val();
	jQuery.ajax({
		url: "getBook",
		type: "POST",
		data: {"bookCode": bookCode},
		dataType: 'json',
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

				if (book.BookSerial.status) {
					$("#btn-book-borrow").removeClass("disabled");
				}
				else if (book.Ciculation.reader == readerCode) {
					$("#btn-book-return").removeClass("disabled");
				}
			$("#book-code").val(book.BookSerial.barcode);
			$("#book-name").val(book.Book.title);
			$("#book-authors").val(book.Book.authors);
			$("#book-status").val(book.Book.status);
			$("#book-date-return").val(book.Ciculation.date_return);
			$("#book-reader").val(book.Ciculation.reader);
			if(book.Ciculation.reader == readerCode){
				$("#btn-book-return").removeClass("disabled");
			}
			else {
				alert("Không tìm thấy tài liệu có mã " + $("#book-code").val() + " . Vui lòng thử lại");
				clearBook();
				return false;
			}


		},
		error: function() {
			alert("fail :(");
		}
	});
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
			success: function(result) {
				clearBook();
				loadBookTable();
				alert(result.message);
			},
			error: function() {
				clearBook();
				alert("fail :(");
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
			success: function(result) {
				clearBook();
				loadBookTable();
				alert(result.message);
			},
			error: function() {
				clearBook();
				alert("fail :(");
			}
		});
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
				alert(result.message);
			},
			error: function() {
				clearBook();
				alert("fail :(");
			}
		});
	}
}


