$(document).ready(function(){
    // $('#iconeMenu').click(function(){
    //     // função para click no icone de menu 
    //     $('#menuMoba').fadeToggle(1000)
    // }); 
    // // função que faz o menu subir ao clicar non itemn do menu 
    // $('.itemMenu').click(function(){
    //     $('#menuMoba').fadeOut()
    // })

    var slideAuto= setInterval(slideGo,3000)
    $('.slide_nav_item.g').click(function(){
        slideGo();
        clearInterval(slideAuto);
    })
    
    $('.slide_nav_item.b').click(function(){
        slideBack();
        clearInterval(slideAuto);
    })
    $('slide_nav_item.g').dblclick(function(){
        var slideAuto=setInterval(slideGo,3000);
    })
    $('slide_nav_item b').dblclick(function(){
        var slideAuto=setInterval(slideBack,3000);
    })
    function slideGo(){
        if($('.slide_item.primeiro').next().length){
            $('.slide_item.primeiro').fadeOut(400, function(){
                $(this).removeClass('primeiro').next().fadeIn().addClass('primeiro');
            });
        }else{
            $('.slide_item.primeiro').fadeOut(400, function(){
                $('.slide_item').removeClass('primeiro');
                $('.slide_item:eq(0)').fadeIn().addClass('primeiro')
            })
        }
    }
    function slideBack(){
        if($('.slide_item.primeiro').index()>1){
            $('.slide_item.primeiro').fadeOut(400, function(){
                $(this).removeClass('primeiro').prev().fadeIn().addClass('primeiro');
            });
        }else{
            $('.slide_item.primeiro').fadeOut(400, function(){
                $('.slide_item').removeClass('primeiro');
                $('.slide_item:last-of-type').fadeIn().addClass('primeiro')
            })
        }
    }
    $('.prod').click(function(){
        $('promoP').addClass('some');
        $('prodM').addClass('some');
        $('.produtao').addClass('aparece')
    })
    $('.promoP').click(function(){
        $('promoP').addClass('aparece');
        $('prodM').addClass('some');
        $('.produtao').addClass('some')
    })
    $('.promoM').click(function(){
        $('promoP').addClass('some');
        $('prodM').addClass('aparece');
        $('.produtao').addClass('some')
    })
})        
  