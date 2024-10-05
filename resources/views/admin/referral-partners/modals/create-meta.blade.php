<div class="create-referral-partner-meta modal fade modal-new" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Create new Referral Partner Detail</h4>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body pb-0">
                <form
                    action="{{ route('admin.referral-partners.metas.store', Route::current()->parameter('referral_partner')) }}"
                    class="row p-0 m-0" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="">Type</label>
                        <div class="input-group">
                            <select name="type" class="form-control" required>
                                <option value="address">Address</option>
                                <option value="email">Email</option>
                                <option value="general">General</option>
                                <option value="tel">Tel</option>
                                <option value="web">Web</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="">Name</label>
                        <div class="input-group">
                            <input type="text" class="form-control p-1" name="name" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="">Value</label>
                        <div class="input-group">
                            <input type="text" class="form-control p-1" name="value">
                        </div>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-bs-dismiss="modal">Cancel</button>
                <button type="submit" class="btn btn-luxe" id="save-event">Create</button>
            </div>
            </form>
        </div>
    </div>
</div>
