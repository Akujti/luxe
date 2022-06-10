<style>
    .modal-header {
        font-family: 'gothicbold';
    }

    button {
        cursor: pointer;
    }

    .modal-body .bg {
        position: relative;
        background: #0000004a;
        height: 92.3vh;
    }

    .modal-body .main-container {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
    }

    .modal-body .carousel-container {
        display: flex;
        width: 600px;
        position: relative;
    }

    .modal-body .carousel-images {
        overflow: hidden;
        display: flex;
        border-radius: 8px;
    }

    .modal-body .img {
        width: 400px;
        object-fit: cover;
        transform: translateX(0);
        transition: transform 0.4s;
    }

    .modal-body .fa-arrow-right,
    .modal-body .fa-arrow-left {
        background-color: lightblue;
        position: absolute;
        top: 50%;
        padding: 0.5em;
        border-radius: 5px;
        color: #ffffff;
        cursor: pointer;
        outline: none;
    }

    .modal-body .fa-arrow-right {
        right: -18px;
    }

    .modal-body .fa-arrow-left {
        left: -18px;
    }
    .modal-header {
        background-color: #000;
        border-bottom: 1px solid #000 !important;
    }
    .modal-header button {
        width: 50px;
        height: 50px;
        border-radius: 50%;
        background-color: #fff !important;
        display: flex;
        justify-content: center;
        align-items: center;
        opacity: 1 !important;
    }
    .modal-header button span {
        color: #000;
    }
    .modal-body img {
        width: 600px !important;
        height: 600px !important;
    }
    .modal-content {
        background: transparent !important;
    }
</style>
<!-- Modal -->
<div class="modal fade modal-new p-0" id="slider" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog p-0 m-0" role="document" style="max-width:100% !important;width:100% !important;">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body p-0 m-0">
                <div class="bg"></div>
                <div class="main-container">
                   
                    <div class="carousel-container" id="carousel-container">
                        <div class="carousel-images"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    var item = JSON.parse(JSON.stringify(<?php echo @json_encode($data); ?>));
    const images = [];
    const allowedExtension = '{{ config('allowed-extension-file.media.images') }}';
    item.row.image.forEach(img => {
        if(allowedExtension.search(img.type) !== -1) {
            images.push(img.file_url)
        }
    });

    let active = 0;
    let translateX = 0;
    let timerId = null;

    const carouselContainer = document.querySelector('.carousel-container');
    const carouselImages = document.querySelector('.carousel-images');
    const bg = document.querySelector('.bg');


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
        document.querySelectorAll('.modal-body img').forEach((img) => {
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
</script>