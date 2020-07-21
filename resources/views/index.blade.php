<!DOCTYPE html>
<html lang="en">
@include('inc.headerS')

<body>
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
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
            <div class="col-lg-12 grid-margin d-flex flex-column">
              <div class="row">
                <div class="col-md-4 grid-margin stretch-card">
                  <div class="card">
                    <div class="card-body text-center">
                      <div class="text-primary mb-4">
                        <i class="mdi mdi-account-multiple mdi-36px"></i>
                        <p class="font-weight-medium mt-2">Users</p>
                      </div>
                      <h1 class="font-weight-light">{{count($users)}}</h1>
                    </div>
                  </div>
                </div>
                <div class="col-md-4 grid-margin stretch-card">
                  <div class="card">
                    <div class="card-body text-center">
                      <div class="text-danger mb-4">
                        <i class="mdi mdi-shopping-music mdi-36px"></i>
                        <p class="font-weight-medium mt-2">Tape(s)</p>
                      </div>
                      <h1 class="font-weight-light">{{count($tapes)}}</h1>
                    </div>
                  </div>
                </div>
                <div class="col-md-4 grid-margin stretch-card">
                  <div class="card">
                    <div class="card-body text-center">
                      <div class="text-info mb-4">
                        <i class="mdi mdi-receipt mdi-36px"></i>
                        <p class="font-weight-medium mt-2">Program(s)</p>
                      </div>
                      <h1 class="font-weight-light">{{count($programs)}}</h1>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Recent Loans</h4>
                  <div class="table-responsive">
                    <table class="table">
                      <thead>
                        <tr>
                          <th>Name</th>
                          <th>Tape Borrowed</th>
                          <th>Borrowed Date</th>
                          <th>Returned Date</th>
                        </tr>
                      </thead>
                      <tbody>
                      @foreach($dTapes as $loan)
                      @foreach($loan['tapes'] as $l)
                        <tr>
                          <td>{{$l->loan->firstname}} {{$l->loan->lastname}}</td>
                          <td>{{$l->programs->title}} </td>
                          <td>{{date("Y-m-d", $l->loan->borrowedDate)}}</td>
                          <td>{{date("Y-m-d", $l->loan->returningDate)}}</td>
                        </tr>
                      @endforeach
                      @endforeach
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->

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

