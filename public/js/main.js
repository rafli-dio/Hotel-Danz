const spanMenu = document.getElementsByTagName('span');

const clickFirstSpan = () => {
    const firstSpan = document.getElementById('first-span');
    firstSpan.classList.toggle('spanFirst');
}

const clickMidleSpan = () => {
    const midleSpan = document.getElementById('midle-span');
    midleSpan.classList.toggle('spanMidle');
}

const clickLastSpan = () => {
    const lastSpan = document.getElementById('last-span');
    lastSpan.classList.toggle('spanLast');
}


for(items of spanMenu) {
    items.addEventListener('click', function(){
    const navSlide = document.querySelector('nav ul');
    navSlide.classList.toggle('slide')
        clickFirstSpan();
        clickMidleSpan();
        clickLastSpan();
    })
}
