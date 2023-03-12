@extends('client.index')
@section('section')
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Bootstrap icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <link href="{{ asset('single-page/css/styles.css') }}" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('client/css/style.css') }}">

    <main id="product-detail" class="">
        <section class="py-5">
            <div class="container px-4 px-lg-5 my-5">
                <div class="row gx-4 gx-lg-5 align-items-center">
                    <div class="col-md-6"><img class="card-img-top mb-5 mb-md-0" src="{{ asset('img/' . $product->link) }}"
                            alt="..." /></div>
                    <div class="col-md-6">
                        {{-- <div class="small mb-1">SKU: BST-498</div> --}}
                        <h1 class="display-5 fw-bolder">{{ $product->tensp }}</h1>
                        <div class="fs-5 mb-5">
                            <span>{{ $product->giasp }} VND</span>
                            <span
                                class="text-decoration-line-through">{{$product->giasp *  (100 / 80 ) }}
                                VND</span>
                        </div>
                        <p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium at dolorem
                            quidem
                            modi. Nam sequi consequatur obcaecati excepturi alias magni, accusamus eius blanditiis delectus
                            ipsam minima ea iste laborum vero?</p>
                        <div class="d-flex">
                            <form action="{{ url('client/addcart/' . $product->id) }}" method="GET">
                                <input class="form-control text-center me-3" id="inputQuantity" type="number" min="1" max="{{$product->soluong}}"
                                    value="1" min="0" style="max-width: 5rem" name="detailproduct" />
                                <button class="btn btn-outline-dark flex-shrink-0" type="submit">
                                    <i class="bi-cart-fill me-1"></i>
                                    Add to cart
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Related items section-->
        <section class="py-5 bg-light">
            <div class="container px-4 px-lg-5 mt-5">
                <h2 class="fw-bolder mb-4">Related products</h2>
                <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                    @foreach ($productrelated as $item)
                        @if ($item->status === 1)
                            <div class="col mb-5">
                                <div class="card h-100">
                                    <!-- Product image-->
                                    <img class="card-img-top" src="{{ asset('img/' . $item->link) }}" alt="..." />
                                    <!-- Product details-->
                                    <div class="card-body p-4">
                                        <div class="text-center">
                                            <!-- Product name-->
                                            <h4 class="fw-bolder">{{ $item->tensp }}</h4>
                                            <!-- Product price-->
                                            <h5>{{ $item->giasp }} VND</h5>
                                        </div>
                                    </div>
                                    <!-- Product actions-->
                                    <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                        <div class="text-center">
                                            <a class="btn btn-outline-dark mt-auto"  href="{{ url('/client/detail/' . $item->id) }}">Detail </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endif
                    @endforeach

                </div>
            </div>
        </section>
    </main>
    <!-- Product section-->


    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
@endsection
