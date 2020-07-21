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
@include('inc.aside')      <!-- partial -->
      <div class="main-panel">          
        <div class="content-wrapper">
          <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h1 class="card-title">Tapes</h1>
                        <p class="card-description">Total number of Tapes <code>{{count($items)}} tapes</code></p>
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
                                @include('inc.alert')

                                <div class="tab-content tab-content-vertical" id="v-pills-tabContent">
                                    <div class="tab-pane fade active show" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
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
                                                    @foreach($items as $item)
                                                    <tr>
                                                        <td>{{$item->library->library}}</td>
                                                        <td>{{$item->name}}</td>
                                                        <td>{{$item->classOfTape}}</td>
                                                        <td>{{$item->programs->title}}</td>
                                                        <td>{{$item->editor}}</td>
                                                        <td>{{$item->shelf->shelf}}</td>
                                                        <td>{{$item->row->row}}</td>
                                                        <td>{{$item->sections->section}}</td>
                                                        <td>{{$item->tapeNumbering}}</td>
                                                        <td>
                                                            @if($item->tapePresence == 1)
                                                                Present
                                                            @else
                                                                Absent
                                                            @endif
                                                        </td>
                                                        <td>{{$item->tapeType}}</td>
                                                        <td>{{$item->tapeContent}}</td>
                                                        <td>{{date("D jS M", $item->date)}}</td>
                                                        <td>{{date("Y", $item->date)}}</td>

                                                        <td>
                                                            @if($item->status == 0)
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
                                    <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                                        <div class="media">
                                            <div class="media-body">
                                                <form class="form-sample" method="post" action="{{route('addTape')}}">
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
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group row">
                                                                <label class="col-sm-3 col-form-label">Choose Library</label>
                                                                <div class="col-sm-9">
                                                                    <select class="form-control" name="libNo">
                                                                        <option selected disabled="disabled">Select</option>
                                                                        @foreach($libraries as $library)
                                                                        <option value="{{$library->unique_id}}">{{$library->library}}</option>
                                                                        @endforeach
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group row">
                                                                <label class="col-sm-3 col-form-label">Shelf No.</label>
                                                                <div class="col-sm-9">
                                                                    <select class="form-control" name="shelfNo">
                                                                        <option selected disabled="disabled">Select</option>
                                                                        @foreach($shelves as $shelf)
                                                                            <option value="{{$shelf->unique_id}}">{{$shelf->shelf}}</option>
                                                                        @endforeach
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>

                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group row">
                                                                <label class="col-sm-3 col-form-label">Section</label>
                                                                <div class="col-sm-9">
                                                                    <select class="form-control" name="section">
                                                                        <option selected disabled="disabled">Select</option>
                                                                        @foreach($sections as $section)
                                                                            <option value="{{$section->unique_id}}">{{$section->section}}</option>
                                                                        @endforeach
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group row">
                                                                <label class="col-sm-3 col-form-label">Row No.</label>
                                                                <div class="col-sm-9">
                                                                    <select class="form-control" name="rowNo">
                                                                        <option selected disabled="disabled">Select</option>
                                                                        @foreach($rows as $row)
                                                                            <option value="{{$row->unique_id}}">{{$row->row}}</option>
                                                                        @endforeach
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
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
