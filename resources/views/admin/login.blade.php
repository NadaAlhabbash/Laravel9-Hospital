<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Corona Admin</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{asset('adminasset')}}/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="{{asset('adminasset')}}/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="{{asset('adminasset')}}/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="{{asset('adminasset')}}/images/favicon.png" />

    <link rel="stylesheet" href="{{asset('adminasset')}}/vendors/jvectormap/jquery-jvectormap.css">
    <link rel="stylesheet" href="{{asset('adminasset')}}/vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="{{asset('adminasset')}}/vendors/owl-carousel-2/owl.carousel.min.css">
    <link rel="stylesheet" href="{{asset('adminasset')}}/vendors/owl-carousel-2/owl.theme.default.min.css">
    <link rel="shortcut icon" href="{{asset('adminasset')}}/images/favicon.png" />


</head>
<body>
<div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
        <div class="row w-100 m-0">
            <div class="content-wrapper full-page-wrapper d-flex align-items-center auth login-bg">
                <div class="card col-lg-4 mx-auto">
                    <div class="card-body px-5 py-5">
                        <h3 class="card-title text-left mb-3">Login</h3>
                        @include('home.messages')
                        <form action="{{route('loginadmincheck')}}" method="post">
                            @csrf
                            <div class="form-group">
                                <label>Email</label>
                                <input type="email" name="email" class="form-control p_input">
                            </div>
                            <div class="form-group">
                                <label>Password</label>
                                <input type="password" name="password" class="form-control p_input">
                            </div>
                            <div class="form-group d-flex align-items-center justify-content-between">
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input type="checkbox" class="form-check-input"> Remember me </label>
                                </div>
                                <a href="#" class="forgot-pass">Forgot password</a>
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary btn-block enter-btn">Login</button>
                            </div>
                            <div class="d-flex">
                                <button class="btn btn-facebook me-2 col">
                                    <i class="mdi mdi-facebook"></i> Facebook </button>
                                <button class="btn btn-google col">
                                    <i class="mdi mdi-google-plus"></i> Google plus </button>
                            </div>
                            <p class="sign-up">Don't have an Account?<a href="/registeruser"> Sign Up</a></p>
                        </form>
                    </div>
                </div>
            </div>
            <!-- content-wrapper ends -->
        </div>
        <!-- row ends -->
    </div>
    <!-- page-body-wrapper ends -->
</div>
<!-- container-scroller -->
<!-- plugins:js -->
<script src="{{asset('adminasset')}}/vendors/js/vendor.bundle.base.js"></script>
<!-- endinject -->
<!-- Plugin js for this page -->
<script src="{{asset('adminasset')}}/vendors/chart.js/Chart.min.js"></script>
<script src="{{asset('adminasset')}}/vendors/progressbar.js/progressbar.min.js"></script>
<script src="{{asset('adminasset')}}/vendors/jvectormap/jquery-jvectormap.min.js"></script>
<script src="{{asset('adminasset')}}/vendors/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<script src="{{asset('adminasset')}}/vendors/owl-carousel-2/owl.carousel.min.js"></script>
<script src="{{asset('adminasset')}}/js/jquery.cookie.js" type="text/javascript"></script>
<!-- End plugin js for this page -->
<!-- inject:js -->
<script src="{{asset('adminasset')}}/js/off-canvas.js"></script>
<script src="{{asset('adminasset')}}/js/hoverable-collapse.js"></script>
<script src="{{asset('adminasset')}}/js/misc.js"></script>
<script src="{{asset('adminasset')}}/js/settings.js"></script>
<script src="{{asset('adminasset')}}/js/todolist.js"></script>
<!-- endinject -->
<!-- Custom js for this page -->
<script src="{{asset('adminasset')}}/js/dashboard.js"></script>
<!-- End custom js for this page -->
</body>
</html>
