<!-- @format -->
@extends('layouts.main')
@section('title')
    Dashboard
@endsection
@section('content')
    @include('layouts.header')

    <section class="container-scroller">
        <!--  navbar  -->

        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
            @include('layouts.aside')

            <!-- main-panel -->
            <div class="main-panel">
                <div class="content-wrapper">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="home-tab">
                                <div class="tab-content tab-content-basic">
                                    <div class="tab-pane fade show active" id="overview" role="tabpanel"
                                        aria-labelledby="overview">
                                        <div class="row">
                                            <div class="col-lg-3 col-6">
                                                <!-- small box -->
                                                <div class="small-box bg-info">
                                                    <div class="inner">
                                                        <h3>150</h3>

                                                        <p>New Risks</p>
                                                    </div>
                                                    <div class="icon">
                                                        <i class="mdi mdi-new-box"></i>
                                                    </div>
                                                    <a href="#" class="small-box-footer">More info <i
                                                            class="fas fa-arrow-circle-right"></i></a>
                                                </div>
                                            </div>
                                            <!-- ./col -->
                                            <div class="col-lg-3 col-6">
                                                <!-- small box -->
                                                <div class="small-box bg-success">
                                                    <div class="inner">
                                                        <h3>53<sup style="font-size: 20px">%</sup></h3>

                                                        <p>Bounce Rate</p>
                                                    </div>
                                                    <div class="icon">
                                                        <i class="mdi mdi-chart-bar"></i>
                                                    </div>
                                                    <a href="#" class="small-box-footer">More info <i
                                                            class="fas fa-arrow-circle-right"></i></a>
                                                </div>
                                            </div>
                                            <!-- ./col -->
                                            <div class="col-lg-3 col-6">
                                                <!-- small box -->
                                                <div class="small-box bg-warning">
                                                    <div class="inner">
                                                        <h3>44</h3>

                                                        <p>User Registrations</p>
                                                    </div>
                                                    <div class="icon">
                                                        <i class="mdi mdi-account"></i>
                                                    </div>
                                                    <a href="#" class="small-box-footer">More info <i
                                                            class="fas fa-arrow-circle-right"></i></a>
                                                </div>
                                            </div>
                                            <!-- ./col -->
                                            <div class="col-lg-3 col-6">
                                                <!-- small box -->
                                                <div class="small-box bg-danger">
                                                    <div class="inner">
                                                        <h3>65</h3>

                                                        <p>Unique Visitors</p>
                                                    </div>
                                                    <div class="icon">
                                                        <i class="mdi mdi-chart-pie"></i>
                                                    </div>
                                                    <a href="#" class="small-box-footer">More info <i
                                                            class="fas fa-arrow-circle-right"></i></a>
                                                </div>
                                            </div>
                                            <!-- ./col -->
                                        </div>

                                        <div class="row">
                                            <div class="col-lg-8 d-flex flex-column">
                                                <div class="row flex-grow">
                                                    <div class="col-md-6 col-lg-6 grid-margin stretch-card">
                                                        <div class="card card-rounded">
                                                            <div class="card-body card-rounded">
                                                                <h4 class="card-title card-title-dash">Recent Events
                                                                </h4>
                                                                <div class="list align-items-center border-bottom py-2">
                                                                    <div class="wrapper w-100">
                                                                        <p class="mb-2 font-weight-medium">Change in
                                                                            Directors</p>
                                                                        <div
                                                                            class="d-flex justify-content-between align-items-center">
                                                                            <div class="d-flex align-items-center">
                                                                                <i
                                                                                    class="mdi mdi-calendar text-muted me-1"></i>
                                                                                <p class="mb-0 text-small text-muted">
                                                                                    Mar 14, 2019</p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="list align-items-center border-bottom py-2">
                                                                    <div class="wrapper w-100">
                                                                        <p class="mb-2 font-weight-medium">Other Events
                                                                        </p>
                                                                        <div
                                                                            class="d-flex justify-content-between align-items-center">
                                                                            <div class="d-flex align-items-center">
                                                                                <i
                                                                                    class="mdi mdi-calendar text-muted me-1"></i>
                                                                                <p class="mb-0 text-small text-muted">
                                                                                    Mar 14, 2019</p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="list align-items-center border-bottom py-2">
                                                                    <div class="wrapper w-100">
                                                                        <p class="mb-2 font-weight-medium">Quarterly
                                                                            Report</p>
                                                                        <div
                                                                            class="d-flex justify-content-between align-items-center">
                                                                            <div class="d-flex align-items-center">
                                                                                <i
                                                                                    class="mdi mdi-calendar text-muted me-1"></i>
                                                                                <p class="mb-0 text-small text-muted">
                                                                                    Mar 14, 2019</p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="list align-items-center border-bottom py-2">
                                                                    <div class="wrapper w-100">
                                                                        <p class="mb-2 font-weight-medium">Change in
                                                                            Directors</p>
                                                                        <div
                                                                            class="d-flex justify-content-between align-items-center">
                                                                            <div class="d-flex align-items-center">
                                                                                <i
                                                                                    class="mdi mdi-calendar text-muted me-1"></i>
                                                                                <p class="mb-0 text-small text-muted">
                                                                                    Mar 14, 2019</p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 col-lg-6 grid-margin stretch-card">
                                                        <div class="card card-rounded">
                                                            <div class="card-body">
                                                                <div
                                                                    class="d-flex align-items-center justify-content-between mb-3">
                                                                    <h4 class="card-title card-title-dash">Activities
                                                                    </h4>
                                                                    <p class="mb-0">20 finished, 5 remaining</p>
                                                                </div>
                                                                <ul class="bullet-line-list">
                                                                    <li>
                                                                        <div class="d-flex justify-content-between">
                                                                            <div><span class="text-light-green">Ben
                                                                                    Tossell</span> assign you a task
                                                                            </div>
                                                                            <p>Just now</p>
                                                                        </div>
                                                                    </li>
                                                                    <li>
                                                                        <div class="d-flex justify-content-between">
                                                                            <div><span class="text-light-green">Oliver
                                                                                    Noah</span> assign you a task</div>
                                                                            <p>1h</p>
                                                                        </div>
                                                                    </li>
                                                                    <li>
                                                                        <div class="d-flex justify-content-between">
                                                                            <div><span class="text-light-green">Jack
                                                                                    William</span> assign you a task
                                                                            </div>
                                                                            <p>1h</p>
                                                                        </div>
                                                                    </li>
                                                                    <li>
                                                                        <div class="d-flex justify-content-between">
                                                                            <div><span class="text-light-green">Leo
                                                                                    Lucas</span> assign you a task</div>
                                                                            <p>1h</p>
                                                                        </div>
                                                                    </li>
                                                                    <li>
                                                                        <div class="d-flex justify-content-between">
                                                                            <div><span class="text-light-green">Thomas
                                                                                    Henry</span> assign you a task</div>
                                                                            <p>1h</p>
                                                                        </div>
                                                                    </li>
                                                                    <li>
                                                                        <div class="d-flex justify-content-between">
                                                                            <div><span class="text-light-green">Ben
                                                                                    Tossell</span> assign you a task
                                                                            </div>
                                                                            <p>1h</p>
                                                                        </div>
                                                                    </li>
                                                                    <li>
                                                                        <div class="d-flex justify-content-between">
                                                                            <div><span class="text-light-green">Ben
                                                                                    Tossell</span> assign you a task
                                                                            </div>
                                                                            <p>1h</p>
                                                                        </div>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-lg-4 d-flex flex-column">
                                                <div class="row flex-grow">
                                                    <div class="col-md-6 col-lg-12 grid-margin stretch-card">
                                                        <div class="card bg-primary card-rounded">
                                                            <div class="card-body pb-0">
                                                                <h4 class="card-title card-title-dash text-white mb-4">
                                                                    Status Summary</h4>
                                                                <div class="row">
                                                                    <div class="col-sm-4">
                                                                        <p class="status-summary-ight-white mb-1">
                                                                            Closed Value</p>
                                                                        <h2 class="text-info">357</h2>
                                                                    </div>
                                                                    <div class="col-sm-8">
                                                                        <div class="status-summary-chart-wrapper pb-4">
                                                                            <div class="chartjs-size-monitor">
                                                                                <div class="chartjs-size-monitor-expand">
                                                                                    <div class=""></div>
                                                                                </div>
                                                                                <div class="chartjs-size-monitor-shrink">
                                                                                    <div class=""></div>
                                                                                </div>
                                                                            </div>
                                                                            <i class="mdi mdi-rocket"></i>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 col-lg-12 grid-margin stretch-card">
                                                        <div class="card card-rounded">
                                                            <div class="card-body">
                                                                <div class="row">
                                                                    <div class="col-sm-6">
                                                                        <div
                                                                            class="d-flex justify-content-between align-items-center mb-2 mb-sm-0">
                                                                            <div class="circle-progress-width">
                                                                                <div id="totalVisitors"
                                                                                    class="progressbar-js-circle pr-2">
                                                                                    <svg viewBox="0 0 100 100"
                                                                                        style="display: block; width: 100%">
                                                                                        <path
                                                                                            d="M 50,50 m 0,-42.5 a 42.5,42.5 0 1 1 0,85 a 42.5,42.5 0 1 1 0,-85"
                                                                                            stroke="#eee"
                                                                                            stroke-width="15"
                                                                                            fill-opacity="0"></path>
                                                                                        <path
                                                                                            d="M 50,50 m 0,-42.5 a 42.5,42.5 0 1 1 0,85 a 42.5,42.5 0 1 1 0,-85"
                                                                                            stroke="rgb(99,137,233)"
                                                                                            stroke-width="15"
                                                                                            fill-opacity="0"
                                                                                            style="stroke-dasharray: 267.132, 267.132; stroke-dashoffset: 96.1674">
                                                                                        </path>
                                                                                    </svg>
                                                                                    <div class="progressbar-text"
                                                                                        style="
																								position: absolute;
																								left: 50%;
																								top: 50%;
																								padding: 0px;
																								margin: 0px;
																								transform: translate(-50%, -50%);
																								color: rgb(255, 255, 255);
																								font-size: 0rem;
																							">
                                                                                        64
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div>
                                                                                <p class="text-small mb-2">Total
                                                                                    Visitors</p>
                                                                                <h4 class="mb-0 fw-bold">26.80%</h4>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-6">
                                                                        <div
                                                                            class="d-flex justify-content-between align-items-center">
                                                                            <div class="circle-progress-width">
                                                                                <div id="visitperday"
                                                                                    class="progressbar-js-circle pr-2">
                                                                                    <svg viewBox="0 0 100 100"
                                                                                        style="display: block; width: 100%">
                                                                                        <path
                                                                                            d="M 50,50 m 0,-42.5 a 42.5,42.5 0 1 1 0,85 a 42.5,42.5 0 1 1 0,-85"
                                                                                            stroke="#eee"
                                                                                            stroke-width="15"
                                                                                            fill-opacity="0"></path>
                                                                                        <path
                                                                                            d="M 50,50 m 0,-42.5 a 42.5,42.5 0 1 1 0,85 a 42.5,42.5 0 1 1 0,-85"
                                                                                            stroke="rgb(60,168,179)"
                                                                                            stroke-width="15"
                                                                                            fill-opacity="0"
                                                                                            style="stroke-dasharray: 267.132, 267.132; stroke-dashoffset: 176.307">
                                                                                        </path>
                                                                                    </svg>
                                                                                    <div class="progressbar-text"
                                                                                        style="
																								position: absolute;
																								left: 50%;
																								top: 50%;
																								padding: 0px;
																								margin: 0px;
																								transform: translate(-50%, -50%);
																								color: rgb(255, 255, 255);
																								font-size: 0rem;
																							">
                                                                                        34
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div>
                                                                                <p class="text-small mb-2">Visits per
                                                                                    day</p>
                                                                                <h4 class="mb-0 fw-bold">9065</h4>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-lg-12 d-flex flex-column">
                                                <div class="row flex-grow">
                                                    <div class="col-12 grid-margin stretch-card">
                                                        <div class="card card-rounded">
                                                            <div class="card-body">
                                                                <div
                                                                    class="d-sm-flex justify-content-between align-items-start">
                                                                    <div>
                                                                        <h4 class="card-title card-title-dash">All Risk
                                                                        </h4>
                                                                        <!-- <p class="card-subtitle card-subtitle-dash">You have 50+ new requests</p> -->
                                                                    </div>
                                                                </div>
                                                                <div class="table-responsive mt-1">
                                                                    <table class="table select-table">
                                                                        <thead>
                                                                            <tr>
                                                                                <th>Rank</th>
                                                                                <th>Risk</th>
                                                                                <th>Impact</th>
                                                                                <th>Probability</th>
                                                                                <th>Start date</th>
                                                                                <th>End date</th>
                                                                                <!-- <th>Progress</th> -->
                                                                                <th>Status</th>

                                                                                <th class="c-000">Mitigation Measure
                                                                                </th>
                                                                                <th class="c-000">Responsible</th>
                                                                                <th class="c-000">Deadline</th>
                                                                                <th class="c-000">Status</th>
                                                                                <th class="c-000">Details</th>
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                            <tr>
                                                                                <td>
                                                                                    <div class="d-flex">
                                                                                        <h1>1</h1>
                                                                                    </div>
                                                                                </td>
                                                                                <td>
                                                                                    <p class="card-title card-title-dash">
                                                                                        Risk 1</p>
                                                                                    <p
                                                                                        class="card-subtitle card-subtitle-dash">
                                                                                        Technical</p>
                                                                                </td>

                                                                                <td>
                                                                                    <p>Lorem ipsum dolor sit amet
                                                                                        consectetur adipisicing elit.
                                                                                    </p>
                                                                                </td>
                                                                                <td>
                                                                                    <i class="mdi mdi-star"></i>
                                                                                    <i class="mdi mdi-star-outline"></i>
                                                                                    <i class="mdi mdi-star-outline"></i>
                                                                                    <i class="mdi mdi-star-outline"></i>
                                                                                </td>
                                                                                <td>
                                                                                    <p>1/1/2022</p>
                                                                                </td>
                                                                                <td>
                                                                                    <p>10/1/2022</p>
                                                                                </td>
                                                                                <td>
                                                                                    <div>
                                                                                        <div
                                                                                            class="d-flex justify-content-between align-items-center mb-1 max-width-progress-wrap">
                                                                                            <p class="text-success">1/4
                                                                                            </p>
                                                                                        </div>
                                                                                        <div class="progress progress-md">
                                                                                            <div class="progress-bar bg-success"
                                                                                                role="progressbar"
                                                                                                style="width: 25%"
                                                                                                aria-valuenow="75"
                                                                                                aria-valuemin="0"
                                                                                                aria-valuemax="100">
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </td>
                                                                                <td>
                                                                                    <p>Lorem ipsum dolor</p>
                                                                                </td>
                                                                                <td>
                                                                                    <p>Lorem ipsum dolor sit amet
                                                                                        consectetur adipisicing elit.
                                                                                    </p>
                                                                                </td>
                                                                                <td>
                                                                                    <p>10/1/2022</p>
                                                                                </td>
                                                                                <td>
                                                                                    <div>
                                                                                        <div
                                                                                            class="d-flex justify-content-between align-items-center mb-1 max-width-progress-wrap">
                                                                                            <p class="text-danger">3/4
                                                                                            </p>
                                                                                        </div>
                                                                                        <div
                                                                                            class="progress progress-md bg-danger">
                                                                                            <div class="progress-bar"
                                                                                                role="progressbar"
                                                                                                style="width: 25%; background-color: #e9ecef"
                                                                                                aria-valuenow="75"
                                                                                                aria-valuemin="25"
                                                                                                aria-valuemax="100">
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-lg-12 d-flex flex-column">
                                                <div class="row flex-grow">
                                                    <div class="col-12 grid-margin stretch-card">
                                                        <div class="card card-rounded">
                                                            <div class="card-body">
                                                                <div
                                                                    class="d-sm-flex justify-content-between align-items-start">
                                                                    <div>
                                                                        <h4 class="card-title card-title-dash">All
                                                                            opportunity</h4>
                                                                        <!-- <p class="card-subtitle card-subtitle-dash">You have 50+ new requests</p> -->
                                                                    </div>
                                                                </div>
                                                                <div class="table-responsive mt-1">
                                                                    <table class="table select-table">
                                                                        <thead>
                                                                            <tr>
                                                                                <th>Rank</th>
                                                                                <th>opportunity</th>
                                                                                <th>Impact</th>
                                                                                <th>Probability</th>
                                                                                <th>Start date</th>
                                                                                <th>End date</th>
                                                                                <!-- <th>Progress</th> -->
                                                                                <th>Status</th>

                                                                                <th class="c-000">Capture Measure</th>
                                                                                <th class="c-000">Responsible</th>
                                                                                <th class="c-000">Deadline</th>
                                                                                <th class="c-000">Status</th>
                                                                                <!-- <th class="c-000">Details</th> -->
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                            <tr>
                                                                                <td>
                                                                                    <div class="d-flex">
                                                                                        <h1>1</h1>
                                                                                    </div>
                                                                                </td>
                                                                                <td>
                                                                                    <p class="card-title card-title-dash">
                                                                                        opportunity 1</p>
                                                                                    <p
                                                                                        class="card-subtitle card-subtitle-dash">
                                                                                        Technical</p>
                                                                                </td>

                                                                                <td>
                                                                                    <p>Lorem ipsum dolor sit amet
                                                                                        consectetur adipisicing elit.
                                                                                    </p>
                                                                                </td>
                                                                                <td>
                                                                                    <i class="mdi mdi-star"></i>
                                                                                    <i class="mdi mdi-star-outline"></i>
                                                                                    <i class="mdi mdi-star-outline"></i>
                                                                                    <i class="mdi mdi-star-outline"></i>
                                                                                </td>
                                                                                <td>
                                                                                    <p>1/1/2022</p>
                                                                                </td>
                                                                                <td>
                                                                                    <p>10/1/2022</p>
                                                                                </td>
                                                                                <td>
                                                                                    <div>
                                                                                        <div
                                                                                            class="d-flex justify-content-between align-items-center mb-1 max-width-progress-wrap">
                                                                                            <p class="text-success">1/4
                                                                                            </p>
                                                                                        </div>
                                                                                        <div class="progress progress-md">
                                                                                            <div class="progress-bar bg-success"
                                                                                                role="progressbar"
                                                                                                style="width: 25%"
                                                                                                aria-valuenow="75"
                                                                                                aria-valuemin="0"
                                                                                                aria-valuemax="100">
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </td>
                                                                                <td>
                                                                                    <p>Lorem ipsum dolor</p>
                                                                                </td>
                                                                                <td>
                                                                                    <p>Lorem ipsum dolor sit amet
                                                                                        consectetur adipisicing elit.
                                                                                    </p>
                                                                                </td>
                                                                                <td>
                                                                                    <p>10/1/2022</p>
                                                                                </td>
                                                                                <td>
                                                                                    <div>
                                                                                        <div
                                                                                            class="d-flex justify-content-between align-items-center mb-1 max-width-progress-wrap">
                                                                                            <p class="text-danger">3/4
                                                                                            </p>
                                                                                        </div>
                                                                                        <div
                                                                                            class="progress progress-md bg-danger">
                                                                                            <div class="progress-bar"
                                                                                                role="progressbar"
                                                                                                style="width: 25%; background-color: #e9ecef"
                                                                                                aria-valuenow="75"
                                                                                                aria-valuemin="25"
                                                                                                aria-valuemax="100">
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <!-- main-panel ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </section>

    <!-- js -->
    @include('layouts.footer')
@endsection
