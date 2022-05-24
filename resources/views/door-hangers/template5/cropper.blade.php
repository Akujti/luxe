<html>
<style>
    .modal {
        display: none;
        position: fixed;
        z-index: 1;
        padding-top: 100px;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        overflow: auto;
        background-color: rgb(0, 0, 0);
        background-color: rgba(0, 0, 0, 0.4);
    }
    .modal-content {
        background-color: #fefefe;
        margin: auto;
        padding: 20px;
        border: 1px solid #888;
        border-radius: 15px;
        width: 30%;
    }
    .modal-footer {
        text-align: end;
    }
    .close {
        color: #aaaaaa;
        float: right;
        font-size: 20px;
        font-weight: bold;
        border: 1px solid gray;
        border-radius: 15px;
        padding: 5px 10px;
        background: none;
    }
    .close:hover {
        color: #000 !important;
    }
    .close:hover,
    .close:focus {
        color: #000;
        text-decoration: none;
        cursor: pointer;
    }
    .modal-body {
        padding-top: 20px;
        padding-bottom: 20px;
        border-bottom: 1px solid gray;
    }
    .modal__body-item-1 {
        width: 50%;
        margin-bottom: 30px;
    }
    .modal-body-item {
        width: 100%;
        display: flex;
    }
    .modal__body-item-1 input {
        height: 30px;
        border-radius: 5px;
        border: 1px solid rgb(138, 137, 137);
        display: flex;
        font-size: 18px;
        width: 80%;
        margin: 0 auto;
    }
    .modal__body-item-1 label {
        display: flex;
        font-size: 20px;
        justify-content: center;
        margin-bottom: 5px;
    }
    .modal__body-item-1 select {
        font-size: 16px;
        width: 80%;
        display: flex;
        height: 30px;
        border: 1px solid rgb(138, 137, 137);
        border-radius: 5px;
        margin: 0px auto;
    }
    .modal__header {
        padding-bottom: 20px;
        display: flex;
        justify-content: space-between;
        border-bottom: 1px solid gray;
    }
    .modal__header h2 {
        margin: 0px;
    }
    .modal-footer {
        padding-top: 15px;
    }
    .modal-footer-save button {
        color: white !important;
        padding: 5px;
    }
    .preview img {
        max-width: 100%;
        width: 100%;
        height: 100%;
    }
</style>

<body>
    <div class="home-modal">
        <div id="myModal" class="modal">
            <div class="modal-content">
                <div class="modal__header">
                    <h2>Cropper</h2>
                    <button class="close" onclick="closeModal()">&times;</button>
                </div>
                <div class="modal-body">
                    <div class="preview">
                        <img src="/images/themes/assets/door-hangers/template5/img-1.png" id="preview-image" alt="">
                    </div>
                </div>
                <div class="modal-footer">
                    <div class="modal-footer-save">
                        <button id="btn-save" class="btn btn-luxe" onclick="save_crop()">Save</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.5.9/cropper.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/html2canvas@1.0.0-rc.5/dist/html2canvas.min.js"></script>
    <script src="{{ asset('js/themes/main.js') }}"></script>
    <script>
              
        function closeModal() {
            $('#myModal').css('display', 'none')
            if(cropper) {
                cropper.destroy()
            }
            if(cropper1) {
                cropper1.destroy()
            }
            if(cropper2) {
                cropper2.destroy()
            }
            if(cropper3) {
                cropper3.destroy()
            }
        }
    </script>
</body>

</html>