<!DOCTYPE html>
<html lang="en" class="h-100">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Focus - Bootstrap Admin Dashboard </title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('/admin/theme/images/favicon.png') }}">
    <link href="{{ asset('/admin/theme/css/style.css') }}" rel="stylesheet">

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
                                    <h4 class="text-center mb-4">Sign up your account</h4>
                                    <form action="{{ route('register') }}" method="POST">
                                        @csrf
                                        <div class="form-group">
                                            <label><strong>Username</strong></label>
                                            <input type="text" class="form-control" name="name"
                                                :value="old('name')" required autofocus autocomplete="name"
                                                placeholder="username">
                                            <x-input-error :messages="$errors->get('name')" class="mt-2" />
                                        </div>
                                        <div class="form-group">
                                            <label><strong>Email</strong></label>
                                            <input type="email" class="form-control" name="email"
                                                :value="old('email')" required autocomplete="username"
                                                placeholder="hello@example.com">
                                        </div>
                                        <div class="form-group">
                                            <label><strong>Password</strong></label>
                                            <input type="password" class="form-control" name="password" required
                                                autocomplete="new-password" placeholder="Password" id="inputPassword">
                                            <x-input-error :messages="$errors->get('password')" class="mt-2" />
                                        </div>
                                        <div class="form-group">
                                            <label><strong>Retype password</strong></label>
                                            <input type="password" class="form-control" name="password_confirmation"
                                                required autocomplete="new-password" placeholder="Retype password" id="inputPasswordConfirmation">
                                            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                                        </div>

                                        <div class="form-row d-flex justify-content-between mt-4 mb-2">
                                            <div class="form-group">
                                                <div class="form-check ml-2">
                                                    <input class="form-check-input" type="checkbox" id="show_password">
                                                    <label class="form-check-label" for="show_password"><strong>Confirm Password Visibility</strong></label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="text-center mt-4">
                                            <button type="submit" class="btn btn-primary btn-block">Sign me up</button>
                                        </div>
                                    </form>
                                    <div class="new-account mt-3">
                                        <p>Already have an account? <a class="text-primary"
                                                href="{{ route('login') }}">Sign in</a></p>
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
    $(document).ready(function() {
        // Check if the 'Show Password' checkbox is clicked
        $('#show_password').change(function() {
            // Get the password input element
            var passwordInput = $('#inputPassword, #inputPasswordConfirmation');

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
    <script src="{{ asset('/admin/theme/vendor/global/global.min.js') }}"></script>
    <script src="{{ asset('/admin/theme/js/quixnav-init.js') }}"></script>
    <!--endRemoveIf(production)-->
</body>

</html>
