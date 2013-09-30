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

});