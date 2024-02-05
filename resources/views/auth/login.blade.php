<!DOCTYPE html>
<html lang="en" class="h-100">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Focus - Bootstrap Admin Dashboard </title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset("/admin/theme/images/favicon.png") }}">
    <link href="{{ asset("/admin/theme/css/style.css") }}" rel="stylesheet">

</head>

<body class="h-100">
    <div class="authincation h-100">
        <div class="container-fluid h-100">
            <div class="row justify-content-center h-100 align-items-center">
                <div class="col-md-6">
                    <div class="authincation-content">
                        <div class="row no-gutters">
                            <div class="col-xl-12">
                                <div class="auth-form">
                                    <h4 class="text-center mb-4">Sign in your account</h4>
                                    <form action="{{ route('login') }}" method="POST">
                                        @csrf
                                        <div class="form-group">
                                            <label><strong>Email</strong></label>
                                            <input type="email" class="form-control" name="email" :value="old('email')" required autofocus autocomplete="username">
                                            <x-input-error :messages="$errors->get('email')" class="mt-2" />
                                        </div>
                                        <div class="form-group">
                                            <label for="inputPassword"><strong>Password</strong></label>
                                            <input type="password" class="form-control" id="inputPassword" name="password" required autocomplete="current-password">
                                            <x-input-error :messages="$errors->get('password')" class="mt-2" />
                                        </div>
                                        <div class="form-row d-flex justify-content-between mt-4 mb-2">
                                            <div class="form-group">
                                                <div class="form-check ml-2">
                                                    <input class="form-check-input" type="checkbox" id="show_password">
                                                    <label class="form-check-label" for="show_password"><strong>Confirm Password Visibility</strong></label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="text-center">
                                            <button type="submit" class="btn btn-primary btn-block">Sign me in</button>
                                        </div>
                                    </form>
                                    <div class="new-account mt-3">
                                        <p>Don't have an account? <a class="text-primary" href="{{ route("register") }}">Sign up</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!--**********************************
        Scripts
    ***********************************-->

    {{-- show password --}}
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

<script>
    $(document).ready(function () {
        // Check if the 'Show Password' checkbox is clicked
        $('#show_password').change(function () {
            // Get the password input element
            var passwordInput = $('#inputPassword');

            // Check if the checkbox is checked
            if ($(this).is(':checked')) {
                // Change the input type to text to show the password
                passwordInput.attr('type', 'text');
            } else {
                // Change the input type back to password to hide the password
                passwordInput.attr('type', 'password');
            }
        });
    });
</script>

{{-- show password end --}}


    <!-- Required vendors -->
    <script src="{{ asset("/admin/theme/vendor/global/global.min.js") }}"></script>
    <script src="{{ asset("/admin/theme/js/quixnav-init.js") }}"></script>
    <script src="{{ asset("/admin/theme/js/custom.min.js") }}"></script>

</body>

</html>
