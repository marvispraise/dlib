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
            <div class="row mb-2">
                <div class="col-md-12 stretch-card">
                    <div class="card">
                        <div class="card-body" style="padding-top: 7px; padding-bottom: 1px; text-align: center;">
                            <h2 class="card-title font-weight-normal" style="font-size: medium">Tape Login and Logout</h2>
                        </div>
                    </div>
                </div>
            </div>
          <div class="row">
            <div class="col-md-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Basic form elements</h4>
                  <form class="forms-sample">
                      <div class="col-md-12">
                          <div class="form-group row">
                              <label class="col-sm-3 col-form-label">Choose Login Tape</label>
                              <div class="col-sm-9">
                                  <select class="form-control">
                                      <option>Choose Program</option>
                                      <option>Loveworld Prayer Session</option>
                                      <option>Loveworld Prayer Session Night</option>
                                  </select>
                              </div>
                          </div>
                      </div>
                    <button type="submit" class="btn btn-primary mr-2">Submit</button>
                  </form>
                </div>
              </div>
            </div>
              <div class="col-md-6 grid-margin stretch-card">
                  <div class="card">
                      <div class="card-body">
                          <h4 class="card-title">Basic form elements</h4>
                          <form class="forms-sample">
                              <div class="col-md-12">
                                  <div class="form-group row">
                                      <label class="col-sm-3 col-form-label">Choose Logout Tape</label>
                                      <div class="col-sm-9">
                                          <select class="form-control">
                                              <option>Choose Program</option>
                                              <option>Loveworld Prayer Session</option>
                                              <option>Loveworld Prayer Session Night</option>
                                          </select>
                                      </div>
                                  </div>
                              </div>
                              <button type="submit" class="btn btn-primary mr-2">Submit</button>
                          </form>
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


<!-- Mirrored from www.bootstrapdash.com/demo/calmui/template/demo/vertical-default-light/pages/forms/tapeLL.blade.php by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 14 Jul 2020 22:52:44 GMT -->
</html>
