$(function(){
    
    $('#c-right').css('min-height', $('#c-right').parent().height());
    
    $('#agenda-backdrop').click(function(){
        $('#agenda-signup').css('display', 'none');
        $('#agenda-backdrop').css('display', 'none');
    });
    
    $('#agenda-signup-cancel').click(function(e){
        e.preventDefault();
        $('#agenda-backdrop').trigger('click');
    })
    
    $('#agenda-signup-submit').click(function(e){
        e.preventDefault();
        
        
        
        alert('Bedankt voor uw aanmelding! Er is een email verzonden naar de organisator, u zult bericht ontvangen.')
        $('#agenda-backdrop').trigger('click');
    })
    
    $('.agenda-signup').each(function(){
        $(this).click(function(e){
            
            e.preventDefault();
            
            $('#agenda-signup-item').html($(this).attr('data-agendaitem'));
            
            $('#agenda-signup').css('display', 'block');
            $('#agenda-backdrop').css('display', 'block');
        });
    })
    
    /**
     * Guestbook
     */
    $('#guestbook-submit').click(function(e){
        e.preventDefault();
        if(!$('#gb_name').val().length || !$('#gb_text').val().length){
            alert("Vul beide velden in alstublieft!")
            return false;
        } else {
            $(this).closest('form').submit();
        }
    });
    
})