<!-- Create File  -->
<div class="create-template modal fade modal-new" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Create a new template</h4>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('admin.diy-templates.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="category_id" value="{{ isset($category) ? $category->id : null }}">
                    <div class="row m-0 p-0">
                        <div class="form-group">
                            <label for="start">Title</label>
                            <div class='input-group'>
                                <input type="text" class="w-100 form-control" name="title" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="start">Url</label>
                            <div class='input-group'>
                                <input type="text" class="w-100 form-control" name="url" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="start">Select Image</label>
                            <div class="custom-file">
                                <input type="file" name="image" class="form-control" id="inputGroupFile01"
                                    style="padding: 3px;">
                            </div>
                        </div>
                        <div class='input-group mt-2'>
                            <input type="text" class="w-100 form-control" name="image_url"
                                placeholder="Or paste the image URL here">
                        </div>
                        <div class="form-group mt-3">
                            <label for="start">Order</label>
                            <div class="custom-file">
                                <input type="number" name="order" class="form-control"
                                    value="{{ $last_order_template }}" required>
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
