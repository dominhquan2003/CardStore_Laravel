@extends('client.index')
@section('section')
    <link rel="stylesheet" href="{{ asset('client/css/cart.css') }}">
    {{-- <link rel="stylesheet" href="{{asset('client/css/style.css')}}"> --}}

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <section class="h-100 h-custom " style="background-color: #d192a7;">
        <div class="container h-100 py-5">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col">
                    <div class="card shopping-cart" style="border-radius: 15px;">
                        <div class="card-body text-black">
                            @if (session('Success'))
                                <div class="alert alert-success mt-2">
                                    {{ session('Success') }}
                                </div>
                            @endif
                            <div class="row">
                                <div class="col-lg-6 px-5 py-4">
                                    <h2 class="mb-5 pt-2 text-center fw-bold text-uppercase">Your products</h2>
                                    @if (session('cart'))
                                        @php
                                            $total = 0;
                                        @endphp
                                        @foreach (session('cart') as $id => $details)
                                            @php
                                                $total += $details['giasp'] * $details['soluong'];
                                                // dd( $id) ;
                                            @endphp

                                            <div class="d-flex align-items-center mb-5">
                                                <div class="flex-shrink-0">
                                                    <img src="{{ asset('img/' . $details['link']) }}" class="img-fluid"
                                                        style="width: 150px;" alt="Generic placeholder image">
                                                </div>
                                                <div class="flex-grow-1 ms-3">
                                                    <a href="{{ url('client/deletecart/' . $id) }}"
                                                        class="float-right btn btn-danger">
                                                        <i class="fas fa-times"></i> Delete
                                                    </a>



                                                    <h5 class=" ">{{ $details['tensp'] }}</h5>
                                                    <h6 style="color: #9e9e9e;">Color: white</h6>
                                                    <div class="d-flex align-items-center">
                                                        <p class="fw-bold mb-0 me-5 pe-3">{{ $details['giasp'] }}</p>
                                                        <span class="text-danger">Quantity: {{ $details['soluong'] }}
                                                        </span>

                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach

                                        <hr class="mb-4" style="height: 0.5px; background-color: #666; opacity: 2;">

                                        <div class="d-flex justify-content-between px-x">
                                            <p class="fw-bold fontcolorcart">Discount:</p>
                                            <p class="fw-bold fontcolorcart">
                                                {{ 100 - ($details['giasp'] / ($details['giasp'] * 100 / 80 ) * 100 ) }}
                                                %</p>
                                        </div>
                                        <div class="d-flex justify-content-between  mb-2"
                                          >
                                            <h5 class="  totalbuynow">Total:</h5>
                                            <h5 class="  totalbuynow">{{ $total }}</h5>
                                        </div>
                                        @if (session('Success_addproduct'))
                                            <div class="alert alert-success mt-2">
                                                {{ session('Success_addproduct') }}
                                            </div>
                                        @endif
                                    @else
                                            <img class="col-md-12" src="{{asset('client/images/no_cart.png')}}" alt="">
                                    @endif


                                </div>
                                <div class="col-lg-6 px-5 py-4">

                                    <h2 class="mb-5 pt-2 text-center fw-bold text-uppercase">Payment</h2>

                                    <form class="mb-5" method="POST" action="{{ route('cartdb') }}">
                                        @csrf
                                        <div class="form-outline mb-5">
                                            <input type="text" id="typeText" class="form-control form-control-lg"
                                                placeholder=" Enter your name" required name="name" />
                                            {{-- <label class="form-label mt-2 label-size" for="typeText">Full Name</label> --}}
                                        </div>
                                        <div class="form-outline mb-5">
                                            <input type="email" id="typeText" class="form-control form-control-lg"
                                                placeholder=" Email" required name="email" />
                                            {{-- <label class="form-label mt-2 label-size" for="">Email</label> --}}
                                            {{-- Theo chuẩn RFC 5322, địa chỉ email phải được viết hoa chữ cái sau ký tự "@". Điều này không ảnh hưởng đến tính hợp lệ của địa chỉ email --}}
                                        </div>
                                        <div class="form-outline mb-5">
                                            <input type="number" id="typeName" class="form-control form-control-lg"
                                                placeholder=" Phone number" name="phonenumber" />
                                            {{-- <label class="form-label mt-2 label-size" for="typeName">Phone</label> --}}
                                        </div>

                                        <div class="form-outline mb-5">
                                            <input type="text" id="typeText" class="form-control form-control-lg"
                                                placeholder=" Enter your address" name="diachi" required />
                                            {{-- <label class="form-label mt-2 label-size" for="typeText">Address</label> --}}
                                        </div>

                                        <button type="Submit"
                                            class="btn btn-block btn-lg p-3 totalbuynow backgroundhover " style="color:#fff">Buy now</button>

                                        <h5 class="fw-bold mb-2  " style="position: absolute; bottom: 0;">
                                            <a class="fonthover" href="{{ route('homeclient') }}#products"><i
                                                    class="fas fa-angle-left me-2 p-6 fonthover "></i>Back to shopping</a>
                                        </h5>

                                    </form>

                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>



@endsection
