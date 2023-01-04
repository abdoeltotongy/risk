@extends('layouts.main')
@section('title')
    Update Opportunity
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
                                        <div class="row">
                                            <div class="col-lg-12 d-flex flex-column">
                                                <div class="row flex-grow">
                                                    <div class="col-12 grid-margin stretch-card">
                                                        <div class="card card-rounded">
                                                            <div class="card-body">
                                                                <div
                                                                    class="d-sm-flex justify-content-between align-items-start">
                                                                    <div>
                                                                        <h4 class="card-title card-title-dash">
                                                                            {{ $opportunity->name }}</h4>

                                                                    </div>
                                                                    <div class="">
                                                                        <button type="button"
                                                                            class="btn btn-danger btn-icon-text"
                                                                            data-bs-toggle="modal"
                                                                            data-bs-target="#exampleModal">
                                                                            <i class="ti-upload btn-icon-prepend"></i>
                                                                            Update
                                                                        </button>
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
                                                                            {{-- @foreach ($opportunitys as $opportunity) --}}
                                                                            <tr>
                                                                                <td>
                                                                                    <div class="d-flex">
                                                                                        <h1>{{ $opportunity->rank }}</h1>
                                                                                    </div>
                                                                                </td>
                                                                                <td>
                                                                                    <p class="card-title card-title-dash">
                                                                                        {{ $opportunity->name }}</p>
                                                                                    <p
                                                                                        class="card-subtitle card-subtitle-dash">
                                                                                        {{ $opportunity->category }}</p>
                                                                                </td>

                                                                                <td>
                                                                                    <p>{{ $opportunity->impact }}
                                                                                    </p>
                                                                                </td>
                                                                                <td>
                                                                                    @for ($i = 1; $i <= $opportunity->probability; $i++)
                                                                                        <i class="mdi mdi-star"></i>
                                                                                    @endfor

                                                                                    @for ($i = 1; $i <= 4 - $opportunity->probability; $i++)
                                                                                        <i class="mdi mdi-star-outline"></i>
                                                                                    @endfor

                                                                                </td>
                                                                                <td>
                                                                                    <p>{{ $opportunity->start_date }}</p>
                                                                                </td>
                                                                                <td>
                                                                                    <p>{{ $opportunity->end_date }}</p>
                                                                                </td>
                                                                                <td>
                                                                                    <div>
                                                                                        <div
                                                                                            class="d-flex justify-content-between align-items-center mb-1 max-width-progress-wrap">
                                                                                            <p class="text-danger">
                                                                                                {{ $opportunity->status }}/4
                                                                                            </p>
                                                                                        </div>
                                                                                        <div class="progress progress-md">
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
                                                                                            <p class="text-success">
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
                                                                                                @elseif($opportunity->capture_status == 4) style="width: 100% ; background-color: var(--bg-success)" @endif
                                                                                                aria-valuenow="0"
                                                                                                aria-valuemin="0"
                                                                                                aria-valuemax="100">
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </td>

                                                                            </tr>

                                                                            {{-- @endforeach --}}
                                                                        </tbody>
                                                                    </table>

                                                                </div>


                                                                <div class="card card-rounded">
                                                                    <div class="card-body">
                                                                        <div
                                                                            class="d-sm-flex justify-content-between align-items-start">
                                                                            <div>
                                                                                <h4 class="card-title card-title-dash">
                                                                                    Updates and
                                                                                    Current Situation</h4>
                                                                                <!-- <p class="card-subtitle card-subtitle-dash">You have 50+ new requests</p> -->
                                                                            </div>
                                                                        </div>
                                                                        @include('inc.errors')

                                                                        <div class="table-responsive mt-1">
                                                                            <table class="table select-table">
                                                                                <thead>
                                                                                    <tr>
                                                                                        <th>Date</th>

                                                                                        <th>
                                                                                            Descreption</th>
                                                                                    </tr>
                                                                                </thead>
                                                                                <tbody>
                                                                                    @foreach ($updates as $update)
                                                                                        @if ($opportunity->id === $update->opportunity_id)
                                                                                            <tr>
                                                                                                <td>
                                                                                                    {{ $update->opportunity_update_date }}
                                                                                                </td>

                                                                                                <td>
                                                                                                    {{ $update->opportunity_update_report }}
                                                                                                </td>
                                                                                            </tr>
                                                                                        @endif
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
                </div>
                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Update</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                @include('inc.errors')
                                <form action="{{ route('opportunity.report.store', $opportunity->id) }}" method="POST">
                                    @csrf
                                    {{-- @method('PUT') --}}
                                    <input type="hidden" name="opportunity_id" value="{{ $opportunity->id }}" />

                                    <div class="form-group">
                                        <label for="date">Date</label>
                                        <input type="date" class="form-control" id="date"
                                            name="opportunity_update_date" placeholder="Date  " />
                                    </div>
                                    <div class="form-group">
                                        <label for="Descreption">Descreption</label>
                                        <textarea type="text" class="form-control" id="descreption" name="opportunity_update_report"
                                            placeholder="Descreption...   "></textarea>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="submit" class="btn btn-primary">Save
                                            Update</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- main-panel ends -->

        </div>
        <!-- page-body-wrapper ends -->
        </div>
        <!-- container-scroller -->

        @include('layouts.footer')
    @endsection
