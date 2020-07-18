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

      @include('inc.aside')
      <!-- partial -->
      <div class="main-panel">          
        <div class="content-wrapper">
          <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h1 class="card-title">Programs</h1>
                        <p class="card-description">Total number of Programs <code>7 program</code></p>
                        <div class="row">
                            <div class="col-md-2">
                                <ul class="nav nav-pills nav-pills-vertical nav-pills-primary" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="false">
                                            <i class="mdi mdi-theater"></i>
                                            All Program
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">
                                            <i class="mdi mdi-theater"></i>
                                            Add Program
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
                                                        <th>id</th>
                                                        <th>Program Title</th>
                                                        <th>Location</th>
                                                        <th>Date/Year</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <tr>
                                                        <td>1</td>
                                                        <td>Edinburgh</td>
                                                        <td>New York</td>
                                                        <td>2019-05-23</td>
                                                    </tr>
                                                    <tr>
                                                        <td>2</td>
                                                        <td>Edinburgh</td>
                                                        <td>New York</td>
                                                        <td>2019-05-23</td>
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
                                                        Create New Program
                                                    </p>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group row">
                                                                <label class="col-sm-3 col-form-label">Program Title</label>
                                                                <div class="col-sm-9">
                                                                    <input type="text" class="form-control" />
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group row">
                                                                <label class="col-sm-3 col-form-label">Location</label>
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

                                                        </div>
                                                    </div>
                                                    <button type="submit" class="btn btn-primary mt-5">Add Program</button>
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

  <!-- End custom js for this page-->
</body>
</html>
