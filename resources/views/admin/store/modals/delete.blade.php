<!-- Create File  -->
<div class="delete-event modal fade modal-new" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Delete Template</h4>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('admin.luxe_store.delete') }}" method="POST">
                    @method('DELETE')
                    @csrf
                    <input type="hidden" name="id" id="canva_id" value="">
                    <div class="row m-0 p-0">
                        <h6 class="h6-luxe">Are you sure you want to delete this?</h6>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-luxe" id="save-event">Delete</button>
            </div>
            </form>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div>
