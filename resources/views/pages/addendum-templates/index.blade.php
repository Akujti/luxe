@extends('layouts.app', ['active' => 'Tools&TrainingVideos', 'subactive' => 'email_addendum_verbiage_builder'])
@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <h1>Addendum Templates</h1>
        </div>
        <div class="row my-4">
            @if (auth()->user()->isAdmin)
                <div class="col-lg-4">
                    <a href="" data-bs-toggle="modal" data-bs-target="#createModal"
                        class="btn btn-luxe w-100 show-btn m-2 d-flex align-items-center justify-content-center"
                        style="height: 70px">New Item</a>
                </div>
            @endif
            @foreach ($templates as $template)
                <div class="col-lg-4">
                    <a href="{{ route('addendum-templates.show', $template) }}"
                        class="btn btn-luxe w-100 m-2 d-flex align-items-center justify-content-center"
                        style="height: 70px;white-space: pre-wrap;">{{ $template->title }}</a>
                </div>
            @endforeach
        </div>
        <div id="createModal" class="modal fade modal-new" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Create new template directory</h5>
                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form method="POST" action="{{ route('addendum-templates.store') }}">
                            @csrf
                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">Directory name:</label>
                                <input type="text" class="form-control" id="recipient-name" name="title">
                            </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-luxe">Save</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
