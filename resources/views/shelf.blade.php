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
              <div class="col-md-12 grid-margin">
                  @include('inc.alert')
              </div>
              @if(!empty($shelves))
              @foreach($shelves as $shelf)
                        <div class="col-md-4 grid-margin">
                            <a href="{{route('viewSection',$shelf->unique_id)}}">
                                <div class="card bg-success">
                                    <div class="card-body">
                                        <div class="d-flex flex-row align-items-top">
                                            <i class="mdi mdi-library-shelves text-white icon-md"></i>
                                            <div class="ml-3">
                                                <p class="mt-2 text-white card-text" style="font-size: medium">{{$shelf->shelf}}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
						</div>
                  @endforeach
                  @endif
					</div>
					<div class="row">
                        <div class="col-md-4 grid-margin stretch-card">
                            <button class="add btn btn-primary font-weight-bold todo-list-add-btn" data-toggle="modal" data-target="#exampleModal">Add Shelf</button>
                        </div>
					</div>
                    <div class="col-12 grid-margin">
                        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg" role="document">
                                <div class="modal-content">
                                    <form class="form-sample" method="post" action="{{route('addShelf',[$library->unique_id])}}">
                                        @csrf
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Add Shelf</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group row">
                                                        <label class="col-sm-2 col-form-label">Shelf</label>
                                                        <div class="col-sm-10">
                                                            <input type="text" class="form-control" placeholder="Shelf No." name="name"/>
                                                            <input type="hidden" class="form-control" value="{{$library->unique_id}}" name="library_id"/>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-light" data-dismiss="modal">Cancel</button>
                                        <button type="submit" class="btn btn-success">Submit</button>
                                    </div>
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
</html>
