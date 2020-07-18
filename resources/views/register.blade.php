<!DOCTYPE html>
<html lang="en">
@include('inc.headerS')


<body>
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper" >
      <div class="content-wrapper d-flex align-items-stretch auth auth-img-bg" >
        <div class="row flex-grow" >
          <div class="col-lg-6 d-flex align-items-center justify-content-center">
            <div class="auth-form-transparent text-left p-3">
              <div class="brand-logo">
                <img src="{{ asset('images/logo-dark.png') }}" alt="logo">
              </div>
              <h4>Welcome back!</h4>
              <h6 class="font-weight-light">Happy to see you again!</h6>
                <form class="pt-3">
                    <div class="form-group">
                        <label>Username</label>
                        <div class="input-group">
                            <div class="input-group-prepend bg-transparent">
                      <span class="input-group-text bg-transparent border-right-0">
                        <i class="mdi mdi-account-outline text-primary"></i>
                      </span>
                            </div>
                            <input type="text" class="form-control form-control-lg border-left-0" placeholder="Username">
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <div class="input-group">
                            <div class="input-group-prepend bg-transparent">
                      <span class="input-group-text bg-transparent border-right-0">
                        <i class="mdi mdi-email-outline text-primary"></i>
                      </span>
                            </div>
                            <input type="email" class="form-control form-control-lg border-left-0" placeholder="Email">
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <div class="input-group">
                            <div class="input-group-prepend bg-transparent">
                      <span class="input-group-text bg-transparent border-right-0">
                        <i class="mdi mdi-lock-outline text-primary"></i>
                      </span>
                            </div>
                            <input type="password" class="form-control form-control-lg border-left-0" id="exampleInputPassword" placeholder="Password">
                        </div>
                    </div>

                    <div class="mt-3">
                        <a class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn" href="">SIGN UP</a>
                    </div>
                    <div class="text-center mt-4 font-weight-light">
                        Already have an account? <a href="{{ route('login') }}" class="text-primary">Login</a>
                    </div>
                </form>
            </div>
          </div>
          <div class="col-lg-6 login-half-bg d-flex flex-row">
            <p class="text-white font-weight-medium text-center flex-grow align-self-end">Copyright &copy; {{date('Y')}}  All rights reserved.</p>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  @include('inc.footer')

</body>
</html>
