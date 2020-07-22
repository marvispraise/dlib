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
            <form>
                @csrf
          <div class="row">
              <div class="col-md-12">
                  @include('inc.alert')
              </div>
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
                              <input type="text" class="form-control" placeholder="search" id="tape">
                          </div>
                      </li>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                <div class="card-body">
                  <div class="template-demo">
                      {{--<ul class="list-group" style="display: block; position: relative; z-index: 1">--}}
                          {{--@foreach($data as $row)--}}
                          {{--<li class="list-group-item" >{{$row->name}}</li>--}}
                          {{--@endforeach--}}
                      {{--</ul>--}}
                      <div class="media">
                          <div class="table-responsive">
                              <table id="order-listing" class="table">
                                  <thead>
                                  <tr>
                                      <th>id</th>
                                      <th>Program Title</th>
                                      <th>Class Of Tape</th>
                                      <th>Tape Content</th>
                                      <th>Date</th>
                                      <th>Action</th>
                                  </tr>
                                  </thead>
                                  <tbody id="white-box">

                                  </tbody>
                              </table>
                          </div>
                      </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
            </form>
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
  <script type="text/javascript">
      $(document).ready(function () {

          $('#tape').on('keyup',function() {
              var query = $(this).val();
              $.ajax({

                  url:"{{ route('searchP') }}",

                  type:"GET",

                  data:{'tape':query},

                  success:function (data) {

                      $('tbody').html(data);
                  }
              })
              // end of ajax call
          });

      });
  </script>

  <script type="text/javascript">
      $.ajaxSetup({ headers: { 'csrftoken' : '{{ csrf_token() }}' } });
  </script>


</body>
</html>
