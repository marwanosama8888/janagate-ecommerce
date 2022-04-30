@extends('layouts.master')
@section('title')
التاجر
@endsection
@section('content')
    <!-- start section terms -->
    <section class="section-terms">
        <div class="container">
          <div class="enwan-page">
            <div class="arrow-page">
              <a href="{{ url('/') }}">
                <p><i class="fa-solid fa-xmark"></i>{{ trans('vendor.close') }}</p>
                <!-- <i class="fa-solid fa-xmark"></i> -->
              </a>
              <h5>{{ trans('vendor.add') }}</h5>
              <p>{{ trans('vendor.choose') }}</p>
            </div>
          </div>
          <div class="text-link-all">

            @foreach ($data as $item )

            <div class="text-link">
              <a href="{{url('vendor/new-product/'.$item->slug)}}">
                <div class="text-img">
                  <p>
                    <img src="{{asset('assets/images/img-car-page.png')}}" alt="" />
                    {{$item->name}}
                  </p>
                </div>
                <div class="icon-text">
                  <i class="fa-solid fa-arrow-left-long"></i>
                </div>
              </a>
            </div>
            <hr />
            @endforeach

            {{-- <div class="text-link">
              <a href="./pagethree.html">
                <div class="text-img">
                  <p>
                    <img src="{{asset('assets/images/img-car-page.png')}}" alt="" /> ﻋﺮض
                    أﺛﺎث ﻟﻠﺒﻴﻊ أو ﻟﻠﺘﻨﺎزل
                  </p>
                </div>
                <div class="icon-text">
                  <i class="fa-solid fa-arrow-left-long"></i>
                </div>
              </a>
            </div>
            <hr />
            <div class="text-link">
              <a href="./pagethree.html">
                <div class="text-img">
                  <p>
                    <img src="{{asset('assets/images/img-car-page.png')}}" alt="" /> ﻋﺮض
                    أﺛﺎث ﻟﻠﺒﻴﻊ أو ﻟﻠﺘﻨﺎزل
                  </p>
                </div>
                <div class="icon-text">
                  <i class="fa-solid fa-arrow-left-long"></i>
                </div>
              </a>
            </div>
            <hr />
            <div class="text-link">
              <a href="./pagethree.html">
                <div class="text-img">
                  <p>
                    <img src="{{asset('assets/images/img-car-page.png')}}" alt="" /> ﻋﺮض
                    أﺛﺎث ﻟﻠﺒﻴﻊ أو ﻟﻠﺘﻨﺎزل
                  </p>
                </div>
                <div class="icon-text">
                  <i class="fa-solid fa-arrow-left-long"></i>
                </div>
              </a>
            </div>
            <hr />
            <div class="text-link">
              <a href="./pagethree.html">
                <div class="text-img">
                  <p>
                    <img src="{{asset('assets/images/img-car-page.png')}}" alt="" /> ﻋﺮض
                    أﺛﺎث ﻟﻠﺒﻴﻊ أو ﻟﻠﺘﻨﺎزل
                  </p>
                </div>
                <div class="icon-text">
                  <i class="fa-solid fa-arrow-left-long"></i>
                </div>
              </a>
            </div> --}}
          </div>
        </div>
      </section>
      <!-- end section terms -->
@endsection
