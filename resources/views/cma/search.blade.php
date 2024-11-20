@extends('layouts.app', ['active' => 'CMA'])
@section('css')
    <script src="https://code.jquery.com/ui/1.13.0/jquery-ui.min.js" defer></script>
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.13.0/themes/base/jquery-ui.css">

    <link rel="stylesheet" href="{{ asset('/css/cma-report.css') }}">
    <style>
        a {
            text-decoration: none;
            color: black;
        }

        a:hover {
            color: black;
        }

        .row img {
            object-fit: cover;
        }
    </style>
@endsection
@section('content')
    <div class="container-fluid">
        <div class="row box-title p-0 m-0">
            <h3 class="text-center">Seller CMA</h3>
        </div>
        <div class="row mt-2 mb-5 justify-content-start p-0 m-0">

            <div class="col-12 mt-5">
                <div class="box-charts row">
                    <div class="table-box w-100 px-2">
                        <div class="table-box-header d-flex align-items-center justify-content-between w-100">
                            <h5>Subject Property Search</h5>
                            <a href="{{ route('cma.index') }}" class="btn-luxe">Back</a>
                        </div>

                        <div class="filter-select">
                            <select class="form-control d-none" id="filter-search">
                                <option value="UnparsedAddress" selected>Address</option>
                            </select>
                        </div>
                        <div class="table-box-body">
                            <div class="d-flex justify-content-center my-3">
                                {{-- <div class="form-group mb-0">
                                    <label for="">Closing Date</label>
                                    <input type="date" class="form-control" id="date-search">
                                    <small><i>Includes All Dates Up To Today</i></small>
                                </div> --}}
                                <div class="form-group filter-search position-relative mb-0">
                                    <label for="">Address</label>
                                    <input id="search-input1" class="form-control" type="text"
                                        placeholder="Search by address">
                                    <div id="search-spinner" class="d-none spinner position-absolute"
                                        style="top: 41px;right: 30px;"></div>
                                </div>
                            </div>
                        </div>
                        <div class="table-box-footer w-100">
                            <div class="d-flex align-items-center justify-content-between">
                                <a href="{{ route('cma.index') }}" class="btn-action text-dark"><i
                                        class="fa-solid fa-chevron-left"></i> Previous</a>
                                <a href="{{ route('cma.show') }}" class="btn-action d-none text-dark" id="next-btn">Next<i
                                        class="fa-solid fa-angle-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <script>
        $(document).ready(function() {
            $('#search-input1').autocomplete({
                minLength: 0,
                source: function(request, response) {
                    var options = $(this.element).data('autocomplete-options')
                    response(options || [])
                },
                select: function(event, ui) {
                    event.preventDefault()
                    $(this).val(ui.item.label)
                    var nextBtn = $('#next-btn')
                    var nextBtnHref = "{{ route('cma.show') }}"
                    nextBtn.attr('href', nextBtnHref + '?listingId=' + ui.item.value)
                    nextBtn.removeClass('d-none')
                },
                focus: function(event, ui) {
                    event.preventDefault()
                    $(this).val(ui.item.label)
                },
            })

            $('#search-input1').on('input', debounce(async function() {
                console.log(123);

                $('#search-spinner').toggleClass('d-none')
                let search_input = $('#search-input1').val()
                var filterSearch = $('#filter-search').val()
                var data = {}
                data[filterSearch + '.in'] = search_input
                var response = await axiosInc('listings', 'get', data)

                if (response.data) {
                    const options = response.data.bundle.map(item => {
                        return {
                            label: item.UnparsedAddress + ' - ' + item.CloseDate,
                            value: item.ListingId
                        }
                    })
                    $('#search-input1').data('autocomplete-options', options)
                    $('#search-input1').autocomplete('search', $('#search-input1').val())
                }
                $('#search-spinner').toggleClass('d-none')
            }, 500))

            function debounce(func, wait) {
                let timeout
                return function() {
                    const context = this,
                        args = arguments
                    clearTimeout(timeout)
                    timeout = setTimeout(function() {
                        func.apply(context, args)
                    }, wait)
                }
            }
        })
    </script>
@endsection
