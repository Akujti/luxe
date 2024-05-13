<!-- Create File  -->
<div class="create-property modal fade modal-new" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Create Property</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('admin.photographers.properties.store') }}" method="POST"
                      enctype="multipart/form-data">
                    @csrf
                    <input id="photographer_id" type="hidden" name="photographer_id" required>
                    <div class="row m-0 p-0">
                        <div class="form-group">
                            <label for="start">Address</label>
                            <div class='input-group'>
                                <input type="text" class="w-100 form-control" name="address" required>
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
