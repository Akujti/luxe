@extends('layouts.app')
@section('css')
    <style>
        .form-control:disabled, .form-control[readonly] {
            background: none !important;
        }

    </style>
@endsection
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <h1>{{$writtenEmailTemplate->title}}</h1>
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
                           data-title="{{$item->title}}" data-content="{{$item->content}}"
                           onclick="populateModal(this)"
                           class="btn btn-luxe w-100 show-btn m-2 d-flex align-items-center justify-content-center"
                           style="height: 70px">{{$item->title}}</a>
                    </div>
                @endforeach
            @else
                <p>No items found</p>
            @endif
        </div>
    </div>

    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
         aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <form action="{{route('written-email-templates.item.update')}}" method="POST"
                      class="d-flex flex-column">
                    @csrf
                    @method('PUT')
                    <input type="hidden" name="id" id="itemIdUpdate">
                    <div class="modal-header">
                        <input type="text" class="form-control modal-title border-0" id="exampleModalLongTitle"
                               name="title"
                               {{$isAdmin ? '' : 'disabled'}}
                               required>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <textarea class="form-control m-4 border-0" id="modal-content" required rows="10"
                              {{$isAdmin ? '' : 'disabled'}}
                              name="content" style="width: 90%"></textarea>
                    <div class="modal-footer justify-content-center">
                        <div class="row w-100">
                            <div class="{{$isAdmin ? 'col-lg-6' : 'col-12'}} align-self-center text-center">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-luxe" onclick="copyToClipboard()">Copy Text
                                </button>
                            </div>
                            <div
                                class="buttons d-flex flex-row-reverse align-items-center col-lg-6 justify-content-center">
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

@section('js')
    <script>
        // function copyToClipboard() {
        //     var copyText = document.getElementById("modal-content");
        //     navigator.clipboard.writeText(copyText.value);
        //     toastr.success("Copied");
        // }

        function copyToClipboard() {
            var copyText = document.getElementById("modal-content");
            if (navigator.clipboard && window.isSecureContext) {
                return navigator.clipboard.writeText(copyText.value);
            } else {
                let textArea = document.createElement("textarea");
                textArea.value = copyText.value;
                textArea.style.position = "fixed";
                textArea.style.left = "-999999px";
                textArea.style.top = "-999999px";
                document.body.appendChild(textArea);
                textArea.focus();
                textArea.select();
                return new Promise((res, rej) => {
                    document.execCommand('copy') ? res() : rej();
                    textArea.remove();
                });
            }
        }

        function populateModal(val) {
            document.getElementById('exampleModalLongTitle').value = val.getAttribute('data-title')
            if (document.getElementById('itemId') != null)
                document.getElementById('itemId').value = val.getAttribute('data-id')
            document.getElementById('itemIdUpdate').value = val.getAttribute('data-id')
            document.getElementById('modal-content').value = val.getAttribute('data-content')
        }
    </script>
@endsection


<div class="modal fade" id="createModal" tabindex="-1" role="dialog" aria-labelledby="createModal"
     aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle1">Add a new Item</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form class="form row" method="POST"
                      action="{{route('written-email-templates.item.store',$writtenEmailTemplate)}}">
                    @csrf
                    <div class="form-group col-12">
                        <label for="title">Title:</label>
                        <input type="text" name="title" id="title" class="form-control" required>
                    </div>
                    <div class="form-group col-12">
                        <label for="content">Content:</label>
                        <textarea name="content" id="content" class="form-control" rows="10" required></textarea>
                    </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-luxe">Save</button>
            </div>
            </form>
        </div>
    </div>
</div>
