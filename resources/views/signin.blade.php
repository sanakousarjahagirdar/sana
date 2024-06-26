<!DOCTYPE html>
<html lang="en">

<head>
    <title>Signin</title>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="" />
    <meta name="keywords" content="">
    <meta name="author" content="Phoenixcoded" />

    <!-- vendor css -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>
    <!-- [ auth-signin ] start -->
    <div class="auth-wrapper">
        <div class="auth-content text-center">
            <div class="card borderless">
                <div class="row align-items-center ">
                    <div class="col-md-12">
                        <div class="card-body">
                            <h4 class="mb-3 f-w-400" style="font-weight:bold;">Signin</h4>
                            <hr>
                            <div class="form-group mb-3">
                                <input type="text" class="form-control" id="Email" placeholder="Email address">
                            </div>
                            <div class="form-group mb-4">
                                <input type="password" class="form-control" id="Password" placeholder="Password">
                            </div>
                            <button class="btn btn-block btn-primary mb-4">Signin</button>
                            <hr>
                            {{-- <p class="mb-2 text-muted">Forgot password? <a href="auth-reset-password.html" class="f-w-400">Reset</a></p> --}}
                            <p class="mb-0 text-muted">Don’t have an account? <a href="{{ route('signup') }}"
                                    class="f-w-400">Signup</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- [ auth-signin ] end -->

    <!-- Required Js -->
    <script src="{{ asset('js/vendor-all.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/pcoded.min.js') }}"></script>

</body>

</html>
