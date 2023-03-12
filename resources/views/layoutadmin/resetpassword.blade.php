<link rel="stylesheet" href="{{ asset('dist/css/login.css') }}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
<link rel="stylesheet" href="{{ asset('dist/css/adminlte.min.css') }}">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style>
    input {
        margin-top: 12px;
    }

    a {
        text-decoration: none !important;
    }

    button {
        margin-top: 24px;
    }
</style>
@if (session('errorlogin'))
    <div class="alert alert-danger alert-dismissable fade in text-center  "
        style="width:75% !important ; font-size : 24px  !important ">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        <strong>WATCH OUT ! </strong> {{ session('errorlogin') }}.
    </div>
@endif

<div class="container" id="container">

    <div class="form-container sign-in-container">
        <form method="POST" action="{{ url('/client/saveresetpassword') }}" id="resetpassword-form">
            @csrf
            <h1>Reset password</h1>
            <div class="social-container">
                <a href="#" class="social"><i class=" text-black-50 fa-brands fa-square-facebook"></i></a>
                <a href="#" class="social"><i class=" text-black-50 fab fa-google-plus-g"></i></a>
                <a href="#" class="social"><i class=" text-black-50 fab fa-linkedin-in"></i></a>
            </div>
            <span>or use your account</span>
            <input type="phone" placeholder="Phone number" name="oldphonenumber" />
            <span class="float-left" id="errorPhone" style="color: red"></span>

            <input type="password" placeholder="Password" name="newpassword" />
            <span class="float-left" id="errorPass" style="color: red"></span>

            <input type="password" placeholder="Confirm password" name="confirmnewpassword" />
            <span class="float-left" id="errorConfirm" style="color: red"></span>

            <a href="{{ url('/client/formlogin') }}">Come back to login </a>
            <button type="submit" style="color:white ; ">Reset password</button>
        </form>

    </div>

    <div class="overlay-container">
        <div class="overlay">
            {{-- <div class="overlay-panel overlay-left">
                <h1>Resset passs!</h1>
                <p>To keep connected with us please login with your personal info</p>
                <button class="ghost" id="signIn">Sign In</button>
            </div> --}}
            <div class="overlay-panel overlay-right">
                <h1>Hello, Friend!</h1>
                <p>Enter your new password and start journey with us</p>
                {{-- @if (session('success'))

                    <button class="ghost" id="signUp"> {{ session('success') }}</button>
                @elseif (session('errorregister'))
                    <button class="ghost" id="signUp">{{ session('errorregister') }}</button>
                @else
                    <button class="ghost" id="signUp">Sign Up</button>
                @endif --}}
            </div>
        </div>
    </div>

</div>

<footer>
    <p>
        Created with <i class=" text-black-50 fa fa-heart"></i> by
        <a target="_blank" href="#">@copyright Do Minh Quan</a>
        <a target="_blank" href="#">here</a>.
    </p>
</footer>
<script>
    /////// Validation
    const form = document.querySelector('#resetpassword-form');
    const phoneInput = document.querySelector('input[name="oldphonenumber"]');
    const passwordInput = document.querySelector('input[name="newpassword"]');
    const passwordInput1 = document.querySelector('input[name="confirmnewpassword"]');

    const errorPhone = document.querySelector('#errorPhone');
    const errorPass = document.querySelector('#errorPass');
    const errorConfirm = document.querySelector('#errorConfirm');

    form.addEventListener('submit', (event) => {
        let messages = [];

        if (!phoneInput.value || isNaN(phoneInput.value) || phoneInput.value.length != 10) {
            messages.push('Please enter a valid phone number');
        } else {
            errorPhone.innerHTML = '';
        }
        if (passwordInput.value.length < 6) {
            messages.push('Password should be at least 6 characters long');
        } else {
            errorPass.innerHTML = '';
        }
        if (passwordInput1.value.length < 6) {
            messages.push('Password should be at least 6 characters long');
        } else {
            errorConfirm.innerHTML = '';
        }

        if (passwordInput.value != passwordInput1.value) {
            messages.push('Password must match!');
        } else {
            errorConfirm.innerHTML = '';
        }

        if (messages.length > 0) {
            event.preventDefault();
            if (messages.includes('Please enter a valid phone number')) {
                errorPhone.innerHTML = 'Please enter a valid phone number';
            }
            if (messages.includes('Password should be at least 6 characters long')) {
                errorPass.innerHTML = 'Password should be at least 6 characters long';
            }
            if (messages.includes('Password must match!')) {
                errorConfirm.innerHTML = 'Password must match!';
            }
        }
    });


    ///// alert
    var alertList = document.querySelectorAll('.alert')
    alertList.forEach(function(alert) {
        new bootstrap.Alert(alert)
    });
</script>
