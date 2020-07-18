<!DOCTYPE html>
<html lang="en">
@include('inc.headerS')


<body>
<div class="container-scroller">
    <!-- partial:../../partials/_navbar.html -->
    <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
        @include('inc.header')
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
            <ul class="nav">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('tape_request') }}">
                        <i class="mdi mdi-view-quilt menu-icon"></i>
                        <span class="menu-title">Dashboard</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('allItems') }}">
                        <i class="mdi mdi-database menu-icon"></i>
                        <span class="menu-title">All Items</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('user') }}">
                        <i class="mdi mdi-account menu-icon"></i>
                        <span class="menu-title">Users</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('program') }}">
                        <i class="mdi mdi-archive menu-icon"></i>
                        <span class="menu-title">All Programs</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('shelf') }}">
                        <i class="mdi mdi-stove menu-icon"></i>
                        <span class="menu-title">Shelves</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('logout') }}">
                        <i class="mdi mdi-logout menu-icon"></i>
                        <span class="menu-title">Logout</span>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- partial -->
        <div class="main-panel">
            <div class="content-wrapper">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Total Borrowed Items</h4>
                        <div class="row">
                            <div class="col-12">
                                <div class="table-responsive">
                                    <table id="order-listing" class="table">
                                        <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Program Title</th>
                                            <th>Description</th>
                                            <th>Minister</th>
                                            <th>Status</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Edinburgh</td>
                                            <td>New York</td>
                                            <td>New York</td>
                                            <td>
                                                <label class="badge badge-danger">Borrowed</label>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>Edinburgh</td>
                                            <td>New York</td>
                                            <td>New York</td>
                                            <td>
                                                <label class="badge badge-primary">Not</label>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- content-wrapper ends -->
            <!-- partial:../../partials/_footer.html -->
            @include('inc.footer')
            <!-- partial -->
        </div>
        <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
</div>
<!-- container-scroller -->
<!-- plugins:js -->
@include('inc.scripts')

</body>
</html>
