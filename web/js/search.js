$(function() {
    //Open full description
    $('.records_list').on('click', '.r_viewfull-button', function(e) {
     
        var $item = $(this).closest('.resource');

        e.preventDefault();
        $(this).hide();
        $item.find('.r_fulldescription').removeClass('is_closed').addClass('is_open');

    });

    //Close full description
    $('.records_list').on('click', '.r_closefull-button', function(e) {
        var $item = $(this).closest('.resource');
        e.preventDefault();
        $item.find('.r_fulldescription').removeClass('is_open').addClass('is_closed');
        $item.find('.r_viewfull-button').show();
    });
    
});