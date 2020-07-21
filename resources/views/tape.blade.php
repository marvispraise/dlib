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
                  <h1 class="card-title" style="font-size: large; text-align: center">Select Tape to Loan</h1>
                    <div class="row">
                        <div class="col-md-12">
                            @include('inc.alert')
                            <div class="tab-content tab-content-vertical" id="v-pills-tabContent">
                                <div class="tab-pane fade active show" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                                    <div class="media">
                                        <div class="table-responsive">
                                            <table id="order-listing" class="table">
                                                <thead>
                                                <tr>
                                                    <th>id</th>
                                                    <th>Program Title</th>
                                                    <th>Class Of Tape</th>
                                                    <th>Tape Content</th>
                                                    <th>Date/Year</th>
                                                    <th>Action</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <?php $x = 1;?>
                                                    @foreach($tapes as $tape)
                                                    <tr>
                                                        <td>{{$x++}}</td>
                                                        <td>{{$tape->programs->title}} -- {{$tape->name}}</td>
                                                        <td>{{$tape->classOfTape}}</td>
                                                        <td>{{$tape->tapeContent}}</td>
                                                        <td>{{date("jS M, Y", $tape->date)}}</td>
                                                        <td><a href="{{route('viewLoan', ['id' => $tape->id])}}" class="badge badge-success">Request</a></td>
                                                    </tr>
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
