@extends('layouts.main')
@section('title')
    Create Risk
@endsection
@section('content')
    <section class="container-scroller">
        <form action="{{ url('logout') }}" method="post" style="display: none" id="logout-form">
            @csrf
        </form>
        <!-- Navbar -->
        <nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex align-items-top flex-row">
            <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-start">
                <div class="me-3">
                    <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-bs-toggle="minimize">
                        <span class="icon-menu"></span>
                    </button>
                </div>
                <div>
                    <a class="navbar-brand brand-logo" href="index.html">
                        <img src="images/logo.svg" alt="logo" />
                    </a>
                </div>
            </div>
            <div class="navbar-menu-wrapper d-flex">
                <ul class="navbar-nav">
                    <li class="nav-item font-weight-semibold">
                        <h1 class="welcome-text">Good Morning, <span class="text-black fw-bold">{{ auth()->user()->name }}
                            </span></h1>
                    </li>
                </ul>

                <ul class="navbar-nav ms-auto">
                    @guest
                        <li class="nav-item font-weight-semibold">
                            <a class="btn btn-dark btn-rounded btn-fw" href="{{ url('login') }}"> Login </a>
                        </li>

                    @endguest

                    @auth
                        <li class="nav-item font-weight-semibold">

                            <a class="btn btn-dark btn-rounded btn-fw" href="#" id="logout-btn"> Logout </a>
                        </li>
                    @endauth
                </ul>

                <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button"
                    data-bs-toggle="offcanvas">
                    <span class="mdi mdi-menu"></span>
                </button>
            </div>
        </nav>
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
                                            <form action="{{ route('risk.update', $risk->id) }}" method="POST"
                                                class="forms-sample">
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
                                                                                            {!! $risk->rank !!}</option>
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
                                                                                            {!! $risk->probability !!}</option>
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
                                                                                            {!! $risk->status !!}</option>

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
                                                                        <label for="risk">Risk</label>
                                                                        <input type="text" class="form-control"
                                                                            id="risk" name="name" placeholder="Risk"
                                                                            value="{{ $risk->name }}" />
                                                                    </div>

                                                                    <div class="form-group">
                                                                        <label for="Category">Category</label>

                                                                        <select class="form-control" id="Category"
                                                                            name="category">
                                                                            <option style="background-color: #fff">
                                                                                {!! $risk->category !!}</option>
                                                                            @foreach ($cats as $cat)
                                                                                <option value="{{ $cat->name }}">
                                                                                    {{ $cat->name }}</option>
                                                                            @endforeach

                                                                        </select>
                                                                    </div>

                                                                    <div class="form-group">
                                                                        <label for="Impact">Impact</label>
                                                                        <textarea class="form-control" id="Impact" name="impact" cols="5" rows="5"> {!! $risk->impact !!} </textarea>
                                                                    </div>

                                                                    <div class="form-group">
                                                                        <label for="Descreption">Descreption</label>
                                                                        <textarea class="form-control" id="Descreption" name="description" cols="5" rows="5">{!! $risk->description !!}</textarea>
                                                                    </div>

                                                                    <div class="row">
                                                                        <div class="col-md-6">
                                                                            <div class="form-group row">
                                                                                <div class="col-sm-9">
                                                                                    <label class="form-label"
                                                                                        for="start-date">Start Date</label>
                                                                                    <input id="start-date"
                                                                                        name="start_date" type="date"
                                                                                        class="form-control"
                                                                                        value="{!! $risk->start_date !!}"
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
                                                                                        type="date"
                                                                                        class="form-control"
                                                                                        value="{!! $risk->end_date !!}"
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
                                                                    Mitigation</h4>

                                                                <div class="card-body">
                                                                    <div class="form-group">
                                                                        <label for="mitigation">Mitigation Measure</label>
                                                                        <input type="text" class="form-control"
                                                                            id="mitigation" name="mitigation_title"
                                                                            placeholder="Mitigation Measure"
                                                                            value="{{ $risk->mitigation_title }}" />
                                                                    </div>

                                                                    <div class="form-group">
                                                                        <label for="Descreption">Descreption</label>
                                                                        <textarea class="form-control" id="Descreption" name="mitigation_desc" cols="5" rows="5"> {!! $risk->mitigation_desc !!} </textarea>
                                                                    </div>

                                                                    <div class="form-group">
                                                                        <label for="Responsible">Responsible</label>
                                                                        <textarea class="form-control" id="Responsible" name="mitigation_responsible" cols="5" rows="5">{!! $risk->mitigation_responsible !!}</textarea>
                                                                    </div>

                                                                    <div class="form-group">
                                                                        <label class="form-label" for="Start-Date">Start
                                                                            Date</label>
                                                                        <input id="Start-Date"
                                                                            name="mitigation_start_date" type="date"
                                                                            class="form-control"
                                                                            value="{!! $risk->mitigation_start_date !!}"
                                                                            placeholder="dd/mm/yyyy" />
                                                                    </div>

                                                                    <div class="form-group">
                                                                        <label class="form-label"
                                                                            for="Deadline">Deadline</label>
                                                                        <input id="Deadline" name="mitigation_deadline"
                                                                            type="date" class="form-control"
                                                                            value="{!! $risk->mitigation_deadline !!}"
                                                                            placeholder="dd/mm/yyyy" />
                                                                    </div>

                                                                    <div class="form-group">
                                                                        <label class="form-label">Status</label>
                                                                        <select class="form-control"
                                                                            name="mitigation_status">
                                                                            <option style="background-color: #fff">
                                                                                {!! $risk->mitigation_status !!}</option>
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
