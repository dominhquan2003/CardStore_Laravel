@extends('client.index')
@section('section')
<link rel="stylesheet" href="{{asset('client/css/search.css')}}">
    <section class="home" id="home">

        <div class="content">
            <h3>Pabirus Shop</h3>
            <span> Beautiful card </span>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae laborum ut minus corrupti dolorum dolore
                assumenda iste voluptate dolorem pariatur.</p>
            <a href="#" class="btn">shop now</a>
        </div>

    </section>

    <!-- home section ends -->

    <!-- about section starts  -->

    <section class="about" id="about">

        <h1 class="heading"> <span> about </span> us </h1>

        <div class="row">

            <div class="video-container">
                <video src="{{ asset('client/images/about-vid.mp4') }}" loop autoplay muted></video>
                <h3>best card sellers</h3>
            </div>

            <div class="content">
                <h3>why choose us?</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem cumque sit nemo pariatur corporis
                    perspiciatis aspernatur a ullam repudiandae autem asperiores quibusdam omnis commodi alias repellat
                    illum, unde optio temporibus.</p>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Accusantium ea est commodi incidunt magni
                    quia molestias perspiciatis, unde repudiandae quidem.</p>
                <a href="#" class="btn">learn more</a>
            </div>

        </div>

    </section>

    <!-- about section ends -->

    <!-- icons section starts  -->

    <section class="icons-container">

        <div class="icons">
            <img src="{{ asset('client/images/icon-1.png') }}" alt="">
            <div class="info">
                <h3>free delivery</h3>
                <span>on all orders</span>
            </div>
        </div>

        <div class="icons">
            <img src="{{ asset('client/images/icon-2.png') }}" alt="">
            <div class="info">
                <h3>10 days returns</h3>
                <span>moneyback guarantee</span>
            </div>
        </div>

        <div class="icons">
            <img src="{{ asset('client/images/icon-3.png') }}" alt="">
            <div class="info">
                <h3>offer & gifts</h3>
                <span>on all orders</span>
            </div>
        </div>

        <div class="icons">
            <img src="{{ asset('client/images/icon-4.png') }}" alt="">
            <div class="info">
                <h3>secure paymens</h3>
                <span>protected by paypal</span>
            </div>
        </div>

    </section>

    <!-- icons section ends -->

    <!-- prodcuts section starts  -->

    <section class="products" id="products">

        <div class="search-container">
            <form action="{{url('client/search')}}#products" method="GET">
                @csrf
                <input class="cart-btn" type="text" placeholder="Search..." name="query">
                <button type="submit">Search</button>
            </form>
        </div>


        <h1 class="heading"> Business <span> CARD </span> </h1>

        <div class="box-container">
            @foreach ($products as $product)
                @if ($product->ID_DMSP == 1 && $product->status == 1)
                    <div class="box">
                        <span class="discount">-20%</span>
                        <div class="image">
                            <img src="{{ asset('img/' . $product->link) }}" alt="">
                            <div class="icons">
                                <a href="{{ url('client/favouritecart/' . $product->id) }}" class="fas fa-heart"></a>
                                <a href="{{ url('/client/detail/' . $product->id) }}" class="cart-btn"> <i
                                        class=" fas fa-shopping-cart"></i> Add to cart </a>
                                {{-- <a href="#" class="fas fa-share"></a> --}}
                            </div>
                        </div>
                        <div class="content">
                            <h3>{{ $product->tensp }}</h3>
                            <div class="price"> {{ $product->giasp }} VND <br>
                                <span>{{$product->giasp *  (100 / 80 ) }}
                                    VND </span>
                            </div>
                        </div>
                    </div>
                @endif
            @endforeach
        </div>


        <h1 class="heading"> Birthday <span> CARD </span> </h1>

        <div class="box-container">
            @foreach ($products as $product)
                @if ($product->ID_DMSP == 2 && $product->status == 1)
                    <div class="box">
                        <span class="discount">-20%</span>
                        <div class="image">
                            <img src="{{ asset('img/' . $product->link) }}" alt="">
                            <div class="icons">
                                <a href="{{ url('/client/favouritecart/' . $product->id) }}" class="fas fa-heart"></a>
                                <a href="{{ url('/client/detail/' . $product->id) }}" class="cart-btn"> <i
                                        class=" fas fa-shopping-cart"></i>Add to cart <i
                                        class="fas fa-shopping-cart"></i></a>
                                {{-- <a href="#" class="fas fa-share"></a> --}}
                            </div>
                        </div>
                        <div class="content">
                            <h3>{{ $product->tensp }}</h3> <br>
                            <div class="price">
                                {{ $product->giasp }} VND <br>
                                <span>{{$product->giasp *  (100 / 80 ) }}
                                    VND
                                </span>
                            </div>
                        </div>
                    </div>
                @endif
            @endforeach
        </div>

        <h1 class="heading"> Wedding <span> CARD </span> </h1>

        <div class="box-container">
            @foreach ($products as $product)
                @if ($product->ID_DMSP == 3 && $product->status == 1)
                    <div class="box">
                        <span class="discount">-20%</span>
                        <div class="image">
                            <img src="{{ asset('img/' . $product->link) }}" alt="">
                            <div class="icons">
                                <a href="{{ url('client/favouritecart/' . $product->id) }}" class="fas fa-heart"></a>
                                <a href="{{ url('/client/detail/' . $product->id) }}" class="cart-btn"> <i
                                        class=" fas fa-shopping-cart"></i>Add to cart <i
                                        class="fas fa-shopping-cart"></i></a>
                                {{-- <a href="#" class="fas fa-share"></a> --}}
                            </div>
                        </div>
                        <div class="content">
                            <h3>{{ $product->tensp }}</h3>
                            <div class="price">
                                {{ $product->giasp }} VND <br>
                                <span>{{$product->giasp *  (100 / 80 ) }}
                                    VND</span>
                            </div>
                        </div>
                    </div>
                @endif
            @endforeach
        </div>






    </section>

    <!-- prodcuts section ends -->

    <!-- review section starts  -->

    <section class="review" id="review">

        <h1 class="heading"> customer's <span>review</span> </h1>

        <div class="box-container">

            <div class="box">
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti asperiores laboriosam praesentium
                    enim maiores? Ad repellat voluptates alias facere repudiandae dolor accusamus enim ut odit, aliquam
                    nesciunt eaque nulla dignissimos.</p>
                <div class="user">
                    <img src="{{ asset('client/images/pic-1.png') }}" alt="">
                    <div class="user-info">
                        <h3>john deo</h3>
                        <span>Happy customer</span>
                    </div>
                </div>
                <span class="fas fa-quote-right"></span>
            </div>

            <div class="box">
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti asperiores laboriosam praesentium
                    enim maiores? Ad repellat voluptates alias facere repudiandae dolor accusamus enim ut odit, aliquam
                    nesciunt eaque nulla dignissimos.</p>
                <div class="user">
                    <img src="{{ asset('client/images/pic-2.png') }}" alt="">
                    <div class="user-info">
                        <h3>john deo</h3>
                        <span>happy customer</span>
                    </div>
                </div>
                <span class="fas fa-quote-right"></span>
            </div>

            <div class="box">
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti asperiores laboriosam praesentium
                    enim maiores? Ad repellat voluptates alias facere repudiandae dolor accusamus enim ut odit, aliquam
                    nesciunt eaque nulla dignissimos.</p>
                <div class="user">
                    <img src="{{ asset('client/images/pic-3.png') }}" alt="">
                    <div class="user-info">
                        <h3>john deo</h3>
                        <span>happy customer</span>
                    </div>
                </div>
                <span class="fas fa-quote-right"></span>
            </div>

        </div>

    </section>

    <!-- review section ends -->

    <!-- contact section starts  -->

    <section class="contact" id="contact">

        <h1 class="heading"> <span> contact </span> us </h1>

        <div class="row">

            <form method="POST" action="{{ route('addcus') }}">
                @csrf
                <input type="text" placeholder="Full name" name="name" class="box " required>
                <input type="email" placeholder="Email" name="email" class="box" required>
                <input type="text" placeholder="Phone number" name="phonenumber" class="box" required>
                <input type="text" placeholder="Address" name="diachi" class="box" required>
                <textarea class="box" placeholder="Message" name="mota" id="" cols="30" rows="10"
                    required></textarea>
                <input type="submit" value="send" class="btn">

                @if (session('Success'))
                    <div class="alert alert-success mt-2">
                        {{ session('Success') }}
                    </div>
                @endif
            </form>

            <div class="image">
                <img src="{{ asset('client/images/contact-img.svg') }}" alt="">
            </div>

        </div>

    </section>


    <!-- contact section ends -->
@endsection
