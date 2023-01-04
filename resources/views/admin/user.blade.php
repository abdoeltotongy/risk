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
                                    <h4 class="card-title">All Users</h4>
                                    <div class="template-demo">
                                        <button type="button" class="btn btn-success btn-icon-text" data-bs-toggle="modal"
                                            data-bs-target="#exampleModal">
                                            <i class="ti-upload btn-icon-prepend"></i>
                                            Create Account
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
                                                        Name
                                                    </th>
                                                    <th class="table-info">
                                                        Email
                                                    </th>
                                                    {{-- <th class="table-info">
                                                        Password
                                                    </th> --}}
                                                    <th class="table-info">
                                                        Phone
                                                    </th>
                                                    <th class="table-info">
                                                        Department
                                                    </th>
                                                    <th class="table-info">
                                                        Role
                                                    </th>
                                                    <th class="table-primary">
                                                        Action
                                                    </th>

                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($users as $user)
                                                    {{-- @if ($user->role_id == 2) --}}
                                                    <tr>
                                                        <td class="table-success">
                                                            {{ $user->id }}
                                                        </td>
                                                        <td class="table-info">
                                                            {{ $user->name }}
                                                        </td>
                                                        <td class="table-info">
                                                            {{ $user->email }}
                                                        </td>
                                                        {{-- <td class="table-info" style="width: 100px"> --}}
                                                        {{-- {{ $user->password }} --}}
                                                        {{-- </td> --}}
                                                        <td class="table-info">
                                                            {{ $user->phone }}
                                                        </td>
                                                        <td class="table-info">
                                                            {{ $user->department->name }}
                                                            {{-- {{ $user->department_id('department_name') }} --}}

                                                        </td>
                                                        <td class="table-info">
                                                            {{ $user->role->name }}
                                                        </td>
                                                        @if ($user->department->name == 'Admin')
                                                            <td class="table-primary"> Can Not Access
                                                            </td>
                                                        @else
                                                            <td class="table-primary">
                                                                <a type="button"
                                                                    href="{{ url("user/delete/{$user->id}") }}"
                                                                    class="btn btn-danger btn-rounded p-2">
                                                                    Delate
                                                                </a>
                                                                <a type="button" class="btn btn-sm btn-dark edit-btn"
                                                                    data-id="{{ $user->id }}"
                                                                    data-name="{{ $user->name }}"
                                                                    data-email="{{ $user->email }}"
                                                                    data-password="{{ $user->password }}"
                                                                    data-phone="{{ $user->phone }}"
                                                                    data-department_id="{{ $user->department_id }}"
                                                                    data-role_id="{{ $user->role_id }}"
                                                                    data-bs-toggle="modal" data-bs-target="#edit-modal"
                                                                    href="{{ url("user/edit/{$user->id}") }}">
                                                                    Edit
                                                                </a>

                                                            </td>
                                                        @endif
                                                    </tr>
                                                    {{-- @endif --}}
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
    </section>
    <!-- add account -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add New User</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                    <form method="post" action="{{ route('users') }}" id="add-form">
                        @csrf
                        <div class="form-group">
                            <label for="user">User Name</label>
                            <input type="text" class="form-control" id="user" name="name"
                                placeholder="user...   " required />
                        </div>
                        <div class="form-group">
                            <label for="email">E-mail</label>
                            <input type="email" class="form-control" id="email" name="email"
                                placeholder="E-mail...   " required />
                        </div>
                        <div class="form-group">
                            <label for="Password"> Password</label>
                            <input type="password" class="form-control" id="password" name="password"
                                placeholder="Password...   " required />
                        </div>

                        <div class="form-group">
                            <label for="Phone"> Phone</label>
                            <input type="text" class="form-control" id="Phone" name="phone"
                                placeholder="Phone...   " />
                        </div>

                        <div class="form-group">
                            <label for="Role"> Role </label>
                            <select name="role_id" class="form-control">
                                <option value="1">
                                    CEO
                                </option>
                                <option value="2">
                                    ADMIN
                                </option>
                                <option value="3">
                                    USER EMPLOYE
                                </option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="Department"> Department</label>
                            <select name="department_id" class="form-control">
                                @foreach ($departments as $department)
                                    <option value="{{ $department->id }}">
                                        {{ $department->name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>



                        {{-- <div class="form-group"> --}}
                        {{-- <input type="hidden" name="role_id" value="3"> --}}
                        {{-- </div> --}}
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary" form="add-form">Add</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Edit Account -->
    <div class="modal fade" id="edit-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Account</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    @include('inc.errors')
                    <form method="post" action="{{ route('user.edit') }}" id="edit-form"
                        enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="id">
                        <div class="card-body">
                            <div class="form-group">
                                <label>Name </label>
                                <input type="text" name="name" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>E-mail </label>
                                <input type="text" name="email" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Password </label>
                                <input type="password" name="password" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Phone </label>
                                <input type="text" name="phone" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="Role"> Role </label>
                                <select name="role_id" class="form-control" required>
                                    <option value="1">
                                        CEO
                                    </option>
                                    <option value="2">
                                        Admin
                                    </option>
                                    <option value="3">
                                        USER EMPLOYE
                                    </option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="Department"> Department</label>
                                <select name="department_id" class="form-control" required>
                                    @foreach ($departments as $department)
                                        <option value="{{ $department->id }}">
                                            {{ $department->name }}
                                        </option>
                                    @endforeach
                                </select>
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
@endsection
