$( document ).ready(function() {
    if($('.message')){
      var message = $('.message');
      setTimeout(function(){
        message.fadeOut( "slow" );
      }, 3000);
    }


});
