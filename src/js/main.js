$(function(){
    $('.button').click(function(e){
        e.preventDefault();

        var selector = $(this).attr('data-for');
        $('.years').fadeOut(500).promise().done(function(){
            $('#' + selector).fadeIn(500);
        });
    });
});