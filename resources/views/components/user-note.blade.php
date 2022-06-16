<style>
    .delete-btn {
        background-color: black;
        color: white;
        border-radius: 50%;
        width: 25px;
        height: 25px;
        display: flex;
        align-items: center;
        cursor: pointer;
    }
</style>
<div class="row-col" style="border:none">
    <div class="row-details">
        <img src="{{ $note->user_author->avatar }}" alt="">
        <div>
            <h4>{{ !$note->user_author->profile ? '' : $note->user_author->profile->fullname }}
            </h4>
            <p>{{ $note->body }}</p>
        </div>
    </div>
    @if ($note->author == auth()->user()->id)
        <button class="delete-btn"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512"
                onclick="deleteNote('deleteNoteForm{{ $note->id }}')">
                <!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                <path fill="white"
                    d="M376.6 427.5c11.31 13.58 9.484 33.75-4.094 45.06c-5.984 4.984-13.25 7.422-20.47 7.422c-9.172 0-18.27-3.922-24.59-11.52L192 305.1l-135.4 162.5c-6.328 7.594-15.42 11.52-24.59 11.52c-7.219 0-14.48-2.438-20.47-7.422c-13.58-11.31-15.41-31.48-4.094-45.06l142.9-171.5L7.422 84.5C-3.891 70.92-2.063 50.75 11.52 39.44c13.56-11.34 33.73-9.516 45.06 4.094L192 206l135.4-162.5c11.3-13.58 31.48-15.42 45.06-4.094c13.58 11.31 15.41 31.48 4.094 45.06l-142.9 171.5L376.6 427.5z" />
            </svg></button>
        <form id="{{ 'deleteNoteForm' . $note->id }}" action="{{ route('delete_note', $note) }}" method="post"
            class="d-none">
            @csrf
            @method('delete')
        </form>
    @endif
</div>
<script>
    function deleteNote(formId) {
        console.log(formId);
        if (confirm('Are you sure you want to delete this note?')) {
            $('#' + formId).submit();
        }
    }
</script>
