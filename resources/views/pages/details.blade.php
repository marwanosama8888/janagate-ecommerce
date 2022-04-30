@extends('layouts.master')
@section('title')
{{ucfirst($data->name)}}
@endsection
@section('content')
    <!-- ^^^^^^^^^^^^^^^^^^^^^ -->
    <!-- The four columns -->
    <div class="container">
        <div class="alll-flex">
            <div class="all-one">
                <div class="bg-img')}}">

                    {{-- <img src="{{ asset('assets/images/img-Delonghi.png') }}" alt="" /> --}}
                </div>
                <h4>{{$data->name}}</h4>
                <div class="stars-text">
                    <p>0 {{ trans('details.rating') }}</p>
                    <span>|</span>
                    <div class="stars">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-regular fa-star"></i>
                    </div>
                </div>
                <div class="div-salry-border">
                    <h2>{{$data->price}} ريال</h2>
                    <p class="p-margin">{{ trans('details.game3') }}</p>
                    {{-- <form action="{{ url('add-cart') }}" method="POST">
    {{$data->name}}
    @csrf

    @foreach ($propsKeys as $prop)
        <p>{{ $prop->key }}</p>
        <input type="hidden" name="key" value="{{ $prop->key }}">
        <select name="prop" id="">
            @foreach ($prop->value as $value)

                <option name='value' value="{{ $value }}">{{ $value }}</option>


                @endforeach
        </select>
    @endforeach

        @foreach ($relatedProducts->products as $related)
        <p>{{ $related->name }}</p>
        @endforeach
        <button type="submit">add to card</button>

</form> --}}
                    <form class="form" action="{{ url('add-cart')}}" method="POST">
                        @csrf
                        <input type="hidden" name="id" value="{{ $data->id }}">
                        @foreach ($propsKeys as $prop)

                        <div  class="div-select">
                            <input type="hidden" name="key" value="{{ $prop->key }}">

                            <label for="">{{ $prop->key }}</label>
                            <select name="value" >
                                @foreach ($prop->value as $value)

                                <option name='value' value="{{ $value }}">{{ $value }}</option>


                                @endforeach
                            </select>

                        </div>
                        @endforeach
                        <div class="box-img-tawseel addToCard">
                            <img src="{{ asset('assets/images/Vector-order.png') }}" alt="" />
                            <button type="submit" >
                                <p>{{ trans('details.addtocart') }}</p>
                            </button>
                          </div>
                    </form>
                    <div class="tawseel-img')}}">
                        <div class="box-img-tawseel">
                            <a href="#">
                                <img src="{{ asset('assets/images/Vector-Smart-Object-1.png') }}" alt="" />
                                <p>{{ trans('details.deliver') }}</p>
                            </a>
                        </div>
                        <div class="box-img-tawseel">
                            <a href="#">
                                <img src="{{ asset('assets/images/Vector-mo3almlat.png') }}" alt="" />
                                <p>{{ trans('details.safe') }}</p>
                            </a>
                        </div>
                    </div>
                    <div class="mawad-ma3dn-All">
                        <div class="mawad-ma3dn">
                            <p>{{ trans('details.material') }}</p>
                            <p>{{$data->material}}</p>
                        </div>


                        <div class="mawad-ma3dn">
                            <p>{{ trans('details.weight') }}</p>
                            <p>{{$data->weight}}</p>
                        </div>

                        <div class="mawad-ma3dn">
                            <p>{{ trans('details.handw') }}</p>
                            <p>{{$data->widthHeight}}</p>
                        </div>
                    </div>
                    <div class="text-max">
                        <h4>{{ trans('details.about') }}</h4>
                        <p>

                            {{$data->description}}
                        </p>
                    </div>
                </div>
            </div>
            <div class="all-two">
                <div class="small-img">
                    <div class="row flex-column">
                        @foreach ($data->getMedia() as $image)

                        <div class="column">
                            <img src="{{ $image->getUrl() ?? '' }}" alt="Nature" style="width: 100%"
                            onclick="myFunction(this);" />
                        </div>
                        @endforeach
                    </div>
                </div>

                <div class="container big-img')}}">
                    <span onclick="this.parentElement.style.display='none'" class="closebtn">&times;</span>
                    <img id="expandedImg')}}" src="{{$data->getFirstMediaUrl()}}" style="width: 100%" />
                    <div id="imgtext"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- ^^^^^^^^^^^^^^^^^^^^^^^6 -->

    <!-- start img swiber -->
    <!-- start swiber image -->
    {{-- <section class="sec-swiber">
        <!-- <div class="container"> -->
            <div class="container">
                <div class="enwan-swiber">
                    <h1>منتجات متشابهة</h1>
                    @foreach ($data->subCategories as $slug )

                    <a href="{{url('sub-category/'.$slug->slug)}}">شاهد المزيد</a>
                    @endforeach
                </div>
            </div>
            <div class="swiper mySwiper">
                @foreach ($relatedProducts->products as $product )
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                    <img href="#" src="{{ asset('assets/images/img-slider-productTwo-1.png') }}" alt="" />
                </div>
                @endforeach

                <!-- <div class="swiper-slide">Slide 8</div> -->
                <!-- <div class="swiper-slide">Slide 9</div> -->
            </div>
            <!-- btn-next-prev -->

            <!-- <div class="swiper-button-next">
                <i class="fa-solid fa-caret-left"></i>
              </div>
              <div class="swiper-button-prev">
                <i class="fa-solid fa-caret-right"></i>
              </div>
              <div class="swiper-pagination"></div> -->
        </div>
        <!-- </div> -->
    </section>
    <!-- end swiber image --> --}}




<!-- start img swiber -->
    <!-- start swiber image -->
    <section class="sec-swiber">
        <div class="container">
          <div class="enwan-swiber">
            <h1>{{ trans('details.related') }}</h1>
            <a href="#">{{ trans('details.more') }}</a>
          </div>
        </div>
        <div class="swiper mySwiper">
          <div class="swiper-wrapper">
            <div class="swiper-slide">
              <img src="{{asset('assets/images/img-slider-productTwo-1.png')}}" alt="" />
            </div>
            <div class="swiper-slide">
              <img src="{{asset('assets/images/img-slider-productTwo-2.png')}}" alt="" />
            </div>
            <div class="swiper-slide">
              <img src="{{asset('assets/images/img-slider-productTwo-3.png')}}" alt="" />
            </div>
            <div class="swiper-slide">
              <img src="{{asset('assets/images/img-slider-productTwo-4.png')}}" alt="" />
            </div>
            <div class="swiper-slide">
              <img src="{{asset('assets/images/img-slider-productTwo-5.png')}}" alt="" />
            </div>
            <div class="swiper-slide">
              <img src="{{asset('assets/images/img-slider-productTwo-6.png')}}" alt="" />
            </div>
            <div class="swiper-slide">
              <img src="{{asset('assets/images/img-slider-productTwo-4.png')}}" alt="" />
            </div>
          </div>
        </div>
      </section>
      <!-- end swiber image -->



    <!-- start tor2 eldaf3 -->
    <section class="sec-eldaf3">
        <div class="container">
            <div class="enwan-eldaf3">
                <h3>{{ trans('details.pay') }}</h3>
            </div>
            <div class="div-all-eldaf3">
                <img src="{{ asset('assets/images/tor2-eldaf3-11.png') }}" alt="" />
                <img src="{{ asset('assets/images/tor2-eldaf3-22.png') }}" alt="" />
                <img src="{{ asset('assets/images/tor2-eldaf3-33.png') }}" alt="" />
            </div>
        </div>
    </section>

    <!-- end tor2 eldaf3 -->

    <!-- start bg 3 image -->
    <section class="sec-three-img">
        <div class="container img-img">
            <img src="{{ asset('assets/images/img-swiber-1.png') }}" alt="" />
            <img src="{{ asset('assets/images/img-swiber-2.png') }}" alt="" />
            <img src="{{ asset('assets/images/img-swiber-3.png') }}" alt="" />
        </div>
    </section>
    <!-- end bg 3 image -->

    <!-- start img swiber -->
    <div class="container sec-slider-above-footer">
        <div class="container">
            <div class="enwan-swiber">
                <h1>{{ trans('details.toprat') }}</h1>
                <a href="#">{{ trans('details.more') }}</a>
            </div>
        </div>
        <div class="swiper mySwiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <img src="{{ asset('assets/images/img-slide-1.png') }}" alt="" />
                </div>
                <div class="swiper-slide">
                    <img src="{{ asset('assets/images/img-slide-2.png') }}" alt="" />
                </div>
                <div class="swiper-slide">
                    <img src="{{ asset('assets/images/img-slide-3.png') }}" alt="" />
                </div>
                <div class="swiper-slide">
                    <img src="{{ asset('assets/images/img-slide-4.png') }}" alt="" />
                </div>
                <div class="swiper-slide">
                    <img src="{{ asset('assets/images/img-slide-5.png') }}" alt="" />
                </div>
                <div class="swiper-slide">
                    <img src="{{ asset('assets/images/img-slide-2.png') }}" alt="" />
                </div>
                <div class="swiper-slide">
                    <img src="{{ asset('assets/images/img-slide-3.png') }}" alt="" />
                </div>
                <!-- <div class="swiper-slide">Slide 8</div> -->
                <!-- <div class="swiper-slide">Slide 9</div> -->
            </div>
            <!-- btn-next-prev -->
            <div class="swiper-button-next btn-next-two">
                <img src="{{ asset('assets/images/left-arow.png') }}" alt="" />
            </div>
            <div class="swiper-button-prev btn-prev-two">
                <img src="{{ asset('assets/images/right-arow.png') }}" alt="" />
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </div>
    <!-- ^^^^^^^^^^^^^^^^^^^^^ -->
@endsection
{{-- @section('scripts')
@endsection --}}
