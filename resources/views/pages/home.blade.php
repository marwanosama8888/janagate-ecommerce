@extends('layouts.master')
@section('title')
    JanaGate
@endsection
@section('scripts')

    <style>
        .button-logout {
            background-color: red;
            border-radius: 10px;
            border: none;
            background-color: transparent;
            transition: all 0.3s
        }

        .button-logout:hover {
            color: #EBBB2C;

        }

        @media(max-width:767px) {
            .button-logout {
                background-color: red;
                border-radius: 10px;
                border: none;
                background-color: transparent;
                margin: 20px 0
            }
        }

    </style>


@section('content')



    <!-- start Home page -->
    <a href="{{ route('vendor-category') }}">
        <div class="home-bg-img"></div>
    </a>
    <!-- start Home page -->

    <!-- %%%%%%%%%%%% -->
    <section class="box-box-box-All">
        <div class="container">
            <div class="box-box-all">
                <div class="box-box">
                    <a href="{{ url('category/electronics') }}">
                        <img src="{{ asset('assets/images/box-box-8.png') }}" alt="" />
                        <p>{{ trans('home.home') }}</p>
                    </a>
                </div>
                <div class="box-box">
                    <a href="{{ url('category/fashion') }}">
                        <img src="{{ asset('assets/images/box-box-2.png') }}" alt="" />
                        <p>{{ trans('home.sports') }}</p>
                    </a>
                </div>
                <div class="box-box">
                    <a href="{{ url('category/sports') }}">
                        <img src="{{ asset('assets/images/box-box-3.png') }}" alt="" />
                        <p>{{ trans('home.healthy') }}</p>
                    </a>
                </div>
                <div class="box-box">
                    <a href="{{ url('category/electronics') }}">
                        <img src="{{ asset('assets/images/box-box-5.png') }}" alt="" />
                        <p>{{ trans('home.tech') }}</p>
                    </a>
                </div>
            </div>
            <div class="box-box-all-two">
                <div class="box-box">
                    <a href="{{ url('category/art') }}">
                        <img src="{{ asset('assets/images/box-box-6.png') }}" alt="" />
                        <p>{{ trans('home.art') }}</p>
                    </a>
                </div>
                {{-- <div class="box-box">
            <a href="./products.html">
              <img src="{{asset('assets/images/box-box-7.png')}}" alt="" />
              <p>الخدمات</p>
            </a>
          </div>
          <div class="box-box box-arow">
            <a href="./products.html">
              <img src="{{asset('assets/images/box-box-8.png')}}" alt="" />
              <p>المزيد</p>
            </a>
            <a class="arow-imag" href="./products.html">
              <img src="{{asset('assets/images/arow-left-mazeed.png')}}" alt="" />
            </a>
          </div> --}}
            </div>
        </div>
    </section>
    <!-- %%%%%%%%%%%% -->

    <!-- start swiber image -->
    <section class="sec-swiber">
        <!-- line-swiber-one -->
        <div class="container">
            <div class="enwan-swiber">
                <h1>{{ trans('home.best') }}</h1>
            </div>
            <div class="swiper mySwiper">
                <div class="swiper-wrapper">
                    @php
                        use App\Models\Product;
                        $products = new Product();
                    @endphp
                    @foreach ($products->all()->take(15) as $item)
                        <div class="swiper-slide">
                            <a href="{{ url('product/' . $item->slug) }}">
                                <img src="{{ $item->getMedia() ? $item->getFirstMediaUrl() : asset('assets/images/img-swiber-9.png') }}"
                                    alt="" />
                            </a>
                        </div>
                    @endforeach
                </div>
                <!-- btn-next-prev -->
                <div class="swiper-button-next">
                    <i class="fa-solid fa-caret-left"></i>
                </div>
                <div class="swiper-button-prev">
                    <i class="fa-solid fa-caret-right"></i>
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
        <!-- line-swiber-two -->
        <div class="container">
            <div class="swiper mySwiper">
                <div class="swiper-wrapper">
                    @foreach ($products->latest()->take(15)->get() as $item)
                        <div class="swiper-slide">
                            <a href="{{ url('product/' . $item->slug) }}">
                                <img src="{{ $item->getMedia() ? $item->getFirstMediaUrl() : asset('assets/images/img-swiber-9.png') }}"
                                    alt="" />
                            </a>
                        </div>
                    @endforeach
                </div>
                <!-- btn-next-prev -->
                <div class="swiper-button-next">
                    <i class="fa-solid fa-caret-left"></i>
                </div>
                <div class="swiper-button-prev">
                    <i class="fa-solid fa-caret-right"></i>
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
        <!-- line-swiber-three -->
        <div class="container">
            <div class="swiper mySwiper">
                <div class="swiper-wrapper">
                    @foreach ($products->orderBy('price','asc')->take(15)->get() as $item)
                        <div class="swiper-slide">
                            <a href="{{ url('product/' . $item->slug) }}">
                                <img src="{{ $item->getMedia() ? $item->getFirstMediaUrl() : asset('assets/images/img-swiber-9.png') }}"
                                    alt="" />
                            </a>
                        </div>
                    @endforeach
                </div>

                <!-- btn-next-prev -->
                <div class="swiper-button-next">
                    <i class="fa-solid fa-caret-left"></i>
                </div>
                <div class="swiper-button-prev">
                    <i class="fa-solid fa-caret-right"></i>
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </section>
    <!-- end swiber image -->

@endsection
