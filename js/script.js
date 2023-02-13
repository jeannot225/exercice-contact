
$(function() 
{
    $('#contact-form').submit(function(e)
    {
        e.preventDefault();
        $('.comments').empty();
        var postdata = $('#contact-form').serialize();

        $.ajax({
            type: 'POST',
            url: 'php/contact.php',
            data: postdata,
            dataType:'json',
            success: function(result)
            {

                if(result.isSuccess)
                {
                    $("#contact-form").append("<p class= 'thank-you'> Votre message a bien été enregistré. Merci de nous avoir contacté :)</p>");
                    $("#contact-form")[0].reset();
                }
                else
                {
                    $("#name + .comments").html(result.nameERROR);
                    $("#firstname + .comments").html(result.firstnameERROR);
                    $("#email + .comments").html(result.emailERROR);
                    $("#phone + .comments").html(result.phoneERROR);
                    $("#message + .comments").html(result.messageERROR);
                }
                
            }

        })
    });
})