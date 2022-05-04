@extends('layouts.app', ['active' => 'Tools&TrainingVideos', 'subactive' => 'email_addendum_verbiage_builder'])
@section('css')
<style>
    .form-control:disabled,
    .form-control[readonly] {
        background: none !important;
    }

    .editor {
        border: solid 1px #ccc;
        padding: 20px;
        min-height: 200px;
    }

    .sample-toolbar {
        border: solid 1px #ddd;
        background: #f4f4f4;
        padding: 5px;
        border-radius: 3px;
    }

    .sample-toolbar>span {
        cursor: pointer;
    }

    .sample-toolbar .fa {
        color: black !important;
    }

    .sample-toolbar>span:hover {
        text-decoration: underline;
    }

    @media (min-width: 576px) {
        .modal-dialog {
            max-width: 700px !important;
        }
    }
    .h1-luxe {
        font-family: 'gothicbold';
    }
    .btn-secondary {
        font-size: 18px !important;
        font-family: 'gothicbold';
    }
</style>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css"
    integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
@endsection
@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <h1 class="h1-luxe">{{$writtenEmailTemplate->title}}</h1>
    </div>
    <div class="row my-4">
        @if($isAdmin)
        <div class="col-lg-4">
            <a href="" data-toggle="modal" data-target="#createModal"
                class="btn btn-luxe w-100 show-btn m-2 d-flex align-items-center justify-content-center"
                style="height: 70px">New Item</a>
        </div>
        @endif
        @if($items->count())
        @foreach($items as $item)
        <div class="col-lg-4">
            <a href="" data-toggle="modal" data-target="#exampleModalCenter" data-id="{{$item->id}}"
                data-title="{{$item->title}}" data-content="{{$item->content}}" onclick="populateModal(this)"
                class="btn btn-luxe w-100 show-btn m-2 d-flex align-items-center justify-content-center"
                style="height: 70px;white-space: pre-wrap;">{{$item->title}}</a>
        </div>
        @endforeach
        @else
        <p>No items found</p>
        @endif
    </div>
</div>

<div class="modal fade modal-new" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <form id="form-2" action="{{route('written-email-templates.item.update')}}" method="POST"
                class="d-flex flex-column" onsubmit="submit_email_update()">
                @csrf
                @method('PUT')
                <input type="hidden" name="id" id="itemIdUpdate">
                <input type="hidden" name="content" id="update-content">
                <div class="modal-header">
                    <h4 class="modal-title">Email Template</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="form-group col-12 pt-4">
                    <label for="content">Title:</label>
                    <input type="text" class="form-control" id="exampleModalLongTitle" name="title"
                        {{$isAdmin ? '' : 'disabled' }} required>
                </div>
                <div class="form-group col-12 ">
                    <label for="content">Content:</label>
                    <div class="sample-toolbar">
                        <a href="javascript:void(0)" onclick="format('bold')"><span class="fa fa-bold fa-fw"></span></a>
                        <a href="javascript:void(0)" onclick="format('italic')"><span
                                class="fa fa-italic fa-fw"></span></a>
                    </div>
                    <div class="editor form-control" id="sampleeditor2">
                    </div>
                    <p id="copy-info" style="color:red;display:none"><i>* Copy the text using your mouse (Right Click +
                            Copy)
                            or keyboard (CTRL+C)</i>
                    </p>
                </div>
                <div class="modal-footer1 justify-content-center">
                    <div class="row w-100">
                        <div class="{{$isAdmin ? 'col-lg-6' : 'col-12'}} align-self-center text-center">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-luxe" onclick="selectText('sampleeditor2')">Select Text
                            </button>
                        </div>
                        <div class="buttons d-flex flex-row-reverse align-items-center col-lg-6 justify-content-center">
                            @if($isAdmin)
                            <button type="submit" class="btn btn-luxe">Save Changes</button>
                            @endif
            </form>
            @if($isAdmin)
            <form action="{{route('written-email-templates.item.delete')}}" method="POST">
                @csrf
                @method('DELETE')
                <input type="hidden" name="id" id="itemId">
                <button type="submit" class="btn btn-danger mt-lg-3 mt-2 mr-2">Delete</button>
        </div>
    </div>
    </form>
    @endif
</div>
</div>
</div>
</div>
@endsection
<div class="modal fade modal-new" id="createModal" tabindex="-1" role="dialog" aria-labelledby="createModal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle1">Add a new Item</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="form" class="form row" method="POST"
                    action="{{route('written-email-templates.item.store',$writtenEmailTemplate)}}"
                    onsubmit="submit_email()">
                    @csrf
                    <input type="hidden" name="content" id="email-content" value="">
                    <div class="form-group col-12">
                        <label for="title">Title:</label>
                        <input type="text" name="title" id="title" class="form-control" required>
                    </div>
                    <div class="form-group col-12">
                        <label for="content">Content:</label>
                        <div class="sample-toolbar">
                            <a href="javascript:void(0)" onclick="format('bold')"><span
                                    class="fa fa-bold fa-fw"></span></a>
                            <a href="javascript:void(0)" onclick="format('italic')"><span
                                    class="fa fa-italic fa-fw"></span></a>
                        </div>
                        <div class="editor form-control" id="sampleeditor">
                        </div>
                    </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-luxe">Save</button>
            </div>
            </form>
        </div>
    </div>
</div>

@section('js')
<script>
    function selectText(containerid) {
        if (document.selection) { // IE
            var range = document.body.createTextRange();
            range.moveToElementText(document.getElementById(containerid));
            range.select();
        } else if (window.getSelection) {
            var range = document.createRange();
            range.selectNode(document.getElementById(containerid));
            window.getSelection().removeAllRanges();
            window.getSelection().addRange(range);
        }
        $('#copy-info').css('display','block')
    }
    function submit_email(){
        var html = document.getElementById('sampleeditor').innerHTML
        document.querySelector('[name="content"]').value = html
        document.getElementById('form').submit()
        return true;
    }
    function submit_email_update(){
        var html = document.getElementById('sampleeditor2').innerHTML
        document.getElementById('update-content').value = html
        document.getElementById('form-2').submit()
        return true;
    }
    function copyToClipboard() {
        var copyText = document.getElementById('sampleeditor2').innerText;
        console.log($('#sampleeditor2'))
        console.log(copyText)
        navigator.clipboard.writeText(copyText);
        toastr.success("Copied");
    }

    function populateModal(val,item) {
        $('#copy-info').css('display','none')
        document.getElementById('exampleModalLongTitle').value = val.getAttribute('data-title')
        if (document.getElementById('itemId') != null)
            document.getElementById('itemId').value = val.getAttribute('data-id')
        document.getElementById('itemIdUpdate').value = val.getAttribute('data-id')
        document.getElementById('sampleeditor2').innerHTML = val.getAttribute('data-content')
    }
        window.addEventListener('load', function(){
        document.getElementById('sampleeditor').setAttribute('contenteditable', 'true');
        document.getElementById('sampleeditor2').setAttribute('contenteditable', 'true');
    });
    
    function format(command, value) {
        document.execCommand(command, false, value);
    }
</script>
@endsection