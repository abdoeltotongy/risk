<!-- @format -->
@extends('layouts.main')
@section('title')
    Dashboard
@endsection
@section('content')
    @include('layouts.header')

    <section class="container-scroller">

        <!-- container -->
        <div class="container-fluid page-body-wrapper">

            <!-- Aside -->
            @include('layouts.aside')
            <!-- main-panel -->
            <div class="main-panel">
                <div class="content-wrapper">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="home-tab">

                                @if (auth()->user()->role_id != 2)
                                    <div class="tab-content tab-content-basic">
                                        <div class="tab-pane fade show active" id="overview" role="tabpanel"
                                            aria-labelledby="overview">
                                            <div class="row">
                                                <div class="col-lg-3 col-6">
                                                    <!-- small box -->
                                                    <div class="small-box bg-danger">
                                                        <div class="inner">
                                                            {{-- <h3>{{ $risks->getRisksCount() }}</h3> --}}
                                                            <h3>1</h3>

                                                            <p>Risks</p>
                                                        </div>
                                                        <div class="icon">
                                                            <i class="mdi mdi-chart-pie"></i>
                                                        </div>
                                                        <a href="{{ route('risk.index') }}" class="small-box-footer">More
                                                            info
                                                            <i class="fas fa-arrow-circle-right"></i></a>
                                                    </div>
                                                </div>

                                                <div class="col-lg-3 col-6">
                                                    <!-- small box -->
                                                    <div class="small-box bg-danger" style="opacity: 0.5">
                                                        <div class="inner">
                                                            <h3>0</h3>

                                                            <p>Mitigated </p>
                                                        </div>
                                                        <div class="icon">
                                                            <i class="mdi mdi-comment-check-outline"></i>
                                                        </div>
                                                        <a href="{{ route('risk.index') }}" class="small-box-footer">More
                                                            info
                                                            <i class="fas fa-arrow-circle-right"></i></a>
                                                    </div>
                                                </div>
                                                <!-- ./col -->
                                                <div class="col-lg-3 col-6">
                                                    <!-- small box -->
                                                    <div class="small-box bg-success">
                                                        <div class="inner">
                                                            <h3>53 </h3>
                                                            {{-- sup style="font-size: 20px">%</sup> --}}
                                                            <p>opportunity </p>
                                                        </div>
                                                        <div class="icon">
                                                            <i class="mdi mdi-chart-bar"></i>
                                                        </div>
                                                        <a href="{{ route('opportunity.index') }}"
                                                            class="small-box-footer">More
                                                            info <i class="fas fa-arrow-circle-right"></i></a>
                                                    </div>
                                                </div>
                                                <!-- ./col -->
                                                <div class="col-lg-3 col-6">
                                                    <!-- small box -->
                                                    <div class="small-box bg-success" style="opacity: 0.5">
                                                        <div class="inner">
                                                            <h3>44</h3>

                                                            <p>Captured</p>
                                                        </div>
                                                        <div class="icon">
                                                            {{-- <i class="mdi mdi-account"></i> --}}
                                                            <i class="mdi mdi-comment-check-outline"></i>
                                                        </div>
                                                        <a href="{{ route('opportunity.index') }}"
                                                            class="small-box-footer">More
                                                            info <i class="fas fa-arrow-circle-right"></i></a>
                                                    </div>
                                                </div>
                                                <!-- ./col -->

                                                <!-- ./col -->
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
                                                                                    {{-- <th class="c-000">Details</th> --}}
                                                                                </tr>
                                                                            </thead>
                                                                            <tbody>
                                                                                @foreach ($risks as $risk)
                                                                                    <tr>
                                                                                        <td>
                                                                                            <div class="d-flex">
                                                                                                <h1>{{ $risk->rank }}</h1>
                                                                                            </div>
                                                                                        </td>
                                                                                        <td>
                                                                                            <p
                                                                                                class="card-title card-title-dash">
                                                                                                {{ $risk->name }}</p>
                                                                                            <p
                                                                                                class="card-subtitle card-subtitle-dash">
                                                                                                {{ $risk->category }}</p>
                                                                                        </td>

                                                                                        <td>
                                                                                            <p>{{ $risk->impact }}
                                                                                            </p>
                                                                                        </td>
                                                                                        <td>
                                                                                            @for ($i = 1; $i <= $risk->probability; $i++)
                                                                                                <i class="mdi mdi-star"></i>
                                                                                            @endfor

                                                                                            @for ($i = 1; $i <= 4 - $risk->probability; $i++)
                                                                                                <i
                                                                                                    class="mdi mdi-star-outline"></i>
                                                                                            @endfor

                                                                                        </td>
                                                                                        <td>
                                                                                            <p>{{ $risk->start_date }}</p>
                                                                                        </td>
                                                                                        <td>
                                                                                            <p>{{ $risk->end_date }}</p>
                                                                                        </td>
                                                                                        <td>
                                                                                            <div>
                                                                                                <div
                                                                                                    class="d-flex justify-content-between align-items-center mb-1 max-width-progress-wrap">
                                                                                                    <p class="text-success">
                                                                                                        {{ $risk->status }}/4
                                                                                                    </p>
                                                                                                </div>
                                                                                                <div
                                                                                                    class="progress progress-md">
                                                                                                    <div class="progress-bar bg-danger"
                                                                                                        role="progressbar"
                                                                                                        @if ($risk->status == 0) style="width: 0%"
                                                                                                    @elseif ($risk->status == 1) style="width: 25%"
                                                                                                    @elseif($risk->status == 2)  style="width: 50%"                                                                                                  style="width: 50%"
                                                                                                    @elseif($risk->status == 3) style="width: 75%"
                                                                                                    @elseif($risk->status == 4) style="width: 100%" @endif
                                                                                                        aria-valuenow="0"
                                                                                                        aria-valuemin="0"
                                                                                                        aria-valuemax="100">
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </td>
                                                                                        <td>
                                                                                            <p>{{ $risk->mitigation_title }}
                                                                                            </p>
                                                                                        </td>
                                                                                        <td>
                                                                                            <p>{{ $risk->mitigation_responsible }}
                                                                                            </p>
                                                                                        </td>
                                                                                        <td>
                                                                                            <p>{{ $risk->mitigation_deadline }}
                                                                                            </p>
                                                                                        </td>
                                                                                        <td>
                                                                                            <div>
                                                                                                <div
                                                                                                    class="d-flex justify-content-between align-items-center mb-1 max-width-progress-wrap">
                                                                                                    <p class="text-danger">
                                                                                                        {{ $risk->mitigation_status }}/4
                                                                                                    </p>
                                                                                                </div>
                                                                                                <div
                                                                                                    class="progress progress-md bg-success">
                                                                                                    <div class="progress-bar"
                                                                                                        role="progressbar"
                                                                                                        {{-- @if ($risk->mitigation_status == 1) style="width: 25%; background-color: #e9ecef" --}}
                                                                                                        @if ($risk->mitigation_status == 0) style="width: 0% ; background-color: #e9ecef"
                                                                                                        @elseif ($risk->mitigation_status == 1) style="width: 25% ; background-color: #e9ecef"
                                                                                                        @elseif($risk->mitigation_status == 2)  style="width: 50% ; background-color: #e9ecef"                                                                                                  style="width: 50%"
                                                                                                        @elseif($risk->mitigation_status == 3) style="width: 75% ; background-color: #e9ecef"
                                                                                                        @elseif($risk->mitigation_status == 4) style="width: 100% ; background-color: #e9ecef" @endif
                                                                                                        aria-valuenow="0"
                                                                                                        aria-valuemin="0"
                                                                                                        aria-valuemax="100">
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </td>

                                                                                    </tr>
                                                                                @endforeach
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
                                                                                opportunity
                                                                            </h4>
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
                                                                                    {{-- <th class="c-000">Details</th> --}}
                                                                                </tr>
                                                                            </thead>
                                                                            <tbody>
                                                                                @foreach ($opportunities as $opportunity)
                                                                                    <tr>
                                                                                        <td>
                                                                                            <div class="d-flex">
                                                                                                <h1>{{ $opportunity->rank }}
                                                                                                </h1>
                                                                                            </div>
                                                                                        </td>
                                                                                        <td>
                                                                                            <p
                                                                                                class="card-title card-title-dash">
                                                                                                {{ $opportunity->name }}
                                                                                            </p>
                                                                                            <p
                                                                                                class="card-subtitle card-subtitle-dash">
                                                                                                {{ $opportunity->category }}
                                                                                            </p>
                                                                                        </td>

                                                                                        <td>
                                                                                            <p>{{ $opportunity->impact }}
                                                                                            </p>
                                                                                        </td>
                                                                                        <td>
                                                                                            @for ($i = 1; $i <= $opportunity->probability; $i++)
                                                                                                <i
                                                                                                    class="mdi mdi-star"></i>
                                                                                            @endfor

                                                                                            @for ($i = 1; $i <= 4 - $opportunity->probability; $i++)
                                                                                                <i
                                                                                                    class="mdi mdi-star-outline"></i>
                                                                                            @endfor

                                                                                        </td>
                                                                                        <td>
                                                                                            <p>{{ $opportunity->start_date }}
                                                                                            </p>
                                                                                        </td>
                                                                                        <td>
                                                                                            <p>{{ $opportunity->end_date }}
                                                                                            </p>
                                                                                        </td>
                                                                                        <td>
                                                                                            <div>
                                                                                                <div
                                                                                                    class="d-flex justify-content-between align-items-center mb-1 max-width-progress-wrap">
                                                                                                    <p
                                                                                                        class="text-success">
                                                                                                        {{ $opportunity->status }}/4
                                                                                                    </p>
                                                                                                </div>
                                                                                                <div
                                                                                                    class="progress progress-md">
                                                                                                    <div class="progress-bar bg-danger"
                                                                                                        role="progressbar"
                                                                                                        @if ($opportunity->status == 0) style="width: 0% "
                                                                                                        @elseif ($opportunity->status == 1) style="width: 25% "
                                                                                                        @elseif($opportunity->status == 2)  style="width: 50% "                                                                                                  style="width: 50%"
                                                                                                        @elseif($opportunity->status == 3) style="width: 75% "
                                                                                                        @elseif($opportunity->status == 4) style="width: 100% " @endif
                                                                                                        aria-valuenow="0"
                                                                                                        aria-valuemin="0"
                                                                                                        aria-valuemax="100">
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </td>
                                                                                        <td>
                                                                                            <p>{{ $opportunity->capture_title }}
                                                                                            </p>
                                                                                        </td>
                                                                                        <td>
                                                                                            <p>{{ $opportunity->capture_responsible }}
                                                                                            </p>
                                                                                        </td>
                                                                                        <td>
                                                                                            <p>{{ $opportunity->capture_deadline }}
                                                                                            </p>
                                                                                        </td>
                                                                                        <td>
                                                                                            <div>
                                                                                                <div
                                                                                                    class="d-flex justify-content-between align-items-center mb-1 max-width-progress-wrap">
                                                                                                    <p class="text-danger">
                                                                                                        {{ $opportunity->capture_status }}/4
                                                                                                    </p>
                                                                                                </div>
                                                                                                <div
                                                                                                    class="progress progress-md bg-success">
                                                                                                    <div class="progress-bar"
                                                                                                        role="progressbar"
                                                                                                        @if ($opportunity->capture_status == 0) style="width: 0% ; background-color: #e9ecef"
                                                                                                    @elseif ($opportunity->capture_status == 1) style="width: 25% ; background-color: #e9ecef"
                                                                                                    @elseif($opportunity->capture_status == 2)  style="width: 50% ; background-color: #e9ecef"                                                                                                  style="width: 50%"
                                                                                                    @elseif($opportunity->capture_status == 3) style="width: 75% ; background-color: #e9ecef"
                                                                                                    @elseif($opportunity->capture_status == 4) style="width: 100% ; background-color: #e9ecef" @endif
                                                                                                        aria-valuenow="0"
                                                                                                        aria-valuemin="0"
                                                                                                        aria-valuemax="100">
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </td>

                                                                                    </tr>
                                                                                @endforeach
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
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
                <!-- content-wrapper ends -->

            </div>
            <!-- main-panel ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </section>

    <!-- js -->



    @include('layouts.footer')
@endsection
