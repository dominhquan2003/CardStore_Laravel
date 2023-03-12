<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Card Store </title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
        integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{ asset('dist/css/adminlte.min.css') }}">
    <!-- custom css file link  -->
    <link rel="stylesheet" href="{{ asset('client/css/style.css') }}">


</head>

<body>

    <!-- header section starts  -->
    @if (session('success'))
        <div class="alert alert-success alert-dismissable fade in text-center  "
            style="width:50% !important ; font-size : 18px  !important ">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            <strong>Successfully ! </strong> {{ session('success') }}.
        </div>
    @endif
    <header>

        <input type="checkbox" name="" id="toggler">
        <label for="toggler" class="fas fa-bars"></label>

        <a href="#" class="logo"> <img src="{{ asset('client/images/logo.jpg') }}" height="80px"
                alt=""> </a>

        <nav class="navbar">
            <a href="{{ route('homeclient') }}">home</a>
            <a href="#about">about</a>
            <a href="#products">products</a>
            <a href="#review">review</a>
            <a href="#contact">contact</a>
        </nav>

        <div class="icons">
            <a href="{{ url('/client/favourite') }}" class="fas fa-heart"></a>
            <a href="{{ url('/client/cart') }}" class="fas fa-shopping-cart"></a>
            <a href="{{ url('client/profile') }}" class="fas fa-user"></a>
            <a href="{{ route('formlogin') }}" class="fa-solid fa-right-from-bracket"></a>
        </div>

    </header>

    <!-- header section ends -->

    @yield('section');

    <!-- footer section starts  -->

    <section class="footer">

        <div class="box-container d-flex justify-content-around">

            <div class="box">
                <h3>contact info</h3>
                <a href="#">+84-456-7890</a>
                <a href="#">doquan23032003@gmail.com</a>
                <a href="#">vinhome central park</a>
                <img src="{{ asset('client/images/payment.png') }}" alt="">
            </div>

            <div class="box">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3919.2143278498456!2d106.7218601!3d10.7948902!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x317527c2f8f30911%3A0x36ac5073f8c91acd!2sLandmark%2081!5e0!3m2!1svi!2s!4v1677934576052!5m2!1svi!2s"
                    width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>

        <div class="credit"> created by <span> Mr Tech </span> | all rights reserved </div>



    </section>

    <!-- footer section ends -->

    <script src="{{ asset('client/js/script.js') }}"></script>
</body>

</html>
