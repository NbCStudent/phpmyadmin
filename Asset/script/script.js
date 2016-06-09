
/* --------- Refresh Page --------- */

$(document).ready(function() {
    $('#page_refresh').click(function(){
        location.reload();
    });
});

/* --------- Previous Page --------- */

$(document).ready(function() {
    document.getElementById('previousPage').onclick = function(e) {
        e.preventDefault();
        history.back();
    };
});

/* --------- Modals --------- */

$(document).ready(function() {
    $('#alert_drop_bdd_comfirm').on('shown.bs.modal', function () {
        $('#alert_drop_bdd_comfirm').focus()
    });
    $('#alert_drop_table_comfirm').on('shown.bs.modal', function () {
        $('#alert_drop_table_comfirm').focus()
    });
});

/* --------- Erase Table --------- */



/*$(document).ready(function() {
    function displayData(isbn) {
        // there's a call to jQuery AJAX here
        $.ajax({
            type: "POST",
            contentType: "application/json; charset=utf-8",
            url: "index.php?action=deleteTable&tableName={$variable}&dbname={$dbname}",
            data: "{" + isbn"}",
            dataType: "json",
            success: function(msg) {
                DisplayReviews(msg.d);
            }
        });
        return false;
    }

    function DisplayReviews(data) {
        // data normally formatted here and passed to formattedData variable
        var formattedData = FormatData(data);
        $('#reviewScreen').html(formattedData);
    }

    function FormatData(data) {
        // function reformats data... code removed for space..
        return data;
    }

});*/

/* --------- Images --------- */

function resizeLogin() {
    var $image = $('img.imgLogin');
    var image_width = $image.width();
    var image_height = $image.height();
    var over = image_width / image_height;
    var under = image_height / image_width;
    var body_width = $(window).width();
    var body_height = $(window).height();
    if (body_width / body_height >= over) {
        $image.css({
            'width': body_width + 'px',
            'height': Math.ceil(under * body_width) + 'px',
            'left': '0px',
            'top': Math.abs((under * body_width) - body_height) / -2 + 'px'
        }); }
    else {
        $image.css({
            'width': Math.ceil(over * body_height) + 'px',
            'height': body_height + 'px',
            'top': '0px',
            'left': Math.abs((over * body_height) - body_width) / -2 + 'px'
        }); }
}
$(document).ready(function() {
    // Au chargement initial
    resizeLogin();
    // En cas de redimensionnement de la fenêtre
    $(window).resize(function(){
        resizeLogin();
    });
});

function resizeError() {
    var $image = $('img.imgError');
    var image_width = $image.width();
    var image_height = $image.height();
    var over = image_width / image_height;
    var under = image_height / image_width;
    var body_width = $(window).width();
    var body_height = $(window).height();
    if (body_width / body_height >= over) {
        $image.css({
            'width': body_width + 'px',
            'height': Math.ceil(under * body_width) + 'px',
            'left': '0px',
            'top': Math.abs((under * body_width) - body_height) / -2 + 'px'
        }); }
    else {
        $image.css({
            'width': Math.ceil(over * body_height) + 'px',
            'height': body_height + 'px',
            'top': '0px',
            'left': Math.abs((over * body_height) - body_width) / -2 + 'px'
        }); }
}
$(document).ready(function() {
    // Au chargement initial
    resizeError();
    // En cas de redimensionnement de la fenêtre
    $(window).resize(function(){
        resizeError();
    });
});