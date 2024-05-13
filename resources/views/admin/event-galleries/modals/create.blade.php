<!-- Create File  -->
<div class="create-gallery modal fade modal-new" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Create Gallery</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('admin.event-galleries.store') }}" method="POST"
                      enctype="multipart/form-data">
                    @csrf
                    <div class="row m-0 p-0">
                        <div class="form-group">
                            <label for="start">Title</label>
                            <div class='input-group'>
                                <input type="text" class="w-100 form-control" name="title" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="start">Link</label>
                            <div class='input-group'>
                                <input type="text" class="w-100 form-control" name="link" required>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer p-0 mt-3">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-luxe" id="save-event">Create</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
