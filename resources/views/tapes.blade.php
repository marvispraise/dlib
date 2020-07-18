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
            <div class="col-md-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h1 class="card-title" style="font-size: large; text-align: center">Search for Tapes to Loan</h1>
                  <div class="template-demo">
                      <li class="nav-item nav-search d-none d-lg-flex">
                          <div class="input-group">
                              <div class="input-group-prepend">
                                <span class="input-group-text" id="search">
                                  <i class="mdi mdi-magnify"></i>
                                </span>
                              </div>
                              <input type="text" class="form-control" placeholder="search" aria-label="search" aria-describedby="search">
                          </div>
                      </li>
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
