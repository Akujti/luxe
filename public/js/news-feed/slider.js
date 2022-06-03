let active = 0;
let translateX = 0;
let timerId = null;

const carouselContainer = document.querySelector('.carousel-container');
const carouselImages = document.querySelector('.carousel-images');

const imgFragment = document.createDocumentFragment()
images.forEach((img) => {
    const imgEl = document.createElement('img');
    imgEl.src = img;
    imgEl.classList.add(...['img']);
    imgFragment.append(imgEl)
});
carouselImages.append(imgFragment);

['fa-arrow-left', 'fa-arrow-right'].forEach((icon) => {
    const iconEl = document.createElement('i');
    iconEl.classList.add(...['fa-solid', icon]);
    iconEl.addEventListener('click', () => slide(icon))
    carouselContainer.append(iconEl)
})


function slide(direction) {
    if (direction.includes('left')) {
        if (active === 0) {
            active = images.length - 1;
            translateX = -1 * (600 * (images.length - 1));
        } else {
            active -= 1
            translateX += 600;
        }
    } else {
        if (active === images.length - 1) {
            active = 0;
            translateX = 0
        } else {
            active += 1
            translateX -= 600;
        }
    }
    document.querySelectorAll('.box-image-preview img').forEach((img) => {
        img.style.transform = `translateX(${translateX}px)`;
    })
}

document.addEventListener('keyup', ({
    code
}) => {
    if (code === 'ArrowRight') {
        slide('right')
    } else {
        slide('left')
    }
})