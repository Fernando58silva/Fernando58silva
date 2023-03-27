$(document).ready(function(){

    $("header  .header-bottom  .bar").on('click', function(){
        $(this).next().toggleClass('active');
        $(this).children().toggleClass(' fa-bars fa-times');
        $('body').togglaClass('menu-active');
    });

    $(" body.admin header .container .left svg").on('click', function(){
        $('.menu_lateral').toggleClass('active');
    });

    $(" body.admin .menu_lateral .close").on('click', function(){
        $('.menu_lateral').toggleClass('active');
    });


    $('.marcas .galeria').slick({
        autoplay: true,
        autoplayspeed: 200,
        infinite: true,
        slidesToShow: 5,
        prevArrow: '<button class="slick-prev"><i class="fas fa-chevron-left"></i></buttom>',
        nextArrow: '<button class="slick-next"><i class="fas fa-chevron-right"></i></buttom>',
        responsive: [
            {
              breakpoint: 1024,
              settings: {
                  slidesToShow: 3,
                  slidesToScroll: 1
                }
              },
              {
                  breakpoint: 768,
                  settings: {
                      slidesToShow: 2,
                      slidesToScroll: 1
                  }
               },
               {
                breakpoint: 420,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
             }
            ]
        });

    $('.clientes .carrocel').slick({
        autoplay: true,
        autoplayspeed: 500,
        infinite: true,
        prevArrow: '<button class="slick-prev"><i class="fas fa-chevron-left"></i></buttom>',
        nextArrow: '<button class="slick-next"><i class="fas fa-chevron-right"></i></buttom>'
    });
   

    $('.banner .itens').slick({
        autoplay: true,
        autoplayspeed: 500,
        infinite: true,
        prevArrow: '<button class="slick-prev"><i class="fas fa-chevron-left"></i></buttom>',
        nextArrow: '<button class="slick-next"><i class="fas fa-chevron-right"></i></buttom>'
    });

    $('.servicos.slider .itens').slick({
        infinite: true,
        slidesToShow: 3,
        slidesToScroll: 1,
        arrows: false,
        dots: true,
        autoplay: true,
        autoplayspeed: 200,      
        responsive: [
              {
                  breakpoint: 1024,
                  settings: {
                      slidesToShow: 2,
                      slidesToScroll: 1
                  }
               },
               {
                breakpoint: 768,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
             }
            ]
       });

       $('.noticias .itens').slick({
        infinite: true,
        slidesToShow: 3,
        slidesToScroll: 1,
        arrows: false,
        dots: true,
        autoplay: true,
        autoplayspeed: 100,      
        responsive: [
              {
                  breakpoint: 1024,
                  settings: {
                      slidesToShow: 2,
                      slidesToScroll: 1
                  }
               },
               {
                breakpoint: 768,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
             }
            ]
       });
       $('.galeria_fotos .itens').slick({
        infinite: true,
        slidesToShow: 3,
        slidesToScroll: 1,
        arrows: false,
        dots: true,
        autoplay: true,
        autoplayspeed: 3000,      
        responsive: [
              {
                  breakpoint: 1024,
                  settings: {
                      slidesToShow: 2,
                      slidesToScroll: 1
                  }
               },
               {
                breakpoint: 768,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
             }
            ]
       });

      $( '.swipebox' ).swipebox();
      $( '.swipebox-video' ).swipebox();
});