<!-- Create File  -->
<div class="update-template modal fade modal-new" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Update Template</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('admin.canva.templates.update') }}" method="POST" enctype="multipart/form-data">
                    @method('put')
                    @csrf
                    <input type="hidden" name="id" id="id">
                    <div class="row m-0 p-0">
                        <div class="form-group">
                            <label for="start">Title</label>
                            <div class='input-group'>
                                <input type="text" class="w-100 form-control" id="title" name="title" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="start">Url</label>
                            <div class='input-group'>
                                <input type="text" class="w-100 form-control" id="url" name="url" required>
                            </div>
                        </div>
                       
                        <div class="form-group">
                            <label for="start">{{ __('Select File') }}</label>
                            <div class="custom-file">
                                <input type="file" name="image" class="form-control" id="image" style="padding: 3px;">
                            </div>
                        </div>

                        <div class="form-group mt-3">
                            <label for="start">Order</label>
                            <div class="custom-file">
                                <input type="number" name="order" class="form-control" id="order" value="{{ $last_order }}" required>
                            </div>
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