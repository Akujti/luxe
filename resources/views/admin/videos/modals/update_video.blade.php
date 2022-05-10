<!-- Create File  -->
<div class="update-event-video modal fade modal-new" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Update Video</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('admin.videos.video.update') }}" method="POST" enctype="multipart/form-data">
                    @method('put')
                    @csrf
                    <input type="hidden" name="id" id="id" value="">
                    <div class="form-group col-12 pl-0">
                        <label for="start">Vimeo id</label>
                        <div class='input-group'>
                            <input type="text" class="w-100 form-control" name="video_id" id="video_id" required>
                        </div>
                    </div>

                    <div class="form-group col-12 pl-0">
                        <label for="start">Presenter Name</label>
                        <div class='input-group'>
                            <input type="text" class="w-100 form-control" name="presenter_name" id="presenter_name">
                        </div>
                    </div>

                    <div class="form-group col-12 pl-0">
                        <label for="start">Date</label>
                        <div class='input-group'>
                            <input type="date" class="w-100 form-control" name="date" id="date">
                        </div>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                <button type="submit" class="btn btn-luxe" id="save-event">Update</button>
            </div>
            </form>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div>