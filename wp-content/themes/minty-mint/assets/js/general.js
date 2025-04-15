document.addEventListener('DOMContentLoaded', function () {
    const recentSlider = new Swiper(".js-recent-posts-slider", {
        slidesPerView: 1,
        spaceBetween: 0,
        loop: false,
        navigation: {
            nextEl: ".js-recent-posts-slider-next",
            prevEl: ".js-recent-posts-slider-prev",
        },
        breakpoints: {
            1024: {
                slidesPerView: 2,
                spaceBetween: 36,
            },
        }
    });


    document.getElementById('fileBtn').addEventListener('click', function () {
        document.getElementById('file').click();
    });

    document.getElementById('file').addEventListener('change', function () {
        const fileName = this.files[0] ? this.files[0].name : 'Файл не выбран';
        document.getElementById('fileName').textContent = fileName;
    });

    document.querySelector('.js-header-nav-toggle').addEventListener('click', function () {
        this.classList.toggle('active');
        document.querySelector('.js-header-nav').classList.toggle('--opened');
    });


});