@extends('admin.layouts.app')

@section('css')
@endsection
@section('content')
<div class="container-fluid">
    <div class="row m-0">
        <div class="col-12 col-md-12 col-lg-3">
            <div class="col-12 box">
                <div class="py-4 icon">
                    <img src="/images/admin/form-icon.svg" alt="">
                </div>
                <div class="py-4">
                    <p class="p-count">{{ $stats[0] }}</p>
                    <p class="p-text">
                        Pre Approval Forms
                    </p>
                </div>
            </div>
            <div class="col-12 box py-3">
                <p class="p-count">{{ $stats[1] }}</p>
                <p class="p-text-regular">
                    Logo creation Request
                </p>
            </div>
            <div class="col-12 box py-4">
                <p class="p-count">{{ $stats[2] }}</p>
                <p class="p-text-regular">TEAM DADE <br> ZILLOW LEADS WEEKLY UPDATE</p>
            </div>
            <div class="col-12 box py-4">
                <p class="p-count">{{ $stats[3] }}</p>
                <p class="p-text-regular">TEAM FLEX <br> ZILLOW LEADS WEEKLY UPDATE</p>
            </div>
        </div>
        <div class="col-12 col-lg-9">
            <div class="row m-0">
                <div class="col-12 box px-4">
                    <div class="py-4 icon">
                        <p class="p-text text-left m-0">My Tasks Due this Week</p>
                    </div>
                    <div class="py-4">
                        <p class="p-text-regular text-left m-0" style="font-size:18px !important;">
                            There are no Tasks Available...
                        </p>
                    </div>
                </div>
                <div class="col-lg-7 col-md-12 box mr-4">
                    <div class="py-4 icon">
                        <p class="p-text text-left m-0">Potential Sales Volume</p>
                    </div>
                    <div class="py-4">
                        <canvas id="sale_volume" width="100%" height="349px"></canvas>
                    </div>
                    <div class="py-4 icon-up">
                        <p class="p-text-regular text-center m-0" style="font-size:18px !important;">
                            Active Listings
                        </p>
                        <p class="p-text text-center m-0">$ 3,308,800</p>
                    </div>
                </div>
                <div class="col box">
                    <div class="py-4 icon">
                        <p class="p-text text-left m-0">Active Transaction Types</p>
                    </div>
                    <div class="py-4">
                        <canvas id="active_transaction_type" width="100%" height="349px"></canvas>

                    </div>
                    <p class="legend-chart-text">
                        <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" viewBox="0 0 10 10">
                            <circle id="Ellipse_11" data-name="Ellipse 11" cx="5" cy="5" r="5" fill="#262626" />
                        </svg>
                        TEAM DADE - ZILLOW LEADS WEEKLY UPDATE
                    </p>
                    <p class="legend-chart-text">
                        <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" viewBox="0 0 10 10">
                            <circle id="Ellipse_12" data-name="Ellipse 12" cx="5" cy="5" r="5" fill="#bfbfbf" />
                        </svg>
                        TEAM FLEX - ZILLOW LEADS WEEKLY UPDATE
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

@section('js')
<script>
    const ctx = document.getElementById('sale_volume').getContext('2d');
    const myChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ['Sheri Garzia', 'Ana Gonzalez', 'Joyce Sierra', 'Suzan Clough', 'Steven Viviar', 'Suzan Clough', 'Steven Viviar'],
            datasets: [{
                label: '# of Votes',
                data: [12, 19, 3, 5, 2, 3, 2],
                backgroundColor: [
                    'rgba(38, 38, 38, 1)',
                    'rgba(64, 64, 64, 1)',
                    'rgba(89, 89, 89, 1)',
                    'rgba(115, 115, 115, 1)',
                    'rgba(140, 140, 140, 1)',
                    'rgba(166, 166, 166, 1)',
                    'rgba(191, 191, 191, 1)',
                ],
                borderColor: [
                    'rgba(38, 38, 38, 1)',
                    'rgba(64, 64, 64, 1)',
                    'rgba(89, 89, 89, 1)',
                    'rgba(115, 115, 115, 1)',
                    'rgba(140, 140, 140, 1)',
                    'rgba(166, 166, 166, 1)',
                    'rgba(191, 191, 191, 1)',
                ],
                borderWidth: 1
            }]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            scales: {
                y: {
                    beginAtZero: true
                },
                x: {
                    grid: {
                        display: false
                    }
                }
            }
        }
    });

    const ctx2 = document.getElementById('active_transaction_type').getContext('2d');
    const myChart2 = new Chart(ctx2, {
        type: 'doughnut',
        data: {
            labels: ['TEAM DADE - ZILLOW LEADS WEEKLY UPDATE', 'TEAM FLEX - ZILLOW LEADS WEEKLY UPDATE'],
            datasets: [{
                label: '# of Votes',
                data: [12, 19],
                backgroundColor: [
                    'rgba(38, 38, 38, 1)',
                    'rgba(191, 191, 191, 1)',
                ],
                borderColor: [
                    'rgba(38, 38, 38, 1)',
                    'rgba(191, 191, 191, 1)',
                ],
                borderWidth: 1
            }]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            scales: {
                y: {
                    beginAtZero: true,
                    grid: {
                        display: false,
                        drawBorder: false,
                    },
                    ticks: {
                        display: false,
                    }
                },
                x: {
                    grid: {
                        display: false,
                        drawBorder: false,
                    },
                    ticks: {
                        display: false,
                    }
                }
            },
            plugins: {
                legend: {
                    display: false,
                },
            }
        }
    });
</script>
@endsection
@endsection
