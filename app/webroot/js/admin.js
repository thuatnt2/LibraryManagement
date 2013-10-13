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
//	clearTimeout(wto);
//	wto = setTimeout(function() {
//		// do st
//		// uff when user has been idle for 1 second
//	}, 1000);


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
			}
			else {
				alert('Lỗi ! Không tìm thấy bạn đọc này');
			}

		},
		error: function() {
			alert("fail :(");
		}
	});
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
}));

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
			$("#book-code").val(book.BookSerial.barcode);
			$("#book-name").val(book.Book.title);
			$("#book-authors").val(book.Book.authors);
			$("#book-status").val(book.Book.status);
			$("#book-date-return").val(book.Ciculation.date_return);
			$("#book-reader").val(book.Ciculation.reader);
			if(book.Ciculation.reader == readerCode){
				$("#btn-book-return").removeClass("disabled");
			}
			if(book.Book.status == 0){
				$("#btn-book-borrow").removeClass("disabled");
			}

		},
		error: function() {
			alert("fail :(");
		}
	});
});


