$(document).ready(function(){
    $("#mais-noticias").click(function(){
        window.location.href = 'noticias';
    });

    $("#politica").click(function(){
        var marcado = $(this).is(':checked');
        if(marcado == true){
            $('#botao-cadastrar').removeAttr('disabled');
        }else{
            $('#botao-cadastrar').attr('disabled', true);
        }
    });
});