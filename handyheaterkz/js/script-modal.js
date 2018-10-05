$('.button').click(function(){
    var buttonId = $(this).attr('id');
    $('#modal-container').removeAttr('class').addClass(buttonId);
    $('body').addClass('modal-active');
})

$('.button').click(function(){
    var buttonId = $(this).attr('id');
    $('#modal-container-1').removeAttr('class').addClass(buttonId);
    $('body').addClass('modal-active');
})

$('.button').click(function(){
    var buttonId = $(this).attr('id');
    $('#modal-container-2').removeAttr('class').addClass(buttonId);
    $('body').addClass('modal-active');
})

$('.button').click(function(){
    var buttonId = $(this).attr('id');
    $('#modal-container-3').removeAttr('class').addClass(buttonId);
    $('body').addClass('modal-active');
})





$('.modal_back').click(function(){
    $('#modal-container').addClass('out');
     $('body').removeClass('modal-active');
 });

 $('.modal_back').click(function(){
     $('#modal-container-1').addClass('out');
     $('body').removeClass('modal-active');
 });

 $('.modal_back').click(function(){
     $('#modal-container-2').addClass('out');
     $('body').removeClass('modal-active');
 });

 $('.modal_back').click(function(){
     $('#modal-container-3').addClass('out');
    $('body').removeClass('modal-active');
 });

$('.chr').click(function(){
    $('#modal-container').addClass('out');
    $('body').removeClass('modal-active');
});

$('.chr').click(function(){
    $('#modal-container-1').addClass('out');
    $('body').removeClass('modal-active');
});

$('.chr').click(function(){
    $('#modal-container-2').addClass('out');
    $('body').removeClass('modal-active');
});

$('.chr').click(function(){
    $('#modal-container-3').addClass('out');
    $('body').removeClass('modal-active');
});
