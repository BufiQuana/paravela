var names = [];
    $(".swiper-wrapper .swiper-slide").each(function(i) {
        names.push($(this).data("name"));
    });
var swiper = new Swiper('.swiper-container', {
    direction: 'vertical',
    slidesPerView: 1,
    mousewheel: true,
    simulateTouch: false ,
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
        renderBullet: function (index, className) {
          return '<div class="' + className + '">' + "<p>"+(index + 1) +'<span class="names">'+names[index]+"</span>"+"</p>"+ "</div>" ;
        },
      },
  });


  $(document).ready(function(){
    $('.dau-tu ul li ').hover(function(){
        $('li ').removeClass("active-cell");
        $(this).addClass("active-cell");
    });
    });

    // new fullpage('#fullpage', {
    //     //options here
    //     autoScrolling:true,
    //     scrollHorizontally: true
    // });
