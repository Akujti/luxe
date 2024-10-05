<!-- Create File  -->
<div class="update-event modal fade modal-new" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Update Referral Partner Category</h4>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body pb-0">
                <form action="{{ route('admin.referral-partners.categories.update') }}" class="row p-0 m-0"
                    method="POST" enctype="multipart/form-data">
                    @method('PUT')
                    @csrf
                    <input type="hidden" class="form-control" name="id" id="referral_partner_category_id"
                        required>
                    <div class="form-group">
                        <label for="">Title</label>
                        <div class="input-group">
                            <input type="text" class="form-control" name="title" id="title" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="">Image</label>
                        <div class="input-group">
                            <input type="file" class="form-control p-1" name="image">
                        </div>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-bs-dismiss="modal">Cancel</button>
                <button type="submit" class="btn btn-luxe" id="save-event">Update</button>
            </div>
            </form>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div>
