@extends('layouts.app', ['active' => 'leads_services_support', 'subactive' => 'design_requests'])
@section('css')
<style>
    body {
        height: 100vh;
    }

    main,
    #app {
        height: 100%;
    }

    main {
        display: flex;
        align-items: center;
    }

    .card-header:after {
        content: '';
        position: absolute;
        bottom: -10px;
        width: 104px;
        height: 2px;
        background-color: #262626;
        left: 50%;
        margin-left: -52px;
    }

    .card-header {
        font-size: 18px;
        color: #262626;
        line-height: 22px;
        text-align: center;
        padding: 0;
        background: none;
        border: none;
        padding-top: 10px;
    }


    a:hover {
        text-decoration: none;
        color: #262626;
    }
    .box-item {
        background-color: #F7F7F7;
        text-align: center;
        height: 311px;
        margin-bottom: 26px;
        border-radius: 30px;
        display: flex;
        align-items: center;
        justify-content: center;
        cursor: pointer;
    }

    .box-item img {
        object-fit: cover;
        width: 100%;
    }

    .box-item .icon {
        width: 70px;
        height: 70px;
        object-fit: cover;
    }

    .box-item p {
        font-size: 25px;
        font-family: 'gothicregular';
    }
    a {
        color: #262626;
    }
    .title h1 {
        font-family: 'gothicbold';
        text-align: center;
    }
    .title p {
        font-family: 'gothicregular';
        text-align: center;
    }
    #img-preview {
        width: 445px;
        height: 100%;
        object-fit: cover;
    }
    .img-box {
        border: 1px solid #262626;
        width: 445px;
        height: 445px;
    }
    label {
        font-family: 'gothicbold';
    }
    input, select {
        font-family: 'gothicregular';
    }
</style>
@endsection
@section('content')
<div class="container-fluid">
    <div class="col-12 title mb-3">
        <h1>Design Requests</h1>
        <p>Please select the category which you would like to design.</p>
    </div>
    <div class="row align-items-center justify-content-center">

        <div class="col-8">
            <div class="row">
                <div class="col-6">
                    <div class="img-box">
                        <img id="img-preview" class="d-none" src="" alt="">
                    </div>
                </div>
                <div class="col-6">
                    <form action="">
                        <div class="form-group">
                            <label for="">Categories</label>
                            <div class="input-group">
                                <select name="" id="category" class="form-control" onchange="checkCategories(this)">
                                    <option value="">-- Choose One --</option>
                                    @forelse($diy_categories as $category)
                                        <option value="{{ $category->id }}">{{ $category->title }}</option>
                                    @empty
                                    <option value="">No options found.</option>
                                    @endforelse
                                </select>
                            </div>
                        </div>
                        <div class="form-group d-none" id="sub-category-box">
                            <label for="">Sub Categories</label>
                            <div class="input-group">
                                <select name="" id="sub-category-select" class="form-control" onchange="checkTemplates('sub-category-select')">
                                    <option value="">-- Choose One --</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group d-none" id="template-box">
                            <label for="">Templates</label>
                            <div class="input-group">
                                <select name="" id="template-select" class="form-control" onchange="checkDetails(this)">
                                    <option value="">-- Choose One --</option>
                                </select>
                            </div>
                        </div>

                        <button type="button" class="btn-luxe w-100">Request</button>
                    </form>
                </div>
            </div>
        </div>

        {{-- @foreach($marketing_categories as $category)
        <div class="col-lg-3 col-md-6 my-2">
            <div class="box-item">
                <a href="{{route('marketing.request',$category)}}">
                    <div>
                        <img class="icon" src="{{$category->image}}" alt="">
                        <p>{{$category->title}}</p>
                    </div>
                </a>
            </div>
        </div>
        @endforeach --}}
    </div>
</div>
@endsection

<script>
    var categories = JSON.parse(JSON.stringify(<?php echo json_encode($diy_categories); ?>));

    function checkCategories(e) {
        var select_box = $('#category').val()

        var sub_categories = categories.filter(x => x.id == select_box)[0].categories;
        $('#sub-category-select').find('option:not(:first)').remove();

        if(sub_categories.length) {
            $('#template-box').addClass('d-none')
            $('#template-select').find('option:not(:first)').remove();
            $('#sub-category-box').removeClass('d-none');

            $.each(sub_categories, function(i, item) {
                $('#sub-category-select').append($('<option>', {
                    value: item.id,
                    text: item.title
                }))
            })
        } else {
            $('#sub-category-box').addClass('d-none');
            this.checkTemplates('category');
        }
    }

    function checkTemplates(select_id) {
        var select_box = $('#' + select_id).val()

        $.ajax({
            url: "{{ route('design.requests.templates') }}?category_id=" + select_box,
            type: "get",
            cache: false,
            contentType: false,
            processData: false,
            headers: {
                "X-CSRF-Token": $('[name="_token"]').val(),
            },
            success: function (output) {
                $('#template-select').find('option:not(:first)').remove();
                if(output) {
                    $('#template-box').removeClass('d-none')
                    $.each(output, function(i, item) {
                        $('#template-select').append($('<option>', {
                            value: item.id,
                            text: item.title
                        }))
                    })
                } else {
                    $('#template-box').addClass('d-none')
                }
            },
        });
    }
    function checkDetails(e) {
        var select_box = $('#template-select').val()
        var url = '{{ route("design.requests.template", ":template_id") }}';
        url = url.replace(':template_id', select_box);
        $.ajax({
            url: url,
            type: "get",
            cache: false,
            contentType: false,
            processData: false,
            headers: {
                "X-CSRF-Token": $('[name="_token"]').val(),
            },
            success: function (output) {
                if(output) {
                    $('#img-preview').attr('src', output.image)
                    $('#img-preview').removeClass('d-none')
                } else {
                    $('#img-preview').addClass('d-none')
                }
            },
        });
    }
</script>