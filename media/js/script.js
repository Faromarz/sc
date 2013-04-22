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
        
        if($('#agenda-signup-name').val()){
            $.post('/ajax/send_agenda_mail', {
                    'id': $('#agenda-signup-item').attr('data-id'),
                    'name': $('#agenda-signup-name').val(),
                    'persons': $('#agenda-signup-persons').val(),
                    'comments': $('#agenda-signup-comments').val(),
                    'email': $('#agenda-signup-email').val(),
                    'date': $('#agenda-signup-date').val() 
                },  function(){
                    alert('Bedankt voor uw aanmelding! Er is een email verzonden naar de organisator, u zult bericht ontvangen.')
            });
        
            $('#agenda-backdrop').trigger('click');
        } else {
            alert('Voer tenminste een naam in.');
        }
        
        
    })
    
    $('.agenda-signup').each(function(){
        $(this).click(function(e){
            
            e.preventDefault();
            
            $('#agenda-signup-item').html($(this).attr('data-agendaitem'));
            $('#agenda-signup-item').attr('data-id', $(this).attr('data-id'));
            
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
    
    /**
     * Nieuwsbrief
     */
    $('#newsletter-submit').click(function(e){
        e.preventDefault();
        if(!$('#nl_name').val().length || !$('#nl_email').val().length || !valid_email($('#nl_email').val())){
            alert("Vul beide velden in alstublieft!")
            return false;
        } else {
            $.post('/ajax/send_newsletter_mail', {
                    'name': $('#nl_name').val(),
                    'email': $('#nl_email').val()
                },  function(){
                    alert('Bedankt voor uw aanmelding! Er is een email verzonden naar de beheerder.')
            });
        }
    });
    
})

var valid_email = function(email)
{
    var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(email);
}