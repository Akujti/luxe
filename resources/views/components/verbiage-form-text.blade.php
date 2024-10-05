<div>
    @if (session('formPost') &&
            $formInfo &&
            $formInfo->after_submit_verbiages_title &&
            $formInfo->after_submit_verbiages_text)
        <div class="modal modal-new fade" id="modalVerbiages">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content bg-white">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">{{ $formInfo->after_submit_verbiages_title }}
                        </h5>
                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>

                    <div class="modal-body">
                        <p style="font-family: 'gothicregular';">{!! $formInfo->after_submit_verbiages_text !!}</p>
                    </div>
                </div>
            </div>
        </div>
        <script>
            $(window).on('load', function() {
                $('#modalVerbiages').modal('show')
            })
        </script>
    @elseif($formInfo && $formInfo->verbiages_title && $formInfo->verbiages_text)
        <div class="modal modal-new fade" id="modalVerbiages">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content bg-white">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">{{ $formInfo->verbiages_title }}
                        </h5>
                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>

                    <div class="modal-body">
                        <p style="font-family: 'gothicregular';">{!! $formInfo->verbiages_text !!}</p>
                    </div>
                </div>
            </div>
        </div>
        <script>
            $(window).on('load', function() {
                $('#modalVerbiages').modal('show')
            })
        </script>
    @endif
</div>
