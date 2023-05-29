@extends('layouts.app', ['active' => 'CMA'])
@section('css')
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
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

                    <div class="table-box-body">
                        <div class="table-action d-flex align-items-center justify-content-center my-3" style="column-gap: 15px;">
                            <div class="filter-select">
                                <select class="form-control" id="filter-search">
                                    <option value="">--</option>
                                    <option value="UnparsedAddress" selected>Address</option>
                                    <option value="StreetAdditionalInfo">Street Additional Info</option>
                                </select>
                            </div>
                            <div class="filter-search">
                                <select id="filter-value" data-live-search="true" oninput="searchListings('filter-search', 'filter-value')"></select>
                            </div>
                        </div>
                    </div>
                    <div class="table-box-footer w-100">
                        <div class="d-flex align-items-center justify-content-between">
                            <a href="{{ route('cma.index') }}" class="btn-action"><i class="fa-solid fa-chevron-left"></i> Previous</a>
                            <a href="{{ route('cma.show') }}" class="btn-action d-none" id="next-btn">Next<i class="fa-solid fa-angle-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
@section('js')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.8/js/select2.min.js" defer></script>
<script>
    $(document).ready(function() {
        $('#filter-value').select2({
            placeholder: "Search by address"
        });

        $(document).on('keyup', '.select2-search__field', function(e) {
            event.stopPropagation();
            var val = e.target.value;
            searchListings('filter-search', val);
        });

        $('#filter-value').on('select2:select', function(e) {
            const data = e.params.data;
            var nextBtn = $('#next-btn');
            var nextBtnHref = "{{ route('cma.show') }}";
            nextBtn.attr('href', nextBtnHref + '?listingId=' + data.id)
            nextBtn.removeClass('d-none');
        });
    });
    
    async function searchListings(filterSearchId, filterValueId) {
        var valueOfFilterSearch = $('#' + filterSearchId).val(),
            valueOfFilterValue = filterValueId;

        var data = {};
        data[valueOfFilterSearch + '.in'] = valueOfFilterValue;

        if (!valueOfFilterValue) return;

        var response = await axiosInc('listings', 'get', data);
        const $select = $('#filter-value');
        let body = '';
        if (response.data) {
            const options = response.data.bundle.map(item => `<option value="${item.ListingId}">${item.UnparsedAddress}</option>`);
            $select.html(options);
            $select.select2()
        }
    }
</script>
@endsection