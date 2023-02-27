<!-- Create File  -->
<div class="update-event modal fade modal-new" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Update Coupon</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('admin.luxe_store.coupons.update') }}" method="POST">
                    @method('put')
                    @csrf
                    <input type="hidden" name="id" id="coupon_id" value="">
                    <div class="row m-0 p-0">
                        <div class="form-group">
                            <label for="start">Code</label>
                            <div class='input-group'>
                                <input type="text" class="w-100 form-control" name="code" id="code" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="start">Price</label>
                            <div class='input-group'>
                                <input type="text" class="w-100 form-control" name="price" id="price" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="start">Status</label>
                            <select name="expired" class="form-control" id="expired">
                                <option value='0'>Active</option>
                                <option value='1'>Expired</option>
                            </select>
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
