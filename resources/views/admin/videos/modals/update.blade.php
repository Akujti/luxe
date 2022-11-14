<!-- Create File  -->
<div class="update-event modal fade modal-new" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Update Folder</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('admin.videos.update') }}" method="POST" enctype="multipart/form-data">
                    @method('put')
                    @csrf
                    <input type="hidden" name="id" id="video_id" value="">
                    <div class="form-group col-12 pl-0">
                        <label for="start">Name*</label>
                        <div class='input-group'>
                            <input type="text" class="w-100 form-control" name="title" id="title" required>
                        </div>
                    </div>
                    <div class="form-group col-12 pl-0">
                        <label for="start">Image</label>
                        <div class='input-group'>
                            <input type="file" class="w-100 form-control p-1" name="image">
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
