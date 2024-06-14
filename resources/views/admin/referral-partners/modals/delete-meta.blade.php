<div class="delete-referral-partner-meta modal fade modal-new" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Delete Referral Partner Detail</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="" method="POST">
                    @method('DELETE')
                    @csrf
                    <div class="row m-0 p-0">
                        <h6 class="h6-luxe">Are you sure you want to delete this?</h6>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                <button type="submit" class="btn btn-luxe" id="save-event">Delete</button>
            </div>
            </form>
        </div>
    </div>
</div>