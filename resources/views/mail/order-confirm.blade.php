<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <!-- icon fontawesome -->
    <link rel="stylesheet" href="{{asset('assets/css/all.min.css')}}" />
    <!-- bootstrap file -->
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}" />

    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
      crossorigin="anonymous"
    />

    <!-- stc font -->
    <!-- <link href="//db.onlinewebfonts.com/c/157bc09a1cd0a9c9a52fe4287c0e1d31?family=STC+Forward" rel="stylesheet" type="text/css"/> -->

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Cairo:wght@300;400;700&display=swap"
      rel="stylesheet"
    />

    <link
      rel="stylesheet"
      href="https://unpkg.com/swiper/swiper-bundle.min.css"
    />

    <!-- my css file -->
    <link rel="stylesheet" href="{{asset('assets/css/main.css')}}" />
  </head>
  <body>
    <!-- #03e3fc -->
    <section class="page-card-one">
      <div class="container ">
        <div class="div-card-all-blue">
          <div class="div-inside-div">
            <h4>Dear Customer</h4>
            <p style="margin-bottom: 30px;">
              <span>{{$userName}}</span> your Payment has been confirmed and your
              order number id {{$orderNumber}} if you have any question or comments please email
            </p>
            <h4>Order Details</h4>
            <!--  -->
            <div class="div-table">
                <table class="table caption-top" style="background-color: #03e3fc; color: white;">
                    <!-- <caption>List of users</caption> -->
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Product</th>
                        <th scope="col">Price</th>
                        <th scope="col">Quantity</th>
                      </tr>
                    </thead>
                    @php
                        $x = 1;
                    @endphp
                    <tbody>
                        @foreach ($orderItems->items as $item )

                        <tr>
                            <th scope="row">{{$x}}</th>
                            <td>{{$item->product_title}}</td>
                            <td>{{$item->price}}</td>
                            <td>{{$item->quantity}}</td>
                            @php
                            $x++;
                            @endphp
                            @endforeach
                      </tr>
                    </tbody>
                  </table>
            </div>
            <!--  -->
            <div class="div-item-totalsalary">
                <div class="item-one">
                    <p>item Subtotal</p>
                    <p>Ryal {{ Gloudemans\Shoppingcart\Facades\Cart::subtotal() }}</p>
                </div>
                <div class="item-one">
                    <p>Tax</p>
                    <p>Ryal {{Gloudemans\Shoppingcart\Facades\Cart::tax()}}</p>
                </div>

                <hr>
                <div class="item-one">
                    <p>Total</p>
                    <p>Ryal {{Gloudemans\Shoppingcart\Facades\Cart::total()}}</p>
                </div>
            </div>
          </div>
        </div>
      </div>
    </section>


    <script src="{{asset('assets/js/jquery-3.6.0.min.js')}}"></script>
    <script src="{{asset('assets/js/popper.min.js')}}"></script>
    <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
      integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13"
      crossorigin="anonymous"
    ></script>
    <!-- Swiper JS -->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="{{asset('assets/js/main.js')}}"></script>
  </body>
</html>
