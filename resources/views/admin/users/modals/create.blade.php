<!-- Create File  -->
<div class="create-event modal fade modal-new" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Create new User</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('admin.users.create') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row m-0 p-0">
                        <div class="form-group col-12 col-md-6 pl-0">
                            <label for="start">Fullname*</label>
                            <div class='input-group'>
                                <input type="text" class="w-100 form-control" name="profile[fullname]" required>
                            </div>
                        </div>
                        <div class="form-group col-12 col-md-6 pr-0">
                            <label for="start">Role*</label>
                            <div class='input-group'>
                                <select name="role" id="" class="form-control" required>
                                    <option value="admin">Admin</option>
                                    <option value="agent">Agent</option>
                                    <option value="other">Other</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="start">Email*</label>
                            <div class='input-group'>
                                <input type="email" class="w-100 form-control" name="email" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="start">Password*</label>
                            <div class='input-group'>
                                <input type="password" class="w-100 form-control" name="password" required>
                            </div>
                        </div>

                        <div class="form-group col-12 col-md-6 pl-0">
                            <label for="start">Address*</label>
                            <div class='input-group'>
                                <input type="text" class="w-100 form-control" name="profile[address]" required>
                            </div>
                        </div>
                        <div class="form-group col-12 col-md-6 pr-0">
                            <label for="start">Avatar</label>
                            <div class='input-group'>
                                <input type="file" class="w-100 form-control p-1" name="profile[avatar]">
                            </div>
                        </div>
                        <div class="form-group col-12 col-md-6 pl-0">
                            <label for="start">Phone*</label>
                            <div class='input-group'>
                                <input type="text" class="w-100 form-control" name="profile[phone]" required>
                            </div>
                        </div>
                        <div class="form-group col-12 col-md-6 pr-0">
                            <label for="start">Language*</label>
                            <div class='input-group'>
                                <input type="text" class="form-control" id="language-new">
                                <button type="button" class="btn btn-luxe px-3 ml-2" onclick="add_language_new()">+</button>
                            </div>

                            <div class="language-section-new mt-2">

                            </div>
                        </div>
                        <div class="form-group col-12 col-md-6 pl-0">
                            <label for="start">Support Specialists</label>
                            <div class='input-group'>
                                <input type="text" class="w-100 form-control" name="profile[support_specialists]">
                            </div>
                        </div>
                        <div class="form-group col-12 col-md-6 pr-0">
                            <label for="start">Loan Officer</label>
                            <div class='input-group'>
                                <input type="text" class="w-100 form-control" name="profile[loan_officer]">
                            </div>
                        </div>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                <button type="submit" class="btn btn-luxe" id="save-event">Create</button>
            </div>
            </form>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div>

<script>
    function add_language_new() {
        let input = $('#language-new').val()
        let html = '<div class="language-item-new"> <input type="text" name="languages[]" value="' + input + '"> <button type="button" class="btn btn-danger" onclick="remove_language_new(this)">&times;</button></div>'
        $('.language-section-new').append(html)
        $('#language-new').val("")
    }
    function remove_language_new(e) {
        $(e).parents('.language-item-new').remove()
    }
</script>