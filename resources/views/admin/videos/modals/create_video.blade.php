<!-- Create File  -->
<div class="create-event-video modal fade modal-new" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Create new Video</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('admin.videos.video.create') }}" method="POST">
                    @csrf

                    @if(request('id'))
                        <input type="hidden" name="folder_id" value="{{ request('id') }}">
                    @endif
                    
                    <div class="form-group col-12 pl-0">
                        <label for="start">Vimeo id</label>
                        <div class='input-group'>
                            <input type="text" class="w-100 form-control" name="video_id" required>
                        </div>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                <button type="submit" class="btn btn-luxe" id="save-event">Create</button>
            </div>
            </form>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div>