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

// Пример использования
const targetSlide2or3 = document.querySelector('swiper-slide:nth-of-type(2), swiper-slide:nth-of-type(3)');
const targetSlide1 = document.querySelector('swiper-slide:nth-of-type(1)');

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