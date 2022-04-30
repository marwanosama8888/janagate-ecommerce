@extends('layouts.master')

@section('title')
Checkout
@endsection

@section('content')
    @php

    $x = 0;

    @endphp
    <div id="">
        @if(isset($success))
        <div class="alert alert-success text-center">
            {{ trans('checkout.success') }}
        </div>
     @endif


 @if(isset($fail))
     <div class="alert alert-danger text-center">
        {{ trans('checkout.fail') }}
     </div>
 @endif
 @if (Gloudemans\Shoppingcart\Facades\Cart::count() >= 0)

        <!-- start checkout form -->
        <div class="container">
            <section class="section-form">
                <div class="container">
                    <div class="form-all">
                        <div class="right-side-check">
                            <div class="form-chek">
                                <form id="SubmitForm" name="contactUsForm" action="javascript:void(0)" method="POST">
                                    @csrf
                                    <label for="">{{ trans('checkout.fname') }}</label>
                                    <input id="InputName" name="first_name" type="text" required />
                                    <label  for="">{{ trans('checkout.lname') }}</label>
                                    <input id="InputLast" name="last_name" type="text" required />
                                    <label for="">{{ trans('checkout.country') }}</label>
                                    <input id="InputCoun" name="country" type="text" required />
                                    <label for="">{{ trans('checkout.city') }}</label>
                                    <input id="InputCity" name="city" type="text" required />
                                    <label for="">{{ trans('checkout.phone') }}</label>
                                    <input id="price" name="price" value="{{ Gloudemans\Shoppingcart\Facades\Cart::total() }}"
                                        type="hidden">
                                    <input id="InputMobile" name="phone" type="text" required />
                                    <textarea id="InputAddress" required name="InputAddress" name="">{{ trans('checkout.details') }}</textarea>
                                    <textarea id="InputInfo" required name="info" name="">{{ trans('checkout.note') }}</textarea>
                                    <div class="btn-form-check">
                                        <button id="save-btn" type="submit">{{ trans('checkout.save') }}</button>


                                        <button id="disabledCheckboxes" disabled role="button" class=" btn-cont-form  btn  btn-success px-3 waves-effect waves-light"> {{ trans('checkout.pay') }}
                                        </button>



                                    </div>
                            </div>
                        </form>
                    </div>





                    <div class="left-side-check">
                            <div id="showPayForm"></div>
                            <div class="div-left-side">
                                <div class="enwan-left">
                                    <h5>{{ trans('checkout.order') }} ({{ Gloudemans\Shoppingcart\Facades\Cart::count() }} {{ trans('checkout.orders') }})</h5>
                                </div>

                                <div class="img-text-check">
                                    @foreach ($cartItem as $key => $item)
                                        <div class="img-chek-alll">
                                            <div class="img-left-check">
                                                <img src="{{ $images[$x] }}" alt="" />
                                                @php
                                                    $x++;
                                                @endphp
                                            </div>
                                            <div class="text-left-chek">
                                                <p>{{ $item->name }}</p>
                                                <p>{{ trans('checkout.qty') }} {{ $item->qty }}</p>
                                            </div>
                                        </div>
                                    @endforeach

                                </div>


                                {{-- <div class="img-text-check">
                                    @foreach ($cartItem as $key => $item)

                                    <div class="img-left-check">
                                        <img src="{{$images[$x]}}" alt="" />
                                        @php
                                        $x++;
                                    @endphp
                                    </div>
                                    <div class="text-left-chek">
                                        <p>{{$item->name}}</p>
                                        <p>الكمية: {{$item->qty}}</p>
                                    </div>
                                    @endforeach

                                </div> --}}
                                <div class="egmaly-mabla8">
                                    <p>{{ trans('checkout.total') }}</p>
                                    <p>{{ Gloudemans\Shoppingcart\Facades\Cart::subtotal() }} {{ trans('cart.riyal') }}</p>
                                </div>
                                <div class="msaref-el4a7n">
                                    <p>{{ trans('checkout.tax') }}</p>
                                    <p>{{ Gloudemans\Shoppingcart\Facades\Cart::tax() }} {{ trans('cart.riyal') }}</p>
                                </div>
                                <div class="elmabla8-koly">
                                    <p>{{ trans('checkout.all') }}</p>
                                    <input id="price" value="{{ Gloudemans\Shoppingcart\Facades\Cart::total() }}"
                                        type="hidden">
                                    <p style="color: #ebbb2c">{{ Gloudemans\Shoppingcart\Facades\Cart::total() }} {{ trans('cart.riyal') }}
                                    </p>
                                </div>
                                <div class="btn-rgo3-araba">
                                    <a href="{{ route('index-cart') }}">{{ trans('checkout.back') }}</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <!-- end checkout form -->
    </div>
    @else
    <div class="container">
        <section class="section-form">
            <div class="container">
                <div class="form-all">
                    There is no Product to get here
                </div>
            </div>
        </section>
    </div>

    @endif

@endsection
@section('scripts')
    <script>
        $(document).on('click', '#disabledCheckboxes', function(e) {
            // console.log('asd')
            e.preventDefault();
            let price = $('#price').val();
            $.ajax({
                type: 'post',
                url: "{{ route('product.checkout') }}",
                data: {
                    "_token": "{{ csrf_token() }}",
                    price:price,
                },
                success: function(data) {
                    if (data.status == true) {
                        $('#showPayForm').empty().html(data.content);

                    } else {}
                },
                error: function(reject) {}
            });
        });
    </script>
<script type="text/javascript">

    $('#SubmitForm').on('submit',function(e){
        e.preventDefault();

        let first_name = $('#InputName').val();
        let last_name = $('#InputLast').val();
        let country = $('#InputCoun').val();
        let city = $('#InputCity').val();
        let phone_number = $('#InputMobile').val();
        let address = $('#InputAddress').val();
        let info = $('#InputInfo').val();

        $.ajax({
          url: "{{ route('save.info') }}",
          type:"POST",
          data:{
            "_token": "{{ csrf_token() }}",
            first_name:first_name,
            last_name:last_name,
            country:country,
            phone_number:phone_number,
            city:city,
            address:address,
            info:info
          },
          success:function(response){
            $('#save-btn').attr("disabled", true);
            console.log(response);
            $('#disabledCheckboxes').removeAttr("disabled")
          },
          error: function(response) {
            $('#nameErrorMsg').text(response.responseJSON.errors.name);
            $('#emailErrorMsg').text(response.responseJSON.errors.email);
            $('#mobileErrorMsg').text(response.responseJSON.errors.mobile);
            $('#messageErrorMsg').text(response.responseJSON.errors.message);
          },
          });
        });
      </script>
@endsection
