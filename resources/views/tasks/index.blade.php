@extends('layouts.app')
@section('css')
<link rel="stylesheet" href="{{ asset('/css/task/main.css') }}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" />
<style>
    
</style>
@endsection
@section('content')
<div class="container-fluid">
    <div class="row p-0 m-0 justify-content-center">
        <div class="col-12 col-lg-8">
            <div>
                <nav>
                    <a href="#">My contracts</a>
                    <a href="#">My completed contracts</a>
                </nav>
            </div>
            <div>
                <form action="{{ route('contracts.store') }}" method="POST" class="row p-0 m-0" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group w-100">
                        <div class="input-group input-group-icon">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fa-solid fa-pen-to-square"></i></span>
                            </div>
                            <input type="text" class="form-control" name="name" placeholder="Enter a contract ..." onkeyup="toggleContractForm(this)">
                        </div>
                    </div>
                    <div class="d-none" id="contract-form">
                        <div class="form-group w-100">
                            <div class="input-group input-group-icon">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fa-solid fa-comment"></i></span>
                                </div>
                                <textarea name="description" class="form-control" rows="5" placeholder="Description"></textarea>
                            </div>
                        </div>

                        <div class="row w-100 p-0 m-0">
                            <div class="col-6 pl-0">
                                <p>Property information</p>
                                <div class="row">
                                    <div class="form-group col-12">
                                        <div class="input-group input-group-icon">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fa-solid fa-location-dot"></i></span>
                                            </div>
                                            <input type="text" name="property_information[address]" class="form-control" placeholder="Address">
                                        </div>
                                    </div>
                                    <div class="form-group col-12">
                                        <div class="input-group input-group-icon">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fa-solid fa-comment"></i></span>
                                            </div>
                                            <textarea name="property_information[description]" class="form-control" rows="3" placeholder="Description"></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group col-12">
                                        <div class="input-group input-group-icon">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fa-solid fa-dollar-sign"></i></span>
                                            </div>
                                            <input name="property_information[price]" type="number" class="form-control" placeholder="Price">
                                        </div>
                                    </div>
                                    <div class="form-group col-12">
                                        <div class="input-group input-group-icon">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fa-solid fa-comment"></i></span>
                                            </div>
                                            <textarea name="property_information[other_details]" class="form-control" rows="3" placeholder="Other Details"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 pr-0">
                                <p>Client information</p>
                                <div class="row">
                                    <div class="form-group col-6">
                                        <div class="input-group input-group-icon">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fa-solid fa-user"></i></span>
                                            </div>
                                            <input type="text" name="client_information[full_name]" class="form-control" placeholder="Full name" required>
                                        </div>
                                    </div>
                                    <div class="form-group col-6">
                                        <div class="input-group input-group-icon">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fa-solid fa-phone"></i></span>
                                            </div>
                                            <input type="number" name="client_information[phone]" class="form-control" placeholder="Phone" required>
                                        </div>
                                    </div>
                                    <div class="form-group col-12">
                                        <div class="input-group input-group-icon">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fa-solid fa-at"></i></span>
                                            </div>
                                            <input type="email" name="client_information[email]" class="form-control" placeholder="Email" required>
                                        </div>
                                    </div>
                                    <div class="form-group col-12">
                                        <div class="input-group input-group-icon">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fa-solid fa-location-dot"></i></span>
                                            </div>
                                            <input type="text" name="client_information[address]" class="form-control" placeholder="Address">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <button class="btn" type="button" onclick="toggleDocumentInput()"><i class="fa-solid fa-upload"></i> Attach file</button>
                            <button class="btn" type="button" onclick="toggleTaskForm()"><i class="fa-solid fa-list-check"></i> Add Tasks</button>
                        </div>
                        <div class="mt-4 d-flex w-100" style="gap: 0px 20px;" id="document-form"></div>
                        <div class="d-none row w-100 mt-3 p-0 m-0 align-items-center" id="task-form" style="gap: 20px">
                            <div class="form-group col-7 p-0 m-0">
                                <div class="input-group input-group-icon">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fa-solid fa-location-dot"></i></span>
                                    </div>
                                    <input type="text" class="form-control" id="task-title" placeholder="Task title">
                                </div>
                            </div>
                            <div class="form-group col-3 p-0 m-0">
                                <div class="input-group input-group-icon">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fa-solid fa-hourglass-end"></i></span>
                                    </div>
                                    <input type="text" name="start_date" id="task-start-date" placeholder="Start after" class="form-control">
                                </div>
                            </div>
                            <div class="col p-0 d-flex justify-content-end">
                                <button type="button" class="btn btn-block p-2" onclick="addTask()">Add</button>
                            </div>
                        </div>
                        <div class="my-4" id="tasks-form"></div>
                        <div class="d-flex justify-content-end w-100">
                            <button class="btn-luxe">Finish Contract</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <div class="col-12 col-lg-8">
            <div class="my-contracts">
                @forelse($contracts as $contract)
                    <x-contract.single-post :contract="$contract" />
                @empty
                    <p>No results found.</p>
                @endforelse
            </div>
        </div>
    </div>
</div>

<script>
    function toggleContractForm(e) {
        if(e.value.length) {
            $('#contract-form').removeClass('d-none')
        } else {
            $('#contract-form').addClass('d-none')
        }
    }
    function toggleTaskForm() {
        $('#task-form').toggleClass('d-none')
    }

    function toggleDocumentInput() {
        var inputs = $('.document-input').length;
        $('#document-form').append(`
            <div class="img-box">
                <input type="file" class="document-input" id="document-input-`+(inputs)+`" name="documents[]" onchange="onFileChanged(this)" style="display: none;">
            </div>`);
        $('.document-input')[inputs].click();
    }

    function isImage(file){
        return file['type'].split('/')[0] == 'image';
    }

    function onFileChanged(e) {
        const [file] = e.files 
        if (file) {
            if(!isImage(file)) {
                $('#' + e.id).parent('.img-box').addClass('img-box-text');
                $('#' + e.id).parent('.img-box').append(`
                    <p>File</p>
                    <span onclick="removeFile(this)">&times;</span>
                `);
            } else {
                $('#' + e.id).parent('.img-box').append(`
                    <img id="img-preview" src="` + URL.createObjectURL(file) + `">
                    <span onclick="removeFile(this)">&times;</span>
                `);
            }
        }
    }

    function addTask() {
        var title = $('#task-form  #task-title');
        var start_date = $('#task-form #task-start-date');
        var task_rows = $('.task-row').length;
        $('#tasks-form').append(`
            <div class="row w-100 mt-3 p-0 m-0 align-items-center task-row" id="task-row" style="gap: 20px">
                <div class="form-group col-7 p-0 m-0">
                    <div class="input-group input-group-icon">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fa-solid fa-location-dot"></i></span>
                        </div>
                        <input type="text" name="tasks[`+ task_rows +`][title]" class="form-control" placeholder="Task title" value="`+ title.val() +`">
                    </div>
                </div>
                <div class="form-group col-3 p-0 m-0">
                    <div class="input-group input-group-icon">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fa-solid fa-hourglass-end"></i></span>
                        </div>
                        <input type="text" name="tasks[`+ task_rows +`][start_date]" placeholder="Start after" value="`+ start_date.val() +`" class="form-control">
                    </div>
                </div>
                <div class="col p-0 d-flex justify-content-end">
                    <button type="button" class="btn btn-block p-2" onclick="removeTask(this)">Remove</button>
                </div>
            </div>
        `);
        title.val('');
        start_date.val('');
    }

    function removeTask(e) {
        $(e).parents('.task-row').remove();
    }
    function removeFile(e) {
        $(e).parent('.img-box').remove();
    }
    
</script>
@endsection