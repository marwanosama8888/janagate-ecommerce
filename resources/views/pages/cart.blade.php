@extends('layouts.master')

@section('title')
Cart
@endsection
@section('content')

    <section class="sec-card-all">

        <div class="container">
            <div class="card-allll">
                <div class="card-details">
                    @if (count($cartItem)>=1)
                        <div class="enwan-card-details">
                            <h2>{{ trans('cart.cart') }} {{ count($cartItem) }}</h2>
                        </div>

                        @php

                        $x = 0 ;


                        @endphp
                        @foreach ($cartItem as $key => $item)

                            <div class="text-details">
                                <div class="div-small-text-all">
                                    <div class="div-small-text">
                                        <div class="small-img-detail">

                                                <img width="50px" src="{{$images[$x]}}" alt="" />
                                                @php
                                                    $x++;
                                                @endphp
                                        </div>
                                        <div class="right-img-details">
                                            <p>{{ $item->name }}</p>
                                            @foreach ($item->options as $key => $value )

                                            {{ $key == '' ? '' :$key . '---'.$value}}
                                            @endforeach
                                        </div>
                                    </div>
                                    <form method="POST" action="{{ route('remove-cart') }}">
                                        @csrf
                                        <input style="display: none;" name="rowId" value="{{ $item->rowId }}" type="text">
                                        <button class="remove-btn" type="submit">
                                            <p class="delete-text">
                                                <i class="fa-regular fa-trash-can"></i> ازالة
                                            </p>
                                        </button>
                                        {{-- <a >

                                            <p class="delete-text">
                                                <i class="fa-regular fa-trash-can"></i> ازالة
                                            </p>

                                        </a> --}}
                                    </form>

                                </div>
                                <div class="div-price">
                                    <h3>{{ trans('cart.riyal') }} {{ $item->subtotal }}</h3>
                                    <div class="span-price">
                                    </div>
                                    <form method="POST" action="{{ route('update-cart') }}">
                                        @csrf
                                        {{-- <div class="num-increase">
                                            <i class="fa-solid fa-plus plus-plus"></i>
                                            <input type="hidden" name="rowId" value="{{ $item->rowId }}">
                                            <input   class="nums" type="text" name="qty"
                                                value="{{ $item->qty }}" />
                                            <i class="fa-solid fa-minus minus-minus"></i>
                                            <button class="edit-btn" type="submit">تعديل</button>
                                        </div> --}}
                                        <div class="num-increase">
                                            <i class="fa-solid fa-plus plus-plus"></i>
                                            <input type="hidden" name="rowId" value="{{ $item->rowId }}" >
                                            <input class="nums" id="1" type="text"  name="qty" value="{{ $item->qty }}" placeholder="{{ $item->qty }}"/>
                                            <i class="fa-solid fa-minus minus-minus"></i>
                                            <button class="edit-btn">تعديل</button>
                                          </div>
                                    </form>
                                </div>
                            </div>
                        @endforeach
                    @else
                        <div class="enwan-card-details">
                            {{ trans('cart.none') }}
                    @endif

                    <div class="enwan-card-details">
                    </div>
                </div>
                <div class="total-price">
                    <h4>{{ trans('cart.details') }}</h4>
                    <div class="egmaly">
                        <p>{{ trans('cart.total') }}</p>
                        <p> {{ Gloudemans\Shoppingcart\Facades\Cart::priceTotal() }}</p>
                    </div>
                    <p>{{ trans('cart.fast') }}</p>
                    <a  {{Gloudemans\Shoppingcart\Facades\Cart::count() == 0 ? 'disabled' : '' }} href="{{ url('checkout-form') }}" >{{ trans('details.checkout') }}</a>
                </div>
            </div>
        </div>
    </section>

    <!-- ^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^ -->
    <!-- start img swiber -->
    <!-- start swiber image -->
    <section class="sec-swiber">
        <div class="container">
            <div class="container">
                <div class="enwan-swiber">
                    <h1>{{ trans('details.toprat') }}</h1>
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
        </div>
    </section>
    <!-- end swiber image -->
    <!-- ^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^ -->
@endsection
