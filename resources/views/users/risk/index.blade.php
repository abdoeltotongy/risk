@extends('layouts.main')
@section('title')
    Risk
@endsection
@section('content')
    <section class="container-scroller">
        @include('layouts.header')
        <!-- container -->
        <div class="container-fluid page-body-wrapper">

            <!-- Aside -->
            @include('layouts.aside')

            <!-- partial -->
            <div class="main-panel">
                <div class="content-wrapper">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="home-tab">
                                <div class="tab-content tab-content-basic">
                                    <div class="tab-pane fade show active" id="overview" role="tabpanel"
                                        aria-labelledby="overview">

                                        @include('inc.messages')
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

                                                                                <th class="c-000">Mitigation Measure</th>
                                                                                <th class="c-000">Responsible</th>
                                                                                <th class="c-000">Deadline</th>
                                                                                <th class="c-000">Status</th>
                                                                                <th class="c-000">Details</th>
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
                                                                                    <td>
                                                                                        <div class="template-demo">
                                                                                            <a href="{{ url('risk/report/' . $risk->id) }}"
                                                                                                class="btn btn-success btn-icon-text">
                                                                                                {{-- <i   class="ti-upload btn-icon-prepend"></i> --}}
                                                                                                Updates

                                                                                            </a>
                                                                                            <a href="{{ url('risk/' . $risk->id . '/edit') }}"
                                                                                                class="btn btn-dark btn-icon-text">
                                                                                                {{-- <i class="ti-file btn-icon-append"></i> --}}
                                                                                                Edit
                                                                                            </a>
                                                                                            <button
                                                                                                class="btn btn-danger btn-icon-text"
                                                                                                type="submit"
                                                                                                id="delete-btn"
                                                                                                class="btn btn-danger p-0">
                                                                                                Delate
                                                                                            </button>

                                                                                            {{-- href="{{ url('risk/' . $risk->id . '/delete') }}" --}}
                                                                                        </div>
                                                                                    </td>
                                                                                </tr>
                                                                                <form
                                                                                    action="{{ url('risk/' . $risk->id) }}"
                                                                                    method="post" style="display: none"
                                                                                    id="delete-form">
                                                                                    @csrf
                                                                                    @method('DELETE')
                                                                                </form>
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
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <!-- main-panel ends -->

        </div>
        <!-- container-scroller -->


        @include('layouts.footer')
    @endsection
