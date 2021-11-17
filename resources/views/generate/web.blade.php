@extends('layouts.app')
@section('content')
<style>
    label {
        background-color: #FFCF40;
        padding: 10px;
        display: block;
    }

    input,
    textarea {
        font-size: 15px;
        margin-top: 10px;
        margin-bottom: 5px;
        width: 100%;
        border: 1px solid #FFCF40;
        font-family: Lato;
    }

    .button {
        margin-top: 50px;
    }

    .generate {
        font-family: "Lato";
        font-weight: 600;
        font-size: 18px;
        padding: 20px;
        background-color: #FFCF40;
        color: white;
        text-decoration: none;
    }
</style>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.5.9/cropper.js"
    integrity="sha512-oqBsjjSHWqkDx4UKoU+5IUZN2nW2qDp2GFSKw9+mcFm+ZywqfBKp79nfWmGPco2wzTWuE46XpjtCjZ9tFmI12g=="
    crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.5.9/cropper.css"
    integrity="sha512-949FvIQOibfhLTgmNws4F3DVlYz3FmCRRhJznR22hx76SKkcpZiVV5Kwo0iwK9L6BFuY+6mpdqB2+vDIGVuyHg=="
    crossorigin="anonymous" />

<body>
    <form action="{{ route('generate.offer') }}" method="POST">
        @csrf
        <div class="container">
            <div class="row justify-content-center">
                <div class="row-input">
                    <div class="">
                        <label for="page-1-img-1">Upload CSV</label>
                        <input type="file" id="img-3-input" onchange="img_3_change()">
                    </div>
                    <div class="" style="margin-top:20px;">
                        <button type="submit" name="action" value="Generate" class="generate w-100">Generate</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
</body>

@endsection