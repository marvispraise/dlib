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
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Tape Requests</h4>
                        <div class="row">
                            <div class="col-12">
                                @include('inc.alert')
                                <div class="table-responsive">
                                    <table id="order-listing" class="table">
                                        <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Program</th>
                                            <th>Tape</th>
                                            <th>Minister</th>
                                            <th>Actions</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php $x = 1; ?>
                                        @foreach($loan_requests as $loan_request)
                                        <tr>
                                            <td>{{$x++}}</td>
                                            <td>{{$loan_request->tape->programs->title}}</td>
                                            <td>{{$loan_request->tape->name}}</td>
                                            <td>{{$loan_request->tape->minister}}</td>
                                            <td>
                                                @if($loan_request->status == 0)
                                                <a href="{{route('decline',$loan_request->unique_id)}}" class="badge badge-danger">Decline</a> || <a href="{{route('accept',$loan_request->unique_id)}}" class="badge badge-success">Accept</a>
                                                @elseif($loan_request->status == 1)
                                                    <span class="badge badge-success">Accepted</span>
                                                @elseif($loan_request->status == 2)
                                                    <span class="badge badge-danger">Declined</span>
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
