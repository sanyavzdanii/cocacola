const targetSlide2or3 = document.querySelector('swiper-slide:nth-of-type(2), swiper-slide:nth-of-type(3)');
const targetSlide1 = document.querySelector('swiper-slide:nth-of-type(1)');
const $prizeButton = document.querySelectorAll('.prize-button');
const activeClass = 'active';

function onClassAdded(element, className, callback) {
    // Создаем наблюдателя
    const observer = new MutationObserver((mutationsList) => {
        for (let mutation of mutationsList) {
            if (mutation.type === 'attributes' && mutation.attributeName === 'class') {
                if (element.classList.contains(className)) {
                    callback();
                }
            }
        }
    });

    // Настраиваем наблюдатель на элемент
    observer.observe(element, { attributes: true });
}

onClassAdded(targetSlide2or3, 'swiper-slide-active', () => {
    const $sneginka = document.querySelector('.mySwiper-sneginka');
    const isMove = $sneginka.classList.contains('move');
    
    if(!isMove) {
        $sneginka.classList.add('move');
    }
});
onClassAdded(targetSlide1, 'swiper-slide-active', () => {
    const $sneginka = document.querySelector('.mySwiper-sneginka');
    const isMove = $sneginka.classList.contains('move');

    if(isMove) {
        $sneginka.classList.remove('move');
    }
});

$prizeButton.forEach(item => {
    item.addEventListener('click', function() {
        // Удаляем класс active у всех элементов с классом my-class
        $prizeButton.forEach(el => el.classList.remove('active'));

        // Добавляем класс active к тому элементу, по которому кликнули
        this.classList.add('active');

        // Получаем значение data-атрибута data-index
        const index = this.getAttribute('data-id');

        document.querySelectorAll('.prize-box').forEach(el => el.classList.remove('active'));
        document.querySelector(`.prize-box:nth-of-type(${index})`).classList.add('active');
    });
});

document.addEventListener('DOMContentLoaded', function() {
    const swiperElement = document.querySelector('swiper-container');
    const swiperWrapper = swiperElement ? swiperElement.querySelector('.swiper-wrapper') : null;

    if (window.innerWidth < 768) {
        if (swiperElement && swiperElement.swiper) {
            swiperElement.swiper.destroy(true, true); // Уничтожаем Swiper

            if (swiperWrapper) {
                swiperWrapper.style.transform = 'none'; // Сбрасываем трансформацию, если элемент существует
            }

            swiperElement.style.height = 'auto'; // Сбрасываем высоту контейнера
        }
    }

    window.addEventListener('resize', function() {
        if (window.innerWidth < 768) {
            if (swiperElement && swiperElement.swiper) {
                swiperElement.swiper.destroy(true, true);

                if (swiperWrapper) {
                    swiperWrapper.style.transform = 'none';
                }

                swiperElement.style.height = 'auto';
            }
        }
    });
});


