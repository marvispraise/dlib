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
            <div class="col-md-4 grid-margin stretch-card">
                <button class="add btn btn-primary font-weight-bold todo-list-add-btn" data-toggle="modal" data-target="#exampleModal">Add Tape</button>
            </div>
            <div class="card">
                <div class="card-body">

                    <h4 class="card-title">Tapes</h4>
                    <div class="row">
                        <div class="col-12">
                            @include('inc.alert')
                            <div class="media">
                                <div class="table-responsive">
                                    <table id="order-listing" class="table">
                                        <thead>
                                        <tr>
                                            <th>Lib No.</th>
                                            <th>Name</th>
                                            <th>Class of Tapes</th>
                                            <th>Program/Service</th>
                                            <th>Editor/Cameraman</th>
                                            <th>Shelf No</th>
                                            <th>Row No</th>
                                            <th>Section</th>
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
                                        @foreach($tapes as $tape)
                                        <tr>
                                            <td>{{$tape->library->library}}</td>
                                            <td>{{$tape->name}}</td>
                                            <td>{{$tape->classOfTape}}</td>
                                            <td>{{$tape->programs->title}}</td>
                                            <td>{{$tape->editor}}</td>
                                            <td>{{$tape->shelf->shelf}}</td>
                                            <td>{{$tape->row->row}}</td>
                                            <td>{{$tape->sections->section}}</td>
                                            <td>{{$tape->tapeNumbering}}</td>
                                            <td>
                                                @if($tape->tapePresence == 1)
                                                    Present
                                                @else
                                                    Absent
                                                @endif
                                            </td>
                                            <td>{{$tape->tapeType}}</td>
                                            <td>{{$tape->tapeContent}}</td>
                                            <td>{{date("D jS M", $tape->date)}}</td>
                                            <td>{{date("Y", $tape->date)}}</td>
                                            <td>
                                                @if($tape->status == 'unavailable')
                                                    <label class="badge badge-danger">Not Available</label>
                                                @else
                                                    <label class="badge badge-success">Available</label>
                                                @endif
                                            </td>
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

                    <div class="col-12 grid-margin">
                        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg" role="document">
                                <div class="modal-content">
                                    <form class="form-sample" method="post" action="{{route('addRowTape',$rowe->unique_id)}}">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Add Tape</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">

                                            @csrf
                                            <p class="card-description">
                                                Create New Tape
                                            </p>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group row">
                                                        <label class="col-sm-3 col-form-label">name</label>
                                                        <div class="col-sm-9">
                                                            <input type="text" class="form-control" name="name" />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group row">
                                                        <label class="col-sm-3 col-form-label">minister</label>
                                                        <div class="col-sm-9">
                                                            <input type="text" class="form-control" name="minister"/>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        <input type="hidden" class="form-control" name="libNo" value="{{$library->unique_id}}"/>
                                        <input type="hidden" class="form-control" name="shelfNo" value="{{$shelf->unique_id}}"/>
                                        <input type="hidden" class="form-control" name="section" value="{{$section->unique_id}}"/>

                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group row">
                                                        <label class="col-sm-3 col-form-label">Program</label>
                                                        <div class="col-sm-9">
                                                            <select class="form-control" name="program">
                                                                <option selected disabled="disabled">Select</option>
                                                                @foreach($programs as $program)
                                                                    <option value="{{$program->unique_id}}">{{$program->title}}</option>
                                                                @endforeach

                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group row">
                                                        <label class="col-sm-3 col-form-label">Editor / Cameraman</label>
                                                        <div class="col-sm-9">
                                                            <input type="text" class="form-control" name="editor"/>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group row">
                                                        <label class="col-sm-3 col-form-label">Tape Numbering</label>
                                                        <div class="col-sm-9">
                                                            <input type="text" class="form-control" name="tapeNumbering"/>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group row">
                                                        <label class="col-sm-3 col-form-label">Tape Presence.</label>
                                                        <div class="col-sm-9">
                                                            <select class="form-control" name="tapePresence">
                                                                <option selected disabled="disabled">Select</option>
                                                                <option value="1">Present</option>
                                                                <option value="0">Absent</option>
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
                                                            <input type="text" class="form-control" name="tapeType"/>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group row">
                                                        <label class="col-sm-3 col-form-label">Tape Content.</label>
                                                        <div class="col-sm-9">
                                                            <input type="text" class="form-control" name="tapeContent"/>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group row">
                                                        <label class="col-sm-3 col-form-label">Date</label>
                                                        <div class="col-sm-9">
                                                            <input type="date" class="form-control" name="date"/>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group row">
                                                        <label class="col-sm-3 col-form-label">Class of tapes</label>
                                                        <div class="col-sm-9">
                                                            <input type="text" class="form-control" name="classOfTape" />
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>


                                    </div>
                                    <div class="modal-footer">
                                        <button type="submit"class="btn btn-success">Submit</button>
                                        <button type="button"class="btn btn-light" data-dismiss="modal">Cancel</button>
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
