    <!-- start section nav -->

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
    <section class="Nav">
        <div class="container">
            <div class="img-text-nav-all">
                <div class="img-nav">
                    <a href="{{ url('/') }}">
                        <img src="{{ asset('assets/images/logo-jana-nav.png') }}" alt="" />
                    </a>
                </div>

                <div class="lang-sign-efta7mzad-input">
                    <div class="lang-sign-efta7mzad">
                        <div class="sign-mzadak">
                            <a class="add-to-card" href="{{ route('index-cart') }}">

                                <span> {{ count(Gloudemans\Shoppingcart\Facades\Cart::content()) }}
                                </span>


                                {{-- @guest

                    <span>             0
                    </span>
                    @endguest --}}
                                {{ trans('nav.shoping-cart') }} <i class="fa-solid fa-cart-shopping"></i>
                            </a>
                        </div>
                        @if (Auth::guard('customers')->check())
                            {{-- <li><i class="fa fa-user"></i> {{Auth::user()->name}}:</li> --}}
                            <form id="logout-form" action="{{ route('logout') }}" method="POST">
                                {{ csrf_field() }}
                                <button class="button-logout" type="submit">{{ trans('nav.logout') }}</button>

                            </form>
                        @elseif (Auth::guard('vendors')->check())
                            {{-- <li><i class="fa fa-user"></i> {{Auth::user()->name}}:</li> --}}
                            <form id="logout-form" action="{{ url('vendor/vendor-logout') }}" method="POST">
                                {{ csrf_field() }}
                                <button class="button-logout" type="submit">{{ trans('nav.logout') }}</button>

                            </form>
                        @else
                        <span>|</span>
                            <div class="lang">
                                <a href="{{ route('register') }}">{{ trans('nav.register') }}</a>

                                <span>|</span>
                                <a class="eng" href="{{ route('login') }}">{{ trans('nav.login') }}</a>
                                <img src="{{ asset('assets/images/logo-user-nav.png') }}" alt="" />
                            </div>
                        @endif

                    </div>
                    <div class="div-input">
                        <a href="{{ url('/') }}">
                            <i class="fa-solid fa-house-chimney"></i>{{ trans('nav.home-page') }}</a>
                        <span>|</span>
                        <a href="{{ url('categories') }}">{{ trans('nav.categories') }}</a>
                        <span>|</span>
                        <a href="{{ url('vendor/') }}">{{ trans('nav.vendor') }}</a>
                        <span>|</span>
                        <a href="{{route('landing.page')}}">{{ trans('nav.contact-us') }}</a>
                        <ul class="lang-nav">
                            @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                                <li>
                                    <a rel="alternate" hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                                        {{ $properties['native'] }}
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end section nav -->
