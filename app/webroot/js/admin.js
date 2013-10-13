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
    $('.nav-top-item').on('click', function (event) {
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
			else{
//                            var confirmModal =   '<div id="modelDialogDocumentEvidenceSection" style="display:none" class="">' +    
//                                    '<div class="modal-header">' +
//                                    '<a class="close" data-dismiss="modal" >&times;</a>' +
////                                    '<div id="contentPopupEvidenceToSection-'+id.split('-')[1]+'" class="nonDisplayElement" > </div>'+
////                                    '<div id="viewPopupEvidenceToSection-'+id.split('-')[1]+'" class="" >' +
//                                    '<h3>' + 'Notice' +'</h3>' +
//                                    '<div class="modal-body" style="padding: 10px 0px">' +
//                                    '<p style="margin-bottom: 20px" id="contentPopupEvidence">' + 'Hello Confirm' + '</p>' +
//                                    '</div>' +
//                                    '<div class="modal-footer">' +
//                                    '<a href="#" class="btn" data-dismiss="modal">' + 
//                                    'Ok' + 
//                                    '</a>' +
//                                    '</div>'+
//                                    '</div>' +
//                                    '</div>';
//                        }
//                        $('body').append(confirmModal);
//                        $('#modelDialogDocumentEvidenceSection').dialog({
//                            modal: true
//                        })
                      //  confirmModal.modal('show');
                            alert('Không tìm thấy bạn đọc này');
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
