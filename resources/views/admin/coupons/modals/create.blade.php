<!-- Create File  -->
<div class="create-event modal fade modal-new" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Create new Coupon</h4>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('admin.luxe_store.coupons.create') }}" method="POST">
                    @csrf
                    <div class="row m-0 p-0">
                        <div class="form-group">
                            <label for="start">Code</label>
                            <div class='input-group'>
                                <input type="text" class="w-100 form-control" name="code" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="start">Price</label>
                            <div class='input-group'>
                                <input type="text" class="w-100 form-control" name="price" required>
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
