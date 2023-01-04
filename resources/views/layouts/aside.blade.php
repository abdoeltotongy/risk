<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        {{-- @dd(auth()->user()) --}}
        @if (auth()->user()->role_id == 1)
            <li class="nav-item nav-category">Main Dashboard</li>
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <i class="mdi mdi-view-dashboard"></i>
                    <span class="menu-title">Dashboard</span>
                </a>
            </li>
        @elseif (auth()->user()->role_id == 2)
            <li class="nav-item">
                <a class="nav-link" href="{{ route('users') }}">
                    <i class="mdi mdi-account-plus"></i>
                    <span class="menu-title">Create Account</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('department') }}">
                    <i class="mdi mdi-xml"></i>
                    <span class="menu-title">Departments</span>
                </a>
            </li>
        @else
            <li class="nav-item nav-category">Main Dashboard</li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/') }}">
                    <i class="mdi mdi-grid-large menu-icon"></i>
                    <span class="menu-title">All</span>
                </a>
            </li>
            <li class="nav-item nav-category">Risk</li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/risk') }}">
                    <i class="menu-icon mdi mdi-card-text-outline"></i>
                    <span class="menu-title">Show Risks</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/risk/create') }}">
                    <i class="menu-icon mdi mdi-chart-line"></i>
                    <span class="menu-title">Create Risk</span>
                </a>
            </li>
            {{-- <li class="nav-item">
                <a class="nav-link" href="../risk/update.html">
                    <i class="menu-icon mdi mdi-table"></i>
                    <span class="menu-title">Update Risk</span>
                </a>
            </li> --}}

            <li class="nav-item nav-category">Opportunity</li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('opportunity.index') }}">
                    <i class="menu-icon mdi mdi-card-text-outline"></i>
                    <span class="menu-title">Show Opportunity</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('opportunity.create') }}">
                    <i class="menu-icon mdi mdi-chart-line"></i>
                    <span class="menu-title">Create Opportunity</span>
                </a>
            </li>
            {{-- <li class="nav-item">
                <a class="nav-link" href="pages/opportunity/update.html">
                    <i class="menu-icon mdi mdi-table"></i>
                    <span class="menu-title">Update Opportunity</span>
                </a>
            </li> --}}
        @endif
    </ul>
</nav>
