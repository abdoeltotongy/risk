@extends('layouts.main')
@section('title')
    Department
@endsection
@section('content')
    @include('layouts.header')

    <section class="container-scroller">
        <div class="container-fluid page-body-wrapper">
            @include('layouts.aside')

            <!-- main-panel -->
            <div class="main-panel department">
                <div class="content-wrapper">
                    <div class="row">
                        @include('inc.messages')

                        <div class="col-lg-12 stretch-card">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">All Departments</h4>
                                    <div class="template-demo">
                                        <button type="button" class="btn btn-success btn-icon-text" data-bs-toggle="modal"
                                            data-bs-target="#exampleModal">
                                            <i class="ti-upload btn-icon-prepend"></i>
                                            Add
                                        </button>
                                    </div>

                                </div>
                                <div class="card-body">
                                    <div class="table-responsive pt-3">
                                        <table class="table table-bordered">
                                            <thead>
                                                <tr>
                                                    <th class="table-success">
                                                        #
                                                    </th>
                                                    <th class="table-info">
                                                        Departments
                                                    </th>
                                                    <th class="table-primary">
                                                        Action
                                                    </th>

                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($departments as $department)
                                                    <tr>
                                                        <td class="table-success">
                                                            {{ $department->id }}
                                                        </td>
                                                        <td class="table-info">
                                                            {{ $department->name }}

                                                        </td>
                                                        @if ($department->name == 'Admin')
                                                            <td class="table-primary"> Can Not Access
                                                            </td>
                                                        @else
                                                            <td class="table-primary">
                                                                <a type="button"
                                                                    href="{{ url("department/delete/{$department->id}") }}"
                                                                    class="btn btn-danger btn-rounded p-2">
                                                                    {{-- <i class="mdi mdi-delete"></i> --}}
                                                                    Delate
                                                                </a>

                                                                <a type="button" class="btn btn-sm btn-dark edit-btn"
                                                                    data-id="{{ $department->id }}"
                                                                    data-name="{{ $department->name }}"
                                                                    data-bs-toggle="modal" data-bs-target="#edit-modal"
                                                                    href="{{ url("department/edit/{$department->id}") }}">
                                                                    Edit
                                                                </a>

                                                                {{-- <a type="button"
                                                        href="{{ url("department/delete/{$department->id}") }}"
                                                        class="btn btn-danger btn-rounded btn-icon">
                                                        {{-- <i class="ti-turch"></i> --}}
                                                                {{-- Delate
                                                        </a> --}}

                                                                {{-- @if ($cat->active)
                                                            <a href="{{ url("dashboard/categories/toggle/$cat->id") }}"
                                                                class="btn btn-sm btn-secondary"><i
                                                                class="fas fa-toggle-on"></i></a>
                                                                @else
                                                                <a href="{{ url("dashboard/categories/toggle/$cat->id") }}"
                                                                    class="btn btn-sm btn-secondary"><i
                                                                        class="fas fa-toggle-off"></i></a>
                                                                        @endif --}}


                                                            </td>
                                                        @endif
                                                    </tr>
                                                @endforeach


                                            </tbody>
                                        </table>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                            aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Add New Department</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">

                                        <form method="post" action="{{ route('department') }}" id="add-form">
                                            @csrf
                                            <div class="form-group">
                                                <label for="Department">New Department</label>
                                                <input type="text" class="form-control" id="Department" name="name"
                                                    placeholder="Department...   " required />
                                            </div>
                                        </form>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="submit" class="btn btn-primary" form="add-form">Add</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Edit Account -->
                        <div class="modal fade" id="edit-modal" tabindex="-1" aria-labelledby="exampleModalLabel"
                            aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Edit Department</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    @include('inc.errors')
                                    <div class="modal-body">
                                        <form method="post" action="{{ route('department.edit') }}" id="edit-form"
                                            enctype="multipart/form-data">
                                            @csrf
                                            <input type="hidden" name="id">
                                            <div class="card-body">
                                                <div class="form-group">
                                                    <label>Name </label>
                                                    <input type="text" name="name" class="form-control">
                                                </div>

                                            </div>
                                        </form>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="submit" form="edit-form" class="btn btn-primary">Update</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- js -->
    @include('layouts.footer')
@endsection
