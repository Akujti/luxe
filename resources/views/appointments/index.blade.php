@extends('layouts.app')
@section('js')
@endsection
@section('css')
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
        background-color: #FFCF40;
    }

    .wrapper h1 {
        font-weight: 400;
        letter-spacing: 2px;
        background: #FFCF40;
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
        accent-color: #FFCF40;
    }
</style>
@endsection
@section('content')
<div class="container wrapper">
    <h1>Appointments</h1>
    <form id="regForm" action="" class="d-block">
        <div class="tab">
            <h4 class="my-4">1. Choose an address</h4>
            <hr>
            <div class="w-100">
                <div class="shadow-box">
                    <label for="html">8550 Locust Street Maryville, TN 37803</label>
                    <input type="radio" id="html" name="fav_language" value="8550 Locust Street Maryville, TN 37803">
                </div>
                <div class="shadow-box">
                    <label for="css">628 Depot Ave. Phoenixville, PA 19460</label>
                    <input type="radio" id="css" name="fav_language" value="84 S. Penn Dr. Stamford, CT 06902">
                </div>
                <div class="shadow-box">
                    <label for="javascript">84 S. Penn Dr. Stamford, CT 06902</label>
                    <input type="radio" id="javascript" name="fav_language"
                        value="628 Depot Ave. Phoenixville, PA 19460">
                </div>
                <div class="shadow-box">
                    <label for="javascript">35 West James St. Palos Verdes Peninsula, CA 90274</label>
                    <input type="radio" id="javascript" name="fav_language" value="35 West James St.
Palos Verdes Peninsula, CA 90274">
                </div>
            </div>
        </div>
        <div class="tab">
            <h4 class="my-4">2. Date & Time</h4>
            <hr>
            <div class="form-group">
                <label for="">Select Date</label>
                <input type="date" class="form-control">
            </div>
            <div class="form-group">
                <label for="html">Select Time</label>
                <div class="shadow-box">
                    <label for="html">11:00 am</label>
                    <input type="radio" id="html" name="fav_language" value="11:00 am">
                </div>
                <div class="shadow-box">
                    <label for="html">2:00 pm</label>
                    <input type="radio" id="html" name="fav_language" value="11:00 am">
                </div>
            </div>
        </div>
        <div class="tab">3. Your Information</h4>
            <hr>
            <div class="form-group">
                <label for="">Your Name</label>
                <input type="text" class="form-control">
            </div>
            <div class="form-group">
                <label for="">Phone</label>
                <input type="text" class="form-control">
            </div>
            <div class="form-group">
                <label for="">Email</label>
                <input type="text" class="form-control">
            </div>
            <div class="form-group">
                <label for="">Address</label>
                <input type="text" class="form-control">
            </div>
            <div class="row">
                <div class="form-group col-4">
                    <label for="">City</label>
                    <input type="text" class="form-control">
                </div>
                <div class="form-group col-4">
                    <label for="">State</label>
                    <input type="text" class="form-control">
                </div>
                <div class="form-group col-4">
                    <label for="">Zip Code</label>
                    <input type="text" class="form-control">
                </div>
            </div>
            <div class="form-group">
                <label for="">Comments</label>
                <input type="text" class="form-control">
            </div>
        </div>
        <div style="overflow:auto;">
            <div style="float:right;">
                <button type="button" id="prevBtn" class="btn" onclick="nextPrev(-1)">Previous</button>
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
    document.getElementById("nextBtn").innerHTML = "Submit";
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
    if (y[i].value == "") {
      // add an "invalid" class to the field:
      y[i].className += " invalid";
      // and set the current valid status to false
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
@endsection