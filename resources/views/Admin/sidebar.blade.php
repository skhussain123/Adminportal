<nav id="sidebar" class="sidebar js-sidebar">
    <div class="sidebar-content js-simplebar">
        <a class='sidebar-brand' href='index.html'>
            <span class="sidebar-brand-text align-middle">
                Admin Dashboard

            </span>
            <svg class="sidebar-brand-icon align-middle" width="32px" height="32px" viewBox="0 0 24 24" fill="none"
                stroke="#FFFFFF" stroke-width="1.5" stroke-linecap="square" stroke-linejoin="miter" color="#FFFFFF"
                style="margin-left: -3px">
                <path d="M12 4L20 8.00004L12 12L4 8.00004L12 4Z"></path>
                <path d="M20 12L12 16L4 12"></path>
                <path d="M20 16L12 20L4 16"></path>
            </svg>
        </a>

        <ul class="sidebar-nav">
            <li class="sidebar-header">
                Pages
            </li>


            <li class="sidebar-item">
                <a class='sidebar-link' href='{{ route('dashboardpage') }}'>
                    <i class="fa-solid fa-gauge"></i> <span class="align-middle">Dashboard</span>
                </a>
            </li>

            <li class="sidebar-item">
                <a class='sidebar-link' href='{{ route('workingorder') }}'>
                    <i class="fa-solid fa-gauge"></i> <span class="align-middle">Working Order</span>
                </a>
            </li>

            <li class="sidebar-item">
                <a class='sidebar-link' href='{{ route('adminorderspage') }}'>
                    <i class="fa fa-first-order"></i> <span class="align-middle">Orders</span>
                </a>
            </li>


            <li class="sidebar-item">
                <a class='sidebar-link' href='{{ route('adminuserspage') }}'>
                    <i class="fa-solid fa-circle-user"></i> <span class="align-middle">Users</span>
                </a>
            </li>


            <li class="sidebar-item">
                <a class='sidebar-link' href='{{ route('adminwriterspage') }}'>
                    <i class="fa-solid fa-file"></i> <span class="align-middle">Writers</span>
                </a>
            </li>


            <li class="sidebar-header">
                Leads


            </li>

            <li class="sidebar-item">
                <a class='sidebar-link' href='{{ route('adminleadspage') }}'>
                    <i class="fa-solid fa-blog"></i><span class="align-middle">Leads</span>
                </a>
            </li>




            <li class="sidebar-item">
                <a class='sidebar-link' href='{{ route('adminvisitorspage') }}'>
                    <i class="fa fa-cog"></i> <span class="align-middle">Visitor</span>
                </a>
            </li>


            @if (session()->has('uemail'))
                <li class="sidebar-item">
                    <a class='sidebar-link' href='{{ route('logout') }}'>
                        <i class="fa fa-sign-out" aria-hidden="true"></i> <span class="align-middle">Logout</span>
                    </a>
                </li>
            @else
                <li class="sidebar-item">
                    <a class='sidebar-link' href='{{ route('loginpage') }}'>
                        <i class="align-middle" data-feather="user"></i> <span class="align-middle">Login</span>
                    </a>
                </li>
            @endif
        </ul>


    </div>
</nav>
