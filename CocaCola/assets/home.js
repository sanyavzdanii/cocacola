const targetSlide2or3 = document.querySelector('.swiper-slide:nth-of-type(2), .swiper-slide:nth-of-type(3)');
const targetSlide1 = document.querySelector('.swiper-slide:nth-of-type(1)');
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


// стилизация селекта

Select(document.querySelector('.beatu-select'));


function Select(yourselect){
    yourselect.style.display = 'none';
    let newdiw = document.createElement("div");
    let parentDiv = yourselect.parentNode;
    parentDiv.insertBefore(newdiw, yourselect);
    newdiw.classList.add('selectel');
    newdiw.innerHTML = `<div class="button">Gender</div><div class="selectlist"> </div>`;
    let list = newdiw.querySelector('.selectlist');
    yourselect.querySelectorAll('option').forEach(element => {
        list.innerHTML += `<div data-id="${element.index}">${element.text}</div>`;
    });
    newdiw.querySelector('.button').onclick = function(){
        if(list.style.display == 'block') { list.style.display = 'none'; newdiw.classList.remove('open'); }
        else { list.style.display = 'block'; newdiw.classList.add('open'); }
    }
    newdiw.querySelectorAll('.selectlist > div').forEach(element => {
        element.onclick = function(){
            newdiw.querySelectorAll('.selectlist > div').forEach(element => {
                element.classList.remove('active-list');
            });
            newdiw.querySelector('.button').innerText = this.innerText;
            this.classList.add('active-list');
            list.style.display = 'none';
            yourselect.options[this.dataset.id].selected=true;
        }
    });
}

