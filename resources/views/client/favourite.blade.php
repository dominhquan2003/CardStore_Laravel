@extends('client.index')
@section('section')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    @if (session('favouritecart'))
        <h1 class="heading" style="margin-top: 10%;">
            Favourite <span>Products</span>
        </h1>
        @if (session('Success'))
            <div class="alert alert-success mt-2 text-center">
                {{ session('Success') }}
            </div>
        @endif
        @if (session('Success_addproduct'))
            <div class="alert alert-success mt-2 text-center">
                {{ session('Success_addproduct') }}
            </div>
        @endif
        <div class=" container">
            <a href="{{route('homeclient')}}#products" class="btn" style="margin-left:4%"  > <i class="fa-sharp fa-solid fa-chevron-left"></i>  Back</a>
        </div>
        <section class="products  row" id="products">
            @foreach (session('favouritecart') as $id => $details)
                <div class="box-container container col-4  d-flex justify-content-around ">
                    <div class="box">
                        <span class="discount">-17.63%</span>
                        <div class="image">
                            <img src="{{ asset('img/' . $details['link']) }}" alt="">
                            <div class="icons">
                                {{-- <a href="{{ url('client/detail/' . $details->id) }}" class="fas fa-heart"></a> --}}
                                <a href="{{ url('/client/deletefavourite/' . $id) }}" class="fa-solid fa-trash"></a>
                                <a href="{{ url('/client/detail/' . $id) }}" class="cart-btn"> <i
                                        class=" fas fa-shopping-cart"></i> Add to cart </a>
                            </div>
                        </div>
                        <div class="content">
                            <h3>{{ $details['tensp'] }}</h3>
                            <div class="price"> {{ $details['giasp'] }} VND <br>
                                <span>{{ number_format($details['giasp'] + ($details['giasp'] * 21.63) / 100, 2, '.', '') }}
                                    VND
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </section>

    @endif

@endsection
