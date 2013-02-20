$(function(){
    
    $(document.body).css({
        'background-position-y': -15
    }).animate({
        'background-position-y': 0
    }, 2500, 'easeOutQuint');
   
    $('.body-wrapper').css({
        'background-position-y': -40
    }).animate({
        'background-position-y': 0
    }, 3500, 'easeOutQuint');
    
})