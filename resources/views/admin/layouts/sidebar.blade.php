        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">SB Admin <sup>2</sup></div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="{{ url('auth') }}">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Interface
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link" href="charts.html">
                    <span><i class="fas fa-fw fa-cash-register"></i>Cashier</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="charts.html">
                    <span><i class="fas fa-fw fa-box"></i>Products</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="{{ route('storages') }}">
                    <span><i class="fas fa-fw fa-warehouse"></i>Storage</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#reports"
                    aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fas fa-fw fa-file"></i>
                    <span>Reports</span>
                </a>
                <div id="reports" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="utilities-color.html">Transaction</a>
                        <a class="collapse-item" href="utilities-color.html">Refund</a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - Utilities Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
                    aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fas fa-fw fa-wrench"></i>
                    <span>Settings</span>
                </a>
                <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="utilities-color.html">Profile</a>
                        <a class="collapse-item" href="utilities-color.html">Users</a>
                        <a class="collapse-item" href="utilities-color.html">Customer Complains</a>
                        
                    </div>
                </div>
            </li>



        </ul>
        <!-- End of Sidebar -->