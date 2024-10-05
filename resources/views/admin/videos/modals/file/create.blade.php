<!-- Create File  -->
<div class="create-file modal fade modal-new" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Create new File</h4>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('admin.videos.file.create') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    @if (request('video_id'))
                        <input type="hidden" name="video_id" value="{{ request('video_id') }}">
                    @endif
                    <div class="row m-0 p-0">
                        <div class="form-group col-12 pl-0">
                            <label for="start">Name*</label>
                            <div class='input-group'>
                                <input type="text" class="w-100 form-control" name="title" required>
                            </div>
                        </div>
                        <div class="form-group col-12 pl-0">
                            <label for="start">File*</label>
                            <div class='input-group'>
                                <input type="file" class="w-100 form-control p-1" name="file" required>
                            </div>
                        </div>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-bs-dismiss="modal">Cancel</button>
                <button type="submit" class="btn btn-luxe" id="save-event">Create</button>
            </div>
            </form>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div>
