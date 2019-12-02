@extends('frontend.layouts.app')

@section('title', app_name() . ' | ' . __('navs.frontend.dashboard') )

@section('content')
    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <div class="page-title-right">
                    <form class="form-inline">
                        <div class="form-group">
                            <div class="input-group">
                                <input type="text" class="form-control form-control-light" id="dash-daterange">
                                <div class="input-group-append">
                                    <span class="input-group-text bg-primary border-primary text-white">
                                        <i class="mdi mdi-calendar-range font-13"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <a href="javascript: void(0);" class="btn btn-primary ml-2">
                            <i class="mdi mdi-autorenew"></i>
                        </a>
                        <a href="javascript: void(0);" class="btn btn-primary ml-1">
                            <i class="mdi mdi-filter-variant"></i>
                        </a>
                    </form>
                </div>
                <h4 class="page-title">Dashboard</h4>
            </div>
        </div>
    </div>
    <!-- end page title -->

    <div class="row">
        <div class="col-xl-5 col-lg-6">

            <div class="row">
                <div class="col-lg-6">
                    <div class="card widget-flat">
                        <div class="card-body">
                            <div class="float-right">
                                <i class="mdi mdi-account-multiple widget-icon"></i>
                            </div>
                            <h5 class="text-muted font-weight-normal mt-0" title="Number of Customers">Customers</h5>
                            <h3 class="mt-3 mb-3">36,254</h3>
                            <p class="mb-0 text-muted">
                                <span class="text-success mr-2"><i class="mdi mdi-arrow-up-bold"></i> 5.27%</span>
                                <span class="text-nowrap">Since last month</span>
                            </p>
                        </div> <!-- end card-body-->
                    </div> <!-- end card-->
                </div> <!-- end col-->

                <div class="col-lg-6">
                    <div class="card widget-flat">
                        <div class="card-body">
                            <div class="float-right">
                                <i class="mdi mdi-cart-plus widget-icon"></i>
                            </div>
                            <h5 class="text-muted font-weight-normal mt-0" title="Number of Orders">Orders</h5>
                            <h3 class="mt-3 mb-3">5,543</h3>
                            <p class="mb-0 text-muted">
                                <span class="text-danger mr-2"><i class="mdi mdi-arrow-down-bold"></i> 1.08%</span>
                                <span class="text-nowrap">Since last month</span>
                            </p>
                        </div> <!-- end card-body-->
                    </div> <!-- end card-->
                </div> <!-- end col-->
            </div> <!-- end row -->

            <div class="row">
                <div class="col-lg-6">
                    <div class="card widget-flat">
                        <div class="card-body">
                            <div class="float-right">
                                <i class="mdi mdi-currency-usd widget-icon"></i>
                            </div>
                            <h5 class="text-muted font-weight-normal mt-0" title="Average Revenue">Revenue</h5>
                            <h3 class="mt-3 mb-3">$6,254</h3>
                            <p class="mb-0 text-muted">
                                <span class="text-danger mr-2"><i class="mdi mdi-arrow-down-bold"></i> 7.00%</span>
                                <span class="text-nowrap">Since last month</span>
                            </p>
                        </div> <!-- end card-body-->
                    </div> <!-- end card-->
                </div> <!-- end col-->

                <div class="col-lg-6">
                    <div class="card widget-flat">
                        <div class="card-body">
                            <div class="float-right">
                                <i class="mdi mdi-pulse widget-icon"></i>
                            </div>
                            <h5 class="text-muted font-weight-normal mt-0" title="Growth">Growth</h5>
                            <h3 class="mt-3 mb-3">+ 30.56%</h3>
                            <p class="mb-0 text-muted">
                                <span class="text-success mr-2"><i class="mdi mdi-arrow-up-bold"></i> 4.87%</span>
                                <span class="text-nowrap">Since last month</span>
                            </p>
                        </div> <!-- end card-body-->
                    </div> <!-- end card-->
                </div> <!-- end col-->
            </div> <!-- end row -->

        </div> <!-- end col -->

        <div class="col-xl-7  col-lg-6">
            <div class="card">
                <div class="card-body">
                    <div class="dropdown float-right">
                        <a href="#" class="dropdown-toggle arrow-none card-drop" data-toggle="dropdown" aria-expanded="false">
                            <i class="mdi mdi-dots-vertical"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item">Sales Report</a>
                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item">Export Report</a>
                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item">Profit</a>
                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item">Action</a>
                        </div>
                    </div>
                    <h4 class="header-title mb-3">Projections Vs Actuals</h4>

                    <div id="high-performing-product" class="apex-charts"
                        data-colors="#727cf5,#e3eaef"></div>

                    <!-- <div style="height: 263px;" class="chartjs-chart">
                        <canvas id="high-performing-product"></canvas>
                    </div> -->
                </div> <!-- end card-body-->
            </div> <!-- end card-->

        </div> <!-- end col -->
    </div>
    <!-- end row -->

    <div class="row">
        <div class="col-lg-8">
            <div class="card">
                <div class="card-body">
                    <div class="dropdown float-right">
                        <a href="#" class="dropdown-toggle arrow-none card-drop" data-toggle="dropdown" aria-expanded="false">
                            <i class="mdi mdi-dots-vertical"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item">Sales Report</a>
                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item">Export Report</a>
                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item">Profit</a>
                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item">Action</a>
                        </div>
                    </div>
                    <h4 class="header-title mb-3">Revenue</h4>

                    <div class="chart-content-bg">
                        <div class="row text-center">
                            <div class="col-md-6">
                                <p class="text-muted mb-0 mt-3">Current Week</p>
                                <h2 class="font-weight-normal mb-3">
                                    <small class="mdi mdi-checkbox-blank-circle text-primary align-middle mr-1"></small>
                                    <span>$58,254</span>
                                </h2>
                            </div>
                            <div class="col-md-6">
                                <p class="text-muted mb-0 mt-3">Previous Week</p>
                                <h2 class="font-weight-normal mb-3">
                                    <small class="mdi mdi-checkbox-blank-circle text-success align-middle mr-1"></small>
                                    <span>$69,524</span>
                                </h2>
                            </div>
                        </div>
                    </div>

                    <div class="dash-item-overlay d-none d-md-block">
                        <h5>Today's Earning: $2,562.30</h5>
                        <p class="text-muted font-13 mb-3 mt-2">Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui.
                            Etiam rhoncus...</p>
                        <a href="javascript: void(0);" class="btn btn-outline-primary">View Statements
                            <i class="mdi mdi-arrow-right ml-2"></i>
                        </a>
                    </div>

                    <div id="revenue-chart" class="apex-charts mt-3"
                        data-colors="#727cf5,#0acf97"></div>
                </div> <!-- end card-body-->
            </div> <!-- end card-->
        </div> <!-- end col-->

        <div class="col-lg-4">
            <div class="card">
                <div class="card-body">
                    <div class="dropdown float-right">
                        <a href="#" class="dropdown-toggle arrow-none card-drop" data-toggle="dropdown" aria-expanded="false">
                            <i class="mdi mdi-dots-vertical"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item">Sales Report</a>
                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item">Export Report</a>
                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item">Profit</a>
                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item">Action</a>
                        </div>
                    </div>
                    <h4 class="header-title">Revenue By Location</h4>
                    <div class="mb-4 mt-4">
                        <div id="world-map-markers" style="height: 224px;"></div>
                    </div>

                    <h5 class="mb-1 mt-0 font-weight-normal">New York</h5>
                    <div class="progress-w-percent">
                        <span class="progress-value font-weight-bold">72k </span>
                        <div class="progress progress-sm">
                            <div class="progress-bar" role="progressbar" style="width: 72%;" aria-valuenow="72" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>

                    <h5 class="mb-1 mt-0 font-weight-normal">San Francisco</h5>
                    <div class="progress-w-percent">
                        <span class="progress-value font-weight-bold">39k </span>
                        <div class="progress progress-sm">
                            <div class="progress-bar" role="progressbar" style="width: 39%;" aria-valuenow="39" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>

                    <h5 class="mb-1 mt-0 font-weight-normal">Sydney</h5>
                    <div class="progress-w-percent">
                        <span class="progress-value font-weight-bold">25k </span>
                        <div class="progress progress-sm">
                            <div class="progress-bar" role="progressbar" style="width: 39%;" aria-valuenow="39" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>

                    <h5 class="mb-1 mt-0 font-weight-normal">Singapore</h5>
                    <div class="progress-w-percent mb-0">
                        <span class="progress-value font-weight-bold">61k </span>
                        <div class="progress progress-sm">
                            <div class="progress-bar" role="progressbar" style="width: 61%;" aria-valuenow="61" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                </div> <!-- end card-body-->
            </div> <!-- end card-->
        </div> <!-- end col-->
    </div>
    <!-- end row -->


    <div class="row">
        <div class="col-xl-6 col-lg-12 order-lg-2 order-xl-1">
            <div class="card">
                <div class="card-body">
                    <a href="" class="btn btn-sm btn-link float-right mb-3">Export
                        <i class="mdi mdi-download ml-1"></i>
                    </a>
                    <h4 class="header-title mt-2">Top Selling Products</h4>

                    <div class="table-responsive">
                        <table class="table table-centered table-nowrap table-hover mb-0">
                            <tbody>
                                <tr>
                                    <td>
                                        <h5 class="font-14 my-1 font-weight-normal">ASOS Ridley High Waist</h5>
                                        <span class="text-muted font-13">07 April 2018</span>
                                    </td>
                                    <td>
                                        <h5 class="font-14 my-1 font-weight-normal">$79.49</h5>
                                        <span class="text-muted font-13">Price</span>
                                    </td>
                                    <td>
                                        <h5 class="font-14 my-1 font-weight-normal">82</h5>
                                        <span class="text-muted font-13">Quantity</span>
                                    </td>
                                    <td>
                                        <h5 class="font-14 my-1 font-weight-normal">$6,518.18</h5>
                                        <span class="text-muted font-13">Amount</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <h5 class="font-14 my-1 font-weight-normal">Marco Lightweight Shirt</h5>
                                        <span class="text-muted font-13">25 March 2018</span>
                                    </td>
                                    <td>
                                        <h5 class="font-14 my-1 font-weight-normal">$128.50</h5>
                                        <span class="text-muted font-13">Price</span>
                                    </td>
                                    <td>
                                        <h5 class="font-14 my-1 font-weight-normal">37</h5>
                                        <span class="text-muted font-13">Quantity</span>
                                    </td>
                                    <td>
                                        <h5 class="font-14 my-1 font-weight-normal">$4,754.50</h5>
                                        <span class="text-muted font-13">Amount</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <h5 class="font-14 my-1 font-weight-normal">Half Sleeve Shirt</h5>
                                        <span class="text-muted font-13">17 March 2018</span>
                                    </td>
                                    <td>
                                        <h5 class="font-14 my-1 font-weight-normal">$39.99</h5>
                                        <span class="text-muted font-13">Price</span>
                                    </td>
                                    <td>
                                        <h5 class="font-14 my-1 font-weight-normal">64</h5>
                                        <span class="text-muted font-13">Quantity</span>
                                    </td>
                                    <td>
                                        <h5 class="font-14 my-1 font-weight-normal">$2,559.36</h5>
                                        <span class="text-muted font-13">Amount</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <h5 class="font-14 my-1 font-weight-normal">Lightweight Jacket</h5>
                                        <span class="text-muted font-13">12 March 2018</span>
                                    </td>
                                    <td>
                                        <h5 class="font-14 my-1 font-weight-normal">$20.00</h5>
                                        <span class="text-muted font-13">Price</span>
                                    </td>
                                    <td>
                                        <h5 class="font-14 my-1 font-weight-normal">184</h5>
                                        <span class="text-muted font-13">Quantity</span>
                                    </td>
                                    <td>
                                        <h5 class="font-14 my-1 font-weight-normal">$3,680.00</h5>
                                        <span class="text-muted font-13">Amount</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <h5 class="font-14 my-1 font-weight-normal">Marco Shoes</h5>
                                        <span class="text-muted font-13">05 March 2018</span>
                                    </td>
                                    <td>
                                        <h5 class="font-14 my-1 font-weight-normal">$28.49</h5>
                                        <span class="text-muted font-13">Price</span>
                                    </td>
                                    <td>
                                        <h5 class="font-14 my-1 font-weight-normal">69</h5>
                                        <span class="text-muted font-13">Quantity</span>
                                    </td>
                                    <td>
                                        <h5 class="font-14 my-1 font-weight-normal">$1,965.81</h5>
                                        <span class="text-muted font-13">Amount</span>
                                    </td>
                                </tr>

                            </tbody>
                        </table>
                    </div> <!-- end table-responsive-->
                </div> <!-- end card-body-->
            </div> <!-- end card-->
        </div> <!-- end col-->

        <div class="col-xl-3 col-lg-6 order-lg-1">
            <div class="card">
                <div class="card-body">
                    <div class="dropdown float-right">
                        <a href="#" class="dropdown-toggle arrow-none card-drop" data-toggle="dropdown" aria-expanded="false">
                            <i class="mdi mdi-dots-vertical"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item">Sales Report</a>
                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item">Export Report</a>
                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item">Profit</a>
                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item">Action</a>
                        </div>
                    </div>
                    <h4 class="header-title">Total Sales</h4>

                    <div id="average-sales" class="apex-charts mb-4 mt-4"
                        data-colors="#727cf5,#0acf97,#fa5c7c,#ffbc00"></div>


                    <div class="chart-widget-list">
                        <p>
                            <i class="mdi mdi-square text-primary"></i> Direct
                            <span class="float-right">$300.56</span>
                        </p>
                        <p>
                            <i class="mdi mdi-square text-danger"></i> Affilliate
                            <span class="float-right">$135.18</span>
                        </p>
                        <p>
                            <i class="mdi mdi-square text-success"></i> Sponsored
                            <span class="float-right">$48.96</span>
                        </p>
                        <p class="mb-0">
                            <i class="mdi mdi-square text-warning"></i> E-mail
                            <span class="float-right">$154.02</span>
                        </p>
                    </div>
                </div> <!-- end card-body-->
            </div> <!-- end card-->
        </div> <!-- end col-->

        <div class="col-xl-3 col-lg-6 order-lg-1">
            <div class="card">
                <div class="card-body">
                    <div class="dropdown float-right">
                        <a href="#" class="dropdown-toggle arrow-none card-drop" data-toggle="dropdown" aria-expanded="false">
                            <i class="mdi mdi-dots-vertical"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item">Sales Report</a>
                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item">Export Report</a>
                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item">Profit</a>
                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item">Action</a>
                        </div>
                    </div>
                    <h4 class="header-title mb-2">Recent Activity</h4>

                    <div class="slimscroll" style="max-height: 424px;">
                        <div class="timeline-alt pb-0">
                            <div class="timeline-item">
                                <i class="mdi mdi-upload bg-info-lighten text-info timeline-icon"></i>
                                <div class="timeline-item-info">
                                    <a href="#" class="text-info font-weight-bold mb-1 d-block">You sold an item</a>
                                    <small>Paul Burgess just purchased “Hyper - Admin Dashboard”!</small>
                                    <p class="mb-0 pb-2">
                                        <small class="text-muted">5 minutes ago</small>
                                    </p>
                                </div>
                            </div>

                            <div class="timeline-item">
                                <i class="mdi mdi-airplane bg-primary-lighten text-primary timeline-icon"></i>
                                <div class="timeline-item-info">
                                    <a href="#" class="text-primary font-weight-bold mb-1 d-block">Product on the Bootstrap Market</a>
                                    <small>Dave Gamache added
                                        <span class="font-weight-bold">Admin Dashboard</span>
                                    </small>
                                    <p class="mb-0 pb-2">
                                        <small class="text-muted">30 minutes ago</small>
                                    </p>
                                </div>
                            </div>

                            <div class="timeline-item">
                                <i class="mdi mdi-microphone bg-info-lighten text-info timeline-icon"></i>
                                <div class="timeline-item-info">
                                    <a href="#" class="text-info font-weight-bold mb-1 d-block">Robert Delaney</a>
                                    <small>Send you message
                                        <span class="font-weight-bold">"Are you there?"</span>
                                    </small>
                                    <p class="mb-0 pb-2">
                                        <small class="text-muted">2 hours ago</small>
                                    </p>
                                </div>
                            </div>

                            <div class="timeline-item">
                                <i class="mdi mdi-upload bg-primary-lighten text-primary timeline-icon"></i>
                                <div class="timeline-item-info">
                                    <a href="#" class="text-primary font-weight-bold mb-1 d-block">Audrey Tobey</a>
                                    <small>Uploaded a photo
                                        <span class="font-weight-bold">"Error.jpg"</span>
                                    </small>
                                    <p class="mb-0 pb-2">
                                        <small class="text-muted">14 hours ago</small>
                                    </p>
                                </div>
                            </div>

                            <div class="timeline-item">
                                <i class="mdi mdi-upload bg-info-lighten text-info timeline-icon"></i>
                                <div class="timeline-item-info">
                                    <a href="#" class="text-info font-weight-bold mb-1 d-block">You sold an item</a>
                                    <small>Paul Burgess just purchased “Hyper - Admin Dashboard”!</small>
                                    <p class="mb-0 pb-2">
                                        <small class="text-muted">16 hours ago</small>
                                    </p>
                                </div>
                            </div>

                            <div class="timeline-item">
                                <i class="mdi mdi-airplane bg-primary-lighten text-primary timeline-icon"></i>
                                <div class="timeline-item-info">
                                    <a href="#" class="text-primary font-weight-bold mb-1 d-block">Product on the Bootstrap Market</a>
                                    <small>Dave Gamache added
                                        <span class="font-weight-bold">Admin Dashboard</span>
                                    </small>
                                    <p class="mb-0 pb-2">
                                        <small class="text-muted">22 hours ago</small>
                                    </p>
                                </div>
                            </div>

                            <div class="timeline-item">
                                <i class="mdi mdi-microphone bg-info-lighten text-info timeline-icon"></i>
                                <div class="timeline-item-info">
                                    <a href="#" class="text-info font-weight-bold mb-1 d-block">Robert Delaney</a>
                                    <small>Send you message
                                        <span class="font-weight-bold">"Are you there?"</span>
                                    </small>
                                    <p class="mb-0 pb-2">
                                        <small class="text-muted">2 days ago</small>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!-- end timeline -->
                    </div> <!-- end slimscroll -->
                </div>
                <!-- end card-body -->
            </div>
            <!-- end card-->
        </div>
        <!-- end col -->

    </div>
    <!-- end row -->
@endsection

@push('after-styles')
    <link media="all" type="text/css" rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jvectormap/2.0.4/jquery-jvectormap.min.css">
@endpush

@push('after-scripts')
    <script src="//cdnjs.cloudflare.com/ajax/libs/apexcharts/3.8.6/apexcharts.min.js"></script>
    <script src="//jvectormap.com/js/jquery-jvectormap-2.0.3.min.js"></script>
    <script src="//jvectormap.com/js/jquery-jvectormap-world-mill.js"></script>
    <script>
    /**
     * Theme: Hyper - Responsive Bootstrap 4 Admin Dashboard
     * Author: Coderthemes
     * Module/App: Dashboard
     */

    ! function ($) {
        "use strict";

        var Dashboard = function () {
            this.$body = $("body"),
            this.charts = []
        };

        Dashboard.prototype.initCharts = function() {
            window.Apex = {
                chart: {
                    parentHeightOffset: 0,
                    toolbar: {
                        show: false
                    }
                },
                grid: {
                    padding: {
                        left: 0,
                        right: 0
                    }
                },
                colors: ["#727cf5", "#0acf97", "#fa5c7c", "#ffbc00"],
            };

            var colors = ["#727cf5", "#0acf97", "#fa5c7c", "#ffbc00"];
            var dataColors = $("#revenue-chart").data('colors');
            if (dataColors) {
                colors = dataColors.split(",");
            }

            var options = {
                chart: {
                    height: 364,
                    type: 'line',
                    dropShadow: {
                        enabled: true,
                        opacity: 0.2,
                        blur: 7,
                        left: -7,
                        top: 7
                    }
                },
                dataLabels: {
                    enabled: false
                },
                stroke: {
                    curve: 'smooth',
                    width: 4
                },
                series: [{
                    name: 'Current Week',
                    data: [10, 20, 15, 25, 20, 30, 20]
                }, {
                    name: 'Previous Week',
                    data: [0, 15, 10, 30, 15, 35, 25]
                }],
                colors: colors,
                zoom: {
                    enabled: false
                },
                legend: {
                    show: false
                },
                xaxis: {
                    type: 'string',
                    categories: ["Mon", "Tue", "Wed", "Thu", "Fri", "Sat", "Sun"],
                    tooltip: {
                        enabled: false
                    },
                    axisBorder: {
                        show: false
                    }
                },
                yaxis: {
                    labels: {
                        formatter: function (val) {
                            return val + "k"
                        },
                        offsetX: -15
                    }
                }
            }

            var chart = new ApexCharts(
                document.querySelector("#revenue-chart"),
                options
            );

            chart.render();

            // --------------------------------------------------
            var colors = ["#727cf5", "#e3eaef"];
            var dataColors = $("#high-performing-product").data('colors');
            if (dataColors) {
                colors = dataColors.split(",");
            }

            var options = {
                chart: {
                    height: 255,
                    type: 'bar',
                    stacked: true
                },
                plotOptions: {
                    bar: {
                        horizontal: false,
                        columnWidth: '20%'
                    },
                },
                dataLabels: {
                    enabled: false
                },
                stroke: {
                    show: true,
                    width: 2,
                    colors: ['transparent']
                },
                series: [{
                    name: 'Actual',
                    data: [65, 59, 80, 81, 56, 89, 40, 32, 65, 59, 80, 81]
                }, {
                    name: 'Projection',
                    data: [89, 40, 32, 65, 59, 80, 81, 56, 89, 40, 65, 59]
                }],
                zoom: {
                    enabled: false
                },
                legend: {
                    show: false
                },
                colors: colors,
                xaxis: {
                    categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
                    axisBorder: {
                        show: false
                    },
                },
                yaxis: {
                    labels: {
                        formatter: function (val) {
                            return val + "k"
                        },
                        offsetX: -15
                    }
                },
                fill: {
                    opacity: 1
                },
                tooltip: {
                    y: {
                        formatter: function (val) {
                            return "$" + val + "k"
                        }
                    },
                },
            }

            var chart = new ApexCharts(
                document.querySelector("#high-performing-product"),
                options
            );

            chart.render();

            // --------------------------------------------------
            var colors = ["#727cf5", "#0acf97", "#fa5c7c", "#ffbc00"];
            var dataColors = $("#average-sales").data('colors');
            if (dataColors) {
                colors = dataColors.split(",");
            }
            var options = {
                chart: {
                    height: 252,
                    type: 'donut',
                },
                legend: {
                    show: false
                },
                stroke: {
                    colors: ['transparent']
                },
                series: [44, 55, 41, 17],
                labels: ["Direct", "Affilliate", "Sponsored", "E-mail"],
                colors: colors,
                responsive: [{
                    breakpoint: 480,
                    options: {
                        chart: {
                            width: 200
                        },
                        legend: {
                            position: 'bottom'
                        }
                    }
                }]
            }

            var chart = new ApexCharts(
                document.querySelector("#average-sales"),
                options
            );

            chart.render();
        },
        // inits the map
        Dashboard.prototype.initMaps = function() {
            //various examples
            if ($('#world-map-markers').length > 0) {
                $('#world-map-markers').vectorMap({
                    map: 'world_mill',
                    normalizeFunction: 'polynomial',
                    hoverOpacity: 0.7,
                    hoverColor: false,
                    regionStyle: {
                        initial: {
                            fill: '#e3eaef'
                        }
                    },
                    markerStyle: {
                        initial: {
                            r: 9,
                            'fill': '#727cf5',
                            'fill-opacity': 0.9,
                            'stroke': '#fff',
                            'stroke-width': 7,
                            'stroke-opacity': 0.4
                        },

                        hover: {
                            'stroke': '#fff',
                            'fill-opacity': 1,
                            'stroke-width': 1.5
                        }
                    },
                    backgroundColor: 'transparent',
                    markers: [{
                        latLng: [40.71, -74.00],
                        name: 'New York'
                    }, {
                        latLng: [37.77, -122.41],
                        name: 'San Francisco'
                    }, {
                        latLng: [-33.86, 151.20],
                        name: 'Sydney'
                    }, {
                        latLng: [1.3, 103.8],
                        name: 'Singapore'
                    }],
                    zoomOnScroll: false
                });
            }
        },
        //initializing various components and plugins
        Dashboard.prototype.init = function () {
            var $this = this;
            // font
            // Chart.defaults.global.defaultFontFamily = '-apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,Oxygen-Sans,Ubuntu,Cantarell,"Helvetica Neue",sans-serif';

            //default date range picker
            $('#dash-daterange').daterangepicker({
                singleDatePicker: true
            });

            // init charts
            this.initCharts();

            //init maps
            this.initMaps();
        },

        //init flotchart
        $.Dashboard = new Dashboard, $.Dashboard.Constructor = Dashboard
    }(window.jQuery),

        //initializing Dashboard
    function ($) {
        "use strict";
        $(document).ready(function(e) {
            $.Dashboard.init();
        });
    }(window.jQuery);
    </script>
@endpush