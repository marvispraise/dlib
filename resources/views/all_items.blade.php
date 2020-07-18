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
                    <a class="nav-link" href="../widgets/widgets.html">
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
          <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h1 class="card-title">Tapes</h1>
                        <p class="card-description">Total number of Tapes <code>7 tapes</code></p>
                        <div class="row">
                            <div class="col-md-2">
                                <ul class="nav nav-pills nav-pills-vertical nav-pills-primary" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="false">
                                            <i class="mdi mdi-theater"></i>
                                            All Tapes
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">
                                            <i class="mdi mdi-theater"></i>
                                            Add Tapes
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-md-10">
                                <div class="tab-content tab-content-vertical" id="v-pills-tabContent">
                                    <div class="tab-pane fade active show" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                                        <div class="media">
                                            <div class="table-responsive">
                                                <table id="order-listing" class="table">
                                                    <thead>
                                                    <tr>
                                                        <th>Lib No.</th>
                                                        <th>Class of Tapes</th>
                                                        <th>Program/Service</th>
                                                        <th>Editor/Cameraman</th>
                                                        <th>Shelf No</th>
                                                        <th>Row No</th>
                                                        <th>Tape Numbering</th>
                                                        <th>Tape Present</th>
                                                        <th>Tape Type</th>
                                                        <th>Tape Content</th>
                                                        <th>Date</th>
                                                        <th>Year</th>
                                                        <th>Status</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <tr>
                                                        <td>1</td>
                                                        <td>Rushes</td>
                                                        <td>Prayer</td>
                                                        <td>Mercy</td>
                                                        <td>1A</td>
                                                        <td>1</td>
                                                        <td>1 of 13</td>
                                                        <td>Present</td>
                                                        <td>DVCam</td>
                                                        <td></td>
                                                        <td>Thurs 25th Jan</td>
                                                        <td>2020</td>
                                                        <td>
                                                            <label class="badge badge-danger">Not</label>
                                                        </td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                                        <div class="media">
                                            <div class="media-body">
                                                <form class="form-sample">
                                                    <p class="card-description">
                                                        Create New Tape
                                                    </p>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group row">
                                                                <label class="col-sm-3 col-form-label">Choose Library</label>
                                                                <div class="col-sm-9">
                                                                    <select class="form-control">
                                                                        <option>Select</option>
                                                                        <option>Lib 1</option>
                                                                        <option>Lib 2</option>
                                                                        <option>Lib 3</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group row">
                                                                <label class="col-sm-3 col-form-label">Class of tapes</label>
                                                                <div class="col-sm-9">
                                                                    <input type="text" class="form-control" />
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group row">
                                                                <label class="col-sm-3 col-form-label">Program Description</label>
                                                                <div class="col-sm-9">
                                                                    <input type="text" class="form-control" />
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group row">
                                                                <label class="col-sm-3 col-form-label">Editor / Cameraman</label>
                                                                <div class="col-sm-9">
                                                                    <input type="text" class="form-control" />
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group row">
                                                                <label class="col-sm-3 col-form-label">Shelf No.</label>
                                                                <div class="col-sm-9">
                                                                    <select class="form-control">
                                                                        <option>Select</option>
                                                                        <option>1A</option>
                                                                        <option>1B</option>
                                                                        <option>2C</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group row">
                                                                <label class="col-sm-3 col-form-label">Row No.</label>
                                                                <div class="col-sm-9">
                                                                    <select class="form-control">
                                                                        <option>Select</option>
                                                                        <option>1</option>
                                                                        <option>2</option>
                                                                        <option>3</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group row">
                                                                <label class="col-sm-3 col-form-label">Tape Numbering</label>
                                                                <div class="col-sm-9">
                                                                    <input type="text" class="form-control" />
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group row">
                                                                <label class="col-sm-3 col-form-label">Tape Presence.</label>
                                                                <div class="col-sm-9">
                                                                    <select class="form-control">
                                                                        <option>Select</option>
                                                                        <option>Present</option>
                                                                        <option>Absent</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group row">
                                                                <label class="col-sm-3 col-form-label">Tape Type.</label>
                                                                <div class="col-sm-9">
                                                                    <input type="text" class="form-control" />
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group row">
                                                                <label class="col-sm-3 col-form-label">Tape Content.</label>
                                                                <div class="col-sm-9">
                                                                    <input type="text" class="form-control" />
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group row">
                                                                <label class="col-sm-3 col-form-label">Date</label>
                                                                <div class="col-sm-9">
                                                                    <input type="date" class="form-control" />
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group row">
                                                                <label class="col-sm-3 col-form-label">Year.</label>
                                                                <div class="col-sm-9">
                                                                    <input type="text" class="form-control" />
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <button type="submit" class="btn btn-primary mt-5">Add Tape</button>
                                                </form>
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
