<div>
    <div class="modal fade modal-new" id="{{ $id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg {{ !$centered ? '' : 'modal-dialog-centered' }}" role="document">
        <div class="modal-content">
          <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">{{ $title }}</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            {{ $body }}
          </div>
          <div class="modal-footer">
            {{ $footer }}
          </div>
        </div>
      </div>
    </div>
</div>