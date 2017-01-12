$( document ).ready(function() {
  //Generar el link a partir del Título de un artículo
    $('.title').focusout(function(){
      var url = $('.title').val().replace(/ /g, '-');
      $('.url').val(url.toLowerCase());
    });
    //Por las dudas se intente cambiar
    $('.url').focusout(function(){
      var url = $('.title').val().replace(/ /g, '-');
      $('.url').val(url.toLowerCase());
    });

    //Ocultar Mensajes después de 2 segundos
    if($('.message')){
      var message = $('.message');
      setTimeout(function(){
        message.fadeOut( "slow" );
      }, 2000);
    }

    //Ocultar o Mostrar Select de seccion principal
    if($('.level')){
      $('.level').change(function(){
        if($('.level option:selected').val() == 2){
          $('.principal').show();
        }else{
          $('.principal').hide();
        }
      });
    }

    //Ocultar o Mostrar Select de seccion principal en la pagina de edicion
    if($('.level')){
      if($('.level option:selected').val() == 2){
        $('.principal').show();
      }
      $('.level').change(function(){
        if($('.level option:selected').val() == 2){
          $('.principal').show();
        }else{
          $('.principal').hide();
        }
      });
    }

    //Checkear descheckear checkbox de Destacado
    // $('.dest').click(function(){
    //   if($(this).prop('checked', true)){
    //     $(this).prop('checked', false);
    //   }else{
    //     $(this).prop('checked', true);
    //   }
    // });

});
