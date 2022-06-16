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
        <div class="col-12">
            <div class="row justify-content-center">
                <div class="col-12 col-md-8 col-lg-4">
                    <form action="{{ route('marketing.sendemail') }}" method="POST" class="row p-0 m-0">
                        @csrf
                        <div class="form-group col-12 p-0">
                            <label for="">Agent Name</label>
                            <div class="input-group">
                                <input type="text" name="agent_name" class="form-control" value="{{ auth()->user()->profile->fullname }}">
                            </div>
                        </div>
                        <div class="form-group col-12 p-0">
                            <label for="">Email</label>
                            <div class="input-group">
                                <input type="text" name="agent_email" class="form-control" value="{{ auth()->user()->email }}">
                            </div>
                        </div>
                        <div class="form-group col-12 p-0">
                            <label for="">Please select a marketing item form the drop-down below:</label>
                            <div class="input-group">
                                <select name="marketing_item" id="category" class="form-control" required>
                                    <option value="">-- Choose One --</option>
                                    <option value="Email Blast">Email Blast</option>
                                    <option value="Postcard/Mailer">Postcard/Mailer</option>
                                    <option value="Social Media Post">Social Media Post</option>
                                    <option value="Flyer">Flyer</option>
                                    <option value="Door Hanger">Door Hanger</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group col-12 p-0">
                            <label for="">Please select topic/theme for marketing item from the drop-down below:</label>
                            <div class="input-group">
                                <select name="theme" id="sub-category-select" class="form-control" required>
                                    <option value="">-- Choose One --</option>
                                    <option value="Just Listed">Just Listed</option>
                                    <option value="Just Closed">Just Closed</option>
                                    <option value="Under Contract">Under Contract</option>
                                    <option value="For Rent/Lease">For Rent/Lease</option>
                                    <option value="What's Your Home Worth (Farming)">What's Your Home Worth (Farming)</option>
                                    <option value="Neighborhood Expert (Farming)">Neighborhood Expert (Farming)</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group col-12 p-0">
                            <label for="">Would you like to use LUXE colors for the design?</label>
                            <div class="input-group">
                                <select name="" id="colors-select" class="form-control" onchange="checkColor('colors-select')">
                                    <option value="yes">Yes</option>
                                    <option value="no">No</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group d-none col-12 p-0" id="colors">
                            <label for="">Please enter your preferred colors?</label>
                            <div class="input-group">
                                <input type="text" name="colors" class="form-control">
                            </div>
                        </div>

                        <button type="submit" class="btn-luxe w-100">Request</button>
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
    // var categories = JSON.parse(JSON.stringify(<?php echo json_encode($diy_categories); ?>));

    // function checkCategories(e) {
    //     var select_box = $('#category').val()

    //     var sub_categories = categories.filter(x => x.id == select_box)[0].categories;
    //     $('#sub-category-select').find('option:not(:first)').remove();

    //     if(sub_categories.length) {
    //         $('#template-box').addClass('d-none')
    //         $('#template-select').find('option:not(:first)').remove();
    //         $('#sub-category-box').removeClass('d-none');

    //         $.each(sub_categories, function(i, item) {
    //             $('#sub-category-select').append($('<option>', {
    //                 value: item.id,
    //                 text: item.title
    //             }))
    //         })
    //     } else {
    //         $('#sub-category-box').addClass('d-none');
    //         this.checkTemplates('category');
    //     }
    // }

    // function checkTemplates(select_id) {
    //     var select_box = $('#' + select_id).val()

    //     $.ajax({
    //         url: "{{ route('design.requests.templates') }}?category_id=" + select_box,
    //         type: "get",
    //         cache: false,
    //         contentType: false,
    //         processData: false,
    //         headers: {
    //             "X-CSRF-Token": $('[name="_token"]').val(),
    //         },
    //         success: function (output) {
    //             $('#template-select').find('option:not(:first)').remove();
    //             if(output) {
    //                 $('#template-box').removeClass('d-none')
    //                 $.each(output, function(i, item) {
    //                     $('#template-select').append($('<option>', {
    //                         value: item.id,
    //                         text: item.title
    //                     }))
    //                 })
    //             } else {
    //                 $('#template-box').addClass('d-none')
    //             }
    //         },
    //     });
    // }
    // function checkDetails(e) {
    //     var select_box = $('#template-select').val()
    //     var url = '{{ route("design.requests.template", ":template_id") }}';
    //     url = url.replace(':template_id', select_box);
    //     $.ajax({
    //         url: url,
    //         type: "get",
    //         cache: false,
    //         contentType: false,
    //         processData: false,
    //         headers: {
    //             "X-CSRF-Token": $('[name="_token"]').val(),
    //         },
    //         success: function (output) {
    //             if(output) {
    //                 $('#img-preview').attr('src', output.image)
    //                 $('#img-preview').removeClass('d-none')
    //             } else {
    //                 $('#img-preview').addClass('d-none')
    //             }
    //         },
    //     });
    // }

    function checkColor(select_id) {
        var select_box = $('#' + select_id).val()
        if(select_box == 'no') {
            $('#colors').removeClass('d-none')
        } else {
            $('#colors').addClass('d-none')
        }
    }
</script>