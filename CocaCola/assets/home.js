

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

let swiper;

function initSwiper() {
    if (window.innerWidth >= 768) {
        swiper = new Swiper('swiper-container', {
            slidesPerView: 1,
            loop: true,
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
        });
    }
}

function destroySwiper() {
    if (swiper && window.innerWidth < 768) {
        swiper.destroy(true, true); // Уничтожаем Swiper
        swiper = undefined;
        document.querySelector('.mySwiper').style.display = 'block'; // Показываем все слайды
    }
}

// Инициализация Swiper при загрузке страницы
initSwiper();

// Обработка изменения размера экрана
window.addEventListener('resize', function() {
    destroySwiper();
    initSwiper();
});

// Убедитесь, что слайды видимы на мобильных устройствах
if (window.innerWidth < 768) {
    document.querySelector('.mySwiper').style.display = 'block';
}



