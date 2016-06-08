/**
 * Created by theo on 02/06/16.
 */
 
$(document).ready(function() {
    $('#alert_drop_bdd_comfirm').on('shown.bs.modal', function () {
        $('#alert_drop_bdd_comfirm').focus()
    });
    $('#page_refresh').click(function(){
        location.reload();
    });
});
