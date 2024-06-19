<!-- Create File  -->
<div class="create-photographer modal fade modal-new" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Create Photographer</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('admin.photographers.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row m-0 p-0">
                        <div class="form-group">
                            <label for="start">Title</label>
                            <div class='input-group'>
                                <input type="text" class="w-100 form-control" name="name" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="start">Email</label>
                            <div class='input-group'>
                                <input type="email" class="w-100 form-control" name="email" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="start">Link</label>
                            <div class='input-group'>
                                <input type="text" class="w-100 form-control" name="link">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="start">Image</label>
                            <div class="custom-file">
                                <input type="file" name="avatar" class="form-control p-1">
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
