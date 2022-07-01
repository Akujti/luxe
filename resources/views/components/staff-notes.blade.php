<div class="row-col w-100 position-relative" style="border:none">
    <div class="row-details w-100">
        <img src="{{ $note->user_author->avatar }}" alt="">
        <div class="w-100">
            <div class="d-flex justify-content-between w-100">
                <h4>{{ !$note->user_author->profile ? '' : $note->user_author->profile->fullname }}
                </h4>
                <div class="row justify-content-end p-0 m-0">
                    @if ($note->author == auth()->id())
                        <div class="btn-group">
                            <button type="button" class="btn bg-transparent p-0 pl-3"
                                data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">
                                <span><i class="fa-solid fa-ellipsis"></i></span>
                            </button>
                            <div class="dropdown-menu dropdown-menu-right">
                                <form method="POST" action="{{ route('delete_note') }}"
                                    class="m-0 p-0">
                                    @method('delete')
                                    @csrf
                                    <input type="hidden" name="id"
                                        value="{{ $note->id }}">
                                    <button class="dropdown-item text-danger"
                                        type="submit"><i class="fa-solid fa-trash"></i>
                                        Delete</button>
                                </form>
                            </div>
                        </div>
                    @endif
                    <p class="w-100 text-right">{{ $note->created_at->setTimezone('EST') }}</p>
                </div>
            </div>
            <p>{{ $note->body }}</p>
        </div>
    </div>
</div>