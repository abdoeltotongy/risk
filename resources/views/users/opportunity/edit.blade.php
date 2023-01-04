@extends('layouts.main')
@section('title')
    Create opportunity
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
                                            @include('inc.errors')
                                            <form action="{{ route('opportunity.update', $opportunity->id) }}"
                                                method="POST" class="forms-sample">
                                                @csrf
                                                @method('PUT')
                                                <div class="col-lg-12 d-flex flex-column">
                                                    <div class="row flex-grow">
                                                        <div class="col-lg-6 col-md-12 grid-margin stretch-card">
                                                            <div class="card">
                                                                <h4 class="card-title" style="background-color: #dc3545">
                                                                    Update </h4>
                                                                <div class="card-body">
                                                                    <div class="row">
                                                                        <div class="col-md-4">
                                                                            <div class="form-group row">
                                                                                <div class="col-sm-12">
                                                                                    <label class="form-label">Rank</label>
                                                                                    <select class="form-control"
                                                                                        name="rank">
                                                                                        <option
                                                                                            style="background-color: #fff">
                                                                                            {!! $opportunity->rank !!}</option>
                                                                                        <option>1</option>
                                                                                        <option>2</option>
                                                                                        <option>3</option>
                                                                                        <option>4</option>
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                        <div class="col-md-4">
                                                                            <div class="form-group row">
                                                                                <div class="col-sm-12">
                                                                                    <label
                                                                                        class="form-label">Probability</label>
                                                                                    <select class="form-control"
                                                                                        name="probability">
                                                                                        <option
                                                                                            style="background-color: #fff">
                                                                                            {!! $opportunity->probability !!}</option>
                                                                                        <option>1</option>
                                                                                        <option>2</option>
                                                                                        <option>3</option>
                                                                                        <option>4</option>
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                        <div class="col-md-4">
                                                                            <div class="form-group row">
                                                                                <div class="col-sm-12">
                                                                                    <label class="form-label">Status</label>
                                                                                    <select class="form-control"
                                                                                        name="status">
                                                                                        <option
                                                                                            style="background-color: #fff">
                                                                                            {!! $opportunity->status !!}</option>

                                                                                        <option>0</option>
                                                                                        <option>1</option>
                                                                                        <option>2</option>
                                                                                        <option>3</option>
                                                                                        <option>4</option>
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <div class="form-group">
                                                                        <label for="opportunity">opportunity</label>
                                                                        <input type="text" class="form-control"
                                                                            id="opportunity" name="name"
                                                                            placeholder="opportunity"
                                                                            value="{{ $opportunity->name }}" />
                                                                    </div>

                                                                    <div class="form-group">
                                                                        <label for="Category">Category</label>

                                                                        <select class="form-control" id="Category"
                                                                            name="category">
                                                                            <option style="background-color: #fff">
                                                                                {!! $opportunity->category !!}</option>
                                                                            @foreach ($cats as $cat)
                                                                                <option value="{{ $cat->name }}">
                                                                                    {{ $cat->name }}</option>
                                                                            @endforeach

                                                                        </select>
                                                                    </div>

                                                                    <div class="form-group">
                                                                        <label for="Impact">Impact</label>
                                                                        <textarea class="form-control" id="Impact" name="impact" cols="5" rows="5"> {!! $opportunity->impact !!} </textarea>
                                                                    </div>

                                                                    <div class="form-group">
                                                                        <label for="Descreption">Descreption</label>
                                                                        <textarea class="form-control" id="Descreption" name="description" cols="5" rows="5">{!! $opportunity->description !!}</textarea>
                                                                    </div>

                                                                    <div class="row">
                                                                        <div class="col-md-6">
                                                                            <div class="form-group row">
                                                                                <div class="col-sm-9">
                                                                                    <label class="form-label"
                                                                                        for="start-date">Start Date</label>
                                                                                    <input id="start-date" name="start_date"
                                                                                        type="date" class="form-control"
                                                                                        value="{!! $opportunity->start_date !!}"
                                                                                        placeholder="dd/mm/yyyy" />
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-6">
                                                                            <div class="form-group row">
                                                                                <div class="col-sm-9">
                                                                                    <label class="form-label"
                                                                                        for="end-date">End Date</label>
                                                                                    <input id="end-date" name="end_date"
                                                                                        type="date" class="form-control"
                                                                                        value="{!! $opportunity->end_date !!}"
                                                                                        placeholder="dd/mm/yyyy" />
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="col-lg-6 col-md-12 grid-margin stretch-card">
                                                            <div class="card">
                                                                <h4 class="card-title" style="background-color: #28a745">
                                                                    capture_plan</h4>

                                                                <div class="card-body">
                                                                    <div class="form-group">
                                                                        <label for="capture">Capture Measure</label>
                                                                        <input type="text" class="form-control"
                                                                            id="capture" name="capture_title"
                                                                            placeholder="capture Measure"
                                                                            value="{{ $opportunity->capture_title }}" />
                                                                    </div>

                                                                    <div class="form-group">
                                                                        <label for="Descreption">Descreption</label>
                                                                        <textarea class="form-control" id="Descreption" name="capture_desc" cols="5" rows="5"> {!! $opportunity->capture_desc !!} </textarea>
                                                                    </div>

                                                                    <div class="form-group">
                                                                        <label for="Responsible">Responsible</label>
                                                                        <textarea class="form-control" id="Responsible" name="capture_responsible" cols="5" rows="5">{!! $opportunity->capture_responsible !!}</textarea>
                                                                    </div>

                                                                    <div class="form-group">
                                                                        <label class="form-label" for="Start-Date">Start
                                                                            Date</label>
                                                                        <input id="Start-Date" name="capture_start_date"
                                                                            type="date" class="form-control"
                                                                            value="{!! $opportunity->capture_start_date !!}"
                                                                            placeholder="dd/mm/yyyy" />
                                                                    </div>

                                                                    <div class="form-group">
                                                                        <label class="form-label"
                                                                            for="Deadline">Deadline</label>
                                                                        <input id="Deadline" name="capture_deadline"
                                                                            type="date" class="form-control"
                                                                            value="{!! $opportunity->capture_deadline !!}"
                                                                            placeholder="dd/mm/yyyy" />
                                                                    </div>

                                                                    <div class="form-group">
                                                                        <label class="form-label">Status</label>
                                                                        <select class="form-control"
                                                                            name="capture_status">
                                                                            <option style="background-color: #fff">
                                                                                {!! $opportunity->capture_status !!}</option>
                                                                            <option>0</option>
                                                                            <option>1</option>
                                                                            <option>2</option>
                                                                            <option>3</option>
                                                                            <option>4</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    {{-- <div class="form-group"> --}}
                                                    <button type="submit" class="btn btn-primary">Submit</button>
                                                    {{-- </div> --}}
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- partial -->
            </div>
            <!-- main-panel ends -->
        </div>
        <!-- page-body-wrapper ends -->
        </div>
        <!-- container-scroller -->
    @endsection
