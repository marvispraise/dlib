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
            <div class="col-md-12 grid-margin stretch-card"  id="table">

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

                  url:"/searchP",

                  type:"GET",

                  data:{'tape':query},

                  success:function (data) {
                      if(data.data.length > 0){
                          var obj = "";

                          for(var i = 0; i<data.data.length; i++){
                              obj+= '<tr>'+
                              '<td>'+data.data[i].id+'</td>'+
                              '<td>'+data.data[i].name+'</td>'+
                              '<td>'+data.data[i].classOfTape+'</td>'+
                              '<td>'+data.data[i].tapeContent+'</td>'+
                              '<td><a href="/viewLoan/'+data.data[i].id+'" class="badge badge-success">Request</a>'+
                              '</td>'+

                               '</tr>'



                              // $output.='<tr>'.
                              // '<td>'.$product->id.'</td>'.
                              // '<td>'.$product->name.'</td>'.
                              // '<td>'.$product->classOfTape.'</td>'.
                              // '<td>'.$product->tapeContent.'</td>'.
                              // '<td>'.date("jS M, Y", $product->date).'</td>'.
                              // '<td><a href="/viewLoan/'.$product->id.'" class="badge badge-success">Request'.'</a></td>'.
                              // '</tr>'; obj+= '<option value="'+data.data[i].unique_id+'">'+data.data[i].shelf+'</option>'
                          }



                          var result =
                              `

                <div class="card">
                <div class="card-body">
                  <div class="template-demo">
                      <div class="media">
                          <div class="table-responsive">

                                            <table id="order-listing" class="table">
                                              <thead>
                                              <tr>
                                                  <th>id</th>
                                                  <th>Program Title</th>
                                                  <th>Class Of Tape</th>
                                                  <th>Tape Content</th>
                                                  <th>Action</th>
                                              </tr>
                                              </thead>
                                              <tbody id="white-box">
                                            ${obj}
                                  </tbody>
                              </table>
                          </div>
                      </div>
                  </div>
                </div>
              </div>
            `

                          $("#table").html(result);
                      }
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
