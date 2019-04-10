jQuery(function() {
    var categoriesSwiper = new Swiper('#categories-swiper', {
        slidesPerView: 4,
        spaceBetween: 40,
        breakpoints: {
            1024: {
                slidesPerView: 4,
                spaceBetween: 40,
            },
            768: {
                slidesPerView: 3,
                spaceBetween: 30,
            },
            640: {
                slidesPerView: 2,
                spaceBetween: 20,
            },
            375: {
                slidesPerView: 1,
                spaceBetween: 10,
            }
        },
        pagination: {
            el: '.swiper-pagination'
        }
    })

    var how2BuySwiper = new Swiper('#how2buy-swiper', {
        slidesPerView: 5,
        spaceBetween: 40,
        breakpoints: {
            1024: {
                slidesPerView: 5,
                spaceBetween: 40,
            },
            768: {
                slidesPerView: 3,
                spaceBetween: 30,
            },
            640: {
                slidesPerView: 2,
                spaceBetween: 20,
            },
            375: {
                slidesPerView: 1,
                spaceBetween: 10,
            }
        },
        pagination: {
            el: '.swiper-pagination'
        }
    })
})
