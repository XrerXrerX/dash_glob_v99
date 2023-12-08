$(document).ready(function() {
    $('.sec_top_navbar').load('/topnav');
    $(document).on('click', '.profile_nav', function() {
        $('.list_menu_profile').slideToggle('fast');
    });
    $(document).on('click', function(event) {
        if (!$(event.target).closest('.list_menu_profile, .profile_nav').length) {
            $('.list_menu_profile').slideUp('fast');
        }
    });
});

$(document).ready(function() {
    $('#sec_sidebar').load('/sidenav', function() {
        $('#sec_sidebar').on('click', '.data_sidejsx', function(event) {
            event.preventDefault();
            $(this).toggleClass('active');
            $(this).next('.sub_data_sidejsx').slideToggle('fast');
            $('.data_sidejsx').not(this).removeClass('active');
            $('.data_sidejsx').not(this).next('.sub_data_sidejsx').slideUp('fast');
        });

        $('#sec_sidebar').on('click', '.list_subdata', function(event) {
            event.preventDefault();
            $('.list_subdata').not(this).removeClass('active');
            $(this).toggleClass('active');
        });

        $('#sec_sidebar').on('input', '#searchTabel', function() {
            var searchText = $(this).val().toLowerCase();
            $('.nav_title1, .sub_title1').each(function() {
                var titleText = $(this).text().toLowerCase();
                var $parentData = $(this).closest('.data_sidejsx');
                var $parentSubData = $(this).closest('.sub_data_sidejsx');

                if (searchText === '') {
                    $(this).show();
                    $parentData.show();
                    $parentSubData.hide();
                    $parentData.removeClass('active');
                    $parentSubData.removeClass('active');
                } else if (titleText.includes(searchText) || $parentSubData.find('.sub_title1').text().toLowerCase().includes(searchText)) {
                    $(this).show();
                    $parentData.show();
                    $parentSubData.show();
                    $parentData.addClass('active');
                    $parentSubData.addClass('active');
                } else {
                    $(this).hide();
                    $parentData.hide();
                    $parentSubData.hide();
                    $parentData.removeClass('active');
                    $parentSubData.removeClass('active');
                }
            });
        });
    });
});

$(document).on('click', '#codeDashboardLink', function(event) {
    event.preventDefault();
    $('.aplay_code').load('/codetest', function() {
        adjustElementSize();
        localStorage.setItem('lastPage', 'dashboard');
    });
    $('.aplay_code').load('dashboard', function() {
        adjustElementSize();
        localStorage.setItem('lastPage', 'dashboard');
        // $('.aplay_code').find('/codetest').remove();
        $('.aplay_code:contains("/codetest")').remove();
    });
});

$(document).on('click', '#codeBoxLink', function(event) {
    event.preventDefault();
    $('.aplay_code').load('/codetest', function() {
        adjustElementSize();
        localStorage.setItem('lastPage', '/codebox');
    });
    $('.aplay_code').load('/codebox', function() {
        adjustElementSize();
        localStorage.setItem('lastPage', '/codebox');
        $('.aplay_code').find('/codetest').remove();
    });
});

$(document).on('click', '#codeTableLink', function(event) {
    event.preventDefault();
    $('.aplay_code').load('/codetest', function() {
        adjustElementSize();
        localStorage.setItem('lastPage', '/codetable');
    });
    $('.aplay_code').load('/codetable', function() {
        adjustElementSize();
        localStorage.setItem('lastPage', '/codetable');
        $('.aplay_code').find('/codetest').remove();
    });
});

$(document).on('click', '#codeFormLink', function(event) {
    event.preventDefault();
    $('.aplay_code').load('/codetest', function() {
        adjustElementSize();
        localStorage.setItem('lastPage', '/codeform');
    });
    $('.aplay_code').load('/codeform', function() {
        adjustElementSize();
        localStorage.setItem('lastPage', '/codeform');
        $('.aplay_code').find('/codetest').remove();
    });
});

$(document).on('click', '#codeModalLink', function(event) {
    event.preventDefault();
    $('.aplay_code').load('/codetest', function() {
        adjustElementSize();
        localStorage.setItem('lastPage', '/komponen/codemodal.html');
    });
    $('.aplay_code').load('/codemodal', function() {
        adjustElementSize();
        localStorage.setItem('lastPage', '/komponen/codemodal.html');
        $('.aplay_code').find('/codetest').remove();
    });
});

$(document).on('click', '#codeButtonLink', function(event) {
    event.preventDefault();
    $('.aplay_code').load('/codetest', function() {
        adjustElementSize();
        localStorage.setItem('lastPage', '/codebutton');
    });
    $('.aplay_code').load('/codebutton', function() {
        adjustElementSize();
        localStorage.setItem('lastPage', '/codebutton');
        $('.aplay_code').find('/codetest').remove();
    });
});

$(document).on('click', '#codeCardLink', function(event) {
    event.preventDefault();
    $('.aplay_code').load('/codetest', function() {
        adjustElementSize();
        localStorage.setItem('lastPage', '/codecard');
    });
    $('.aplay_code').load('/codecard', function() {
        adjustElementSize();
        localStorage.setItem('lastPage', '/codecard');
        $('.aplay_code').find('/codetest').remove();
    });
});

$(document).on('click', '#codeOtherLink', function(event) {
    event.preventDefault();
    $('.aplay_code').load('/codetest', function() {
        adjustElementSize();
        localStorage.setItem('lastPage', '/codeother');
    });
    $('.aplay_code').load('/codeother', function() {
        adjustElementSize();
        localStorage.setItem('lastPage', '/codeother');
        $('.aplay_code').find('/codetest').remove();
    });
});


$(document).on('click', '.loadanalitic', function(event) {
    event.preventDefault();
    $('.aplay_code').load('/codetest', function() {
        adjustElementSize();
        localStorage.setItem('lastPage', '/web/contactl21');
    });
    // $('.aplay_code').load('/web/contactl21', function() {
    //     adjustElementSize();
    //     localStorage.setItem('lastPage', '/web/contactl21');
    //     $('.aplay_code').find('/codetest').remove();
    // });
});


$(document).on('click', '.Menuleft', function(event) {
    event.preventDefault();
    var jenisMenu = $(this).data('jenismenu');
    var menuId = $(this).data('menuid');
    var menu1 = $(this).data('menu1');
    var menu2 = $(this).data('menu2');
    var menu3 = $(this).data('menu3');
    var menuUrl99 = $(this).data('url');
    if(typeof menuUrl99 === 'undefined'){
        var menuUrl = '';
        if (jenisMenu != '') {
            menuUrl = '/' + jenisMenu + '/' + menuId;
        } else {
            menuUrl = '/' + menuId;
        }
    } else {
        menuUrl = menuUrl99;
    }

    backMenu(menuUrl, menu1, menu2, menu3);
});


function backMenu(menuUrl, menu1, menu2, menu3) {
    
    $('.aplay_code').load('/codetest', function() {
        adjustElementSize();
        localStorage.setItem('lastPage', menuUrl);
        
        $('.aplay_code').load(menuUrl, function() {
            adjustElementSize();
            localStorage.setItem('lastPage', menuUrl);
            Breadcrumb_menu(menuUrl, menu1, menu2, menu3);
            $('.aplay_code').find('#codetest').remove();
            $('tr:gt(' + (22 - 1) + ')').hide();
        });
    });
}
// $(document).on('click', '.Menuleft', function(event) {
//     event.preventDefault();
//     var jenisMenu = $(this).data('jenismenu');
//     var menuId = $(this).data('menuid');
//     var menuUrl = '';
    
//     if (jenisMenu != '') {
//         menuUrl = '/' + jenisMenu + '/' + menuId;
//     } else {
//         menuUrl = '/' + menuId;
//     }
//     console.log(menuUrl);
    
//     $('.aplay_code').load(menuUrl, function() {
//         adjustElementSize();
//         localStorage.setItem('lastPage', menuUrl);
        
//         // Menghapus elemen dengan ID 'codetest'
//         $('#codetest').remove();
//     });
// });


function Breadcrumb_menu(menuUrl, menu1, menu2, menu3) {

$('.induk').text(menu1);
$('.arrow_seperator').show();
// console.log(menu3);
if(typeof menu3 !== 'undefined'){
    if(menu3 !== 'undefined'){
        //hide arrow 4 dan anak 4
        $('.arrow_seperator4').hide();
        $('.anak4').hide();

        //remove dan kosongkan class Menu left dan  data-url anak1 menjadi text dan remove onclick anak1 
        $('.anak1').removeAttr('onclick');
        $('.anak1').removeClass('Menuleft');
        $('.anak1').empty(); 
        $('.anak1').removeAttr('data-url');
        $('.anak1').show().text(menu2);

        //show arrow 2  remove class Menuleft dan tambah url dan tambah data attribute
        $('.arrow_seperator2').show();
        $('.anak2').show();
        $('.anak2').empty(); // Menghapus konten sebelumnya (jika ada)
        $('.anak2').removeClass('Menuleft');
        $('.anak2').append(`<a href="#">${menu3}</a>`);
        $('.anak2').removeAttr('data-url');
        $('.anak2').attr('data-url', menuUrl);
        $('.anak2').removeAttr('data-menu1');
        $('.anak2').attr('data-menu1', menu1);
        $('.anak2').removeAttr('data-menu2');
        $('.anak2').attr('data-menu2', menu2);
        $('.anak2').removeAttr('data-menu3');
        $('.anak2').attr('data-menu3', menu3);
        $('.anak2').attr('onclick', 'backMenu("' + menuUrl + '", "' + menu1 + '", "' + menu2 + '", "' + menu3 + '")');
    } else {
        hideAnak2(menuUrl, menu1, menu2, menu3);
    }
} else {
    //hide anak4
    hideAnak2(menuUrl, menu1, menu2, menu3);
}
    
}
function hideAnak2(menuUrl, menu1, menu2, menu3){
    $('.arrow_seperator4').hide();
    $('.anak4').hide();
    
    //remove class menuleft
    $('.anak1').removeClass('Menuleft');

    //remove a href
    $('.anak1').empty();
    $('.anak1').append(`<a href="#">${menu2}</a>`);
    $('.anak1').removeAttr('data-url');
    $('.anak1').removeAttr('onclick');
    
    //add data atrribut dan onclick fungsi
    $('.anak1').show();
    $('.anak1').attr('onclick', 'backMenu("' + menuUrl + '", "' + menu1 + '", "' + menu2 + '", "' + menu3 + '")');
    $('.anak1').attr('data-url', menuUrl);
    $('.anak1').removeAttr('data-menu1');
    $('.anak1').attr('data-menu1', menu1);
    $('.anak1').removeAttr('data-menu2');
    $('.anak1').attr('data-menu2', menu2);
    $('.anak1').removeAttr('data-menu3');
    $('.anak1').attr('data-menu3', menu3);

    //hide arrow ke-2 & remove , hide anak2
    $('.arrow_seperator2').hide();
    $('.anak2').removeAttr('onclick');
    $('.anak2').removeClass('Menuleft');
    $('.anak2').empty(); 
    $('.anak2').hide();
}
function handleButtonAddClick(buttonId) {
    if (buttonId.startsWith("add-")) {
        $('.arrow_seperator4').show();
        $('.anak4').show();
        $('.anak4').text('Add New');
    }
}

function handleButtonEditClick(buttonId) {
    if (buttonId.startsWith("update-") || buttonId.startsWith("edit")) {
        $('.arrow_seperator4').show();
        $('.anak4').show();
        $('.anak4').text('Edit');
    }

}

function handleButtonCancelClick(buttonId) {
    if (buttonId.startsWith("cancel")) {
        $('.arrow_seperator4').hide();
        $('.anak4').hide();
    }
}
