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
                        <h1 class="card-title">USERS</h1>
                        <p class="card-description">Total number of users <code>7 Users</code></p>
                        <div class="row">
                            <div class="col-md-2">
                                <ul class="nav nav-pills nav-pills-vertical nav-pills-primary" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="false">
                                            <i class="mdi mdi-account"></i>
                                            All Users
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">
                                            <i class="mdi mdi-account"></i>
                                            Add User
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
                                                        <th>#</th>
                                                        <th>Fullname</th>
                                                        <th>Email</th>
                                                        <th>Department</th>
                                                        <th>Level</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <?php $x = 1; ?>
                                                    @foreach($users as $user)
                                                    <tr>
                                                        <td>{{$x++}}</td>
                                                        <td>{{$user->name}}</td>
                                                        <td>{{$user->email}}</td>
                                                        <td>{{$user->department}}</td>
                                                        <td>
                                                            @if($user->level == 0)
                                                                Guest
                                                                @elseif($user->level == 1)
                                                                Admin
                                                            @else
                                                                Super Admin
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
                                                <form class="form-sample">
                                                    <p class="card-description">
                                                        Create New User
                                                    </p>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group row">
                                                                <label class="col-sm-3 col-form-label">Fullname</label>
                                                                <div class="col-sm-9">
                                                                    <input type="text" class="form-control" />
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group row">
                                                                <label class="col-sm-3 col-form-label">Email</label>
                                                                <div class="col-sm-9">
                                                                    <input type="email" class="form-control" />
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group row">
                                                                <label class="col-sm-3 col-form-label">Department</label>
                                                                <div class="col-sm-9">
                                                                    <input type="text" class="form-control"/>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group row">
                                                                <label class="col-sm-3 col-form-label">Choose Level</label>
                                                                <div class="col-sm-9">
                                                                    <select class="form-control">
                                                                        <option>Guest User</option>
                                                                        <option>Staff User</option>
                                                                        <option>Admin User</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="form-row">
                                                                <label class="col-sm-3 col-form-label">Generate Unique Id</label>
                                                                <div class="col-sm-9 col-md-9">
                                                                    <input type="text" class="form-control"/>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <button type="submit" class="btn btn-primary mt-5">Add User</button>
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
