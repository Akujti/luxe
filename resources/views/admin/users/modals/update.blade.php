<!-- Create File  -->
<div class="update-event modal fade modal-new" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Update User</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('admin.users.update') }}" method="POST" enctype="multipart/form-data">
                    @method('put')
                    @csrf
                    <input type="hidden" name="id" id="user_id" value="">
                    <div class="row m-0 p-0">
                    <div class="form-group col-12 col-md-6 pl-0">
                            <label for="start">Fullname*</label>
                            <div class='input-group'>
                                <input type="text" class="w-100 form-control" name="profile[fullname]" id="fullname" required>
                            </div>
                        </div>
                        <div class="form-group col-12 col-md-6 pr-0">
                            <label for="start">Role*</label>
                            <div class='input-group'>
                                <select name="role" class="form-control" id="role" required>
                                    <option value="admin">Admin</option>
                                    <option value="agent">Agent</option>
                                    <option value="other">Other</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="start">Email*</label>
                            <div class='input-group'>
                                <input type="email" class="w-100 form-control" name="email" id="email" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="start">Password</label>
                            <div class='input-group'>
                                <input type="password" class="w-100 form-control" name="password">
                            </div>
                        </div>

                        <div class="form-group col-12 col-md-6 pl-0">
                            <label for="start">Address*</label>
                            <div class='input-group'>
                                <input type="text" class="w-100 form-control" name="profile[address]" id="address" required>
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
                                <input type="text" class="w-100 form-control" name="profile[phone]" id="phone" required>
                            </div>
                        </div>
                        <div class="form-group col-12 col-md-6 pr-0">
                            <label for="start">Language*</label>
                            <div class='input-group'>
                                <input type="text" class="form-control" id="language">
                                <button type="button" class="btn btn-luxe px-3 ml-2" onclick="add_language()">+</button>
                            </div>

                            <div class="language-section mt-2">

                            </div>
                        </div>
                        <div class="form-group col-12 col-md-6 pl-0">
                            <label for="start">Support Specialists</label>
                            <div class='input-group'>
                                <input type="text" class="w-100 form-control" name="profile[support_specialists]" id="support_specialists">
                            </div>
                        </div>
                        <div class="form-group col-12 col-md-6 pr-0">
                            <label for="start">Loan Officer</label>
                            <div class='input-group'>
                                <input type="text" class="w-100 form-control" name="profile[loan_officer]" id="loan_officer">
                            </div>
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

<script>
    function add_language() {
        let input = $('#language').val()
        let html = '<div class="language-item"> <input type="text" name="languages[]" value="' + input + '"> <button type="button" class="btn btn-danger" onclick="remove_language(this)">&times;</button></div>'
        $('.language-section').append(html)
        $('#language').val("")
    }
    function remove_language(e) {
        $(e).parents('.language-item').remove()
    }
</script>