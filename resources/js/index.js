$(document).ready(function () {
    var names = [];
    $(".swiper-wrapper .swiper-slide").each(function (i) {
        names.push($(this).data("name"));
    });

    var swiper_container = $(".swiper-container")[0];
    var swiper_wrapper = $(".swiper-wrapper")[0];
    var swiper_slide = $(".swiper-slide");
    var all_li = $(".dau-tu ul li");

    const turnOffSwiper = () => {
        if (window.innerWidth <= 768) {
            swiper_container.classList.remove("swiper-container");
            swiper_wrapper.classList.remove("swiper-wrapper");
            swiper_slide.removeClass("swiper-slide");
            all_li.removeClass("cell");
            all_li.removeClass("active-cell");
        }
    };

    turnOffSwiper();

    $(".dau-tu ul .cell").hover(function () {
        $("li ").removeClass("active-cell");
        $(this).addClass("active-cell");
    });

    var swiper = new Swiper(".swiper-container", {
        direction: "vertical",
        slidesPerView: 1,
        mousewheel: true,
        simulateTouch: false,
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
            renderBullet: function (index, className) {
                return `<div class="${className} position-relative">
                    <p>${index + 1} 
                    <span class="names">${names[index]} </span>
                    </p>
                    </div>
                    `;
            },
        },
    });
});

// new fullpage('#fullpage', {
//     //options here
//     autoScrolling:true,
//     scrollHorizontally: true
// });
