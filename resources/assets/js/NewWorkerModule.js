$('#monitor').on('change', function () {
    monitorSize = $('#monitor_size');
    monitorSize.fadeToggle(400,'swing', function(){
    if($(monitorSize).is(':visible')) {
        $('select[name="monitor_size"]', this).attr('required', true);
    } else {
        $('select[name="monitor_size"]', this).attr('required', false);
    }
    });
});

$(document).ready(function() {
    $('.phone_device, .company, .domain, .monitor_size').select2({
        minimumResultsForSearch: -1
    });
});
