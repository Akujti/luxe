@extends('layouts.app', ['active' => 'Service&StaffRequests'])
<style>
    #regForm {
        background-color: #ffffff;
        margin: auto;
        font-family: Raleway;
        padding: 40px;
    }
    h1 {
        text-align: center;
    }
    input {
        font-family: 'gothicregular' !important;
    }
    /* input {
        margin-right: auto;
        padding: 10px;
        width: 100%;
        font-size: 17px;
        font-family: Raleway;
        border: 1px solid #aaaaaa;
    } */
    /* Mark input boxes that gets an error on validation: */
    input.invalid {
        background-color: #ffdddd;
    }
    /* Hide all steps by default: */
    .tab {
        display: none;
        min-height: 300px;
    }
    button {
        background-color: #04AA6D;
        color: #ffffff;
        border: none;
        padding: 10px 20px;
        font-size: 17px;
        font-family: Raleway;
        cursor: pointer;
    }
    button:hover {
        opacity: 0.8;
    }
    #prevBtn {
        background-color: #bbbbbb;
    }
    /* Make circles that indicate the steps of the form: */
    .step {
        height: 15px;
        width: 15px;
        margin: 0 2px;
        background-color: #bbbbbb;
        border: none;
        border-radius: 50%;
        display: inline-block;
        opacity: 0.5;
    }
    .step.active {
        opacity: 1;
    }
    /* Mark the steps that are finished and valid: */
    .step.finish {
        background-color: #262626;
    }
    .wrapper h1 {
        letter-spacing: 2px;
        padding: 10px;
        border-radius: 10px;
    }
    .shadow-box {
        width: 100%;
        display: flex;
        justify-content: space-between;
        border-radius: 10px;
        /* border: 1px solid black; */
        box-shadow: 0 .125rem .25rem rgba(0, 0, 0, .075);
        padding: 20px;
        margin-bottom: 20px;
    }
    label {
        margin: 0;
    }
    input[type="radio"],
    input[type="checkbox"] {
        width: 20px;
        height: 20px;
        accent-color: #262626;
    }
</style>
<style>
    .ui-datepicker-week-end a {
        outline: 1px solid #262626;
    }
    #ui-datepicker-div {
        display: none;
        background-color: #fff;
        box-shadow: 0 0.125rem 0.5rem rgba(0, 0, 0, 0.1);
        margin-top: 0.25rem;
        border-radius: 0.5rem;
        padding: 0.5rem;
    }
    .ui-datepicker-calendar thead th {
        padding: 0.25rem 0;
        text-align: center;
        font-size: 0.75rem;
        font-weight: 400;
        color: #78909C;
    }
    .ui-datepicker-calendar tbody td {
        width: 2.5rem;
        text-align: center;
        padding: 0;
    }
    .ui-datepicker-calendar tbody td a {
        margin-bottom: 4px;
        display: block;
        border-radius: 0.25rem;
        line-height: 2rem;
        transition: 0.3s all;
        color: #546E7A;
        font-size: 0.875rem;
        text-decoration: none;
    }
    .ui-datepicker-calendar tbody td a:hover {
        background-color: #262626;
        color: #fff;
    }
    .ui-datepicker-calendar tbody td a.ui-state-active {
        background-color: #262626;
        color: #fff;
    }
    .ui-datepicker-header a.ui-corner-all {
        cursor: pointer;
        position: absolute;
        top: 0;
        width: 2rem;
        height: 2rem;
        margin: 0.5rem;
        border-radius: 0.25rem;
        transition: 0.3s all;
    }
    .ui-datepicker-header a.ui-corner-all:hover {
        background-color: #ECEFF1;
    }
    .ui-datepicker-header a.ui-datepicker-prev {
        left: 0;
        background: url("data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIxMyIgaGVpZ2h0PSIxMyIgdmlld0JveD0iMCAwIDEzIDEzIj48cGF0aCBmaWxsPSIjNDI0NzcwIiBmaWxsLXJ1bGU9ImV2ZW5vZGQiIGQ9Ik03LjI4OCA2LjI5NkwzLjIwMiAyLjIxYS43MS43MSAwIDAgMSAuMDA3LS45OTljLjI4LS4yOC43MjUtLjI4Ljk5OS0uMDA3TDguODAzIDUuOGEuNjk1LjY5NSAwIDAgMSAuMjAyLjQ5Ni42OTUuNjk1IDAgMCAxLS4yMDIuNDk3bC00LjU5NSA0LjU5NWEuNzA0LjcwNCAwIDAgMS0xLS4wMDcuNzEuNzEgMCAwIDEtLjAwNi0uOTk5bDQuMDg2LTQuMDg2eiIvPjwvc3ZnPg==");
        background-repeat: no-repeat;
        background-size: 0.5rem;
        background-position: 50%;
        transform: rotate(180deg);
    }
    .ui-datepicker-header a.ui-datepicker-next {
        right: 0;
        background: url('data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIxMyIgaGVpZ2h0PSIxMyIgdmlld0JveD0iMCAwIDEzIDEzIj48cGF0aCBmaWxsPSIjNDI0NzcwIiBmaWxsLXJ1bGU9ImV2ZW5vZGQiIGQ9Ik03LjI4OCA2LjI5NkwzLjIwMiAyLjIxYS43MS43MSAwIDAgMSAuMDA3LS45OTljLjI4LS4yOC43MjUtLjI4Ljk5OS0uMDA3TDguODAzIDUuOGEuNjk1LjY5NSAwIDAgMSAuMjAyLjQ5Ni42OTUuNjk1IDAgMCAxLS4yMDIuNDk3bC00LjU5NSA0LjU5NWEuNzA0LjcwNCAwIDAgMS0xLS4wMDcuNzEuNzEgMCAwIDEtLjAwNi0uOTk5bDQuMDg2LTQuMDg2eiIvPjwvc3ZnPg==');
        background-repeat: no-repeat;
        background-size: 10px;
        background-position: 50%;
    }
    .ui-datepicker-header a>span {
        display: none;
    }
    .ui-datepicker-title {
        text-align: center;
        line-height: 2rem;
        margin-bottom: 0.25rem;
        font-size: 0.875rem;
        font-weight: 500;
        padding-bottom: 0.25rem;
    }
    .ui-datepicker-week-col {
        color: #78909C;
        font-weight: 400;
        font-size: 0.75rem;
    }
    .h1-luxe, .h4-luxe {
        font-family: 'gothicbold';
    }
    .label {
        font-family: 'gothicbold';
    }
    .btn-previous {
        font-family: 'gothicbold';
        font-size: 18px !important;
    }
</style>

@section('content')
<body>
    <div class="container-fluid wrapper">
        <div id="popup" class="card">
            <div class="card-header text-center">
                <h5>Open House Sign-Up Policy
                </h5>
            </div>
            <div class="card-body">
                <p>You will receive an email confirmation once you book an open house on the following page. The
                    email confirmation only
                    serves as a notification to you, listing agent, & staff that you have requested to host an
                    open house.
                </p>
                <b>
                    Your open house is not confirmed until you reach out to the listing agent for final
                    approval.
                </b>
                <p>Listing agent will be the one to provide access instructions for the property.</p>
            </div>
            <div class="card-footer">
                <button onclick="showForm()" class="btn btn-luxe w-100">I Agree</button>
            </div>
        </div>
        <form id="regForm" action="{{route('appointments.store')}}" method="POST" class="d-none p-0">
            <h1 class="h1-luxe position-relative">Appointments
                @if (Auth::user() && Auth::user()->isAdmin)
                <a href="{{route('appointment-addresses.index')}}"
                    class="btn btn-dark position-absolute text-white" style="right: 15px;top:15px">Addresses</a>
                @endif
            </h1>
            @csrf
            <input type="hidden" class="form-control" name="phone">
            <div class="tab">
                <h4 class="my-4 h4-luxe">1. Choose an address</h4>
                <hr>
                <div class="w-100">
                    @foreach ($addresses as $item)
                    <div class="shadow-box">
                        <label for="html" class="label p-0 m-0">{{$item->title}}</label>
                        <input type="radio" id="html" name="appointment_address" value="{{$item->id}}">
                    </div>
                    @endforeach
                </div>
            </div>
            <div class="tab">
                <h4 class="my-4 h4-luxe">2. Date & Time</h4>
                <hr>
                <div class="form-group">
                    <label for="" class="label">Select Date</label>
                    <input type="text" id="datepicker" name="date" class="form-control date" autocomplete="off"
                        required>
                    <i class="label">Available days are Saturday and Sunday</i>
                </div>
                <label for="html" class="label">Select Time Slot</label>
                <div class="form-group time-group">
                </div>
            </div>
            <div class="tab">
                <h4  class="my-4 h4-luxe">3. Your Information</h4>
                <hr>
                <div class="form-group">
                    <label for="" class="label">Your Name</label>
                    <input type="text" class="form-control" name="name" required>
                </div>
                <div class="form-group">
                    <label for="" class="label">Phone</label>
                    <input type="text" class="form-control" name="phone" required>
                </div>
                <div class="form-group">
                    <label for="" class="label">Email</label>
                    <input type="email" class="form-control" name="email" required>
                </div>
                <div class="form-group">
                    <label for="" class="label">Address</label>
                    <input type="text" class="form-control" name="address">
                </div>
                <div class="row">
                    <div class="form-group col-4">
                        <label for="" class="label">City</label>
                        <input type="text" class="form-control" name="city">
                    </div>
                    <div class="form-group col-4">
                        <label for="" class="label">State</label>
                        <input type="text" class="form-control" name="state">
                    </div>
                    <div class="form-group col-4">
                        <label for="" class="label">Zip Code</label>
                        <input type="text" class="form-control" name="zip">
                    </div>
                </div>
                <div class="form-group">
                    <label for="" class="label">Comments</label>
                    <input type="text" class="form-control" name="comments">
                </div>
            </div>
            <div style="overflow:auto;">
                <div style="float:right;">
                    <button type="button" id="prevBtn" class="btn btn-previous" onclick="nextPrev(-1)">Previous</button>
                    <button type="button" id="nextBtn" class="btn btn-luxe" onclick="nextPrev(1)">Next</button>
                </div>
            </div>
            <!-- Circles which indicates the steps of the form: -->
            <div style="text-align:center;margin-top:40px;">
                <span class="step"></span>
                <span class="step"></span>
                <span class="step"></span>
            </div>
        </form>
    </div>
</body>
<script>
    function showForm(){
        $('#popup').addClass('d-none')
        $('#regForm').removeClass('d-none')
        $('#regForm').addClass('d-block')
    }

    $("#datepicker").datepicker({
        duration: "fast",
        dateFormat: 'yy-mm-dd',
        beforeShowDay: function(day) {
            var day = day.getDay();
            if (day == 1 || day == 2 || day == 3 || day == 4 || day == 5) {
                return [false]
            } else {
                return [true]
            }
        }
    });
    
</script>
<script>
    var currentTab = 0; // Current tab is set to be the first tab (0)
showTab(currentTab); // Display the current tab
function showTab(n) {
  // This function will display the specified tab of the form...
  var x = document.getElementsByClassName("tab");
  x[n].style.display = "block";
  //... and fix the Previous/Next buttons:
  if (n == 0) {
    document.getElementById("prevBtn").style.display = "none";
  } else {
    document.getElementById("prevBtn").style.display = "inline";
  }
  if (n == (x.length - 1)) {
    document.getElementById("nextBtn").innerHTML = "Book";
  } else {
    document.getElementById("nextBtn").innerHTML = "Next";
  }
  //... and run a function that will display the correct step indicator:
  fixStepIndicator(n)
}
function nextPrev(n) {
  // This function will figure out which tab to display
  var x = document.getElementsByClassName("tab");
  // Exit the function if any field in the current tab is invalid:
  if (n == 1 && !validateForm()) return false;
  // Hide the current tab:
  x[currentTab].style.display = "none";
  // Increase or decrease the current tab by 1:
  currentTab = currentTab + n;
  // if you have reached the end of the form...
  if (currentTab >= x.length) {
    // ... the form gets submitted:
    document.getElementById("regForm").submit();
    return false;
  }
  // Otherwise, display the correct tab:
  showTab(currentTab);
}
function validateForm() {
  // This function deals with validation of the form fields
  var x, y, i, valid = true;
  x = document.getElementsByClassName("tab");
  y = x[currentTab].getElementsByTagName("input");
  // A loop that checks every input field in the current tab:
  for (i = 0; i < y.length; i++) {
    // If a field is empty...
    if (y[i].value == "" && y[i].hasAttribute('required')) {
      // add an "invalid" class to the field:
      y[i].className += " invalid";
      // and set the current valid status to false
      valid = false;
    }
    if ($('input[type=radio]:checked').length == 0) {
        valid = false;
    }
  }
  if(currentTab == 1){
      console.log('asdas',$('input[name=time_slot]:checked'));
      if ($('input[name=time_slot]:checked').length == 0) {
        valid = false;
    }
  }
  
  // If the valid status is true, mark the step as finished and valid:
  if (valid) {
    document.getElementsByClassName("step")[currentTab].className += " finish";
  }
  return valid; // return the valid status
}
function fixStepIndicator(n) {
  // This function removes the "active" class of all steps...
  var i, x = document.getElementsByClassName("step");
  for (i = 0; i < x.length; i++) {
    x[i].className = x[i].className.replace(" active", "");
  }
  //... and adds the "active" class on the current step:
  x[n].className += " active";
} 
</script>

<script>
    $(document).ready(()=>{
        const validate = dateString => {
            var date = new Date();
            date.setDate(date.getDate() + 90);
            selected_date = (new Date(dateString))
            console.log(selected_date<date);
            const day = (new Date(dateString)).getDay();
            if (day==1 || day==2 || day==3 || day==4 || day==5 || selected_date>=date) {
                return false;
            }
            return true;
        }
        
        // Sets the value to '' in case of an invalid date
        document.querySelector('.date').onchange = evt => {
            $('.time-group').empty()
            if (!validate(evt.target.value)) {
                evt.target.value = '';   
            alert('ababa')

            }
            else{
                $.ajax({
                    type:'GET',
                    url:'/appointment-timeslots/all?date='+evt.target.value,
                    data:'_token = <?php echo csrf_token() ?>',
                    success:function(data) {
                        data = data.time_slots
                        data.forEach(element => {
                            $('.time-group').append('<div class="shadow-box"> <label for="html">'+element.title+'</label><input type="radio" name="time_slot" value="'+element.id+'"></div>')
                        });
                    }
                });
            }
        }
    })
</script>
@endsection