@extends('layouts.master')
@section('title')
{{ucfirst('المنتجات')}}
@endsection
@section('content')

    <!-- start product home page -->
    <div class="bg-product">
        <div dir="ltr" class="container cont-input">
          <div class="div-input-home">
              <form action="{{route('search')}}" method="GET"  >

                <input type="text"  name="name" placeholder="Search" />

            </form>
            <div class="icon-input">
              <span>|</span>
              <i class="fa-solid fa-magnifying-glass"></i>
            </div>
          </div>
        </div>
        <!-- start Drob menue -->
        <nav class="navbar">
          <div class="container">
            <div class="drobdown-menue-all">

             @foreach ($data as $item )

                <div class="dropdown">
                <button
                  class="btn btn-danger dropdown-toggle"
                  type="button"
                  id="dropdownMenuButton1"
                  data-bs-toggle="dropdown"
                  aria-expanded="false"
                >
                  {{ $item->name }}
                </button>
                <ul
                  class="dropdown-menu Drob-one"
                  aria-labelledby="dropdownMenuButton1"
                >
                  <div class="drob-all">
                    <div class="enwan-linkat">
                      <a href="{{  url('category/'.$item->slug) }}">وصلنا حديثا</a>
                    </div>
                    <div class="div-drob-all">
                      <div class="div-drob-one">
                        <h4>تسوقي حسب المنتج</h4>
                        @foreach ($item->subCategories as $drop )

                        <a href="{{ url('sub-category/'.$drop->slug) }}">{{ $drop->name }}</a>
                        @endforeach

                      </div>
                      <div class="img-drob">
                        <img src="{{asset('assets/images/img-DrobDown.png')}}" alt="" />
                      </div>
                    </div>
                  </div>
                </ul>
              </div>
             @endforeach

            </div>
          </div>
        </nav>
        <!-- end Drob menue -->
      </div>
      <!-- end product home page -->

    <!-- start bg-under-DrobMenue -->
    <div class="bg-bg"></div>
    <div class="bg-msa7a-e3lania">
      <div class="container cont-msa7a">
        <img src="./images/card-in-msa7a-e3lania.png" alt="" />
        <h1>مساحة اعلانية</h1>
        <img src="./images/snb-in-msa7a-e3lania.png" alt="" />
      </div>
    </div>
    <div class="container">
      <div class="img-all-flex">
        <img src="./images/img-under-msa7a-1.png" alt="" />
        <img src="./images/img-under-msa7a-2.png" alt="" />
        <img class="big-img" src="./images/img-under-msa7a-3.png" alt="" />
      </div>
    </div>
    <!-- end bg-under-DrobMenue -->

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
