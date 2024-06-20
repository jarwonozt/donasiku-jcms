<!DOCTYPE html>

<head>
    <!-- Meta Tags -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login {{ config('app.name') }}</title>
    <meta name="description" content="Sistem Informasi Manajemen Atlet" />

    <!-- Favicon -->
    <link rel="shortcut icon" href="favicon.ico">
    <link rel="icon" href="favicon.ico" type="image/x-icon">

    <!-- CSS -->
    <link href="{{ asset('assets') }}/dist/css/style.css" rel="stylesheet" type="text/css">
</head>

<body>
    <!-- Wrapper -->
    <div class="hk-wrapper hk-pg-auth" data-footer="simple">
        <!-- Main Content -->
        <div class="hk-pg-wrapper pt-0 pb-xl-0 pb-5">
            <div class="hk-pg-body pt-0 pb-xl-0">
                <!-- Container -->
                <div class="container-xxl">
                    <!-- Row -->
                    <div class="row">
                        <div class="col-sm-10 position-relative mx-auto">
                            <div class="auth-content py-8">
                                <form class="w-100" method="POST" action="{{ route('login') }}">
                                    @csrf
                                    <div class="row">
                                        <div class="col-lg-5 col-md-7 col-sm-10 mx-auto">
                                            <div class="text-center mb-7">
                                                <a class="navbar-brand me-0" href="index.html">
                                                    <img class="brand-img d-inline-block"
                                                        src="{{ jcms()->logo }}"
                                                        alt="brand" width="250" height="60">
                                                </a>
                                            </div>
                                            <div class="card card-lg card-border">
                                                <div class="card-body">
                                                    <h4 class="mb-4 text-center">Login {{ jcms()->name }}</h4>
                                                    <div class="py-2">
                                                        @if ($errors->any())
                                                            <div>

                                                                <div class="alert alert-danger mt-3">
                                                                    <div class="font-medium text-danger">
                                                                        {{ __('Whoops! Something went wrong.') }}
                                                                    </div>
                                                                    @foreach ($errors->all() as $error)
                                                                        * {{ $error }}
                                                                    @endforeach
                                                                <div>
                                                            </div>
                                                        @endif
                                                    </div>
                                                    <div class="row gx-3">
                                                        <div class="form-group col-lg-12">
                                                            <div class="form-label-group">
                                                                <label>Email/Username</label>
                                                            </div>
                                                            <input class="form-control" name="identity"
                                                                placeholder="Email atau Username" value=""
                                                                type="text">
                                                        </div>
                                                        <div class="form-group col-lg-12">
                                                            <div class="form-label-group">
                                                                <label>Password</label>
                                                                {{-- <a href="#" class="fs-7 fw-medium">Forgot Password ?</a> --}}
                                                            </div>
                                                            <div class="input-group password-check">
                                                                <span class="input-affix-wrapper">
                                                                    <input class="form-control" name="password"
                                                                        placeholder="Enter password" value=""
                                                                        type="password">
                                                                    <a href="#" class="input-suffix text-muted">
                                                                        <span class="feather-icon"><i class="form-icon"
                                                                                data-feather="eye"></i></span>
                                                                        <span class="feather-icon d-none"><i
                                                                                class="form-icon"
                                                                                data-feather="eye-off"></i></span>
                                                                    </a>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="d-flex justify-content-center">
                                                        <div class="form-check form-check-sm mb-3">
                                                            <input type="checkbox" name="remember" class="form-check-input"
                                                                id="logged_in">
                                                            <label class="form-check-label text-muted fs-7"
                                                                for="logged_in">Keep me logged in</label>
                                                        </div>
                                                    </div>
                                                    <button type="submit"
                                                        class="btn btn-primary btn-uppercase btn-block">Login</button>
                                                    {{-- <p class="p-xs mt-2 text-center">New to Jampack? <a href="#"><u>Create new account</u></a></p> --}}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- /Row -->
                </div>
                <!-- /Container -->
            </div>
            <!-- /Page Body -->

            <!-- Page Footer -->
            <div class="hk-footer">
                <footer class="container-xxl footer">
                    <div class="row">
                        <div class="col-xl-8">
                            <p class="footer-text"><span class="copy-text">{{ config('app.name') }} © 2024 All rights
                                    reserved.</span> </p>
                        </div>
                        <div class="col-xl-4">

                        </div>
                    </div>
                </footer>
            </div>
            <!-- / Page Footer -->


        </div>
        <!-- /Main Content -->
    </div>
    <!-- /Wrapper -->

    <!-- jQuery -->
    <script src="{{ asset('assets') }}/vendors/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap Core JS -->
    <script src="{{ asset('assets') }}/vendors/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

    <!-- FeatherIcons JS -->
    <script src="{{ asset('assets') }}/dist/js/feather.min.js"></script>

    <!-- Fancy Dropdown JS -->
    <script src="{{ asset('assets') }}/dist/js/dropdown-bootstrap-extended.js"></script>

    <!-- Simplebar JS -->
    <script src="{{ asset('assets') }}/vendors/simplebar/dist/simplebar.min.js"></script>

    <!-- Init JS -->
    <script src="{{ asset('assets') }}/dist/js/init.js"></script>
</body>

</html>
