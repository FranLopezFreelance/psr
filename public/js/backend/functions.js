$( document ).ready(function() {

  //JS para Tags
    $(".tags").select2();

  //JS para Text Editor
  tinymce.init({
  selector: '.text',
  language: 'es',
  height: 500,
  theme: 'modern',
  plugins: [
    'advlist autolink lists link image charmap print preview hr anchor pagebreak',
    'searchreplace wordcount visualblocks visualchars code fullscreen',
    'insertdatetime media nonbreaking save table contextmenu directionality',
    'emoticons template paste textcolor colorpicker textpattern imagetools codesample toc'
  ],
  toolbar1: 'undo redo | insert | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image',
  toolbar2: 'print preview media | forecolor backcolor emoticons | codesample',
  image_advtab: true,
  templates: [
    { title: 'Test template 1', content: 'Test 1' },
    { title: 'Test template 2', content: 'Test 2' }
  ],
  content_css: [
    '//fonts.googleapis.com/css?family=Lato:300,300i,400,400i',
    '//www.tinymce.com/css/codepen.min.css'
  ]
 });

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

    //Agregar Tag
    $('.saveNewTag').click(function(){
      var newTag = $('.newTag').val();
        $('.newTag').val('');
      var url = '/backend/tags/create/'+ newTag;
        $.ajax({
              type: "GET",
              url: url,
              data: newTag, // serializes the form's elements.
              success: function(data)
              {
                $('.tags').append($('<option>', {
                    value: data.id,
                    text : data.name
                }));
              }
        });
    });

});
