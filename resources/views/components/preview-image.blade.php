<div>
    <style>
        .preview-modal .modal-target {
            width: 300px;
            border-radius: 5px;
            cursor: pointer;
            transition: 0.3s;
        }

        .preview-modal .modal-target:hover {
            opacity: 0.7;
        }

        .preview-modal {
            display: none;
            position: fixed;
            padding-top: 0px;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgb(0, 0, 0);
            background-color: rgba(0, 0, 0, 0.8);
            z-index: 999;
        }

        .preview-modal .modal-content {
            margin: auto;
            display: block;
            width: 100% !important;
            opacity: 1 !important;
            max-width: 100% !important;
            height: 100vh !important;
            object-fit: contain !important;
            background-color: #21252914;
        }

        .preview-modal .modal-content {
            -webkit-animation-name: zoom;
            -webkit-animation-duration: 0.6s;
            animation-name: zoom;
            animation-duration: 0.6s;
        }

        @-webkit-keyframes zoom {
            from {
                -webkit-atransform: scale(0)
            }
            to {
                -webkit-transform: scale(1)
            }
        }

        @keyframes zoom {
            from {
                transform: scale(0)
            }
            to {
                transform: scale(1)
            }
        }

        .preview-modal .modal-close {
            position: absolute;
            top: 15px;
            right: 35px;
            color: #fff;
            font-size: 40px;
            font-weight: bold;
            z-index: 1;
            transition: 0.3s;
        }

        .preview-modal .modal-close:hover,
        .preview-modal .modal-close:focus {
            color: #bbb;
            text-decoration: none;
            cursor: pointer;
        }
    </style>
    <div>
        {{ $slot }}
    </div>

    <div id="modal" class="modal preview-modal">
        <span id="modal-close" class="modal-close">&times;</span>
        <img id="modal-content" class="modal-content">
    </div>

    <script>
        var modal = document.getElementById('modal')

        var modalClose = document.getElementById('modal-close')
        modalClose.addEventListener('click', function () {
            modal.style.display = 'none'
        })

        $(document).ready(function () {
            document.addEventListener('click', function (e) {
                if (e.target.className.indexOf('modal-target') !== -1) {
                    var img = e.target
                    var modalImg = document.getElementById('modal-content')
                    modal.style.display = 'block'
                    modalImg.src = img.src
                }
            })
        })
    </script>
</div>