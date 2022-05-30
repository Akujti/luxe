<style>
  .modal-header {
    font-family: 'gothicbold';
  }
  button {
    cursor: pointer;
  }
</style>
<!-- Modal -->
<div class="modal fade modal-new" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
          @yield('title')
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        @yield('body')
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn" onclick="closeModal()">Close</button>
        <button type="button" onclick="submitForm()">Submit</button>
      </div>
    </div>
  </div>
</div>

<script>
  function submitForm() {
    var form = $('.modal-body').find('form');
    var reportValidity = form[0].reportValidity();
    if(reportValidity){
      form.submit();
    }
  }
  function closeModal() {
    $('.modal').modal('hide')
  }
</script>