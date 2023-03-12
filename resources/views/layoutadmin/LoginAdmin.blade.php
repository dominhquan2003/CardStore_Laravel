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
    a{
        text-decoration: none !important;
    }
    button {
        margin-top: 24px;
    }
</style>
@if (session('errorlogin'))
    <div class="alert alert-danger alert-dismissable fade in  "
        style="width:75% !important ; font-size : 24px  !important ">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        <strong>WATCH OUT ! </strong> {{ session('errorlogin') }}.
    </div>
@endif
@if (session('successreset'))
    <div class="alert alert-success alert-dismissable fade in  "
        style="width:75% !important ; font-size : 24px  !important ">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        <strong>Successfully ! </strong> {{ session('successreset') }}.
    </div>
@endif

<div class="container" id="container">
    <div class="form-container sign-up-container">
        <form method="POST" action="{{ url('/client/add') }}" id="signup-form">
            @csrf
            <h1>Create Account</h1>
            <div class="social-container">
                <a href="#" class="social"><i class=" text-black-50 fa-brands fa-square-facebook"></i></a>
                <a href="#" class="social"><i class=" text-black-50 fab fa-google-plus-g"></i></a>
                <a href="#" class="social"><i class=" text-black-50 fab fa-linkedin-in"></i></a>
            </div>
            <input type="email" placeholder="Email" name="username" required />
            <span class="float-left" id="erroremail" style="color: red"></span>

            <input type="number" placeholder="Phone number" maxlength="10" name="phone" required />
            <span class="float-left" id="errorphone" style="color: red"></span>

            <input type="password" placeholder="Password" name="password" name="password" required />
            <span class="float-left" id="errorpass" style="color: red"> </span>

            <button class="signup" style="
            ; color:white ; ">Sign Up</button>

        </form>
    </div>
    <div class="form-container sign-in-container">
        <form method="POST" action="{{ url('/client/login') }}">
            @csrf
            <h1>Sign in</h1>
            <div class="social-container">
                <a href="#" class="social"><i class=" text-black-50 fa-brands fa-square-facebook"></i></a>
                <a href="#" class="social"><i class=" text-black-50 fab fa-google-plus-g"></i></a>
                <a href="#" class="social"><i class=" text-black-50 fab fa-linkedin-in"></i></a>
            </div>
            <span>or use your account</span>
            <input type="email" placeholder="Email" name="usernamelogin" />
            <input type="password" placeholder="Password" name="passwordlogin" />
            <a href="{{url('/client/resetpassword')}}">Forgot your password ?</a>




            <button type="submit" style="color:white ; ">Sign In</button>
        </form>

    </div>


    <div class="overlay-container">
        <div class="overlay">
            <div class="overlay-panel overlay-left">
                <h1>Welcome Back!</h1>
                <p>To keep connected with us please login with your personal info</p>
                <button class="ghost" id="signIn">Sign In</button>
            </div>
            <div class="overlay-panel overlay-right">
                <h1>Hello, Friend!</h1>
                <p>Enter your personal details and start journey with us</p>
                @if (session('success'))
                    {{-- <div class="alert alert-primary p-3 ">
                        {{ session('success') }}
                    </div> --}}
                    <button class="ghost" id="signUp"> {{ session('success') }}</button>
                @elseif (session('errorregister'))
                    <button class="ghost" id="signUp">{{ session('errorregister') }}</button>
                @else
                    <button class="ghost" id="signUp">Sign Up</button>
                @endif
            </div>
        </div>
    </div>
</div>
{{-- @if (session('success'))
    <div class="alert alert-primary p-3 ">
        {{ session('success') }}
    </div>
@endif --}}
<footer>
    <p>
        Created with <i class=" text-black-50 fa fa-heart"></i> by
        <a target="_blank" href="#">@copyright Do Minh Quan</a>
        <a target="_blank" href="#">here</a>.
    </p>
</footer>
<script>
    const signUpButton = document.getElementById('signUp');
    const signInButton = document.getElementById('signIn');
    const container = document.getElementById('container');

    signUpButton.addEventListener('click', () => {
        container.classList.add("right-panel-active");
    });

    signInButton.addEventListener('click', () => {
        container.classList.remove("right-panel-active");
    });



    /////////////////////////////////////// Validation
    const form = document.querySelector('#signup-form');
    const emailInput = document.querySelector('input[name="username"]');
    const phoneInput = document.querySelector('input[name="phone"]');
    const passwordInput = document.querySelector('input[name="password"]');
    const errorEmail = document.querySelector('#erroremail');
    const errorPhone = document.querySelector('#errorphone');
    const errorPass = document.querySelector('#errorpass');

    form.addEventListener('submit', (event) => {
        let messages = [];

        if (!emailInput.value || emailInput.value.indexOf('@gmail.com') === -1) {
            messages.push('Please enter a valid email address');
        } else {
            errorEmail.innerHTML = ''; // xóa nội dung trong span
        }
        if (!phoneInput.value || isNaN(phoneInput.value) || phoneInput.value.length != 10) {
            messages.push('Please enter a valid phone number');
        } else {
            errorPhone.innerHTML = ''; // xóa nội dung trong span
        }
        if (passwordInput.value.length < 6) {
            messages.push('Password should be at least 6 characters long');
        } else {
            errorPass.innerHTML = ''; // xóa nội dung trong span
        }

        if (messages.length > 0) {
            event.preventDefault();
            if (messages.includes('Please enter a valid email address')) {
                errorEmail.innerHTML = 'Please enter a valid email address';
            }
            if (messages.includes('Please enter a valid phone number')) {
                errorPhone.innerHTML = 'Please enter a valid phone number';
            }
            if (messages.includes('Password should be at least 6 characters long')) {
                errorPass.innerHTML = 'Password should be at least 6 characters long';
            }
        }
    });


    var alertList = document.querySelectorAll('.alert')
    alertList.forEach(function(alert) {
        new bootstrap.Alert(alert)
    })
</script>
