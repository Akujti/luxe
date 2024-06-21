@extends('layouts.app', ['active' => 'training_knowledge_center', 'subactive' => 'design_requests'])
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
            border-radius: 15px;
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

        input,
        select {
            font-family: 'gothicregular';
        }
    </style>
@endsection
@section('content')
    <div class="container-fluid">
        <div class="col-12 title ">
            <h1>Design Requests</h1>
            <p>Please select the category which you would like to design.</p>
        </div>
        <div class="row align-items-center justify-content-center mb-3">
            <div class="col-12">
                <div class="row justify-content-center">
                    <div class="col-12 col-md-8 col-lg-6">
                        <form id="form" action="{{ route('general.email.post') }}" method="POST" class="row p-0 m-0">
                            @csrf
                            <input type="hidden" name="form_title" value="Design Request">

                            <div class="form-group col-12 p-0">
                                <label for="">Agent Name</label>
                                <div class="input-group">
                                    <input type="text" name="agent_name" class="form-control"
                                           value="{{ auth()->user()->profile->fullname }}">
                                </div>
                            </div>
                            <div class="form-group col-12 p-0">
                                <label for="">Email</label>
                                <div class="input-group">
                                    <input type="text" name="agent_email" class="form-control"
                                           value="{{ auth()->user()->email }}">
                                </div>
                            </div>
                            <div class="form-group col-12 p-0">
                                <label for="">Please select a marketing item form the drop-down below:</label>
                                <div class="input-group">
                                    <select name="marketing_item" id="category" class="form-control" required
                                            onchange="toggleEmailBlastQuestions(this)">
                                        <option value="">-- Choose One --</option>
                                        <option value="Email Blast"
                                                {{ isset($_GET['type']) && $_GET['type'] == 'Email Blast' ? 'selected' : '' }}>
                                            Email Blast
                                        </option>
                                        <option value="Postcard/Mailer">Postcard/Mailer</option>
                                        <option value="Social Media Post"
                                                {{ isset($_GET['type']) && $_GET['type'] == 'Social Media Post' ? 'selected' : '' }}>
                                            Social Media Post
                                        </option>
                                        <option value="Flyer"
                                                {{ isset($_GET['type']) && $_GET['type'] == 'Flyer' ? 'selected' : '' }}>
                                            Flyer
                                        </option>
                                        <option value="Door Hanger"
                                                {{ isset($_GET['type']) && $_GET['type'] == 'Door Hanger' ? 'selected' : '' }}>
                                            Door Hanger
                                        </option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group col-12 p-0">
                                <label for="">Please select topic/theme for marketing item from the drop-down
                                    below:</label>
                                <div class="input-group">
                                    <select name="theme" id="sub-category-select" class="form-control" required>
                                        <option value="">-- Choose One --</option>
                                        <option value="Just Joined LUXE">Just Joined LUXE</option>
                                        <option value="Just Listed">Just Listed</option>
                                        <option value="Hot On the Market">Hot On the Market</option>
                                        <option value="Under Contract">Under Contract</option>
                                        <option value="Just Sold">Just Sold</option>
                                        <option value="Just Closed">Just Closed</option>
                                        <option value="For Rent/Lease">For Rent/Lease</option>
                                        <option value="What's Your Home Worth (Farming)">What's Your Home Worth
                                            (Farming)
                                        </option>
                                        <option value="Neighborhood Expert (Farming)">Neighborhood Expert (Farming)
                                        </option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group col-12 p-0">
                                <label for="">Would you like to use LUXE colors for the design?</label>
                                <div class="input-group">
                                    <select name="" id="colors-select" class="form-control"
                                            onchange="checkColor('colors-select')">
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
                            <div class="form-group col-12 p-0">
                                <label for="">Property Address</label>
                                <div class="input-group">
                                    <input type="text" name="property_address" class="form-control" required>
                                </div>
                            </div>
                            <div id="email-blast-questions" class="d-none">
                                <div class="form-group">
                                    <label for="">What is the purpose of this email blast?</label>
                                    <input type="text" class="form-control" name="purpose_of_email_blast">
                                </div>
                                <div class="form-group">
                                    <label for="">What type of color palette would you like for this
                                        email blast?</label>
                                    <input type="text" class="form-control"
                                           name="what_type_of_color_palette_would_you_like_for_this_email_blast">
                                </div>
                                <div class="form-group">
                                    <label for="">About clickable bottoms: would you like to
                                        redirect to website or personal acc?</label>
                                    <input type="text" class="form-control"
                                           name="about_clickable_bottoms_would_you_like_to_redirect_to_website_or_personal_acc">
                                </div>
                                <div class="form-group">
                                    <label for="">Would you like the contacts icons to redirect to
                                        your website / social media?</label>
                                    <input type="text" class="form-control"
                                           name="would_you_like_the_contacts_icons_to_redirect_to_your_website_or_social_media">
                                </div>
                                <div class="form-group">
                                    <label for="">Would you like to add features / highlights for
                                        the property to the email blast?</label>
                                    <input type="text" class="form-control"
                                           name="would_you_like_to_add_features_or_highlights_for_the_property_to_the_email_blast">
                                </div>
                                <div class="form-group">
                                    <label for="">Do you have pictures for the property?
                                        (photoshoot, if not we can offer photo / video services)</label>
                                    <input type="text" class="form-control"
                                           name="do_you_have_pictures_for_the_property">
                                </div>
                                <div class="form-group">
                                    <label for="">Would you like the email blast to be rebranded to
                                        your name / add your custom contact information?</label>
                                    <input type="text" class="form-control"
                                           name="would_you_like_the_email_blast_to_be_rebranded_to_your_name_or_add_your_custom_contact_information">
                                </div>
                                <div class="form-group">
                                    <label for="">What would you like to add to the email blast -
                                        specifically?</label>
                                    <input type="text" class="form-control"
                                           name="what_would_you_like_to_add_to_the_email_blast_specifically">
                                </div>
                            </div>

                            <button id="showModalBtn" type="submit" class="btn-luxe w-100">Request</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

<script>
    function checkColor (select_id) {
        var select_box = $('#' + select_id).val()
        if (select_box == 'no') {
            $('#colors').removeClass('d-none')
        } else {
            $('#colors').addClass('d-none')
        }
    }

    function toggleEmailBlastQuestions (elem) {
        let val = $(elem).val()
        if (val == 'Email Blast')
            $('#email-blast-questions').removeClass('d-none')
        else
            $('#email-blast-questions').addClass('d-none')
    }
</script>
