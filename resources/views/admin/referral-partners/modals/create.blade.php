<!-- Create File  -->
<div class="create-referral-partner modal fade modal-new" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Create new Referral Partner</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body pb-0">
                <form action="{{ route('admin.referral-partners.store') }}" class="row p-0 m-0" method="POST"
                      enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="referral_partner_category_id" id="referral_partner_category_id">
                    <div class="form-group">
                        <label for="">Title</label>
                        <div class="input-group">
                            <input type="text" class="form-control" name="title" required>
                        </div>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                <button type="submit" class="btn btn-luxe" id="save-event">Create</button>
            </div>
            </form>
        </div>
    </div>
</div>